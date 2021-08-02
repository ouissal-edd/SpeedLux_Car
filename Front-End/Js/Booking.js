const heroTwo = document.getElementById("heroTwo");
const countainer = document.getElementById("countainer");

pickup_date = document.getElementById('pickup_date');
return_date = document.getElementById('return_date');
pickup_location = document.getElementById('pickup_location');
return_location = document.getElementById('return_location');
id_user = sessionStorage.getItem('id');



function heroTwoBlock() {
    heroTwo.style.display = "block";
    countainer.style.display = "none";

}


// Read Avalaible Cars




// Read Avalaible Cars
async function Avalaible_Cars() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/API/reservation/verification_car.php')
    const CarsDispo = await res.json()
    console.log({
        CarsDispo
    })

    for (let i = 0; i < CarsDispo.length; i++) {
        document.getElementById('countainer_Select').innerHTML +=
            ` 
            <div class="card_ithem">
            <div class="Infos_card">
     
                <input
                class="radio-custom" name="car_id" type="radio" id="id_car" value="${CarsDispo[i].id}">
                <label radio-custom-label for="id_car">${CarsDispo[i].car_name}</label>
                
                <p>Type : ${CarsDispo[i].type_label}  de couleur : ${CarsDispo[i].color} model : ${CarsDispo[i].model} </p> 
              
                </div>
                <div class="Image_card"><img src=../../Back-End/image_Cars/${CarsDispo[i].brand_image} > </div>

    
        </div>

           
       `

    }

}
Avalaible_Cars();



function create_reservation() {

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    var raw = JSON.stringify({
        "user_id": id_user,
        "car_id": document.getElementById('id_car').value,
        "pickup_date": pickup_date.value,
        "return_date": return_date.value,
        "pickup_location": pickup_location.value,
        "return_location": return_location.value
    });

    var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };

    fetch("http://localhost/Nouveau%20dossier/Back-End/API/reservation/create_reservation.php", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
}

// block date precedente

function getDay() {
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, "0");
    var mm = String(today.getMonth() + 1).padStart(2, "0");
    var yyyy = today.getFullYear();
    today = yyyy + "-" + mm + "-" + dd;
    return today;
}

Today_Date = getDay();
pickup_date.min = Today_Date;
pickup_date.value = Today_Date;
return_date.min = Today_Date;
return_date.value = Today_Date;