<?php

namespace App\Http\Controllers;

use App\Portfolios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Morilog\Jalali\Jalalian;
class PortfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios=Portfolios::paginate(5);
        return view('portfolios.index',compact('portfolios'));
    }
    public function frontList(Request $request){
        $portfolios=Portfolios::paginate(3);
        if ($request->ajax()) {
            $html = '';

            foreach ($portfolios as $post) {
                $html.=' <div class="col-sm-6 col-lg-4 mix">

                    <div class="port-card">
                        <div class="port-img"><img src="uploads/portfiolos/'.$post->image.'" alt="portfolio" width="350" height="250"></div>
                        <div class="port-oly">
                            <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                            <div class="port-text">
                                <h6>'.$post->title.'</h6>
                            </div>
                        </div>
                    </div>

                </div>';
            }

            return $html;
        }
        $portfoliosLaravel=Portfolios::whereProject_type(1)->get();
        $portfoliosWordpress=Portfolios::whereProject_type(2)->get();
        return view('portfolios.front',compact('portfolios','portfoliosLaravel','portfoliosWordpress'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date=$request->input('date');
        $imageName="";
        if($request->hasfile('image')){
            $imageName = 'b-'.md5(time()).'.'.$request->image->getClientOriginalExtension();
            //set upload directory
            $request->image->move(public_path('uploads/portfiolos/'), $imageName);


        }
        if (isset($request->programming_tool_image) && count($request->programming_tool_image)) {
            foreach ($request->programming_tool_image as $programming_tool_image) {
                rename(public_path('uploads/junk/' . $programming_tool_image), public_path('uploads/portfiolos/tools'.$programming_tool_image));
            }
        }
        $file= new Portfolios();
        $file->title=$request->title;
        $file->programming_tool_image=$request->programming_tool_image? implode(",", $request->programming_tool_image):'';
        $file->link=$request->link;
        $file->description=$request->description;
        $file->feature=$request->feature;
        $file->image=$imageName;
        $file->project_type=$request->input('project_type');
        $file->date=Jalalian::fromFormat('Y-m-d', $date)->toCarbon();
        $file->save();
        return redirect()->route('portfolios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolios $portfolios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolios $portfolios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolios $portfolios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $port=Portfolios::find($id);
        $port->delete();
        return back();
    }
}
