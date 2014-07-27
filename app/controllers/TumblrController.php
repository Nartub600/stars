<?php

class TumblrController extends BaseController {

    public function loginHandler() {
        $go     = Input::get('go');
        $token  = Input::get('oauth_token');
        $verify = Input::get('oauth_verifier');

        $tumblr = OAuth::consumer('Tumblr');

        if(!empty($token)) {
            $token = $tumblr->requestAccessToken($token, $verify);

            $result = json_decode($tumblr->request('user/info'));

            var_dump($result);
        } else if(!empty($go) && $go === 'go') {
            $token = $tumblrService->requestRequestToken();

            $url = $tumblrService->getAuthorizationUri(array('oauth_token' => $token->getRequestToken()));

            return Redirect::to((string) $url);
        } else {
            $url = $currentUri->getRelativeUri() . '?go=go';
            echo "<a href='$url'>Login with Tumblr!</a>";
        }
    }

}