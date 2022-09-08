<?php

namespace App\Http\Controllers;

use App\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{

    public function create()
    {
        return view('header.create');
    }
    public function store(Request $request)
    {
        //validation of blog feilds
        $this->validate($request, [
            'welcome_message' => 'max:255|required',
            'title' => 'max:255|required',
            'description' => 'required',
          'image' => 'mimes:png,jpg|max:10000'

            ]);
            $headers=new Header();
            //upload image in storage directory and database
            if ($request->file('image')) {
                $imagePath = $request->file('image');
                $imageName = 'b-'.md5(time()).'.'.$request->image->getClientOriginalExtension();
                //set upload directory
                $path = $request->file('image')->storeAs('uploads', $imageName, 'public');
            }
            //indentify inputs to header's table feilds
            $headers->welcome_message=$request->input('welcome_message');
               $headers->title=$request->input('title');
               $headers->description=$request->input('description');
               $headers->image = $imageName;
            //insert to database
            $headers->save();
            return back()->with('message','با موفقیت ارسال شد');

    }
    public function edit()
    {
        $header=Header::find(1);
        return view('header.edit',compact('header'));
    }
    public function update(Request $request)
    {
        //find if of editable post
        $headers=Header::find(1);
        //validation of header feilds
        $this->validate($request, [
            'welcome_message' => 'max:255|required',
            'title' => 'max:255|required',
            'description' => 'required',
          'image' => 'mimes:png,jpg|max:10000'

            ]);
            //update image
            if ($request->file('image')) {
                $imagePath = $request->file('image');
                $imageName = 'b-'.md5(time()).'.'.$request->image->getClientOriginalExtension();
                //set upload directory
                $path = $request->file('image')->storeAs('uploads', $imageName, 'public');
            }
            //indentify inputs to header's table feilds
               $headers->title=$request->input('title');
               $headers->description=$request->input('description');
               $headers->image = $imageName;
            //insert to database
            $headers->save();
            return redirect('admin/header/edit')->with('message','با موفقیت به روز  شد');

    }
}
