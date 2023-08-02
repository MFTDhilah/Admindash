<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Package200;
use Auth;
class Package200Controller extends Controller
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
        $page_title = "Package 200";

        $price_package_200 = Package200::where('status','!=',9)->get();

        return view('package200',compact('page_title','price_package_200'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Packages";

        return view('adds.addpackage200',compact('page_title'));
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
        $price_package_200 = new Package200;
        $price_package_200->nama_layanan = $request->nama_layanan;
        $price_package_200->user_id = Auth::user()->id;
        $price_package_200->slug = $slug;
        $price_package_200->content = $request->content;
        $price_package_200->waktu = $request->waktu;
        $price_package_200->harga = $request->harga;
        $price_package_200->status = 1;

        $price_package_200->save();

        return redirect()->route('package200.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Package200::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewpackage200',compact('data','page_title'));
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
        $data = Package200::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editpackage200',compact('data','page_title'));
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
        $thispackage200 = Package200::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thispackage200){
            return redirect()->back()->with('msg','Packages not found');
        }
        else{
        //Validation
        $validatearray = [
            'name' => 'required'
        ];

        $request->validate($validatearray);

        //Generate Slug
        if($request->nama_layanan != $thispackage200->nama_layanan){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thispackage200->slug;
        }

        //Update
        $thispackage200->update([
            'nama_layanan' => $request->nama_layanan,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
            'waktu' => $request -> waktu,
            'harga' => $request->harga
        ]);

        return redirect()->route('package200.edit',$thispackage200->slug)->with('msg','Package updated');

        }
    }

    public function publish($slug){
        $price_package_200 = Package200::where('slug',$slug)->where('status','!=',9)->first();

        if($price_package_200){
            $price_package_200->update(['status' => 1]);
            return redirect()->back()->with('msg','Package succesully activated');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }

    }

    public function unpublish($slug){
        $price_package_200 = Package200::where('slug',$slug)->where('status','!=',9)->first();

        if($price_package_200){
            $price_package_200->update(['status' => 0]);
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
        $price_package_200 = Package200::where('slug',$slug)->where('status','!=',9)->first();

        if($price_package_200){
            $price_package_200->update(['status' => 9]);
            return redirect()->back()->with('msg','Package succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }
    }
}
