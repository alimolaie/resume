<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded=['id'];

    public function category() {
        return $this->belongsTo('App\Category');
    }


    public function price() {
        return $this->belongsTo('App\Price');
    }
}
