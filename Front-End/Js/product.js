// Produits Slider

async function ShowProduct() {
    const res = await fetch('http://localhost/Nouveau%20dossier/Back-End/reservation/verification_car')
    const ALLCars = await res.json()
    console.log({
        ALLCars
    })
    for (let i = 0; i < ALLCars.length; i++) {
        document.getElementById('Our_product').innerHTML +=
            ` 

            <div class="swiper-slide">
            <img src="../../Back-End/image_Cars/${ALLCars[i].brand_image}" alt="">
            <div class="slide-text">${ALLCars[i].car_name}
                <p>Modele : ${ALLCars[i].model}</p>
            </div>

        </div>
           


`
    }

}
ShowProduct();