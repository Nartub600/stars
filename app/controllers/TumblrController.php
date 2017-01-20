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
                'name'           => $result['response']['user']['name']
            ))->first();

            if(!$user) {
                $user = User::create(array(
                    'social_network'  => 'tumblr',
                    'name'            => $result['response']['user']['name'],
                    'profile_picture' => "http://api.tumblr.com/v2/blog/{$result['response']['user']['name']}.tumblr.com/avatar/96"
                ));
            }

            File::put(public_path('profiles') . '/' . "{$user->id}.png", file_get_contents($user->profile_picture));

            Auth::login($user);
            Session::put('tb_user', $user->id);

            $view = View::make('tfios/closer');

            // $cookie = Cookie::forever('tfios_tb', $user->id);
            // return Response::make($view)->withCookie($cookie);

            return Response::make($view);
        } else {
            $token = $tumblr->requestRequestToken();

            $url = $tumblr->getAuthorizationUri(array('oauth_token' => $token->getRequestToken()));

            return Redirect::to((string) $url);
        }
    }

}