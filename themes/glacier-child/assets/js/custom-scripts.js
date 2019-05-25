
jQuery(document).ready(function($){


var nav = document.querySelector(".main-navigation");
var navActive = false;
var windowActive = false;
var html = document.querySelector("html");

console.log(nav);

nav.addEventListener("mouseover", function(){
    if(!navActive){
        navActive = true;
        console.log(navActive);
        $(".main-navigation").addClass("active");
    }
});

nav.addEventListener("mouseleave", function(){
    setTimeout(function(){
        if(windowActive){
            if(navActive){
                navActive = false;
                console.log(navActive);
                $(".main-navigation").removeClass("active");

            }
        }
    },50);
});
html.addEventListener("mouseleave", function(){
    console.log("OUT");
    windowActive = false;
});
html.addEventListener("mouseover", function(){
    console.log("IN");
    if(windowActive){

        setTimeout(function(){
            
            windowActive = true;
            
        });
    },50);

});