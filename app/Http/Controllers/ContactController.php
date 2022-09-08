<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\profile;

class ContactController extends Controller
{
    /*public function __construct()
    {
        // just admin to acess contacts pages
       $this->middleware('auth');
        $this->middleware('admin');
    }*/
    public function index(profile $profiles)
    {
        //show contact us page
        $profiles=profile::find(1);
       return view('messages.index',compact('profiles'));
    }
    public function store(Request $request)
    {
        //identify requied feild to insert to table contacts
        $validationData=$request->validate([
            'fullName' => 'string|required',
            'email'  => 'required',
            'message' => 'required',
            'captcha' => 'required|captcha'
        ],
            ['captcha.captcha'=>'کد امنیتی اشتباه است']
        );

        //insert data to contacts table
        Contact::create([
            'fullName' => $request->fullName,
            'email'  => $request->email,
            'message' => $request->message
        ]);

        return back()->with('message','با موفقیت ارسال شد');
    }
    public function show()
    {
        //show messages in cms
        $contacts=Contact::paginate(5);

        return view('messages.show-messages',compact('contacts'));
    }
    public function destroy(Contact $contact)
    {
        //delete messages
        $contact->delete();
        return back()->with('message','با موفقیت حدف شد');
    }
    public function refreshCaptcha(){
        return response()->json(['captcha'=> captcha_img()]);
    }
}
