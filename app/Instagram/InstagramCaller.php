<?php

namespace App\Instagram;

use App\Instagram\Config;
use App\Instagram\Model\InstagramUser;
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
        return $client->request('GET', $path);
    }

    protected function convertBodyToJson($data){
        return \GuzzleHttp\json_decode($data->getBody(), true);
    }

    public function self()
    {
        $url = $this->attachToken($this->url("self"), true);
        $instagramUser = new InstagramUser();
        $instagramUser->initByJsonData($this->convertBodyToJson($this->get($url))["data"]);
        return $instagramUser;
    }
    public function mediaById($mediaId){
        $url = $this->attachToken($this->url("media_id".$mediaId), true);
        return $this-> get($url);
    }
}
