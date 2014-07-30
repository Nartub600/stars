<?php

class FacebookController extends BaseController {

    public function loginHandler() {
        $code = Input::get('code');

        $fb = OAuth::consumer('Facebook');

        if(!empty($code)) {
            $token = $fb->requestAccessToken($code);

            $result = json_decode($fb->request('/me'), true);

            $user = User::where(array(
                'social_network' => 'facebook',
                'social_network_id' => $result['id']
            ))->first();

            if($user) {
                echo('Existent'); echo('<br>');
            } else {
                $user = User::create(array(
                    'social_network' => 'facebook',
                    'social_network_id' => $result['id'],
                    'name' => $result['name']
                ));
                echo('Just created'); echo('<br>');
            }

            echo("Facebook user: $user->social_network_id");
        } else {
            $url = $fb->getAuthorizationUri();

            return Redirect::to((string) $url);
        }
    }

}