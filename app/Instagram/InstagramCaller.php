<?php

namespace App\Instagram;

use App\Instagram\Config;
use GuzzleHttp\Client;



class InstagramCaller
{
    protected $token;
    

    public function __construct($token)
    {
        $this->token = $token;
    }
    protected function url($key){
        return Config::getUrlByKey($key);
    }
    protected function attachToken($url, $position){
        if($position){
            return $url."?access_token=".$this->token;
        }
        else{
            return $url."&access_token=".$this->token;
        }
    }
    protected function get($path){
        $client = new Client();
        return $client->request('GET', ."?"."access_token=".$this->token);
    }


    public function self()
    {
        $url = $this->attachToken($this->url("self"), true);
        return $this-> get($url);
    }
    public function mediaById($mediaId){
        $url = $this->attachToken($this->url("media_id".$mediaId), true);
        return $this-> get($url);
    }
}
