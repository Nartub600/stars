<?php

class TumblrController extends BaseController {

    public function loginHandler() {
        $go     = Input::get('go');
        $token  = Input::get('oauth_token');
        $verify = Input::get('oauth_verifier');

        $tumblr = OAuth::consumer('Tumblr');

        if(!empty($token)) {
            $token = $tumblr->requestAccessToken($token, $verify);

            $result = json_decode($tumblr->request('user/info'), true);

            $user = User::where(array(
                'social_network' => 'tumblr',
                'name' => $result['response']['user']['name']
            ))->first();

            if($user) {
                echo('Existent'); echo('<br>');
            } else {
                $user = User::create(array(
                    'social_network' => 'tumblr',
                    'name' => $result['response']['user']['name']
                ));
                echo('Just created'); echo('<br>');
            }

            echo("Tumblr user: $user->name");
        } else {
            $token = $tumblr->requestRequestToken();

            $url = $tumblr->getAuthorizationUri(array('oauth_token' => $token->getRequestToken()));

            return Redirect::to((string) $url);
        }
    }

}