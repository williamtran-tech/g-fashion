var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos < currentScrollPos) {
        document.getElementById("fullmenu").style.top = "-60px";
    } else {
        document.getElementById("fullmenu").style.top = "0px";
    }
    prevScrollpos = currentScrollPos;
}