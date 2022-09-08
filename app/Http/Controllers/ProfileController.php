<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;
class ProfileController extends Controller
{

    public function create()
    {
        return view('profile.create');
    }
    public function store(Request $request)
    {
         //validation of profile feilds
         $this->validate($request, [
        'full_name' => 'max:255|required',
        'brith_day' => 'required',
        'profile_image' => 'mimes:png,jpg|max:10000',
        'address' => 'max:255|required',
        'facebook' => 'max:255',
        'twitter' => 'max:255',
        'instagram' => 'max:255',
        'linkedin' => 'max:255',
        'work' => 'max:255|required',
        'phone' => 'max:255|required',
        'email' => 'max:255|required',
        'resume_file' => 'mimes:pdf,docx,doc|max:10000',

            ]);
            $profile=new profile();
            //upload image in storage directory and database
 
	  $name = $request->file('profile_image')->getClientOriginalName();

        $path = $request->file('image')->move('uploads/profile', $name);            //upload resume file in storage directory and database
  $resume = $request->file('resume_file')->getClientOriginalName();

        $path2 = $request->file('resume_file')->move('uploads/resume', $name);            //indentify inputs to profile's table feilds
               $profile->full_name=$request->input('full_name');
               $profile->brith_day=$request->input('brith_day');
               $profile->address=$request->input('address');
               $profile->facebook=$request->input('facebook');
               $profile->twitter=$request->input('twitter');
               $profile->instagram=$request->input('instagram');
               $profile->linkedin=$request->input('linkedin');
               $profile->work=$request->input('work');
               $profile->phone=$request->input('phone');
               $profile->email=$request->input('email');

               $profile->profile_image = $name;
               $profile->resume_file = $resume;
            //insert to database
            $profile->save();
            return back()->with('message','با موفقیت ارسال شد');

    }
      public function edit()
      {
          $profile=profile::find(1);
          return view('profile.edit',compact('profile'));
      }
      public function update(Request $request)
      {
        $profile=profile::find(1);
        $this->validate($request, [
            'full_name' => 'max:255|required',
            'brith_day' => 'required',
            'profile_image' => 'mimes:png,jpg|max:10000',
            'address' => 'max:255|required',
            'facebook' => 'max:255',
            'twitter' => 'max:255',
            'instagram' => 'max:255',
            'linkedin' => 'max:255',
            'work' => 'max:255|required',
            'phone' => 'max:255|required',
            'email' => 'max:255|required',


         ]);
         //upload image in storage directory and database
         if ($request->file('profile_image')) {
            $imagePath = $request->file('profile_image');
            $imageName = 'b-'.md5(time()).'.'.$request->profile_image->getClientOriginalExtension();
            //set upload directory
            $path = $request->file('profile_image')->storeAs('uploads', $imageName, 'public');
        }
          //upload resume file in storage directory and database
          if ($request->file('resume_file')) {
            $filePath = $request->file('resume_file');
            $fileName = 'b-'.md5(time()).'.'.$request->resume_file->getClientOriginalExtension();
            //set upload directory
            $path = $request->file('resume_file')->storeAs('uploads', $fileName, 'public');
        }
        //indentify inputs to profile's table feilds
           $profile->full_name=$request->input('full_name');
           $profile->brith_day=$request->input('brith_day');
           $profile->address=$request->input('address');
           $profile->facebook=$request->input('facebook');
           $profile->twitter=$request->input('twitter');
           $profile->instagram=$request->input('instagram');
           $profile->linkedin=$request->input('linkedin');
           $profile->work=$request->input('work');
           $profile->phone=$request->input('phone');
           $profile->email=$request->input('email');

           $profile->profile_image = $imageName;
           $profile->resume_file = $fileName;
        //insert to database
        $profile->save();
        return back()->with('message','با موفقیت ارسال شد');

      }
}
