<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;
class PriceController extends Controller
{
    public function index()
    {
        $prices=Price::paginate(10);
        return view('price.show',compact('prices'));
    }
    public function create()
    {
        return view('price.craete');
    }
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'prices'      => 'required|min:3|max:255|string',

        ]);

        Price::create($validatedData);
        return redirect("/admin")->with('message','قیمت با موفقیت درج شد');
    }
    public function destroy(Price $price)
    {
        $price->delete();
        return back()->with('message','با موفقیت حذف شد');
    }
}
