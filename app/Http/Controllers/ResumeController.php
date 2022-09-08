<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\resume;

class ResumeController extends Controller
{
    public function createExperience()
    {
          return view('experience.create');
    }
    public function storeExperience(Request $request)
    {
        //identify requied feild to insert to table contacts
        $validationData=$request->validate([
            'post' => 'required',
            'company_name'  => 'required',
            'experience_date' => 'required',
            'experience_description' => 'required'
        ]);

        //insert data to contacts table
        resume::create($validationData);

        return back()->with('message','با موفقیت ارسال شد');
    }
    public function showExperience()
    {
        $experiences=resume::paginate(5);
        return view('experience.show',compact('experiences'));
    }
    public function editExperience($id)
    {
        $experiences=resume::find($id);
        return view('experience.edit',compact('experiences'));
    }
    public function updateExperience(Request $request,resume $experiences)
    {
        $validationData=$request->validate([
            'post' => 'required',
            'company_name'  => 'required',
            'experience_date' => 'required',
            'experience_description' => 'required'
        ]);

        $experiences->update($validationData);

    }
    public function destroyExperience(resume $experience)
    {
        $experience->delete();
        return back()->with('message','با موفقیت حدف شد');
    }
}
