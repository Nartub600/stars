<?php

class ShareController extends BaseController {

	public function create() {
		Share::create(array(
			'promise_id' => Input::get('promise_id'),
			'social_network' => Input::get('social_network')
		));
	}

}