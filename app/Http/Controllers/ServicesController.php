<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use Auth;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Services";

        $services = Services::where('status','!=',9)->get();

        return view('services',compact('page_title','services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Services";

        return view('adds.addservice',compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $validatearray = [
            'name' => 'required'
        ];

        $request->validate($validatearray);

        //Generate Slug
        $slug = str()->slug($request->name."-".time());

        //Create Post
        $service = new Services;
        $service->name = $request->name;
        $service->user_id = Auth::user()->id;
        $service->slug = $slug;
        $service->content = $request->content;
        $service->status = 1;
        $service->price = $request->price;
        $service->save();

        return redirect()->route('services.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Services::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewservice',compact('data','page_title'));
        }
        else{
            return redirect()->back()->with('msg','Service not found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data = Services::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editservice',compact('data','page_title'));
        }
        else{
            return redirect()->back()->with('msg','Post not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $thisservice = Services::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thisservice){
            return redirect()->back()->with('msg','Services not found');
        }
        else{
        //Validation
        $validatearray = [
            'name' => 'required'
        ];

        $request->validate($validatearray);

        //Generate Slug
        if($request->name != $thisservice->name){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thisservice->slug;
        }

        //Update
        $thisservice->update([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
            'price' => $request->price
        ]);

        return redirect()->route('services.edit',$thisservice->slug)->with('msg','Service updated');

        }
    }

    public function publish($slug){
        $service = Services::where('slug',$slug)->where('status','!=',9)->first();

        if($service){
            $service->update(['status' => 1]);
            return redirect()->back()->with('msg','Service succesfully activated');
        }
        else{
            return redirect()->back()->with('msg','Service not found');
        }

    }

    public function unpublish($slug){
        $service = Services::where('slug',$slug)->where('status','!=',9)->first();

        if($service){
            $service->update(['status' => 0]);
            return redirect()->back()->with('msg','Service succesfully deactivated');
        }
        else{
            return redirect()->back()->with('msg','Service not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $service = Services::where('slug',$slug)->where('status','!=',9)->first();

        if($service){
            $service->update(['status' => 9]);
            return redirect()->back()->with('msg','Service succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Service not found');
        }
    }
}
