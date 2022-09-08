<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserTiket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminTicketController extends Controller
{
    public function listOfTicket(){
        $tickts=UserTiket::with("member","tikect")->paginate(5);
        return view('admin-tiket.tikets',compact('tickts'));
    }
    public function show($id){
        $ticket=UserTiket::with("member","tikect")->find($id);
        return view('admin-tiket.viewTikets',compact('ticket'));
    }
    public function store(Request $request){
        $data=array();
        if (isset($request->tiket_files) && count($request->tiket_files)) {
            foreach ($request->tiket_files as $tiket_files) {
                rename(public_path('uploads/junk/' . $tiket_files), public_path('uploads/admin-ticket/'.$tiket_files));
            }
        }

        $data['description']=$request->description;
        $data['member_id']=$request->member_id;
        $data['user_id']=Auth::guard('web')->id();
        $data['tiket_files']=$request->tiket_files? implode(",", $request->tiket_files):'';
        $data['ticket_id']=$request->ticket_id;
        DB::table('admin_ticket')->insert($data);
        toastr()->success('با موفقیت ثبت شد');
        return back();
    }
}
