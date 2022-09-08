<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use Image;
class SkillController extends Controller
{



    public function create()
    {
        return view('skills.create');
    }


    public function store(Request $request)
    {
        //validation of skill feilds
        $this->validate($request, [
            'title' => 'max:255|required',
          'image' => 'mimes:png,jpg|max:10000'

            ]);

            //upload image in storage directory and database
            $imageName="";
		if($request->hasfile('image')){
		$imageName = 'b-'.md5(time()).'.'.$request->image->getClientOriginalExtension();
                //set upload directory
                $request->image->move(public_path('uploads/'), $imageName);

                
            }
            $skills=new Skill;
            //indentify inputs to skill's table feilds
               $skills->title=$request->input('title');
               $skills->image = $imageName;
            //insert to database
            $skills->save();
            return back()->with('message','با موفقیت ارسال شد');
    }


    public function index()
    {
        $skills=Skill::paginate(6);
        return view('skills.show',compact('skills'));
    }


    public function edit($id)
    {
        $skill=Skill::find($id);
        return view('skills.edit',compact('skill'));
    }


    public function update(Request $request,$id)
    {
         //find if of editable post
         $skills=Skill::find($id);
         //validation of skill feilds
         $this->validate($request, [
             'title' => 'max:255|required',
           'image' => 'mimes:png,jpg|max:10000'

             ]);
             //update image
             if ($request->file('image')) {
                 $imagePath = $request->file('image');
                 $imageName = 'b-'.md5(time()).'.'.$request->image->getClientOriginalExtension();
                 //set upload directory
                 $path = $request->file('image')->storeAs('uploads', $imageName, 'public');
             }
             //indentify inputs to skill's table feilds
                $skills->title=$request->input('title');
                $skills->description=$request->input('description');
                $skills->image = $imageName;
             //insert to database
             $skills->save();
             return back()->with('message','با موفقیت به روز  شد');
    }


    public function destroy(Skill $skill)
    {
        $skill->delete();

        return back()->with('message','با موفقیت حذف شد');
    }
}
