<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    </head>
    <body>
        <div>
            <form action="https://dev.twitter.com/docs/api/1/post/oauth/request_token" method="post">
                <input type="hidden" name="oauth_callback" value="{{ url('twitter_post') }}" />
                <input type="submit" value="Login with Twitter" />
            </form>
        </div>
    </body>
</html>