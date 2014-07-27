<?php

class TumblrController extends BaseController {

    public function loginHandler() {
        $tumblr = $tw = OAuth::consumer('Tumblr');
        $token = $tumblr->requestRequestToken();

        $url = $tumblr->getAuthorizationUri(array('oauth_token' => $token->getRequestToken()));

        return Redirect::to((string) $url);
    }

}