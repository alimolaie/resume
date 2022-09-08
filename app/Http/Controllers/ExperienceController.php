<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences=Experience::paginate(5);

        return view('experience.show',compact('experiences'));
    }
    public function create()
    {
        return view('experience.create');

    }


    public function store(Request $request)
    {
        //identify requied feild to insert to table contacts
        $validationData=$request->validate([
            'post' => 'required',
            'company_name'  => 'required',
            'experience_date' => 'required',
            'experience_description' => 'required'
        ]);

        //insert data to contacts table
        Experience::create($validationData);

        return back()->with('message','با موفقیت ارسال شد');
    }





    public function edit($id)
    {
        $experiences=Experience::find($id);
        return view('experience.edit',compact('experiences'));
    }


    public function update(Request $request,$id)
    {
        $experiences=Experience::find($id);
        $validationData=$request->validate([
            'post' => 'required',
            'company_name'  => 'required',
            'experience_date' => 'required',
            'experience_description' => 'required'
        ]);

        $experiences->update($validationData);
        return back()->with('message','با موفقیت ارسال شد');
    }


    public function destroy(Experience $experience)
    {
        $experience->delete();
        return back()->with('message','پست مورد نظر با موفقیت پاک شد');
    }
}
