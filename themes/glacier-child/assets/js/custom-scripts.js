
jQuery(document).ready(function($){


var nav = document.querySelector(".main-navigation");
var navActive = false;
var navHover = false;
var windowActive = true;
var html = document.querySelector("html");
var htmlInTimeout;


console.log(nav);

nav.addEventListener("mouseover", function(){
    navHover = true;
    if(!navActive){
        navActive = true;
        console.log(navActive);
        $(".main-navigation").addClass("active");
    }

});

nav.addEventListener("mouseleave", function(){
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
});
html.addEventListener("mouseleave", function(){
    console.log("OUT");
    windowActive = false;
    navHover = false;
});
html.addEventListener("mouseenter", function(){
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
            
    });
});