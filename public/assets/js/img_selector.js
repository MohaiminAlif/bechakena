function color1() {
    document.getElementById('#img-container').src = "images/product/orange/orange00.jpg";
    document.getElementById('#img-container2').src = "images/product/orange/orange00.jpg";

}

function color2() {
    document.getElementById('#img-container').src = "images/product/white/white00.jpg";
    document.getElementById('#img-container2').src = "images/product/white/white00.jpg";
}

function color3() {
    document.getElementById('#img-container').src = "images/product/black/black00.jpg";
    document.getElementById('#img-container2').src = "images/product/black/black00.jpg";
}


function view1() {
    document.getElementById('#img-container').src = document.getElementById('#img-container2').src;
}

function view2() {

    document.getElementById('#img-container').src = "images/product/details_pic/enigine_bay.jpg";
}

function view3() {
    document.getElementById('#img-container').src = "images/product/details_pic/interior.jpg";

}

function view4() {
    document.getElementById('#img-container').src = "images/product/details_pic/tachometer.jpg";

}

function view5() {
    document.getElementById('#img-container').src = "images/product/details_pic/boot.jpg";

}






$(document).ready(function() {
    $('#rateMe1').mdbRate();
});