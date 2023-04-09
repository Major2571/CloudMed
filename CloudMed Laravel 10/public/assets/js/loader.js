let time;

function functionTime() {
    time = setTimeout(showPage, 2000);
}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("mainPage").style.display = "block";
}

