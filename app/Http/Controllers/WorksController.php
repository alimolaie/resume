<?php

namespace App\Http\Controllers;

use App\works;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorksController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        $categories = Category::all();
        return view('works.create',compact('categories'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'max:255|required',
            'descrition' => 'required',
          'image' => 'mimes:png,jpg|max:10000',
          'items' => 'required',
          'category_details' => 'max:255|required',
          'release_date' => 'max:255|required',
          'company_name' => 'max:255|required',
          'category_id'   => 'required|numeric',

            ]);

                $works=new works();
                if ($request->file('image')) {
                    $imagePath = $request->file('image');
                    $imageName = 'b-'.md5(time()).'.'.$request->image->getClientOriginalExtension();
                    $path = $request->file('image')->storeAs(
                        'works', $imageName
                    );
                    //Storage::putFile('works', $request->file('image'));
                    //$path = $request->file('image')->store('works');

                    //set upload directory
                   // $path = $request->file('image')->storeAs('works', $imageName, 'public');
                }
            //indentify inputs to blog's table feilds
               $works->title=$request->input('title');
               $works->descrition=$request->input('descrition');
               $works->items=$request->input('items');
               $works->category_details=$request->input('category_details');
               $works->release_date=$request->input('release_date');
               $works->company_name=$request->input('company_name');
               $works->category_id=$request->input('category_id');
               $works->image = $imageName;
            //insert to database
            $works->save();

            return back()->with('message','با موفقیت ارسال شد');
    }


    public function show(works $works)
    {
        //
    }


    public function edit(works $works)
    {
        //
    }


    public function update(Request $request, works $works)
    {
        //
    }


    public function destroy(works $works)
    {
        //
    }

    public function works()
    {
        $works=works::with("category")->paginate(5);
        return view('works.works',compact('works'));
    }
}
