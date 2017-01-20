var newposLayer01Old= 0;
posicionSlider = 0;
  function refreshSwatch() {
     posicionSlider = $( "#sliderDrag" ).slider( "value" );
     
     var widthLayer01 = $('.layer-01').width() - $('body').width();
     var widthLayer02 = $('.layer-02').width() - $('body').width();
     var widthLayer03 = $('.layer-03').width() - $('body').width();
     var widthLayer04 = $('.layer-04').width() - $('body').width();
     
     var newposLayer01 = (posicionSlider * widthLayer01) / 100;
     var newposLayer02 = ((posicionSlider * widthLayer02) / 120);
     var newposLayer03 = ((posicionSlider * widthLayer03) / 140);
     var newposLayer04 = ((posicionSlider * widthLayer04) / 180);
   
     //$('.layer-01').animate({left:newposLayer01*-1}, .5, "swing");
     //$('.layer-02').stop().animate({left:newposLayer02*-1}, 1, "swing");
    // $('.layer-03').stop().animate({left:newposLayer03*-1}, 1, "swing");
   //  $('.layer-04').stop().animate({left:newposLayer04*-1}, 1, "swing");
   
    if (newposLayer01 > (newposLayer01Old+200) || newposLayer01 < (newposLayer01Old-200)){
        $('.layer-01').addClass('animarEasing');
        $('.layer-02').addClass('animarEasing');
        $('.layer-03').addClass('animarEasing');
        $('.layer-04').addClass('animarEasing');
    }else{
        $('.layer-01').removeClass('animarEasing');
        $('.layer-02').removeClass('animarEasing');
        $('.layer-03').removeClass('animarEasing');
        $('.layer-04').removeClass('animarEasing');
    }
        
    newposLayer01Old = newposLayer01;
    
    
    
    $('.layer-01').css('left', newposLayer01*-1);
    $('.layer-02').css('left', newposLayer02*-1);
    $('.layer-03').css('left', newposLayer03*-1);
    $('.layer-04').css('left', newposLayer04*-1);
    
    
  }
  //refreshSwatch();
 
  $(function() {          
            
    
    var loader = new PxLoader();  
    // create a loader with custom settings (shown with default values) 
    var loader = new PxLoader({ 
        // how frequently we poll resources for progress 
        statusInterval: 5000, // every 5 seconds by default 
 
        // delay before logging since last progress change 
        loggingDelay: 20 * 1000, // log stragglers after 20 secs 
 
        // stop waiting if no progress has been made in the moving time window 
        noProgressTimeout: Infinity // do not stop waiting by default 
    });
    loader.add(new PxLoaderImage('img/parallax_background.jpg')); 
    loader.add(new PxLoaderImage('img/parallax_midstars.png')); 
    loader.add(new PxLoaderImage('img/parallax_bigstars.png')); 
    loader.add(new PxLoaderImage('img/gas.png')); 
    loader.add(new PxLoaderImage('img/headerBackground.png')); 
    loader.add(new PxLoaderImage('img/logo.png')); 
    loader.add(new PxLoaderImage('img/share-your-promise.png')); 
    loader.add(new PxLoaderImage('img/plate-01.png')); 
    loader.add(new PxLoaderImage('img/trail-01.png')); 
    loader.add(new PxLoaderImage('img/background-left-bottom.png')); 
    loader.add(new PxLoaderImage('img/background-right-bottom.png')); 
    loader.add(new PxLoaderImage('img/fb-connect-over.png')); 
    loader.add(new PxLoaderImage('img/tw-connect-over.png')); 
    loader.add(new PxLoaderImage('img/tb-connect-over.png')); 
    loader.add(new PxLoaderImage('img/close-01.png')); 
    loader.add(new PxLoaderImage('img/close-02-over.png')); 
    
    loader.addProgressListener(function(e) { 
        console.log(e.resource.getName()); 
    });
    
    
    loader.addCompletionListener(function(e) { 
        console.log('Ready to go!'); 
        initApp();
        $('.loading').animate({opacity:0}, 500, function(){
            $('.loading').css('display', 'none');
        });
        $('.content').delay(500).show(1000);
          initTimer();
    }); 
 
    loader.start(); 
    
  });
  function cambiaSlide(){
      console.log('cambiaSlide');
      $('.layer-01').addClass('animarEasing');
      $('.layer-02').addClass('animarEasing');
      $('.layer-03').addClass('animarEasing');
      $('.layer-04').addClass('animarEasing');
  }
  function initApp(){
      setWidthSlider();
      $( "#sliderDrag" ).slider({
        orientation: "horizontal",
        range: "min",
        max: 100,
        step: .1,
        timing: 0,
        slide: refreshSwatch,
        change: refreshSwatch
    });
    
    $( "#sliderDrag" ).slider( "value", posicionSlider );    
   // $('.ui-slider-handle').draggable();
    
    var positionTopLayer01 = ($( window ).height()/2)-600;
    $('.layer-01').css('top', positionTopLayer01+'px');
    $('.layer-02').css('top', positionTopLayer01+'px');
    $('.layer-03').css('height', $( window ).height()+'px');
    $('.layer-04').css('height', $( window ).height()+'px');
    
    setStars();
    
    
  }
  function setWidthSlider(){
      var width1 = $('body').width() - 186 - 239;
      if (width1>1000){
          width1 = 1000;
      }
      $('.content-slider-drag').css('width', width1);
      $('#sliderDrag').css('width', width1-110);
      $('.content-slider-drag').css('margin-left', -(width1/2));
      
      var width2 = width1-80;
      $('.line-center').css('width', width2);
      $('.line-center').css('margin-left', -(width2/2));
      
  }
 var starOpen = '';
 var timerOn = false;
  function setStars(){
      // var starOpen;
        
        $('.star').find('.user').animate({scale: '.1', opacity:'0'}, {duration:1});
        $('.star').find('.mouseOverDiv').click(openStar);
        $('.star').find('.close').click(function(e){
            e.preventDefault();
            starOpen = '';
            star = $(this).parent('.star');
            closeStar(star);
            if (!timerOn){
                timerOn = true;
                initTimer();
            }
        });
       $('.star').find('.mouseOverDiv').mouseover(starOver);
       $('.star').find('.mouseOverDiv').mouseout(starOut);
       
  }
  function openStar(e){
        e.preventDefault();
        $(this).unbind( "click" );
        $(this).unbind( "mouseover" );
        $(this).unbind( "mouseout" );
        
        clearInterval(intervalID);
        star = $(this).parent('.star');
        star.css('z-index', '1000');
        
        star.find('.starRotation').addClass('rotateOn');
        
        if (starOpen != '' && starOpen != $(this).parent('.star').attr('id')){
            //$('#'+starOpen).hide();
            closeStar($('#'+starOpen));
        }


        starOpen = $(this).parent('.star').attr('id');
        layerOpen = $(this).parent('.star').attr('layer');
        
        if (layerOpen == '3'){
            $('.layer-03').css('z-index', '4');
            $('.layer-04').css('z-index', '3');
        }
        
        //alert(starOpen);
        //arrViews.push(Number(starOpen.substring(4)));
        var image = new Image();
        image.src = "img/star/panel_open.gif?star="+star.attr('id');

        image.onload = function () {
            star.find('.user').show();
            star.find('.starRotation').show();
            star.find('.user').animate({scale: '1', opacity:'1'}, {duration:500});
            star.find('.starRotation').animate({width: '138px', height: '138px', left:'0', top:'0', opacity:1}, {duration:500, complete:function(){
                star.find('.close').delay(700).fadeIn(500);
                star.find('.content-preomisse').delay(500).fadeIn(500);   	
                star.find('.panelOpen').attr('src', image.src);     
                    
            }});
            
        };            
  }
  
  function closeStar(starClose){
        starClose.find('.mouseOverDiv').bind( "click", openStar );
        starClose.find('.mouseOverDiv').bind( "mouseover", starOver);
        starClose.find('.mouseOverDiv').bind( "mouseout", starOut);
        starClose.css('z-index', '1');
        $('.layer-03').css('z-index', '3');
        $('.layer-04').css('z-index', '4');
        var image = new Image();
        image.src = "img/star/panel_close.gif?star="+starClose.attr('id');
        image.onload = function () {
            starClose.find('.panelOpen').attr('src', image.src);
            starClose.find('.content-preomisse').fadeOut(400);
            starClose.find('.close').fadeOut(500);
            
            starClose.find('.user').delay(600).animate({scale: '.1', opacity:0}, {duration:500});
            starClose.find('.starRotation').delay(600).animate({width: '20px', height: '20px', left:'58px', top:'58px', opacity:0}, {duration:500, complete:function(){
                 starClose.find('.mouseOverDiv').removeClass('rotateOn');   
                  
            }});  
        };    
        
  }
function starOver() {
    $(this).unbind( "mouseover" );
    
    var arrSize = [
        {scale:'.5', width:'69px', left:'34px'},
        {scale:'.7', width:'100px', left:'17px'},        
        {scale:'.4', width:'55px', left:'40px'}
    ];
   
    
    var siZeOver = Math.floor(Math.random() * arrSize.length) ;
   
  // alert(siZeOver);
    starOverVar = $(this).parent('.star');
    starOverVar.css('z-index', 500);
    starOverVar.find('.starRotation').addClass('rotateOn');
    starOverVar.find('.user').show();
    starOverVar.find('.starRotation').show();
    starOverVar.find('.user').animate({scale: arrSize[siZeOver].scale, opacity: '1'}, {duration: 500});
    starOverVar.find('.starRotation').animate({width: arrSize[siZeOver].width, height: arrSize[siZeOver].width, left: arrSize[siZeOver].left, top: arrSize[siZeOver].left, opacity: 1}, {duration: 500});
}
function starOut() {
   $(this).bind( "mouseover", starOver);
   starOutVar = $(this).parent();
   starOutVar.find('.user').animate({scale: '.1', opacity:0}, {duration:500});
   starOutVar.find('.starRotation').animate({width: '20px', height: '20px', left:'58px', top:'58px', opacity:0}, {duration:500, complete:function(){
    starOutVar.find('.starRotation').removeClass('rotateOn');   
   }}); 
   
 
  //starOut.find('.starRotation').removeClass('rotateOn');  
}

  var arrViews = [];
  var intervalID;
  function initTimer(){
      var numStars = $('.star').length;
      
      intervalID = setInterval(function() {
          
          view = Math.floor(Math.random() * numStars) + 1;
          widthBrowser  = $('body').width();
          
          var viewPosition = $('#star'+view).position();
          var layerPosition = $('.layer-04').position();
          
          
          while(viewPosition.left >(widthBrowser+(layerPosition.left*-1)) || (layerPosition.left*-1)>viewPosition.left){
              view = Math.floor(Math.random() * numStars) + 1;
              viewPosition = $('#star'+view).position();
              
          }
          //console.log('viewPosition '+viewPosition.left);
         // console.log('layerPosition '+(layerPosition.left*-1));
         // console.log('widthBrowser '+(widthBrowser+(layerPosition.left*-1)));
          
          
                var notRepeat = true;
                for ( var i = 0; i < arrViews.length; i++ ) {
                   if (arrViews[i]==view){
                       notRepeat = false;
                   }
                }
                if (arrViews.length>5){
                    notRepeat = false;
                }
                if(notRepeat){
                      $('#star'+view).find('.mouseOverDiv').trigger('mouseover');
                      
                      
                     arrViews.push(view);
                     
                }else{
                    console.log('repite');
                }
                if(arrViews.length>5){
                         $('#star'+arrViews[0]).find('.mouseOverDiv').trigger('mouseout');
                         arrViews.shift();
                     }
          
          
          
          console.log(arrViews);
      }, 2000);
  }

  $( window ).resize(function() {
      initApp();
  });
  $(window).on('mousewheel', function(e) {
      posicionSlider = $( "#sliderDrag" ).slider( "value" );
      newPos = posicionSlider;
      if (e.originalEvent.wheelDelta>0){
          
          newPos = posicionSlider - .5 ;
      }else{
          newPos = posicionSlider + .5 ;
      }
    
     
      $( "#sliderDrag" ).slider( "option", "value", newPos );
  });
  