document.addEventListener('DOMContentLoaded', function() {
    const accordionHeaders = document.querySelectorAll('.accordion-header');

    accordionHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const accordionItem = this.parentElement;
            const isActive = accordionItem.classList.contains('active');

            closeAllAccordionItems();

            if (!isActive) {
                accordionItem.classList.add('active');
            }
        });
    });

    function closeAllAccordionItems() {
        const accordionItems = document.querySelectorAll('.accordion-item');

        accordionItems.forEach(item => {
            item.classList.remove('active');
        });
    }
});
