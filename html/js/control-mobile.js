function adjustHeightParallax(){
    if ($(window).width()>767){
        var heightWrapper = $(window).height()-112;
    }else{
        heightWrapper = $(window).height();
    }
    
    $('#wrapper').css('height', heightWrapper+'px');
}
$( window ).resize(function() {
  adjustHeightParallax();
});

$(document).ready(function(){
    setButtons();
    if(navigator.userAgent.match(/Android/i)){
       // window.scrollTo(0,1);
    }
});
function setButtons(){
    $('.btnOpen').click(function(e){
        e.preventDefault();
        openHeader();
    });
    $('.btnClose').find('.close').click(function(e){
        e.preventDefault();
        closeHeader();
    });
    $('.btnClose').find('.hamburgerLink').click(function(e){
        e.preventDefault();
        open2Level();
    });
}
function openHeader(){
    $('.btnOpen').fadeOut();
    $('.header-mobile').animate({right:0}, 400);
}
function open2Level(){
    $('.btnOpen').fadeOut();
    $('.header-mobile').animate({right:88}, 400);
}
function closeHeader(){
    $('.btnOpen').fadeIn();
    $('.message-ux').fadeOut();
    $('.header-mobile').animate({right:-88}, 400);
}


