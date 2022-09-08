<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=['id'];


    public function works()
    {
        return $this->hasMany('App\works');
    }
    public function projects()
    {
        return $this->hasMany('App\Projects');
    }
}
