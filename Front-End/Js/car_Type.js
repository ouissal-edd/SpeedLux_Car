const type_label_input = document.getElementById('type_label_input');
const type_description_input = document.getElementById('type_description_input');

// ------- Read Type -----------------------------------------------------------------------------

async function ReadTypes() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/type/read_type')
    const ALLTYPES = await res.json()
    console.log({
        ALLTYPES
    })
    document.querySelector('.table').innerHTML =
        ` 
    <thead class="MyBackgroype"> 
    <tr>
    <th class="mythType" scope="col">Type</th>
    <th class="mythType" scope="col">Description</th>
    <th class="mythType" scope="col">Supprimer</th>


</tr>
</thead>
`
    for (let i = 0; i < ALLTYPES.length; i++) {
        document.querySelector('.table').innerHTML +=
            ` 
            
        
        <tbody>
            <tr>            
                <td>${ALLTYPES[i].type_label} </td>
                <td>${ALLTYPES[i].type_description} </td>
                <td><button id="deleteForBrands" class="btn btn-xs btn-outline btn-danger btn-card btn-add__delete" onclick="deleteType(${ALLTYPES[i].type_id})"><i class="fas fa-trash"></i></td>
                
             </tr>
             </tbody>`
    }

}

ReadTypes();


// --------------Dlete Type--------------------------------------------------------------------------

function deleteType(type_id) {
    obj = {
        type_id: `${type_id}`
    }

    fetch('http://localhost/Nouveau%20dossier/Back-End/type/delete_type', {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(obj)
        }).then(res => res.json())
        .then(data => console.log(data))
    ReadTypes();

}

//------------- CREAT Type-----------------------------------------------------------------------------------------------------

document.getElementById('ADD_Type').addEventListener('submit', create_type);

function create_type() {
    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");
    var raw = JSON.stringify({
        "type_label": type_label_input.value,
        "type_description": type_description_input.value
    });

    var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };

    fetch("http://localhost/Nouveau%20dossier/Back-End/type/create_type", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
}


//-------------------- UPDATE Type-----------------------------------------------------------------------


document.getElementById('UPDATE_Type').addEventListener('submit', update_type);

function update_type() {
    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    var raw = JSON.stringify({
        "type_id": `${type_id}`,
        "type_label": type_label_input.value,
        "type_description": type_description_input.value
    });

    var requestOptions = {
        method: 'PUT',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };

    fetch("http://localhost/Nouveau%20dossier/Back-End/type/update_type", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
}