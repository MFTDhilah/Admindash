<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ServicesHair;
use Auth;
class ServicesHairController extends Controller
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
        $page_title = "Hair Treatment";

        $price_hair = ServicesHair::where('status','!=',9)->get();

        return view('serviceshair',compact('page_title','price_hair'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Services";

        return view('adds.addserviceshair',compact('page_title'));
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
        $price_hair = new ServicesHair;
        $price_hair->nama_layanan = $request->nama_layanan;
        $price_hair->user_id = Auth::user()->id;
        $price_hair->slug = $slug;
        $price_hair->content = $request->content;
        $price_hair->waktu = $request->waktu;
        $price_hair->harga = $request->harga;
        $price_hair->status = 1;

        $price_hair->save();

        return redirect()->route('serviceshair.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = ServicesHair::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewserviceshair',compact('data','page_title'));
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
        $data = ServicesHair::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editserviceshair',compact('data','page_title'));
        }
        else{
            return redirect()->back()->with('msg','Packages not found');
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
        $thisservicehair = ServicesHair::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thisservicehair){
            return redirect()->back()->with('msg','Packages not found');
        }
        else{
        //Validation
        $validatearray = [
            'name' => 'required'
        ];

        $request->validate($validatearray);

        //Generate Slug
        if($request->nama_layanan != $thisserviceshair->nama_layanan){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thisserviceshair->slug;
        }

        //Update
        $thisserviceshair->update([
            'nama_layanan' => $request->nama_layanan,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
            'waktu' => $request -> waktu,
            'harga' => $request->harga
        ]);

        return redirect()->route('serviceshair.edit',$thisserviceshair->slug)->with('msg','Package updated');

        }
    }

    public function publish($slug){
        $price_hair = ServicesHair::where('slug',$slug)->where('status','!=',9)->first();

        if($price_hair){
            $price_hair->update(['status' => 1]);
            return redirect()->back()->with('msg','Package succesully activated');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }

    }

    public function unpublish($slug){
        $price_hair = PackageHair::where('slug',$slug)->where('status','!=',9)->first();

        if($price_hair){
            $price_hair->update(['status' => 0]);
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
        $price_hair = PackageHair::where('slug',$slug)->where('status','!=',9)->first();

        if($price_hair){
            $price_hair->update(['status' => 9]);
            return redirect()->back()->with('msg','Package succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }
    }
}
