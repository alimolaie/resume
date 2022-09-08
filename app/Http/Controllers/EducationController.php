<?php

namespace App\Http\Controllers;

use App\education;
use Illuminate\Http\Request;

class EducationController extends Controller
{

    public function index()
    {
        $educations=education::paginate(5);
        return view('education.show',compact('educations'));
    }


    public function create()
    {
        return view('education.create');
    }


    public function store(Request $request)
    {
        //identify requied feild to insert to table contacts
        $validationData=$request->validate([
            'feild' => 'required',
            'university'  => 'required',
            'university_date' => 'required',
            'education_description' => 'required'
        ]);

        //insert data to contacts table
        education::create($validationData);

        return back()->with('message','با موفقیت ارسال شد');
    }


    public function edit($id)
    {
        $educations=education::find($id);
        return view('education.edit',compact('educations'));
    }

    public function update(Request $request,$id)
    {
        $educations=education::find($id);
        $validationData=$request->validate([
            'feild' => 'required',
            'university'  => 'required',
            'university_date' => 'required',
            'education_description' => 'required'
        ]);
        $educations->update($validationData);
        return back()->with('message','با موفقیت ارسال شد');
    }


    public function destroy(education $education)
    {
        $education->delete();
        return back()->with('message','پست مورد نظر با موفقیت پاک شد');
    }
}
