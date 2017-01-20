<?php

class TwitterController extends BaseController {

    public function loginHandler() {
        // $go     = Input::get('go');
        $token  = Input::get('oauth_token');
        $verify = Input::get('oauth_verifier');

        $tw = OAuth::consumer('Twitter');

        if(!empty($token)) {
            $token = $tw->requestAccessToken($token, $verify);

            $result = json_decode($tw->request('account/verify_credentials.json'), true);

            $user = User::where(array(
                'social_network'    => 'twitter',
                'social_network_id' => $result['id']
            ))->first();

            if(!$user) {
                $user = User::create(array(
                    'social_network'    => 'twitter',
                    'social_network_id' => $result['id'],
                    'name'              => $result['name'],
                    'profile_picture'   => $result['profile_image_url']
                ));
            } else {
                $user->profile_picture = $result['profile_image_url'];
                $user->save();
            }

            File::put(public_path('profiles') . '/' . "{$user->id}.png", file_get_contents($user->profile_picture));

            Auth::login($user);
            Session::put('tw_user', $user->id);

            $view = View::make('tfios/closer');

            // $cookie = Cookie::forever('tfios_tw', $user->id);
            // return Response::make($view)->withCookie($cookie);

            return Response::make($view);
        } else {
            $token = $tw->requestRequestToken();

            $url = $tw->getAuthorizationUri(array('oauth_token' => $token->getRequestToken()));

            return Redirect::to((string) $url);
        }
    }

}