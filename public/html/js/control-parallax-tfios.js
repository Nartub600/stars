  var newposLayer01Old= 0;
  function refreshSwatch() {
     var posicionSlider = $( "#sliderDrag" ).slider( "value" );
     
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
  refreshSwatch();
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
      $( "#sliderDrag" ).slider({
        orientation: "horizontal",
        range: "min",
        max: 100,
        step: .1,
        timing: 0,
        slide: refreshSwatch,
        change: refreshSwatch
    });
    $( "#sliderDrag" ).slider( "value", 0 );    
    var positionTopLayer01 = ($( window ).height()/2)-600;
    $('.layer-01').css('top', positionTopLayer01+'px');
    $('.layer-02').css('top', positionTopLayer01+'px');
    $('.layer-03').css('top', positionTopLayer01+'px');
  }
  