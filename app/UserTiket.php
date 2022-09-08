<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTiket extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class,'member_id');
    }
    public function tikect()
    {
        return $this->belongsTo(Ticket::class,'ticket_id');
    }
}
