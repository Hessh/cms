var menuButton = document.querySelector(".burger-menu");
var menuContainer = document.querySelector(".navigation");
var menuShow = false;

menuButton.addEventListener("click", function(){
    if(!menuShow) {
        menuContainer.style.display = "block";
        menuShow = true;
    }else {
        menuContainer.style.display = "none";
        menuShow = false;
    }
})