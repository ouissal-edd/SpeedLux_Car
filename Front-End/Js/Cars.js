var brand_id = document.getElementById('Select_brand');
var type_id = document.getElementById('Select_type');
var color = document.getElementById('color');
var model = document.getElementById('model');
var description = document.getElementById('description');
var car_name = document.getElementById('car_name');

btn_Add = document.getElementById('For_ADD');
btn_Edit = document.getElementById('For_Edit');


function add() {
    btn_Edit.style.display = "none";
    btn_Add.style.display = "block";
}







async function ReadCars() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/API/cars/joitureCars.php')
    const ALLCars = await res.json()
    console.log({
        ALLCars
    })


    document.querySelector('.table').innerHTML =
        ` 
    <thead class="MyBackgroCars"> 
    <tr>
    <th class="mythCar" scope="col">Nom Voiture</th>
    <th class="mythCar" scope="col">Nom Marque</th>
    <th class="mythCar" scope="col">Type</th>
    <th class="mythCar" scope="col">Couleur</th>
    <th class="mythCar" scope="col">Mdele</th>
    <th class="mythCar" scope="col">Description</th>
    <th class="mythCar" scope="col">Supprimer</th>
    <th class="mythCar" scope="col">Editer</th>

</tr>
</thead>
`
    for (let i = 0; i < ALLCars.length; i++) {
        document.querySelector('.table').innerHTML +=
            `       
        <tbody >
            <tr>
                <td>${ALLCars[i].car_name} </td>
                <td>${ALLCars[i].brand_name} </td>
                <td>${ALLCars[i].type_label} </td>
                <td>${ALLCars[i].color} </td>
                <td>${ALLCars[i].model} </td>
                <td>${ALLCars[i].description} </td>
                <td><button  class="btn btn-xs btn-outline btn-danger btn-card btn-add__delete" onclick="deleteCar(${ALLCars[i].id})"><i class="fas fa-trash"></i></td>
                <td>  <button style="background:none; border: solid 1px #da1c36" class="btn btn-xs btn-outline btn-success btn-card btn-add__edit float-right"   data-toggle="modal"
                data-target="#add_new_Cars" onclick="Update_Cars(${ALLCars[i].id})"><i class="fas fa-edit"> </i>
                </button> </td>
             </tr>
             </tbody>`
    }



}

ReadCars();

const Update_Cars = async (id) => {
    btn_Edit.style.display = "block";
    btn_Add.style.display = "none";
    fetch(`http://localhost/Nouveau%20dossier/Back-End/API/cars/read_single_car.php?id=${id}`)
        .then(res => res.json())
        .then(data => {
            console.log(data)
            document.getElementById('id_car').value = data.id;
            document.getElementById('car_name').value = data.car_name;
            document.getElementById('color').value = data.color;
            document.getElementById('model').value = data.model;
            document.getElementById('description').value = data.description;


        })
}




// Dlete Brands

function deleteCar(id) {
    obj = {
        id: `${id}`
    }

    fetch('http://localhost/Nouveau%20dossier/Back-End/API/cars/delete_car.php', {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(obj)
        }).then(res => res.json())
        .then(data => console.log(data))
    ReadCars();

}







// Remplissage form d'insertion
async function Read_Brands() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/API/brands/read_brands.php')
    const api_Brands = await res.json()
    console.log({
        api_Brands
    })


    for (let i = 0; i < api_Brands.length; i++) {
        document.querySelector('#Select_brand').innerHTML +=
            `
                <option value = " ${api_Brands[i].brand_id} " >
                ${api_Brands[i].brand_name}
                 </option>

            `

    }

}
Read_Brands();



async function Read_Types() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/API/type/read_type.php')
    const api_Types = await res.json()
    console.log({
        api_Types
    })


    for (let i = 0; i < api_Types.length; i++) {
        document.querySelector('#Select_type').innerHTML +=
            `
                <option value = " ${api_Types[i].type_id} " >
                ${api_Types[i].type_label}
                 </option>

            `
    }

}
Read_Types();


// Creat Cars
document.getElementById('submit').addEventListener('click', create_Car);

function create_Car() {
    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    var raw = JSON.stringify({
        "brand_id": brand_id.value,
        "type_id": type_id.value,
        "car_name": car_name.value,
        "color": color.value,
        "model": model.value,
        "description": description.value,
    });

    var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };

    fetch("http://localhost/Nouveau%20dossier/Back-End/API/cars/create_car.php", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
}


// Edit Cars 
/* document.getElementById('Edit_submit').addEventListener('click', Edit_car);
 */
function Edit_car() {

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    var raw = JSON.stringify({
        "id": document.getElementById('id_car').value,
        "brand_id": brand_id.value,
        "type_id": type_id.value,
        "car_name": car_name.value,
        "color": color.value,
        "model": model.value,
        "description": description.value,
    });

    var requestOptions = {
        method: 'PUT',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };

    fetch("http://localhost/Nouveau%20dossier/Back-End/API/cars/update_car.php", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
}