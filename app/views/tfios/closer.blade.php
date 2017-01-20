<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script>
            $(function(){
                switch($('#social_network').val()) {
                    case 'facebook':
                        $('.fb-connect', window.opener.document).addClass('off');
                        $('#fb_user', window.opener.document).val($('#actual_user_id').val());
                        $('#frm_promise_social_network', window.opener.document).val('facebook');
                        if($('#has_promise').val() == 'yes') {
                            $('.fb-post', window.opener.document).removeClass('off').attr('promise_id', $('#actual_promise_id').val());
                        }
                        break;
                    case 'twitter':
                        $('.tw-connect', window.opener.document).addClass('off');
                        $('#tw_user', window.opener.document).val($('#actual_user_id').val());
                        $('#frm_promise_social_network', window.opener.document).val('twitter');
                        if($('#has_promise').val() == 'yes') {
                            $('.tw-post', window.opener.document).removeClass('off').attr('promise_id', $('#actual_promise_id').val());
                        }
                        break;
                    case 'tumblr':
                        $('.tb-connect', window.opener.document).addClass('off');
                        $('#tb_user', window.opener.document).val($('#actual_user_id').val());
                        $('#frm_promise_social_network', window.opener.document).val('tumblr');
                        if($('#has_promise').val() == 'yes') {
                            $('.tb-post', window.opener.document).removeClass('off').attr('promise_id', $('#actual_promise_id').val());
                        }
                        break;
                }

                if($('#has_promise').val() == 'yes') {
                    $('.login', window.opener.document).hide();
                    $('.black', window.opener.document).hide();
                    $('#promise_after_login', window.opener.document).val($('#actual_promise_id').val());
                } else {
                    $('.steep-01', window.opener.document).hide();
                    $('.steep-02', window.opener.document).show();
                }

                $('#img_profile_picture', window.opener.document).attr('src', $('#url_profile_picture').val());

                window.close();
            });
        </script>
    </head>
    <body>
        <input type="hidden" id="social_network" value="{{ Auth::user()->social_network }}" />
        <input type="hidden" id="has_promise" value="{{ Auth::user()->promise ? 'yes' : 'no' }}" />
        <input type="hidden" id="actual_user_id" value="{{ Auth::user()->id }}" />
        <input type="hidden" id="actual_promise_id" value="{{ Auth::user()->promise ? Auth::user()->promise->id : '' }}" />
        <input type="hidden" id="url_profile_picture" value="{{ asset('profiles') . '/' . Auth::user()->id . '.png' }}" />
    </body>
</html>