<?php
/**
 * Created by PhpStorm.
 * User: f-project
 * Date: 10/15/2017
 * Time: 3:00 PM
 */

namespace App\Instagram\Model;


class InstagramUserModel
{
    public $instagram_id;
    public $username;
    public $profile_picture;
    public $full_name;
    public $bio;
    public $website;
    public $is_business;
    public $media;
    public $followed_by;
    public $follows;


    public function toArray(){
        /*return array(
            "username" => $this->username,
            "profilePicture" => $this->profilePicture
        );*/

        return (array) $this;
    }

    public function initByJsonData($data){
        $this->instagram_id = $data["id"];
        $this->username = $data["username"];
        $this->profile_picture = $data["profile_picture"];
        $this->full_name = $data["full_name"];
        $this->bio = $data["bio"];
        $this->website = $data["website"];
        $this->is_business = $data["is_business"];

        $this->media = $data["counts"]["media"];
        $this->followed_by= $data["counts"]["followed_by"];
        $this->follows= $data["counts"]["follows"];

       /* $this->counts = (object)
        array(
            "media" => $data["counts"]["media"],
            "follows" => $data["counts"]["follows"],
            "followedBy" => $data["counts"]["followed_by"]
        );*/
    }
    }