const projects = document.querySelector(".projects");
const content_item = projects.querySelector(".content_item");
const content_p = content_item.querySelectorAll(".p");
const projects_li = projects.querySelectorAll(".li");
projects_li.forEach((item) => {
    item.addEventListener("mouseenter", () => {
        const active = content_item.querySelector(".active")
        active.classList.remove("active")
        content_item.className = "content_item a" + (Number(item.dataset.lm) + 1)
        content_p[item.dataset.lm].classList.add("active")
    })
})