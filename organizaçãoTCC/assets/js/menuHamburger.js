const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector("div.nav-menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-item").forEach(hideMenu => hideMenu.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}))

window.addEventListener('click', function (hideMenuClickOutside) {
    if ((!hamburger.contains(hideMenuClickOutside.target)) && (!navMenu.contains(hideMenuClickOutside.target))) {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
    }
})