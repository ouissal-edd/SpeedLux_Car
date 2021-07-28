var brand_images = document.getElementById('brand_image_input');
var brand_name_input = document.getElementById('brand_name_input');
const btnADDbrand = document.querySelector('#btnADDbrand');


async function ReadBrands() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/API/brands/read_brands.php')
    const ALLBRANDS = await res.json()
    console.log({
        ALLBRANDS
    })
    document.querySelector('.table').innerHTML =
        ` 
    <thead class="MyBackgro"> 
    <tr>
    <th class="mythBrnd" scope="col">Nom de marque</th>
    <th class="mythBrnd" scope="col">Image</th>
    <th class="mythBrnd" scope="col">Supprimer</th>


</tr>
</thead>
`
    for (let i = 0; i < ALLBRANDS.length; i++) {
        document.querySelector('.table').innerHTML +=
            ` 


        <tbody class="tdtd">
            <tr>
                <td>${ALLBRANDS[i].brand_name} </td>
                <td> <img  style = 'width:25%' src="../../Back-End/image_Cars/${ALLBRANDS[i].brand_image}"> </td>
                <td><button id="deleteForBrands" class="btn btn-xs btn-outline btn-danger btn-card btn-add__delete" onclick="deleteBrands(${ALLBRANDS[i].brand_id})"><i class="fas fa-trash"></i></td>

             </tr>
             </tbody>`
    }

}

ReadBrands();


// Dlete Brands 

function deleteBrands(brand_id) {
    obj = {
        brand_id: `${brand_id}`
    }

    fetch('http://localhost/Nouveau%20dossier/Back-End/API/brands/delete_brand.php', {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(obj)
        }).then(res => res.json())
        .then(data => console.log(data))
    ReadBrands();

}


// ----CREAT BRANDS-----------------------------------------------------------------------------------------------------------

document.getElementById('btnADDbrand').addEventListener('click', creat_brand);

function uploadImage() {

    var formData = new FormData();
    var imgFile = document.getElementById('brand_image').files[0];
    if (imgFile === undefined)
        return null;

    var ext = imgFile.name.split('.').pop();
    var uniqName = Math.floor(Math.random() * Math.pow(10, 10)).toString() + '.' + ext;
    formData.append('uniqName', uniqName);
    formData.append('brand_image', imgFile);

    fetch("http://localhost/Nouveau%20dossier/Back-End/includes/upload.php", {
        method: "post",
        body: formData

    }).catch(console.error);

    return uniqName;
}

function creat_brand() {
    var uniqName = uploadImage()

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    var raw = JSON.stringify({
        "brand_name": brand_name_input.value,
        "brand_image": uniqName,

    });

    var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };

    fetch("http://localhost/Nouveau%20dossier/Back-End/API/brands/create_brand.php", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
}