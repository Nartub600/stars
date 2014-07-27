<?php

class TwitterController extends BaseController {

	public function loginHandler() {
		$twitter = OAuth::consumer('Twitter');

        $reqToken = $twitter->requestRequestToken();

        $url = $twitter->getAuthorizationUri(array('oauth_token' => $reqToken->getRequestToken()));

        return Redirect::to((string) $url);
	}

}