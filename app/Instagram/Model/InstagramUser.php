<?php
/**
 * Created by PhpStorm.
 * User: f-project
 * Date: 10/15/2017
 * Time: 3:00 PM
 */

namespace App\Instagram\Model;


class InstagramUser
{
    public $id;
    public $username;
    public $profilePicture;
    public $fullName;
    public $bio;
    public $website;
    public $isBusiness;
    public $counts;


    public function initByJsonData($data){
        $this->id = $data["id"];
        $this->username = $data["username"];
        $this->profilePicture = $data["profile_picture"];
        $this->fullName = $data["full_name"];
        $this->bio = $data["bio"];
        $this->website = $data["website"];
        $this->isBusiness = $data["is_business"];
        $this->counts = (object)
        array(
            "media" => $data["counts"]["media"],
            "follows" => $data["counts"]["follows"],
            "followedBy" => $data["counts"]["followed_by"]
        );
    }
    }