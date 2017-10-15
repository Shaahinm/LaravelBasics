<?php

namespace App\Instagram;

use App\Instagram\Config;
use GuzzleHttp\Client;



class InstagramCaller
{
    protected $token;
    

    public function __construct(String $token)
    {
        $this->token = $token;
    }

    protected function client($path){
        $client = new Client();
        return $client->request('GET', Config::getValueByKey($path)."?"."access_token=".$this->token);
    }

    public function self()
    {
        return $this-> client("self");
    }
}
