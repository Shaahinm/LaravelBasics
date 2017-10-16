<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstagramUser extends Model
{
    //

    protected $fillable = ['username', 'profile_picture', 'full_name', 'bio', 'website', 'is_business', 'media', 'follows', 'followed_by', 'instagram_id'];

    public function user()
    {
        return $this->hasOne('App\User');

    }
}
