<html>
    <head>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="{{ asset('js/jquery.form.min.js') }}"></script>
        <script>
        $(function(){
            $('#btn_login').one('click', login_handler);

            function login_handler(e) {
                e.preventDefault();

                $('#btn_login').on('click', function(e){
                    e.preventDefault();
                });

                $('#frm_login').ajaxSubmit({
                    success: function(data) {
                        if(data.status == 'ok') {
                            window.location = data.route;
                        } else {
                            alert(data.message);
                        }
                    },
                    complete: function() {
                        $('#btn_login').one('click', login_handler);
                    }
                });
            }
        });
        </script>
    </head>
    <body>
        <h2>TFIOS Administration</h2>
        <form id="frm_login" action="{{ action('AdminController@login') }}" method="post">
            <label for="user">User:</label>
            <input type="text" name="user" />

            <label for="password">Password:</label>
            <input type="password" name="password" />

            <input id="btn_login" type="submit" value="Login" />
        </form>
    </body>
</html>