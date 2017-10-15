<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{   
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'firstName', 'lastName', 'username', 'birthdate'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function instagramUsers() {
        return $this->hasMany('App\InstagramUser');
    }
}
