<?php

class TwitterController extends BaseController {

	public function loginHandler() {
		$tw = OAuth::consumer('Twitter');

        $reqToken = $tw->requestRequestToken();

        $url = $tw->getAuthorizationUri(array(
        	'oauth_token' => $reqToken->getRequestToken(),
        	'oauth_callback' => url('regreso')
    	));

        return Redirect::to((string) $url);
	}

}