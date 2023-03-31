const toTopButton = document.getElementById('toTopButton');

window.onscroll = function () {
    scrollFunction()
}

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        toTopButton.style.display = "block";
    } else {
        toTopButton.style.display = "none";
    }
}

function backToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}