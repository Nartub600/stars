<?php

class TwitterController extends BaseController {

    public function loginHandler() {
        $go     = Input::get('go');
        $token  = Input::get('oauth_token');
        $verify = Input::get('oauth_verifier');

        $tw = OAuth::consumer('Twitter');

        if(!empty($token)) {
            $token = $tw->requestAccessToken($token, $verify);

            $result = json_decode($tw->request('account/verify_credentials.json'), true);

            var_dump($result);
        } else {
            $token = $tw->requestRequestToken();

            $url = $tw->getAuthorizationUri(array('oauth_token' => $token->getRequestToken()));

            return Redirect::to((string) $url);
        }
    }

}