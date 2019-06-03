
jQuery(document).ready(function($){


var nav = document.querySelector(".main-navigation");
var navActive = false;
var navHover = false;
var windowActive = true;
var html = document.querySelector("html");
var htmlInTimeout;


console.log(nav);
$(window).on("scroll", function(){
    if(navActive){
        navActive = false;
        console.log("nav mouseleave ");
        $(".main-navigation, .main-navigation li").removeClass("active");
    }
});

nav.addEventListener("mouseover", function(){
    if($("body").hasClass("hasHover")){
        navHover = true;
        if(!navActive){
            navActive = true;
            console.log(navActive);
            $(".main-navigation").addClass("active");
        }
    }
});

nav.addEventListener("mouseleave", function(){
    if($("body").hasClass("hasHover")){
        setTimeout(function(){
            navHover = false;
            if(windowActive){
                if(navActive){
                    navActive = false;
                    console.log("nav mouseleave ");
                    $(".main-navigation").removeClass("active");

                }
            }
        },50);
    }
});
html.addEventListener("mouseleave", function(){
    if($("body").hasClass("hasHover")){
        console.log("OUT");
        windowActive = false;
        navHover = false;
    }
});
html.addEventListener("mouseenter", function(){
    if($("body").hasClass("hasHover")){
        clearTimeout(htmlInTimeout);
        if(!windowActive && navActive){
            console.log("IN");
            console.log("navActive " +navActive)
            console.log("navHover " +navHover)
            htmlInTimeout = setTimeout(function(){
                windowActive = true;
                if(navActive && !navHover){
                    navActive = false;
                    console.log("html mouseover ");
                    $(".main-navigation").removeClass("active");
                }
            },150);
        }
    }      
});
function toggleSubMenu(){
    //checks if screen hasHover.. if so:
        //checks if subMenu has class
console.log("toggleSubMenu");
    if($("body").hasClass("hasHover")){
        console.log("if");

    } else {
        console.log("else");

        $(this).parent().addClass("active");
    }
}

$(".menu-item-has-children>a").on("click", toggleSubMenu);
$(".hamburger").on("click", function(){
    if(!$("body").hasClass("hasHover")){
        if($(".main-navigation").hasClass("active")){
            navActive = false;
            $(".main-navigation, li").removeClass("active");
        } else {
            $(".main-navigation").addClass("active");
            navActive = true;
        }
    }

});
function watchForHover() {
    var hasHoverClass = false;
    var container = document.body;
    var lastTouchTime = 0;

    function enableHover() {
        // filter emulated events coming from touch events
        if (new Date() - lastTouchTime < 500) return;
        if (hasHoverClass) return;

        container.className += ' hasHover';
        hasHoverClass = true;
    }

    function disableHover() {
        if (!hasHoverClass) return;

        container.className = container.className.replace(' hasHover', '');
        hasHoverClass = false;
    }

    function updateLastTouchTime() {
        lastTouchTime = new Date();
    }

    document.addEventListener('touchstart', updateLastTouchTime, true);
    document.addEventListener('touchstart', disableHover, true);
    document.addEventListener('mousemove', enableHover, true);

    enableHover();
}

watchForHover();

});