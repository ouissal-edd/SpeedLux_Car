async function ReadUsers() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/API/users/readUser.php')
    const ALLUsers = await res.json()
    console.log({
        ALLUsers
    })

    document.querySelector('.table').innerHTML =
        ` 
    <thead class="MyBackgroUsers"> 
    <tr>
    <th class="mythUsers" scope="col">Email</th>
    <th class="mythUsers" scope="col">Nom complet</th>
    <th class="mythUsers" scope="col">Bannir</th>

</tr>
</thead>
`
    for (let i = 0; i < ALLUsers.length; i++) {
        document.querySelector('.table').innerHTML +=
            `       
        <tbody >
            <tr>
                <td>${ALLUsers[i].user_email} </td>
                <td>${ALLUsers[i].full_name} </td>
             
                <td><button style="background:none" class="btn btn-xs btn-outline btn-danger btn-card btn-add__delete" onclick="deleteUser(${ALLUsers[i].user_id})"><i class="fas fa-trash"></i></td>
               
             </tr>
             </tbody>`
    }

}

ReadUsers()






// Dlete Brands

function deleteUser(user_id) {
    obj = {
        user_id: `${user_id}`
    }

    fetch('http://localhost/Nouveau%20dossier/Back-End/API/users/delete_user.php', {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(obj)
        }).then(res => res.json())
        .then(data => console.log(data))
    ReadUsers();

}