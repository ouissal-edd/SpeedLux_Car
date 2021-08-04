const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
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