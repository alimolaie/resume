<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class works extends Model
{
    protected $guarded=['id'];

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
