const mobile_nav = document.querySelector(".mobile-navbar-btns");
const nav_header = document.querySelector(".headers");

const toggleNavbar = () => {

    nav_header.classList.toggle("active");
};

mobile_nav.addEventListener("click", () => toggleNavbar());


// --------Tabes-----------


// job page
// --------Tabes-----------
$(".tab-links").click(function () {
    var tabID = $(this).attr("data-tab");

    $(this).addClass("active").siblings().removeClass("active");

    $("#tab-" + tabID)
        .addClass("active")
        .siblings()
        .removeClass("active");
});



// -----------active----class--------
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("mylist");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}
