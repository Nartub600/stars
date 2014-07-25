<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script>
            $(function(){
                $('#login_tumblr').on('click', function(e){
                    e.preventDefault();

                    $.ajax({
                        url: 'http://www.tumblr.com/oauth/request_token',
                        dataType: 'jsonp',
                        data: {
                            oauth_callback: $('#urly').val()
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
            <input type="hidden" id="urly" value="{{ url('/') }}" />
            <a href="#" id="login_tumblr">Login with Tumblr</a>
        </div>
    </body>
</html>