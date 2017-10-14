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

    public function self()
    {
        $client = new Client();
        $res = $client->request('GET', Config::getValueByKey("self")."?"."access_token=".$this->token);
        return $res;
    }
}
