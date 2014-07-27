<?php

class FacebookController extends BaseController {

    public function loginHandler() {
        $code = Input::get('code');

        $fb = OAuth::consumer('Facebook');

        if(!empty($code)) {
            $token = $fb->requestAccessToken($code);

            $result = json_decode($fb->request('/me'), true);

            var_dump($result);
        } else {
            $url = $fb->getAuthorizationUri();

            return Redirect::to((string) $url);
        }
    }

}