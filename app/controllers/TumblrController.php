<?php

class TumblrController extends BaseController {

    public function loginHandler() {
        $token  = Input::get('oauth_token');
        $verify = Input::get('oauth_verifier');

        $tumblr = OAuth::consumer('Tumblr');

        if(!empty($token) && !empty($verify)) {
            $token = $tumblr->requestAccessToken($token, $verify);

            $result = json_decode($tumblr->request('account/verify_credentials.json'), true);

            var_dump($result);
        } else {
            $reqToken = $tumblr->requestRequestToken();

            $url = $tumblr->getAuthorizationUri(array(
                'oauth_token' => $reqToken->getRequestToken()
            ));

            return Redirect::to((string) $url);
        }
    }

}