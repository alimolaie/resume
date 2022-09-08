<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Price;
use App\Category;
class ProjectController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $prices=Price::all();
        return view('project.index',compact('categories','prices'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'max:255|required',
            'description' => 'required',
            'day' => 'max:255|required',
            'category_id'   => 'required|numeric',
            'price_id'   => 'required|numeric',
            ]);
            Project::create([
                'title' => $request->title,
                'description' => $request->description,
                'day' => $request->day,
                'category_id' => $request->category_id,
                'price_id' => $request->price_id,
            ]);

            return back()->with('message','با موفقیت ارسال شد');
    }
      public function show()
      {
        $projects=Project::with("category","price")->latest()->paginate(5);
        return view('project.show-projects',compact('projects'));
      }
      public function destroy(Project $project)
      {
        $project->delete();
        return back();
      }
}
