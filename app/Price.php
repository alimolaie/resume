<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $guarded=['id'];

    public function project()
    {
        return $this->hasMany('App\Projects');
    }
}
