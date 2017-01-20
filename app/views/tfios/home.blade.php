<!DOCTYPE html>
<html>
    <head>
        <title>Little Infinities Galaxy</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="author" content="The Fault in Our Stars Movie">

        <meta name="title" content="Little Infinities Galaxy" />

        <meta name="description" content="Show your love for Augustus and Hazel's little infinity by making your own promise to live a meaningful life. And, your hometown could get a #TFIOS bench dedicated to Hazel & Gus. {{ url('') }} #TFIOSLittleInfinity" />

        <meta name="keywords" content="the fault in our stars, fault in our stars, Shailene Woodley, Ansel Elgort, Laura Dern, Nat Wolff, Josh Boone, John Green, Scott Neustadter, Michael H. Weber" />

        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url('/') }}" />
        <meta property="og:title" content="Little Infinities Galaxy" />
        <meta property="og:image" content="{{ url('img/TFIOS-Site-ShareSiteGraphic_01.png') }}" />

        <meta name="og:description" content="Show your love for Augustus and Hazel's little infinity by making your own promise to live a meaningful life. And, your hometown could get a #TFIOS bench dedicated to Hazel & Gus. {{ secure_url('') }} #TFIOSLittleInfinity" />

        <meta name="og:keywords" content="the fault in our stars, fault in our stars, Shailene Woodley, Ansel Elgort, Laura Dern, Nat Wolff, Josh Boone, John Green, Scott Neustadter, Michael H. Weber" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@thefaultmovie" />
        <meta name="twitter:site:id" content="1676243917" />

        <meta name="twitter:description" content="Make a promise to live a meaningful life and your hometown could get its own #TFIOS bench. {{ secure_url('') }} #TFIOSLittleInfinity" />

        <meta name="twitter:title" content="Little Infinities Galaxy" />
        <meta name="twitter:img:src" content="{{ url('img/TFIOS-Site-ShareSiteGraphic_01.png') }}" />

        <link rel="shortcut icon" href="http://37.media.tumblr.com/avatar_cc4064111d8b_128.png">
        <link rel="apple-touch-icon" href="http://37.media.tumblr.com/avatar_cc4064111d8b_128.png">

        <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css" media="screen" />
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css" media="screen" />
        <link href="{{ asset('css/tfios-style.css') }}" rel="stylesheet" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 1024px)" href="{{ asset('css/tfios-style-mobile.css') }}" />
        <!--<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 1024px)" href="{{ asset('css/tfios-style-mobile.css') }}" />
        <link href="{{ asset('css/tfios-star.css') }}" rel="stylesheet" type="text/css" media="screen" />-->
        <link href="{{ asset('css/sweeps.css') }}" rel="stylesheet" type="text/css" media="screen" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="screen" />

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">


        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
        <!--
        <meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8;"/>
        -->
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta name="apple-mobile-web-app-capable" content="yes" />

        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

        <script src="{{ asset('js/slimScroll.min.js') }}"></script>

        <script src="{{ asset('js/PxLoader.js') }}"></script>
        <script src="{{ asset('js/PxLoaderImage.js') }}"></script>
        <script src="{{ asset('js/preload-tfios.js') }}"></script>

        <script src="{{ asset('libs/jquery.mousewheel.min.js') }}"></script>
        <script src="{{ asset('libs/easeljs-0.7.1.min.js') }}"></script>
        <script src="{{ asset('libs/tweenjs-0.5.1.min.js') }}"></script>
        <script src="{{ asset('libs/movieclip-0.7.1.min.js') }}"></script>
        <script src="{{ asset('libs/preloadjs-0.4.1.min.js') }}"></script>

        <script src="{{ asset('js/assets.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/loader.js') }}"></script>

        <script src="{{ asset('js/jquery.form.min.js') }}"></script>
        <script src="{{ asset('js/tfios.js') }}"></script>

        <script src="{{ asset('js/control-mobile.js') }}"></script>

        {{ HTML::script('js/html2canvas.js') }}

        <script>
            function openBlack(){
                $('.black').fadeIn();
            }
            function closeBlack(){
                $('.black').fadeOut();
            }
            function hideHelpYourState(){
                $('.message-ux').fadeOut();
            }
        $(function(){
            @if(isset($promise_id))
            $.ajax({
                url: $('#url_promise').val() + '/' + $('#show_promise').val(),
                success: function(data) {
                    mypromise(data);
                }
            });
            @endif

            $('.content-right-bottom, .amsterdam-link').click(function(e){
                e.preventDefault();

                $('body').css('overflow-y', 'scroll');
                if ($('.login').is(':visible') || $('.intro').is(':visible')){
                    $('.sweeps').delay(400).fadeIn(1000);
                }else{
                    $('.sweeps').fadeIn(1000);
                }
                $('.message-ux').hide();
                $('.login').fadeOut();
                $('.intro').fadeOut();
            });

            $('#btn_bench').on('click', function(){
                scrolldown();
               // $('.message-ux').fadeIn();
                $('.intro').fadeOut();
                $('.sweeps').fadeOut();
                //openBlack();
            });
            $('#getting-the-bench-mobile').on('click', function(){
                scrolldown();
                $('#helpStateMobile').fadeIn();
                openHeader();
                $('.message-ux').fadeIn();
                $('.intro').fadeOut();
                $('.sweeps').fadeOut();
                //openBlack();
            });

            $('body').on('click', '#my_posts a, #my_posts_mobile a', function(e){
                e.preventDefault();
                var boton = $(this);

                if(boton.attr('promise_id')) {
                    $.ajax({
                        url: $('#url_promise').val() + '/' + boton.attr('promise_id'),
                        success: function(data) {
                            mypromise(data);
                        }
                    });
                } else {
                    switch(boton.attr('sn')) {
                        case 'facebook':
                            if($('#fb_user').val() != '') {
                                $('.steep-01, .steep-02, .steep-03, .steep-04, .steep-05').hide();
                                $('.steep-02').show();
                                $('#frm_promise_social_network').val('facebook');
                                $('.login').fadeIn();
                                openBlack();
                            } // else { e.preventDefault(); }
                            break;
                        case 'twitter':
                            if($('#tw_user').val() != '') {
                                $('.steep-01, .steep-02, .steep-03, .steep-04, .steep-05').hide();
                                $('.steep-02').show();
                                $('#frm_promise_social_network').val('twitter');
                                $('.login').fadeIn();
                                openBlack();
                            } // else { e.preventDefault(); }
                            break;
                        case 'tumblr':
                            if($('#tb_user').val() != '') {
                                $('.steep-01, .steep-02, .steep-03, .steep-04, .steep-05').hide();
                                $('.steep-02').show();
                                $('#frm_promise_social_network').val('tumblr');
                                $('.login').fadeIn();
                                openBlack();
                            } // else { e.preventDefault(); }
                            break;
                    }
                }
            });

            $('#promise_after_login').on('change', function(e){
                $.ajax({
                    url: $('#url_promise').val() + '/' + $('#promise_after_login').val(),
                    success: function(data) {
                        mypromise(data, false);
                        clearInterval(promise_interval);
                    }
                });
            });

        });
        </script>
    </head>
    <body>
        <div style="display: none;">
            <input type="hidden" id="json_newest" value="{{ url('api/newest') }}" />
            <input type="hidden" id="json_shared" value="{{ url('api/most-shared') }}" />
            <input type="hidden" id="json_official" value="{{ url('api/official') }}" />
            <input type="hidden" id="json_ranks" value="{{ url('api/rank') }}" />
            <input type="hidden" id="url_flag" value="{{ url('flag') }}" />
            <input type="hidden" id="url_promise" value="{{ url('api/promise') }}" />
            <input type="hidden" id="url_share" value="{{ url('new_share') }}" />
            <input type="hidden" id="public_path" value="{{ url('/') }}" />
            <input type="hidden" id="show_promise" value="{{ $promise_id ? $promise_id : '' }}" />
            <input type="hidden" id="fb_user" value="{{ $fb_user ? $fb_user->id : '' }}" />
            <input type="hidden" id="tw_user" value="{{ $tw_user ? $tw_user->id : '' }}" />
            <input type="hidden" id="tb_user" value="{{ $tb_user ? $tb_user->id : '' }}" />
            <input type="text" id="promise_after_login" />
        </div>

        <div class="black"></div>
        <div class="loading background-cover">
            <!-- loader -->
            @include('tfios/inc/loader')
            <!-- end  loader -->
            <img class="logo-loader" src="img/loader-logo.png"/>
        </div>
        <!-- bad rotate -->
            <div class="content-rotate background-cover">
                <div class="logo-top mobile">
                    <img src="img/logo-top.png"/>
                </div>
                <p class="rotate-msg">Please Rotate Device</p>
                <img class="rotate-img" src="img/rotate-mobile.png"/>
                <div class="logo background-cover">
                    <p class="text-01 noselectable">ON</p>
                    <p class="text-02 noselectable">August 26</p>
                    <p class="text-03 noselectable">PRE-ORDER</p>
                </div>
            </div>
            <!-- bad rotate -->
        <div class="content">

            <!-- INTRO -->
            @if(Cookie::get('show_intro', 'yes') != 'no')
                @include('tfios/inc/intro')
            @endif
            <!-- end INTRO -->

            <!-- LOGIN -->
            @include('tfios/inc/login')
            <!-- end  LOGIN -->

            <!-- Sweeps -->
            @include('tfios/inc/sweeps')
            <!-- end Sweeps -->

            <div class="content-ux">
                <a class="ux fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ url('/') }}"></a>
                <a class="ux tw" target="_blank" href="https://twitter.com/home?status=<?php echo urlencode('Make a promise to live a meaningful life and your hometown could get its own #TFIOS bench. ' . Config::get('tfios.short_url') . ' #TFIOSLittleInfinity'); ?>"></a>
                <a class="ux tb" target="_blank" href="http://www.tumblr.com/share/link?url=<?php echo urlencode(secure_url('/')); ?>&name=<?php echo urlencode('The Fault in Our Stars | Official Movie Site | #TFIOS'); ?>&description=<?php echo urlencode('Make a promise to live a meaningful life and your hometown could get its own #TFIOS bench. ' . Config::get('tfios.short_url') . ' #TFIOSLittleInfinity') ?>"></a>
                <a class="ux pin" target="_blank" href="https://pinterest.com/pin/create/button/?url={{ url('/img/logo-top.png') }}&media={{ url('/img/logo-top.png') }}&description=<?php echo urlencode('Make a promise to live a meaningful life and your hometown could get its own #TFIOS bench. ' . Config::get('tfios.short_url') . ' #TFIOSLittleInfinity') ?>"></a>
                <a class="ux google" target="_blank" href="https://plus.google.com/share?url={{ secure_url('/') }}"></a>
                <div class="message-ux">
                    <img src="img/arrow-ux.png"/>
                    <p>help your state<br/>Tell a friend</p>
                </div>
            </div>
            <div class="header-mobile">
                <div id="helpStateMobile" class="message-ux mobile">
                    <img src="img/arrow-ux-mobile.png"/>
                    <p>help your state<br/>Tell a friend</p>
                </div>
                <a class="btnOpen mobile" href="#">OPEN</a>
                <div class="btnClose mobile" href="#">
                    <a href="#" class="close">CLOSE</a>
                    <a href="#" class="hamburgerLink">
                        <img class="icon" src="img/hamburger-icon.png"/>
                    </a>
                </div>
                <div class="logo-top mobile">
                    <img src="img/logo-top.png"/>
                </div>
                <div class="share-your-promise mobile">
                    <p class="text-03 noselectable">SHARE<br/> YOUR PROMISE</p>
                    <img class="back-image" src="img/make-promisse-mobile.png"/>
                    <img class="back-image-over" src="img/make-promisse-mobile-over.png"/>
                </div>
                <a class="logo mobile background-cover" href="http://www.foxdigitalhd.com/fault-in-our-stars" target="_blank">
                    <p class="text-01 noselectable">ON</p>
                    <p class="text-02 noselectable">8/26</p>
                    <p class="text-03 noselectable">PRE-ORDER</p>
                </a>
                <div class="secondLevel mobile">

                    <ul id="accordion-menu-mobile">
                        <li>
                        <a href="#" class="content-mypost">My post</a>
                            <ul class="content-mypost-red" id="my_posts_mobile">
                                <li><a sn="facebook" href="#" class="{{ !$fb_user || ($fb_user && !$fb_user->promise) ? 'off' : '' }} fb-post" {{ $fb_user && $fb_user->promise ? 'promise_id="' . $fb_user->promise->id . '"' : '' }}>FACEBOOK</a></li>
                                <li><a sn="twitter" href="#" class="{{ !$tw_user || ($tw_user && !$tw_user->promise) ? 'off' : '' }} tw-post" {{ $tw_user && $tw_user->promise ? 'promise_id="' . $tw_user->promise->id . '"' : '' }}>TWITTER</a></li>
                                <li><a sn="tumblr" href="#" class="{{ !$tb_user || ($tb_user && !$tb_user->promise) ? 'off' : '' }} tb-post" {{ $tb_user && $tb_user->promise ? 'promise_id="' . $tb_user->promise->id . '"' : '' }}>TUMBLR</a></li>
                            </ul>
                        </li>
                        <li class="no-icon"><a class="amsterdam-link" href="#">You Could Win <br/>a trip to Amsterdam</a></li>
                        <li class="no-icon"><a id='getting-the-bench-mobile' href="#">Who’s Getting<br/>the Tfios Bench</a></li>
                        <li class="no-icon"><a href="#">Pre-order</a></li>
                        <li>
                            <a href="#" class="link-collapse">Share</a>
                            <ul>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/') }}">Facebook</a></li>
                                <li><a href="https://twitter.com/home?status=<?php echo urlencode('Make a promise to live a meaningful life and your hometown could get its own #TFIOS bench. ' . Config::get('tfios.short_url') . ' #TFIOSLittleInfinity'); ?>">Twitter</a></li>
                                <li><a href="http://www.tumblr.com/share/link?url=<?php echo urlencode(secure_url('/')); ?>&name=<?php echo urlencode('The Fault in Our Stars | Official Movie Site | #TFIOS'); ?>&description=<?php echo urlencode('Make a promise to live a meaningful life and your hometown could get its own #TFIOS bench. ' . Config::get('tfios.short_url') . ' #TFIOSLittleInfinity') ?>">Tumblr</a></li>
                                <li><a href="https://pinterest.com/pin/create/button/?url={{ url('/img/logo-top.png') }}&media={{ url('/img/logo-top.png') }}&description=<?php echo urlencode('Make a promise to live a meaningful life and your hometown could get its own #TFIOS bench. ' . Config::get('tfios.short_url') . ' #TFIOSLittleInfinity') ?>">Pinterest</a></li>
                                <li><a href="https://plus.google.com/share?url={{ secure_url('/') }}">Google +</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#" class="link-collapse">Countries</a>
                            <ul>
                                <li><a href="#">Deutsch</a></li>
                                <li><a href="#">English</a></li>
                                <li><a href="#">español</a></li>
                                <li><a href="#">français</a></li>
                                <li><a href="#">italiano</a></li>
                                <li><a href="#">Nederlands</a></li>
                                <li><a href="#">português</a></li>
                            </ul>

                        </li>
                    </ul>
                    <script>
                        $(function() {

                          $( "#accordion-menu-mobile" ).accordion({
                              collapsible: true,
                              heightStyle: "content",
                              icon: null,
                              active:false
                          });
                        });
                        </script>
                </div>
            </div>
            <div class="header">
                <div class="content-buttons-top">
                    <ul>
                        <li class="first-link">
                            <a class="noselectable" href="#">{{ trans('tfios.my_posts') }}</a>
                            <ul class="my-post" id="my_posts">
                                <li>
                                    <a sn="facebook" href="#" class="{{ !$fb_user || ($fb_user && !$fb_user->promise) ? 'off' : '' }} fb-post" {{ $fb_user && $fb_user->promise ? 'promise_id="' . $fb_user->promise->id . '"' : '' }}>
                                        <img src="img/mypost-fb.png"/>
                                    </a>
                                </li>
                                <li>
                                    <a sn="twitter" href="#" class="{{ !$tw_user || ($tw_user && !$tw_user->promise) ? 'off' : '' }} tw-post" {{ $tw_user && $tw_user->promise ? 'promise_id="' . $tw_user->promise->id . '"' : '' }}>
                                        <img src="img/mypost-tw.png"/>
                                    </a>
                                </li>
                                <li>
                                    <a sn="tumblr" href="#" class="{{ !$tb_user || ($tb_user && !$tb_user->promise) ? 'off' : '' }} tb-post" {{ $tb_user && $tb_user->promise ? 'promise_id="' . $tb_user->promise->id . '"' : '' }}>
                                        <img src="img/mypost-tb.png"/>
                                    </a>
                                </li>
                            </ul>
                </li>
                <li class="first-link">
                    <img src="{{ asset('img/globa.png') }}"/>
                    <a class="noselectable" href="#">countries</a>
                    <ul class="language-selection">
                        <li><a href="{{ url('lang', 'de') }}">Deutsch</a></li>
                        <li><a href="{{ url('lang', 'en') }}" class="active">English</a></li>
                        <li><a href="{{ url('lang', 'es') }}">español</a></li>
                        <li><a href="{{ url('lang', 'fr') }}">français</a></li>
                        <li><a href="{{ url('lang', 'it') }}">italiano</a></li>
                        <li><a href="{{ url('lang', 'nl') }}">Nederlands</a></li>
                        <li><a href="{{ url('lang', 'pt') }}">português</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="logo-top">
            <img src="img/logo-top.png"/>
        </div>
        <a class="logo" href="http://www.foxdigitalhd.com/fault-in-our-stars" target="_blank">
            <p class="text-01 noselectable">ON</p>
            <p class="text-02 noselectable">AUGUST 26</p>
            <p class="text-03 noselectable">PRE-ORDER</p>
        </a>

        <div class="share-your-promise background-cover">
            <p class="text-03 noselectable">{{ trans('tfios.share_your_promise') }}</p>
        </div>

        <div class="right-top" id="btn_bench">
            <p class="text-01 noselectable">Who’s</p>
            <p class="text-02 noselectable">getting the</p>
            <p class="text-03 noselectable">tfios Bench?</p>
            <p class="text-04 noselectable">FIND OUT</p>
        </div>

            </div>
            <div class="content-shorts">
                    <p>Sort by:</p>
        <a href="#" class="noselectable active" value="newest" >{{ trans('tfios.newest') }}</a>
                    <p style="margin: 0 11px;"> | </p>
        <a class="noselectable" href="#" value="shared">{{ trans('tfios.most_shared') }}</a>
                </div>
    <script>
        $(".content-shorts a").click(function(e){
            e.preventDefault();
            $(".content-shorts a").not(this).removeClass("active");
            $(this).addClass("active");
            renderStars($(this).attr("value"));
        });
    </script>
    <p class="legals">© 2014 Fox Home Entertainment. All Rights Reserved. Graphics copyright © 2012 Penguin Group (USA) LLC   <a href="http://www.foxprivacy.com/us/terms.html" target="_blank">Terms and Conditions</a>  |  <a href="http://www.foxprivacy.com/us/privacy.html" target="_blank">Privacy Policy</a></p>
            @if(in_array($location['isoCode'], Config::get('tfios.sweepstakes_allowed_countries')))
            <div class="content-right-bottom">
                <p class="text-01 noselectable">YOU COULD</p>
                <p class="text-02 noselectable">WIN A TRIP TO</p>
                <p class="text-03 noselectable">AMSTERDAM!</p>
                <p class="text-04 noselectable">Tell Me How</p>
            </div>
            @endif
            <!-- parallax -->
               @include('tfios/inc/parallax')
            <!-- end parallax -->
        </div>
        <script src="http://platform.tumblr.com/v1/share.js"></script>
    </body>
</html>