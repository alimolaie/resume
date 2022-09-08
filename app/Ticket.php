<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public $table="tickets";
    public function tikect()
    {
        return $this->hasMany(UserTiket::class);
    }
    public function admin()
    {
        return $this->hasMany(User::class);
    }
}
