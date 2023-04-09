<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Package150;
use Auth;
class Package150Controller extends Controller
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
        $page_title = "Package 150";

        $price_package_150 = Package150::where('status','!=',9)->get();

        return view('package150',compact('page_title','price_package_150'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Packages";

        return view('adds.addpackage150',compact('page_title'));
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
            'nama_layanan' => 'required'
        ];

        $request->validate($validatearray);

        //Generate Slug
        $slug = str()->slug($request->name."-".time());

        //Create Post
        $price_package_150 = new Package150;
        $price_package_150->nama_layanan = $request->nama_layanan;
        $price_package_150->user_id = Auth::user()->id;
        $price_package_150->slug = $slug;
        $price_package_150->content = $request->content;
        $price_package_150->waktu = $request->waktu;
        $price_package_150->harga = $request->harga;
        $price_package_150->status = 1;

        $price_package_150->save();

        return redirect()->route('package150.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Package150::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewpackage150',compact('data','page_title'));
        }
        else{
            return redirect()->back()->with('msg','Package not found');
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
        $data = Package150::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editpackage150',compact('data','page_title'));
        }
        else{
            return redirect()->back()->with('msg','Package not found');
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
        $thispackage150 = Package150::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thispackage150){
            return redirect()->back()->with('msg','Packages not found');
        }
        else{
        //Validation
        $validatearray = [
            'name' => 'required'
        ];

        $request->validate($validatearray);

        //Generate Slug
        if($request->nama_layanan != $thispackage150->nama_layanan){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thispackage150->slug;
        }

        //Update
        $thispackage150->update([
            'nama_layanan' => $request->nama_layanan,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
            'waktu' => $request -> waktu,
            'harga' => $request->harga
        ]);

        return redirect()->route('package150.edit',$thispackage150->slug)->with('msg','Package updated');

        }
    }

    public function publish($slug){
        $price_package_150 = Package150::where('slug',$slug)->where('status','!=',9)->first();

        if($price_package_150){
            $price_package_150->update(['status' => 1]);
            return redirect()->back()->with('msg','Package succesully activated');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }

    }

    public function unpublish($slug){
        $price_package_150 = Package150::where('slug',$slug)->where('status','!=',9)->first();

        if($price_package_150){
            $price_package_150->update(['status' => 0]);
            return redirect()->back()->with('msg','Package succesully deactivated');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
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
        $price_package_150 = Package150::where('slug',$slug)->where('status','!=',9)->first();

        if($price_package_150){
            $price_package_150->update(['status' => 9]);
            return redirect()->back()->with('msg','Package succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }
    }
}
