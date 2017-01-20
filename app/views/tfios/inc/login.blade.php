<script>
    function color_hashtags(container) {
        var myRegExp = new RegExp('\\#\\w+','gi');
        var htmlWrappedHashtags = container.html().replace(myRegExp, '<span class="hasgtag">$&</span>');
        container.html(htmlWrappedHashtags);
    }
    function shareit(idPost){
        closeSweeps();
        scrollup();

        $.ajax({
            url: $('#url_promise').val() + '/' + idPost,
            data: {
                share: 'yes'
            },
            success: function(data) {
                $('#promise_id').val(data.id);
                var promise_text = data.text;
                if(promise_text.substr(0,12).toLowerCase() == 'i promise to') {
                    var first = '<span class="cyan">I promise to</span>';
                    var last = promise_text.substr(12, promise_text.length);
                    promise_text = first + last;
                }
                $('#mypromise_text').html(promise_text + ' <br>#TFIOSLittleInfinity - ' + data.user.name.split(' ')[0]);
                color_hashtags($('#mypromise_text'));
                $('#img_profile_picture').attr('src', $('#public_path').val() + '/profiles/' + data.user.id + '.png');

                // show share window
                $('.steep-01, .steep-02, .steep-03, .steep-04, .steep-05').hide();
                $('.steep-04').show();
                $('.login').fadeIn();

                // share image generation
                html2canvas($('#share_container'), {
                    onrendered: function(canvas) {
                        $.ajax({
                            url: $('#share_container').attr('ajax'),
                            type: 'post',
                            data: {
                                image: canvas.toDataURL(),
                                promise_id: $('#promise_id').val()
                            }
                        });
                    }
                });

                // share links
                $('#share_texts .short_url').text(data.url);
                var promise_user = data.user.id;
                var fb_user = $('#fb_user').val();
                var tw_user = $('#tw_user').val();
                var tb_user = $('#tb_user').val();
                var promise_image = $('#public_path').val() + '/shares/' + data.id + '.png';

                $('#star_share_buttons [class*="fb"]').attr('rel', data.id);
                $('#star_share_buttons [class*="tb"]').attr('href', 'http://www.tumblr.com/share/photo?source='+encodeURIComponent($('#public_path').val()+"/shares/" + data.id + '.png')+'&caption='+encodeURIComponent('Show your love for Augustus and Hazel\'\s little infinity by making your own promise to live a meaningful life. And, your hometown could get a #TFIOS bench dedicated to Hazel & Gus. ' + data.url + ' #TFIOSLittleInfinity'));
                $('#star_share_buttons [class*="tw"]').attr('href', 'http://twitter.com/share?url=/&text='+encodeURIComponent('Make a promise to live a meaningful life and your hometown could get its own #TFIOS bench. ' + data.url + ' #TFIOSLittleInfinity'));
                $('#star_share_buttons [class*="pin"]').attr('href', 'https://pinterest.com/pin/create/button/?url=&media=%09%09%09%09'+encodeURIComponent($('#public_path').val() + '/shares/' + data.id + '.png')+'&description='+encodeURIComponent('Show your love for Augustus and Hazel\'\s little infinity by making your own promise to live a meaningful life. And, your hometown could get a #TFIOS bench dedicated to Hazel & Gus. ' + data.url + ' #TFIOSLittleInfinity'));
            }
        });
        openBlack();
    }

    function edit(idPost) {
        closeSweeps();
        $.ajax({
            url: $('#url_promise').val() + '/' + idPost,
            success: function(data) {
                $('#edit_mypromise_text').text(data.text);
                $('#edit_promise_id').val(data.id);

                $('.steep-01, .steep-02, .steep-03, .steep-04, .steep-05').hide();
                $('.steep-05').show();
                $('.login').fadeIn();
            }
        });
        openBlack();
    }

    $(document).ready(function(){
        /* #eListeners */
        $('.onClickSharePromise').click(function(){
            FB.ui({ method: 'share', href: $('#public_path').val() + '/share-promise?pid='+$(this).attr("rel")+"&t"+Math.floor((Math.random() * 15000) + 1) }, function(response){ console.log(response); });
        });

        $('.login').hide();

        // make your promise button
        $('.share-your-promise').click(function(e){
            e.preventDefault();
            closeSweeps();
            scrollup();
            openBlack();

            if($('.sweeps').is(':visible') || $('.intro').is(':visible')) {
                $('.login').delay(400).fadeIn(1000);
                $('.sweeps').fadeOut();
                $('.intro').fadeOut();
            } else {
                $('.login').fadeIn();
            }
            $('.steep-01, .steep-02, .steep-03, .steep-04, .steep-05').hide();
            $('.steep-01').show();
        });

        // social network login buttons
        $('[class$="connect"][href!="#"]').on('click', function(e){
            e.preventDefault();
            if(!$(this).hasClass('off')) {
                popupwindow($(this).attr('href'), 'snlogin', 575, 417);
            }
            promise_interval = setInterval(function(){
                if($('#promise_after_login').val() != '') {
                    $('#promise_after_login').trigger('change');
                    $('#promise_after_login').val('');
                }
            }, 1000);
        });

        // new promise form
        $('#btn_promise').one('click', promise_handler);

        function promise_handler(e) {
            e.preventDefault();

            $('.submit-promise').on('click', function(e){
                e.preventDefault();
            });

            $('#frm_promise').ajaxSubmit({
                success: function(data) {
                    if(data.status == 'ok') {
                        // show next step
                        $('.steep-02').fadeOut(400, function(){
                            $('.steep-03').fadeIn();
                        });

                        // reset form
                        $('#frm_promise')[0].reset();
                        $('#promise_id').val(data.promise.id);

                        mypromise(data.promise);

                        // var container = $('#mypromise_text');
                        // container.html('<span class="cyan">I promise to</span> ' + data.promise.text + ' <br>#MyLittleInfinity - ' + data.user.name.split(' ')[0]);
                        // color_hashtags(container);

                        // update 'my posts' buttons
                        switch(data.user.social_network) {
                            case 'facebook':
                                $('.fb-post').removeClass('off').attr('promise_id', data.promise.id);
                                break;
                            case 'twitter':
                                $('.tw-post').removeClass('off').attr('promise_id', data.promise.id);
                                break;
                            case 'tumblr':
                                $('.tb-post').removeClass('off').attr('promise_id', data.promise.id);
                                break;
                        }
                    } else {
                        $('#promise_text').removeClass('error');
                        $('.enter-zip').removeClass('error');
                        $.each(data.fields, function(name, message){
                            if($('#alert').text == '') {
                                $('#alert').text(data.message);
                            }
                            $('#alert').text(data.message);
                            if(name == 'rules' || name == 'terms') {
                                $('[name="' + name + '"]').siblings('label').addClass('error');
                            } else {
                                $('[name="' + name + '"]').addClass('error');
                            }
                        });

                    }
                },
                complete: function() {
                    $('#btn_promise').one('click', promise_handler);
                }
            });
        }

        $('.close-btn').click(function(e){
            e.preventDefault();
            $('.login').fadeOut();
            closeBlack();
        });

        // opens share window
        $('#btn_step3').on('click', function(e){
            e.preventDefault();
            shareit($('#promise_id').val());
        });

        // edit promise form
        $('#btn_edit_promise').one('click', edit_promise_handler);

        function edit_promise_handler(e) {
            e.preventDefault();
            openBlack();

            $('#btn_edit_promise').on('click', function(e){
                e.preventDefault();
            });

            $('#frm_edit_promise').ajaxSubmit({
                success: function(data) {
                    if(data.status == 'ok') {
                        $('.login').fadeOut();
                        mypromise(data.promise);
                        closeBlack();
                    } else {
                        $('#edit_alert').text(data.message);
                    }
                },
                complete: function() {
                    $('#btn_edit_promise').one('click', edit_promise_handler);
                }
            });
        }

        // share counter
        $('#star_share_buttons a').on('click', function(e){
            $.ajax({
                url: $('#url_share').val(),
                type: 'post',
                data: {
                    promise_id: $('#promise_id').val(),
                    social_network: $(this).attr('sn')
                }
            });
        });
    });
</script>

<input type="hidden" id="promise_id" value="" />

<div style="display: none;" id="share_texts">
    <div id="owner">
        <p sn="fb"></p>
        <p sn="tw">I promised to live a meaningful life. Do the same and your hometown could get its own #TFIOS bench. <span class="short_url"></span> #MyLittleInfinity</p>
        <p sn="tb"></p>
        <p sn="pin"></p>
    </div>
    <div id="not_owner">
        <p sn="fb"></p>
        <p sn="tw">Make a promise to live a meaningful life and your hometown could get its own #TFIOS bench. <span class="short_url"></span> #MyLittleInfinity</p>
        <p sn="tb"></p>
        <p sn="pin"></p>
    </div>
    <div id="urls">
        <a sn="fb" href="https://www.facebook.com/sharer/sharer.php?u="></a>
        <a sn="tw" href="https://twitter.com/home?status="></a>
        <a sn="tb" href=""></a>
        <a sn="pin" href="https://pinterest.com/pin/create/button/?url=&media=&description="></a>
    </div>
</div>

<div class="login background-cover">
    <a href="#" class="close-btn"></a>
    <div class="steep-01 background-cover">
        <ul class="steeps one">
            <li>{{ trans('tfios.step1') }}</li>
            <li>{{ trans('tfios.step2') }}</li>
            <li>{{ trans('tfios.step3') }}</li>
        </ul>
        <p class="connet-width">{{ trans('tfios.connect_with') }}</p>
        <div class="content-socials-connects">
            <a href="{{ url('facebook') }}" class="{{ $fb_user ? 'off' : '' }} margin-left-01 fb-connect"></a>
            <a href="{{ url('twitter') }}" class="{{ $tw_user ? 'off' : '' }} margin-left-01 tw-connect"></a>
            <a href="{{ url('tumblr') }}" class="{{ $tb_user ? 'off' : '' }} margin-left-01 tb-connect"></a>
        </div>
    </div>
    <div class="steep-02 background-cover">
        <ul class="steeps two">
            <li>{{ trans('tfios.step1') }}</li>
            <li>{{ trans('tfios.step2') }}</li>
            <li>{{ trans('tfios.step3') }}</li>
        </ul>
        <p class="text-01">{{ trans('tfios.text01') }}</p>
        <p class="text-02">{{ trans('tfios.text02') }}</p>
        <!--<p class="text-03">{{ trans('tfios.text03') }}</p>
        <img src="{{ asset('img/arrow-promise.png') }}" class="promise-arrow"/>-->
        <form id="frm_promise" action="{{ action('PromiseController@create') }}" method="post">
            <input type="hidden" name="social_network" id="frm_promise_social_network" />
            <p id="charactersEdit1" class="max-characters">100</p>
            <textarea id="promise_text" maxlength="100" name="text" placeholder="ENTER YOUR PROMISE">I promise to </textarea>
            <input name="zip" class="enter-zip" maxlength="5" type="text" placeholder="Enter Zip" id="promise_zip" onkeypress="validateNumber(event)"/>
            <button id="btn_promise" class="submit-promise">{{ trans('tfios.submit') }}</button>
            <p id="alert" class="alert"></p>
        </form>
        <script>
                function validateNumber(evt) {
                    var theEvent = evt || window.event;
                    var key = theEvent.keyCode || theEvent.which;
                    key = String.fromCharCode( key );
                    var regex = /[0-9]|\./;
                    if( !regex.test(key) ) {
                      theEvent.returnValue = false;
                      if(theEvent.preventDefault) theEvent.preventDefault();
                    }
                  }
                $(function() {
                    var input = $('#promise_text'), display = $('#charactersEdit1'), count = 0, limit = 100;

                    count = input.val().length
                    remaining = limit - count
                    update(remaining);

                    input.keyup(function(e) {
                      count = $(this).val().length;
                      remaining = limit - count;

                      update(remaining);
                    });

                    function update(count) {
                      var txt = ( Math.abs(count) === 1 ) ? count + '' :  count + ' '
                      display.html(txt);
                    }

              });
        </script>
    </div>
    <div class="steep-03 background-cover">
        <ul class="steeps three">
            <li>{{ trans('tfios.step1') }}</li>
            <li>{{ trans('tfios.step2') }}</li>
            <li>{{ trans('tfios.step3') }}</li>
        </ul>
        <p class="text-01">{{ trans('tfios.text04') }}</p>
       <!-- <div class="ornaments-01"></div>-->
        <a class="share-it-with-friends" href="#" id="btn_step3">
            SHARE IT WITH FRIENDS
        </a>
    </div>
    <div class="steep-04 background-cover">
        <div class="content-to-share">
            <div class="content-post background-cover" id="share_container" ajax="{{ url('imagesaver') }}">
                <div class="image-share">
                    <img class="star" src="{{ asset('img/share-image-star.png') }}"/>
                    <img id="img_profile_picture" class="user" src="{{ Auth::check() ? asset('profiles') . '/' . Auth::user()->id . '.png' : '' }}" width="80" height="80" />
                </div>
                <p id="mypromise_text"></p>
                <img class="imgBackgrondShare" src="img/share-post.png"/>
            </div>
            <div class="share-box-02">
                <p>{{ trans('tfios.text06') }}</p>
                <div class="content-buttons" id="star_share_buttons">
                   <!-- <a sn="facebook" target="_blank" class="share-fb-02 floatleft-01 background-cover onClickSharePromise" href="https://www.facebook.com/sharer/sharer.php?u={{ secure_url('/') }}"></a> -->
                   <a sn="facebook" target="_blank" class="share-fb-02 floatleft-01 background-cover onClickSharePromise" href="javascript:void(0)" rel=""></a>
                    <a sn="twitter" target="_blank" class="share-tw-02 floatleft-01 background-cover" href="https://twitter.com/home?status={{ secure_url('/') }}"></a>
                    <a sn="tumblr" target="_blank" class="share-tb-02 floatleft-01 background-cover" href="http://www.tumblr.com/share/link?url=<?php echo urlencode(secure_url('/')); ?>&name=<?php echo urlencode('The fault in your stars'); ?>&description=<?php echo urlencode('DESCRIPTION') ?>"></a>
                    <a sn="pinterest" target="_blank" class="share-pin-02 floatleft-01 background-cover" href="https://pinterest.com/pin/create/button/?url={{ url('/img/logo-top.png') }}&media={{ url('/img/logo-top.png') }}&description="></a>
                </div>
                <div class="ornaments-01"></div>
            </div>
        </div>
    </div>
    <div class="steep-05 background-cover">
        <p class="text-01">It’s your promise. Make it extraordinary.</p>
        <!--<p class="text-03">I Promise to</p>
        <img src="{{ asset('img/arrow-promise.png') }}" class="promise-arrow"/>-->
        <form id="frm_edit_promise" action="{{ action('PromiseController@edit') }}" method="post">
            <input type="hidden" name="promise_id" id="edit_promise_id" />
            <p id="charactersEdit" class="max-characters">100</p>
            <textarea id="edit_mypromise_text" name="text"></textarea>
            <button class="submit-promise" id="btn_edit_promise">save it</button>
            <p class="alert" id="edit_alert"></p>
        </form>

        <script>
            $(function() {
                var input = $('#edit_mypromise_text'), display = $('#charactersEdit'), count = 0, limit = 100;

                count = input.val().length
                remaining = limit - count
                update(remaining);

                input.keyup(function(e) {
                    count = $(this).val().length;
                    remaining = limit - count;
                    update(remaining);
                });

                function update(count) {
                    var txt = ( Math.abs(count) === 1 ) ? count + '' :  count + ' '
                    display.html(txt);
                }

            });
        </script>

    </div>
</div>

<script>
window.fbAsyncInit = function() {
    FB.init({
        appId      : '{{ Config::get('packages/artdarek/oauth-4-laravel/config.consumers.Facebook.client_id') }}', // App ID
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        xfbml      : true  // parse XFBML
        });
        //check();
    };

    // Load the SDK Asynchronously
    (function(d){
    var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; js.async = true;
    js.src = "//connect.facebook.net/es_MX/all.js";
    d.getElementsByTagName('head')[0].appendChild(js);
}(document));
</script>