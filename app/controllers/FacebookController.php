<?php

class FacebookController extends BaseController {

    public function loginHandler() {
        $code = Input::get('code');

        $fb = OAuth::consumer('Facebook');

        if(!empty($code)) {
            $token = $fb->requestAccessToken($code);

            $result = json_decode($fb->request('/me'), true);

            $user = User::where(array(
                'social_network'    => 'facebook',
                'social_network_id' => $result['id']
            ))->first();

            if(!$user) {
                $user = User::create(array(
                    'social_network'    => 'facebook',
                    'social_network_id' => $result['id'],
                    'name'              => $result['name'],
                    // 'email'             => $result['email'],
                    'profile_picture'   => "http://graph.facebook.com/{$result['id']}/picture?type=normal"
                ));
            }

            File::put(public_path('profiles') . '/' . "{$user->id}.png", file_get_contents($user->profile_picture));

            Auth::login($user);
            Session::put('fb_user', $user->id);

            $view = View::make('tfios/closer');

            // $cookie = Cookie::forever('tfios_fb', $user->id);
            // return Response::make($view)->withCookie($cookie);

            return Response::make($view);
        } else {
            $url = $fb->getAuthorizationUri();

            return Redirect::to((string) $url . '&display=popup');
        }
    }

}