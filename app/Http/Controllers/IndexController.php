<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\profile;
use App\Experience;
use App\works;
use App\blog;
class IndexController extends Controller
{
    public function index()
    {
        $headers=Header::find(1);
        $profile=profile::find(1);
        $experiences=Experience::all();
        $works=works::select("*")->take(3)->get();
        $blogs=blog::select("*")->take(3)->get();
        return view('partials.index',compact('headers','profile','experiences','works','blogs'));
    }
}
