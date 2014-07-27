<?php

class TumblrController extends BaseController {

	public function loginHandler() {
		$tumblr = $tw = OAuth::consumer('Tumblr');
		var_dump($tumblr);
	}

}