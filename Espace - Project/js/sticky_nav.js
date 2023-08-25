window.onscroll = function() {
    myFunction()
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
        document.getElementById("sidenav").style.top = "50px";
    } else {
        navbar.classList.remove("sticky");
        document.getElementById("sidenav").style.top = "90px";
    }
}