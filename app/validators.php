<?php

Validator::extend('swearing', function($attribute, $value, $parameters){
    $words = array_map(function($word){
        return strtolower(trim($word, '!?"()'));
    }, preg_split('/[\s,;\-\.]+/', $value, -1, PREG_SPLIT_NO_EMPTY));

    foreach($words as $word) {
        if(in_array($word, Config::get('tfios.swearing'))) {
            return false;
        }
    }

    return true;
});