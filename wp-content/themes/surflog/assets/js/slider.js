/** Function for animating banner images */
let imageId = 0;

function imageSwitch() {

    let activeElement = document.querySelectorAll('.hero-img');

    for (let i = 0; i < activeElement.length; i++) {
        activeElement[i].style.display = "none"
    }

    imageId++

    if (imageId > activeElement.length) {
        imageId = 1
    }

    activeElement[imageId - 1].style.display = "block";

}

/** Time-interval for banner animation */
setInterval(function(){ imageSwitch() }, 5000);
