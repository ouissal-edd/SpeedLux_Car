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


//------------ Register User-----------------------------------------------------------------------------------------------------

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

    fetch("http://localhost/Nouveau%20dossier/Back-End/user/creat_user", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
}



// ---------LogIn User------------------------------------------------------------------------------------------------

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

    fetch("http://localhost/Nouveau%20dossier/Back-End/user/Connect_user", requestOptions)
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

// ------REGEX--------------------------------------------------------------------------------------------------------------------


function validateName() {
    var full_name = document.getElementById("full_name").value;

    if (full_name.length == 0) {
        producePrompt("ce champ est obligatoir", "error", "red");
        return false;
    }
    if (!full_name.match(/^[a-zA-Z-\s]+$/)) {
        producePrompt("le nom est incorrect", "error", "red");

        return false;

    }

    producePrompt("nom valide", "error", "green");
    return true;
}




function validateEmail() {
    var Email = document.getElementById("user_email").value;

    if (Email.length == 0) {
        producePrompt("ce champ est obligatoir", "error1", "red");
        return false;
    }

    if (!Email.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
        producePrompt("email non valide ", "error1", "red");
        return false;

    }

    producePrompt("votre email est valide", "error1", "green");
    return true;
}


function producePrompt(message, promptlocation, color) {
    document.getElementById(promptlocation).innerHTML = message;
    document.getElementById(promptlocation).style.color = color;

}