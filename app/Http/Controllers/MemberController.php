<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function register(){
        return view('user.register');
    }
    public function store(Request $request){
        $member=new Member();
        $member->first_name=$request->input('first_name');
        $member->last_name=$request->input('last_name');
        $member->user_name=$request->input('user_name');
        $member->email=$request->input('email');
        $member->password=bcrypt($request->input('password'));
        $member->phone=$request->input('phone');
        $member->save();
        return back()->with('message','ثبت نام با موفقیت انجام شد');
    }
    public function login(){
        return view('user.login');
    }
    private function validator(Request $request){
        //validation rules.
        $rules = [
            'user_name'    => 'required|user_name|exists:members|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];

        //custom validation error messages.
        $messages = [
            'user_name.exists' => 'نام کاربری وجود ندارد',
        ];

        //validate the request.
        $request->validate($rules,$messages);
    }
    private function loginFailed(){
    //  $error=toastr()->error('ورود با خطا مواجه شد لطفا دوباره تلاش کنید', ['timeOut' => 5000]);
        return "login feild";


    }

    public function loginPost(Request $request){
    //    $this->validator($request);

        if(Auth::guard('member')->attempt($request->only('user_name','password'),$request->filled('remember'))){
            //Authentication passed...
            toastr()->success('ورود با موفیت انجام شد.خوش آمدید');
            return redirect()
                ->intended(route('dashboard.member'));

        }

        //Authentication failed...
        return $this->loginFailed();
    }
}
