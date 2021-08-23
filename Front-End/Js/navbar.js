// const toggleButton = document.getElementsByClassName('toggle-button')[0]
// const navbarLinks = document.getElementsByClassName('navbar-links')[0]
// const logo = document.getElementById('logo');

// toggleButton.addEventListener('click', dsi);

// function dsi() {
//     navbarLinks.classList.toggle('flexy');
// }
const burgerMenu = document.getElementById('burgerMenu');
const xIcon = document.getElementById('xIcon');

var x = window.matchMedia("(max-width: 900px)")

function myFunction(x) {
    if (x.matches) {
        burgerMenu.style.display = "block";
    } else {
        burgerMenu.style.display = "none";
    }
}

xIcon.addEventListener('click', function () {
    navigationPopup.style.display = "none";
    xIcon.style.display = "none";
    burgerMenu.style.display = "block";
})

burgerMenu.addEventListener('click', function () {
    xIcon.style.display = "flex";
    burgerMenu.style.display = "none";
    navigationPopup.style.display = "flex";
})


if (sessionStorage.getItem('role') == "client" || sessionStorage.getItem('role') == "admin") {
    connex.style.display = "none";
    deconnex.style.display = "block";
} else if (sessionStorage.getItem('role') == null) {
    connex.style.display = "block";
    deconnex.style.display = "none";
}

function logOutt() {
    sessionStorage.clear();
    document.location.href = "../view/connect.php"

}