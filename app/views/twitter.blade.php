<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script>
            $(function(){
                $('#login_twitter').on('click', function(e){
                    e.preventDefault();
                    e.stopImmediatePropagation();

                    $.ajax({
                        url: 'https://dev.twitter.com/docs/api/1/post/oauth/request_token',
                        type: 'post',
                        // dataType: 'json',
                        // crossDomain: true,
                        data: {
                            oauth_callback: encodeURI($('#urly').val())
                        },
                        success: function(data) {
                            debugger;
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <div>
            <input type="hidden" id="urly" value="{{ url('twitter') }}" />
            <a href="#" id="login_twitter">Login with Twitter</a>
        </div>
    </body>
</html>