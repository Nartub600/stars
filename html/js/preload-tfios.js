var loader = new PxLoader(); 
$(function() {          
            
    
    //var loader = new PxLoader();  
    // create a loader with custom settings (shown with default values) 
    loader = new PxLoader({ 
        // how frequently we poll resources for progress 
        statusInterval: 5000, // every 5 seconds by default 
 
        // delay before logging since last progress change 
        loggingDelay: 20 * 1000, // log stragglers after 20 secs 
 
        // stop waiting if no progress has been made in the moving time window 
        noProgressTimeout: Infinity // do not stop waiting by default 
    });
    var arrImages = [
        'img/parallax_background.jpg', 
        'img/parallax_midstars.png', 
        'img/headerBackground.png', 
        'img/share-your-promise.png',
        'img/plate-01.png',
        'img/plate-02.png',
        'img/background-right-bottom-2.png',
        'img/background-right-bottom.png',
        'img/background-sweeps.jpg',
        'img/fb-connect.png',
        'img/tw-connect.png',
        'img/tb-connect.png',
        'img/fb-connect-over.png',
        'img/tw-connect-over.png',
        'img/tb-connect-over.png',
        'img/trail-01.png',
        'img/trail-02.png',
        'img/trail-03.png',
        'img/intro-back-01.png',
        'img/close-over.png',
        'img/close-01.png',
        'img/close-02-over.png',
        'img/close-03-off.png',
        'img/close-03-over.png',
        'img/share-your-promise-02.png',
        'img/share-your-promise-02-over.png',
        'img/background-right-top-over.png',
        'img/background-right-top.png',
        'img/ux-fb-over.png',
        'img/ux-fb.png',
        'img/ux-g-over.png',
        'img/ux-g.png',
        'img/ux-pin-over.png',
        'img/ux-pin.png',
        'img/ux-tb-over.png',
        'img/ux-tb.png',
        'img/ux-tw-over.png',
        'img/ux-tw.png',
        'img/intro-back.png',
        'img/intro-back.png',
        'img/btn-make-promisse.png',
        'img/btn-make-promisse-over.png',
        'img/btn-submit-01.png',
        'img/btn-submit-01-over.png',
        'img/logo-top.png',
        'img/rotate-mobile.png',
        'img/logo-over.png',
        'img/more-link.png',
        'img/less-link.png',
        'img/form-back-mobile.png',
        'img/form-back-mobile-open.png',
        'img/background-rotate.png',
        'img/rotate-mobile.png',
        'img/arrow-promise.png',
        'img/share-it-with-friends-over.png',
        'img/share-it-with-friends.png',
        'img/share-image-star.png',
        'img/hamburger-icon.png',
        'img/logo-mobile.png',
        'img/fb-share-01.png',
        'img/tw-share-01.png',
        'img/tb-share-01.png',
        'img/pin-share-01.png',
        'img/make-promisse-mobile-over.png',
        'img/fb-share-01-over.png',
        'img/tw-share-01-over.png',
        'img/tb-share-01-over.png',
        'img/pin-share-01-over.png',
        'img/sweeps-submit.png',
        'img/sweeps-submit-over.png',
        'img/logo.png'];
    for (i=0;i<arrImages.length;i++) { 
        loader.add(new PxLoaderImage(arrImages[i])); 
    }
    
    var arrImagesParallax = [
        'images/BACK.jpg', 
        'images/Group1.png', 
        'images/Group12.png', 
        'images/Group12_1.png', 
        'images/Group13.png', 
        'images/Group13_1.png', 
        'images/Group14.png', 
        'images/Group14_1.png', 
        'images/Group15.png', 
        'images/Group1_1.png', 
        'images/Group1_1_1.png', 
        'images/Group2.png', 
        'images/Group4.png', 
        'images/Group5.png', 
        'images/Group6.png', 
        'images/Group9.png', 
        'images/SHINE.png', 
        'images/lever.png', 
        'images/panel_close0001.png', 
        'images/panel_close0002.png', 
        'images/panel_close0003.png', 
        'images/panel_close0004.png', 
        'images/panel_close0005.png', 
        'images/panel_close0006.png', 
        'images/panel_close0007.png', 
        'images/panel_close0008.png', 
        'images/panel_close0009.png', 
        'images/panel_close0010.png', 
        'images/panel_close0011.png', 
        'images/panel_close0012.png', 
        'images/panel_close0013.png', 
        'images/panel_close0014.png', 
        'images/panel_close0015.png', 
        'images/panel_close0016.png', 
        'images/panel_close0017.png', 
        'images/panel_open0001.png', 
        'images/panel_open0002.png', 
        'images/panel_open0003.png', 
        'images/panel_open0004.png', 
        'images/panel_open0005.png', 
        'images/panel_open0006.png', 
        'images/panel_open0007.png', 
        'images/panel_open0008.png', 
        'images/panel_open0009.png', 
        'images/panel_open0010.png', 
        'images/panel_open0011.png', 
        'images/panel_open0012.png', 
        'images/panel_open0013.png', 
        'images/panel_open0014.png', 
        'images/panel_open0015.png', 
        'images/panel_open0016.png', 
        'images/panel_open0017.png',         
        'images/panel_open0001_1.png',         
        'images/panel_open0002_1.png',         
        'images/panel_open0003_1.png',         
        'images/panel_open0004_1.png',         
        'images/panel_open0005_1.png',         
        'images/panel_open0006_1.png',         
        'images/panel_open0007_1.png',         
        'images/panel_open0008_1.png',         
        'images/panel_open0008_1.png',         
        'images/s.png', 
        'images/ss.png', 
        'images/star2.png'];
    for (p=0;p<arrImagesParallax.length;p++) { 
        loader.add(new PxLoaderImage(arrImagesParallax[p])); 
    }
   
    loader.addProgressListener(function(e) { 
        console.log(e.resource.getName()); 
    });
    
    
    loader.addCompletionListener(function(e) { 
        console.log('Ready to go!'); 
     //   initApp();
        adjustHeightParallax();
        init();
    }); 
 
   // loader.start(); 
    
  });
  
function initSite() {
    $('.loading').css('display', 'none');
    $('.content').show(0);
    $('.intro').delay(2000).animate({opacity: 1}, 1000);
    /*
    $('.loading').animate({opacity: 0}, 500, function() {
        $('.loading').css('display', 'none');
    });
    $('.content').delay(500).show(1000);
    
    $('.intro').delay(2000).animate({opacity: 1}, 1000);
    */
}