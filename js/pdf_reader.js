const pdfjsLib = window['pdfjs-dist/build/pdf'];
pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.worker.js';

let currentPage = 1;
let pdfDoc = null;

const canvas = document.getElementById('pdf-canvas');
const pdfURL = canvas.dataset.url;
const ctx = canvas.getContext('2d');

const prevButton = document.getElementById('prev-button');
const nextButton = document.getElementById('next-button');

prevButton.addEventListener('click', showPrevPage);
nextButton.addEventListener('click', showNextPage);

pdfjsLib.getDocument(pdfURL).promise.then(function(pdf) {
    pdfDoc = pdf;
    renderPage(currentPage);
});

function renderPage(pageNumber) {
    pdfDoc.getPage(pageNumber).then(function(page) {
        const viewport = page.getViewport({ scale: 1.5 });
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        // canvas.height = '765px';
        // canvas.width = '511px';

        const renderContext = {
            canvasContext: ctx,
            viewport: viewport
        };

        page.render(renderContext);
    });
}

function showPrevPage() {
    if (currentPage <= 1) return;
    currentPage--;
    renderPage(currentPage);
}

function showNextPage() {
    if (currentPage >= pdfDoc.numPages) return;
    currentPage++;
    renderPage(currentPage);
}