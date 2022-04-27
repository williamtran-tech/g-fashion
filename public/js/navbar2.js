$(document).ready(function() {
    $(".injoy_megamenu").css("background-color", "#3F0D0C");
    $(".menu_text").css("color", "#fff");
    $(".menu_icon").css("color", "#fff");
    $(".logo").attr("src", "pic/logo.png");
    $(".menu_btn_outline").css("color", "#fff");
    $(".menu_btn_outline").css("border-color", "##3F0D0C");
})
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos < currentScrollPos) {
        document.getElementById("fullmenu").style.top = "-120px";
    } else {
        document.getElementById("fullmenu").style.top = "0px";
    }
    prevScrollpos = currentScrollPos;
}