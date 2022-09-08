<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(5);

        return view('category.show',compact('categories'));
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'name'      => 'required|min:3|max:255|string',

        ]);

        Category::create($validatedData);
        return redirect("/admin")->with('message','دسته بندی با موفقیت ساخته شد');
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('message','با موفقیت حذف شد');
    }
}
