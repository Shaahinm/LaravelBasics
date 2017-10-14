<?php

namespace App\Instagram;

class Config {
    public static $urls = array(
        'self' => 'https://api.instagram.com/v1/users/self/',
        'username' => 'root',
    );
    public static function getValueByKey(String $key){
        return Config::$urls[$key];
    }
}
 