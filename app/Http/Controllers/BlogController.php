<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\profile;
class BlogController extends Controller
{

    public function index()
    {
        $blogs=blog::paginate(5);
        $blogRandom=blog::inRandomOrder()->limit(3)->get();
        return view('partials.blog',compact('blogs','blogRandom'));
    }


    public function create()
    {
        return view('blog.create');
    }


    public function store(Request $request)
    {
        //validation of blog feilds
        $this->validate($request, [
            'title' => 'max:255|required',
            'description' => 'required',
          'image_path' => 'mimes:png,jpg|max:10000'

            ]);
            $blogs=new blog();
            //upload image in storage directory and database
            if ($request->file('image_path')) {
                $imagePath = $request->file('image_path');
                $imageName = 'b-'.md5(time()).'.'.$request->image_path->getClientOriginalExtension();
                //set upload directory
                $path = $request->file('image_path')->storeAs('uploads', $imageName, 'public');
            }
            //indentify inputs to blog's table feilds
               $blogs->title=$request->input('title');
               $blogs->description=$request->input('description');
               $blogs->image_path = $imageName;
            //insert to database
            $blogs->save();
            return back()->with('message','با موفقیت ارسال شد');

    }


    public function show($id)
    {
        $blogs=blog::find($id);
        return view('blog.show',compact('blogs'));

    }


    public function edit($id)
    {
        $blogs=blog::find($id);
        return view('blog.edit',compact('blogs'));
    }


    public function update(Request $request,$id)
    {
        //find if of editable post
        $blogs=blog::find($id);
        //validation of blog feilds
        $this->validate($request, [
            'title' => 'max:255|required',
            'description' => 'required',
          'image_path' => 'mimes:png,jpg|max:10000'

            ]);
            //update image
            if ($request->file('image_path')) {
                $imagePath = $request->file('image_path');
                $imageName = 'b-'.md5(time()).'.'.$request->image_path->getClientOriginalExtension();
                //set upload directory
                $path = $request->file('image_path')->storeAs('uploads', $imageName, 'public');
            }
            //indentify inputs to blog's table feilds
               $blogs->title=$request->input('title');
               $blogs->description=$request->input('description');
               $blogs->image_path = $imageName;
            //insert to database
            $blogs->save();
            return redirect('admin/blog/posts')->with('message','با موفقیت به روز  شد');

    }


    public function destroy(blog $blog)
    {
        //delete post
        $blog->delete();
        return back()->with('message','پست مورد نظر با موفقیت پاک شد');
    }
    public function posts()
    {
        //show and action post in cms
        $blogs=blog::latest()->paginate(5);
        return view('blog.posts',compact('blogs'));
    }
}
