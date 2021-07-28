var email_user = document.getElementById('email_user');
var Psw = document.getElementById('Psw');

var full_name = document.getElementById('full_name');
var user_email = document.getElementById('user_email');
var password = document.getElementById('password');

var heroTwo = document.getElementById("heroTwo");
var heroOne = document.getElementById("heroOne");


function EnregistreBlock() {
    heroTwo.style.display = "block";
    heroOne.style.display = "none";

}

function ConnectBlock() {
    heroTwo.style.display = "none";
    heroOne.style.display = "block";

}


// Register User
document.getElementById('submit').addEventListener('click', insertUser);

function insertUser(e) {
    e.preventDefault();
    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    var raw = JSON.stringify({
        "user_email": user_email.value,
        "full_name": full_name.value,
        "password": password.value
    });

    var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };

    fetch("http://localhost/Nouveau%20dossier/Back-End/API/users/insertUser.php", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
}



// LogIn Users
document.getElementById('cnx').addEventListener('click', LogIn);

function LogIn(e) {
    e.preventDefault();

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    var raw = JSON.stringify({
        "user_email": email_user.value,
        "password": Psw.value
    });

    var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };

    fetch("http://localhost/Nouveau%20dossier/Back-End/API/users/connect_User.php", requestOptions)
        .then(response => response.json())
        .then((result) => {
            sessionStorage.setItem("id", result.id[0]);
            sessionStorage.setItem("role", result.id[1]);
            if (sessionStorage.getItem('role') == "admin") {
                document.location.href = "../view/Dashboard.php"
            } else if (sessionStorage.getItem('role') == "client") {
                document.location.href = "../view/Booking.php"

            }
        })
        .catch(error => console.log('error', error));



}