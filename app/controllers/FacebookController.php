<?php

class FacebookController extends BaseController {

	public function loginHandler() {
		$facebook = OAuth::consumer('Facebook');

		$url = $facebook->getAuthorizationUri();

		return Redirect::to((string) $url);
	}

}