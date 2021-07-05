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
SlideShow()