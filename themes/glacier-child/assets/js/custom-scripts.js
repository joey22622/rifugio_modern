
jQuery(document).ready(function($){


var nav = document.querySelector(".main-navigation");
var navActive = false;
var navHover = false;
var windowActive = true;
var html = document.querySelector("html");
var htmlInTimeout;
var anchor = $("#glacier_menu .has-sub>a");
var aboutPage = "page-id-2091";

anchor.click(function(e){
    e.preventDefault();
});

// $(window).load(function(){
//     if($("body").hasClass(aboutPage)){
//         $(".main-content-wrap>div").attr("class" , "col-md-10 col-md-offset-1")
//     }
// });

console.log(nav);
$(window).on("scroll", function(){
    if(navActive){
        navActive = false;
        console.log("nav mouseleave ");
        $(".main-navigation, .main-navigation li").removeClass("active");
    }
});

function scrollToContent(targetElem){
    var contentTop = $(targetElem).offset().top;
    $('html, body').animate({scrollTop: contentTop-50}, 300);
}

$("body").on("click", ".vp-filter__item a", function(){
    scrollToContent(this);
    console.log("what up");
});

function widthToHeight(jQelem){
   var width = $(jQelem).width();
   $(jQelem).css("height" , width);
   console.log("hi")
}

// $(".gallery-projects").each(widthToHeight(this));
$(".gallery-projects").each(function(i, obj){
    widthToHeight(this);
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

function matchWidth(jqElem,jqTarget){
    console.log(jqElem);
    if($(jqElem).length){
        $(jqElem).css("width", "");
        var width = $(jqTarget).width();
        $(jqElem).css("width", width);
    }
}
matchWidth(".featured-img-wrap .featured-inner", ".content-wrap");
html.addEventListener("resize", function(){
    matchWidth("");
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


//handles fade of logo-text layer, hides background layer
var fadePoint = 180;
function homeLogoFade(fadePoint){
    var vanishPoint = fadePoint + 50;
    var pageLocation = $(window).scrollTop();
    //changes opacity if scrollTop is between fade & vanish points
    if(pageLocation >= fadePoint  && pageLocation < vanishPoint){
        var ratio1 = pageLocation - fadePoint;
        var ratio2 = vanishPoint - fadePoint;
        var ratio = parseFloat(1-(ratio1/ratio2));
        console.log(ratio1 + " / " +ratio2 + " = " + ratio);
        $(".logo-text-wrap").css("opacity", ratio);
    } else if (pageLocation >= vanishPoint){
        $(".logo-text-wrap").css("opacity", 0);
    } else if (pageLocation < fadePoint){
        $(".logo-text-wrap").css("opacity", 1);
    }
    vanishPoint = vanishPoint+100;
    if(pageLocation >= fadePoint  && pageLocation < vanishPoint){
        $(".logo-back-wrap").removeClass("logo-hidden");
    } else if (pageLocation >= vanishPoint){
        $(".logo-back-wrap").addClass("logo-hidden");
    } else if (pageLocation < fadePoint){
        $(".logo-back-wrap").removeClass("logo-hidden");
    }
    console.log(pageLocation)
}


//reveals/hides header logo at certain point
//targetPoint is the scrollTop value where the function toggles
//runs on page load and page scroll
var headLogoHide;
var pageLoad = true;
//point plugs in as only param to logoToggle function
var point = 100;
function logoToggle(targetPoint){
    var pageLocation = $(window).scrollTop();
    if(pageLocation <= targetPoint && !headLogoHide){
        $(".logo-gradient").addClass("logo-hidden");
        headLogoHide = true;
    } else if (pageLocation > targetPoint && headLogoHide || pageLocation > targetPoint && pageLoad) {
        $(".logo-gradient").removeClass("logo-hidden");
        headLogoHide = false;
    }
    pageLoad = false;
}
if($("body").hasClass("home")){
    logoToggle(point);
}
window.addEventListener("scroll", function(){
    if($("body").hasClass("home")){
        logoToggle(point);
        homeLogoFade(fadePoint);
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