const heroTwo = document.getElementById("heroTwo");
const countainer = document.getElementById("countainer");


function heroTwoBlock() {
    heroTwo.style.display = "block";
    countainer.style.display = "none";

}


// Read Avalaible Cars
async function Avalaible_Cars() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/API/reservation/verification_car.php')
    const CarsDispo = await res.json()
    console.log({
        CarsDispo
    })


    for (let i = 0; i < CarsDispo.length; i++) {
        document.getElementById('CarAvail').innerHTML +=
            ` 
       <div class="cardd" > <p>${CarsDispo[i].car_name} ,Type ${CarsDispo[i].type_label} , Couleur ${CarsDispo[i].color},Model ${CarsDispo[i].model} </p>
     <div class="radio-toolbar"> 
      <input type="radio" name="id" value="${CarsDispo[i].id}">
       <label>Select</label>
       </div>

       </div>
    
       `

    }


}
Avalaible_Cars();