<?php

class FacebookController extends BaseController {

	public function loginHandler() {
		$url = $fb->getAuthorizationUri();

		return Redirect::to((string) $url);
	}

}