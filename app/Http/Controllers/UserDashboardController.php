<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\UserTiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserDashboardController extends Controller
{
    public function index(){
        $member_id=Auth::guard('member')->id();
       // $userTicket=DB::table('tickets')->join('user_tikets','user_tikets.ticket_id','tickets.id')->select('tickets.*','user_tikets.title')->where('member_id',$member_id)->get();
       // $userTicket = DB::select('SELECT user_tikets.title FROM tickets INNER JOIN user_tikets ON user_tikets.ticket_id = tickets.id where member_id='.$member_id.'')->get();
        $userTicket=DB::table('tickets')->where('member_id',$member_id)->get();
        //return $userTicket;
        return view('user.dashboard',compact('userTicket'));
    }
}
