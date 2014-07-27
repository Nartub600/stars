<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    </head>
    <body>
        <div>
            <form action="https://api.twitter.com/oauth/request_token" method="post">
                <input type="hidden" name="oauth_callback" value="{{ url('twitter_post') }}" />
                <input type="hidden" name="oauth_consumer_key" value="T5QFxSTXERt4p2LxhOEvzqXEd" />
                <input type="hidden" name="oauth_nonce" value="T5QFxSTXERt4p2LxhOEvzqXEd" />
                <input type="hidden" name="oauth_signature" value="T5QFxSTXERt4p2LxhOEvzqXEd" />
                <input type="hidden" name="oauth_signature_method" value="T5QFxSTXERt4p2LxhOEvzqXEd" />
                <input type="hidden" name="oauth_timestamp" value="T5QFxSTXERt4p2LxhOEvzqXEd" />

                <input type="submit" value="Login with Twitter" />
            </form>
        </div>
    </body>
</html>