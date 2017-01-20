<?php

class Helpers {

	public static function shorten_url($url) {
		$data = array('longUrl' => $url);
		$data_string = json_encode($data);

		$ch = curl_init('https://www.googleapis.com/urlshortener/v1/url');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json',
		    'Content-Length: ' . strlen($data_string))
		);

		$result = json_decode(curl_exec($ch));

		return $result->id;
	}

}