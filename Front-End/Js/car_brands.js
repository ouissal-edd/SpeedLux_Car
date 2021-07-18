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
    <th class="mythBrnd" scope="col">Modifier</th>


</tr>
</thead>
`
    for (let i = 0; i < ALLBRANDS.length; i++) {
        document.querySelector('.table').innerHTML +=
            ` 
            
        
        <tbody class="tdtd">
            <tr>
                <td>${ALLBRANDS[i].brand_name} </td>
                <td>${ALLBRANDS[i].brand_image} </td>
                <td><i class="fas fa-trash"></i> </td>
                <td><i class="fas fa-edit"></i> </td>



             </tr> 
             </tbody>`
    }

}

ReadBrands();