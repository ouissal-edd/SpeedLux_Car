// Produits Slider
var i = 0;
var slidImg = ["../assets/4.png", "../assets/5.png", "../assets/6.png"];

function SlideShow() {
    document.SlideShow.src = slidImg[i];
    if (i < slidImg.length - 1) {
        i++;
    } else {
        i = 0;
    }

    setTimeout("SlideShow()", 2000);

}
SlideShow();


var j = 0;
var slidImgTwo = ["../assets/7.png", "../assets/8.png", "../assets/9.png"];

function SlideShowTwo() {
    document.SlideShowTwo.src = slidImgTwo[j];
    if (j < slidImgTwo.length - 1) {
        j++;
    } else {
        j = 0;
    }

    setTimeout("SlideShowTwo()", 2000);

}
SlideShowTwo();

// END PRODUCT SLIDER

// Filter
function TableFilter() {
    document.getElementById("typeCar").innerHTML = '<div> <select>  <option>Choisir </option> <option>Berline </option> <option>Break </option> <option>Monospace </option> <option>Coupe </option>  <option>Cabriolet </option>  <option>Limousine </option>  </select> </div> <div>'

}

// END FILTER