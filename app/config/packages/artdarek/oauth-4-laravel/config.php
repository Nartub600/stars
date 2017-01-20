<?php

return array(

    'storage' => 'Session',

    'consumers' => array(

        'Facebook' => array(
            'client_id'     => Config::get('keys.Facebook.client_id'),
            'client_secret' => Config::get('keys.Facebook.client_secret'),
            'scope'         => Config::get('keys.Facebook.scope')
        ),

        'Twitter' => array(
            'client_id'     => Config::get('keys.Twitter.client_id'),
            'client_secret' => Config::get('keys.Twitter.client_secret')
        ),

        'Tumblr' => array(
            'client_id'     => Config::get('keys.Tumblr.client_id'),
            'client_secret' => Config::get('keys.Tumblr.client_secret')
        )
    )

);