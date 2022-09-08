<?php

namespace App\Http\Controllers;
use App\AdminTicket;
use App\Ticket;
use App\UserTiket;
use Brian2694\Toastr\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserTiketController extends Controller
{
    public function index(){
        $member_id=Auth::id();
        $tiket=UserTiket::with("member")->where('member_id',$member_id)->first();
        return view('user.sendTicket',compact('tiket'));
    }
    public function store(Request $request){
        $data=array();
        $section=$request->input('section');

        if (isset($request->tiket_files) && count($request->tiket_files)) {
            foreach ($request->tiket_files as $tiket_files) {
                rename(public_path('uploads/junk/' . $tiket_files), public_path('uploads/tickets/'.$tiket_files));
            }
        }
        $ticket=new Ticket();
        $ticket->section=$section;
        $ticket->title=$request->title;
        $ticket->priority=$request->priority;
        $ticket->member_id=$request->input('user');
        $ticket->save();
        $data['description']=$request->description;
        $data['member_id']=$request->member_id;
        $data['tiket_files']=$request->tiket_files? implode(",", $request->tiket_files):'';
        $data['ticket_id']=$ticket->id;
        DB::table('user_tikets')->insert($data);
        toastr()->success('با موفقیت ثبت شد');
        return back();
    }
    public function ViewTicket($id){
        $member_id=Auth::guard('member')->id();
        $ticketId=UserTiket::where('ticket_id',$id);
        $adminTicket=AdminTicket::with("member","admin","tikect")->where('ticket_id',$id)->where('member_id',$member_id)->get();
       // $ticket=DB::table('user_tikets')->join('tickets','user_tikets.ticket_id','tickets.id')->join('members','user_tikets.member_id','members.id')->select('user_tikets.*','tickets.section','tickets.title','tickets.priority','members.first_name','members.last_name')->where('ticket_id',$id)->get();
        $ticket=UserTiket::with("member","tikect")->where('ticket_id',$id)->where('member_id',$member_id)->get();
        $ticket2=Ticket::find($id);
        return view('user.showTicket',compact('ticket','adminTicket','ticket2'));

    }
    public function storeViewTicket(Request $request){
        $data=array();

        if (isset($request->tiket_files) && count($request->tiket_files)) {
            foreach ($request->tiket_files as $tiket_files) {
                rename(public_path('uploads/junk/' . $tiket_files), public_path('uploads/tickets/'.$tiket_files));
            }
        }
        $data['description']=$request->description;
        $data['member_id']=$request->member_id;
        $data['tiket_files']=$request->tiket_files? implode(",", $request->tiket_files):'';
        $data['ticket_id']=$request->ticket_id;
        DB::table('user_tikets')->insert($data);
        return back()->with('message','با موفقیت ثبت شد');
    }

}
