var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos < currentScrollPos) {
        document.getElementById("fullmenu").style.top = "-60px";
    } else {
        document.getElementById("fullmenu").style.top = "0px";
    }
    prevScrollpos = currentScrollPos;
}
$(document).ready(function() {
    var scroll_pos = 0;
    $(document).scroll(function() {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 50) {
            $(".injoy_megamenu").css("background-color", "#fff");
            $(".menu_text").css("color", "#849792");
            $(".menu_icon").css("color", "#849792");
            $(".logo").attr("src", "pic/logo.png");
            $(".menu_btn_outline").css("color", "#849792");
            $(".menu_btn_outline").css("border-color", "#849792");

        } else {
            $(".injoy_megamenu").css("background-color", "transparent");
            $(".menu_text").css("color", "#fff");
            $(".menu_icon").css("color", "#fff");
            $(".logo").attr("src", "pic/logo_white.png");
            $(".menu_btn_outline").css("color", "#fff");
            $(".menu_btn_outline").css("border-color", "#fff");
        }
    })
})