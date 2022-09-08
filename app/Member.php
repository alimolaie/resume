<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Member extends Authenticatable
{
    use Notifiable;
    protected $guard = 'member';
    public $table = "members";

    protected $fillable = [
        'first_name', 'last_name','user_name','email','phone', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function ticket()
    {
        return $this->hasMany('UserTiket');
    }
}
