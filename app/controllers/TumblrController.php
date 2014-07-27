<?php

class TumblrController extends BaseController {

    public function loginHandler() {
        $tumblr = OAuth::consumer('Tumblr');

        $reqToken = $tumblr->requestRequestToken();

        $url = $tumblr->getAuthorizationUri(array('oauth_token' => $reqToken->getRequestToken()));

        return Redirect::to((string) $url);
    }

}