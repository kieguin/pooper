<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = [
        'avatar',
        'profileUrl',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function getAvatar()
    {
        return 'https://www.gravatar.com/avatar/' . md5($this->email) . '?s=45&d=mm';
    }

    public function getAvatarAttribute()
    {
        return $this->getAvatar();
    }

    public function getProfileUrlAttribute()
    {
        return route('user.profile', $this);
    }

    public function getRouteKeyName()
    {
        return 'username';
    }
}
