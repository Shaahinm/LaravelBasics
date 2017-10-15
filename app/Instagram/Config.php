<?php

namespace App\Instagram;

class Config {
    public static $urls = array(
        'self' => 'https://api.instagram.com/v1/users/self/',
        'media_id' => 'https://api.instagram.com/v1/media/',
    );
    public static function getUrlByKey(String $key){
        return Config::$urls[$key];
    }
}
 