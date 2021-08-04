//  $ Count Users
async function fetchUsers() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/user/read_users')
    const InfoUsers = await res.json()

    document.getElementById('MyClients').innerHTML = `${InfoUsers[0].num}`;
}

fetchUsers();

// End Count Users

// -----------------------------------------------------------------
// Count Brands

async function fetchBrands() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/brand/read_brands')
    const InfoBrands = await res.json()
    document.getElementById('MyBrands').innerHTML = `${InfoBrands[0].num}`;
}

fetchBrands();

// End Count for Brands
// -----------------------------------------------------------------------------------


// Count Cars
async function fetchCars() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/car/read_car')
    const InfoCars = await res.json()
    document.getElementById('MyCars').innerHTML = `${InfoCars[0].num}`;
}

fetchCars();
// end Count  for Cars
// ----------------------------------------------------------------------------------------------


// Start Read Count RESERVATION

async function fetchReservation() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/reservation/read_rservation')
    const InfoReservation = await res.json()
    document.getElementById('MyReservation').innerHTML = `${InfoReservation[0].num}`;

}

fetchReservation();


// -------Read Cars----------------------------------------------------------------------------------

async function JointureReservation() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/reservation/Jointure_resevation')
    const InfoReservationUsers = await res.json()
    console.log({
        InfoReservationUsers
    })
    console.log(InfoReservationUsers[0].full_name)
    document.querySelector('.table').innerHTML =
        ` 
    <thead  class="MyBackgroundForTables"> 
    <tr>
    <th class="myth" scope="col">Nom Clients</th>
    <th class="myth" scope="col">Voiture</th>
    <th class="myth" scope="col">Date de reservation</th>
    <th class="myth" scope="col">date de retour</th>
    <th class="myth" scope="col">locale de reservation</th>
    <th class="myth" scope="col">locale de retour</th>
    <th class="myth" scope="col">Suprimer</th>
</tr>
</thead>
`
    for (let i = 0; i < InfoReservationUsers.length; i++) {
        document.querySelector('.table').innerHTML +=
            ` 
            
        
        <tbody class="tdtd">
            <tr>
                <td>${InfoReservationUsers[i].full_name} </td>
                <td>${InfoReservationUsers[i].car_name} </td>
                <td>${InfoReservationUsers[i].pickup_date} </td>
                <td>${InfoReservationUsers[i].return_date} </td>
                <td>${InfoReservationUsers[i].pickup_location} </td>
                <td>${InfoReservationUsers[i].return_location} </td>
                <td><button id="deleteForReserv" class="btn btn-xs btn-outline btn-danger btn-card btn-add__delete" onclick="deleteReservation(${InfoReservationUsers[i].reservation_id})"><i class="fas fa-trash"></i></td>

             </tr> 
             </tbody>
             `
    }

}

JointureReservation();


//--------------------- Dlete Reservation ---------------------------------------------------------------------------------

function deleteReservation(reservation_id) {
    obj = {
        reservation_id: `${reservation_id}`
    }

    fetch('http://localhost/Nouveau%20dossier/Back-End//reservation/delete_resrvation', {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(obj)
        }).then(res => res.json())
        .then(data => console.log(data))
    JointureReservation()

}