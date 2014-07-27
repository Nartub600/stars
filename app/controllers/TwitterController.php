<?php

class TwitterController extends BaseController {

	public function loginHandler() {
		$twitter = $tw = OAuth::consumer('Twitter');
        $reqToken = $twitter->requestRequestToken();

        // get Authorization Uri sending the request token
        $url = $twitter->getAuthorizationUri(array('oauth_token' => $reqToken->getRequestToken()));

        // return to twitter login url
        return Redirect::to((string) $url);
	}

}