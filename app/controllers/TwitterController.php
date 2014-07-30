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

            $user = User::where(array(
                'social_network' => 'twitter',
                'social_network_id' => $result['id']
            ))->first();

            if($user) {
                echo('Existent'); echo('<br>');
            } else {
                $user = User::create(array(
                    'social_network' => 'twitter',
                    'social_network_id' => $result['id'],
                    'name' => $result['name']
                ));
                echo('Just created'); echo('<br>');
            }

            echo("Twitter user: $user->social_network_id");
        } else {
            $token = $tw->requestRequestToken();

            $url = $tw->getAuthorizationUri(array('oauth_token' => $token->getRequestToken()));

            return Redirect::to((string) $url);
        }
    }

}