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


// --------- Read Car ------------------------------------------------------------------------------------

async function ReadCars() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/car/JointureCars')
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
                <td class="thhCar" >${ALLCars[i].car_name} </td>
                <td class="thhCar" >${ALLCars[i].brand_name} </td>
                <td class="thhCar" >${ALLCars[i].type_label} </td>
                <td class="thhCar" >${ALLCars[i].color} </td>
                <td class="thhCar" >${ALLCars[i].model} </td>
                <td class="thhCar" >${ALLCars[i].description} </td>
                <td class="thhCar" ><button  class="btn btn-xs btn-outline btn-danger btn-card btn-add__delete" style="background:none; border:none" onclick="deleteCar(${ALLCars[i].id})"><i class="fas fa-trash"></i></td>
                <td class="thhCar" >  <button style="background:none; border:none" class="btn btn-xs btn-outline btn-success btn-card btn-add__edit float-right"   data-toggle="modal"
                data-target="#add_new_Cars" onclick="Update_Cars(${ALLCars[i].id})"><i class="fas fa-edit"> </i>
                </button> </td>
             </tr>
             </tbody>`
    }



}

ReadCars();


// ----------------Update Car by read single ----PROBLEME HERE--------------------------------------------------------------------------------

const Update_Cars = async (id) => {
    btn_Edit.style.display = "block";
    btn_Add.style.display = "none";
    fetch(`http://localhost/Nouveau%20dossier/Back-End/car/read_single_car?id=${id}`)
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




//------------- Dlete Brands-----------------------------------------------------------------------------------

function deleteCar(id) {
    obj = {
        id: `${id}`
    }

    fetch('http://localhost/Nouveau%20dossier/Back-End/car/delete_car', {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(obj)
        }).then(res => res.json())
        .then(data => console.log(data))
    ReadCars();

}




// -------- Remplissage Select --------------------------------------------------------------------
// ---by brand 
async function Read_Brands() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/brand/read_brands')
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


// ----by type

async function Read_Types() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/type/read_type')
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


//------------- Creat Car---------------------------------------------------------------------------------------------
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

    fetch("http://localhost/Nouveau%20dossier/Back-End/car/create_Car", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
}


//--------- Update  Car---------------------------------------------------------------------------------------------------------

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

    fetch("http://localhost/Nouveau%20dossier/Back-End/car/update_Car", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
}