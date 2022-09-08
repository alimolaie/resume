<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminTicket extends Model
{
    public $table="admin_ticket";
    public function member()
    {
        return $this->belongsTo(Member::class,'member_id');
    }
    public function admin()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function tikect()
    {
        return $this->belongsTo(Ticket::class,'ticket_id');
    }
}
