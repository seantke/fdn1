$(document).foundation();

menuToggle();

var invisible = true;
var tooSmall = false;
var marginMove = false;

$(window).resize(function(){
    if ($(window).width() <= 1000){
        tooSmall = true;
        widthCheck();
    }
    else{
        tooSmall = false;
    }
});

$(".menu-button").click(function(e){
    menuToggle();
});

function menuToggle(){
    if(invisible){
        widthCheck();
        $(".toggle-menu").css("transform", "translate(-190%, 0)");
        invisible = false;
    } else if (!invisible){
        widthCheck();
        $(".toggle-menu").css("transform", "translate(0, 0)");
        invisible = true;
    }
    console.log("tooSmall is: "+tooSmall);
}

function widthCheck(){
    if(!tooSmall && !invisible){
        $("main").css("margin-left", "480px");
        $(".home").css("margin-left", "240px");
    }
    else{
        $("main").css("margin-left", "20px");
        $(".home").css("margin-left", "20px");
    }
}
