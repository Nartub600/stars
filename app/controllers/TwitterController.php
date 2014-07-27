<?php

class TwitterController extends BaseController {

    public function loginHandler() {
        $token  = Input::get('oauth_token');
        $verify = Input::get('oauth_verifier');

        $tw = OAuth::consumer('Twitter');

        if(!empty($token) && !empty($verify)) {
            $token = $tw->requestAccessToken($token, $verify);

            $result = json_decode($tw->request('account/verify_credentials.json'), true);

            var_dump($result)
        } else {
            $reqToken = $tw->requestRequestToken();

            $url = $tw->getAuthorizationUri(array(
                'oauth_token' => $reqToken->getRequestToken()
            ));

            return Redirect::to((string) $url);
        }
    }

}