<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PreweddingSilver;
use Auth;
class PreweddingSilverController extends Controller
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
        $page_title = "Prewedding Gold";

        $price_prewedding_silver = PreweddingSilver::where('status','!=',9)->get();

        return view('preweddingsilver',compact('page_title','price_prewedding_silver'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Packages";

        return view('adds.addpreweddingsilver',compact('page_title'));
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
        $price_prewedding_silver = new PreweddingSilver;
        $price_prewedding_silver->nama_layanan = $request->nama_layanan;
        $price_prewedding_silver->user_id = Auth::user()->id;
        $price_prewedding_silver->slug = $slug;
        $price_prewedding_silver->content = $request->content;
        $price_prewedding_silver->waktu = $request->waktu;
        $price_prewedding_silver->harga = $request->harga;
        $price_prewedding_silver->status = 1;

        $price_prewedding_silver->save();

        return redirect()->route('preweddingsilver.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = PreweddingSilver::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewpreweddingsilver',compact('data','page_title'));
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
        $data = PreweddingSilver::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editpreweddingsilver',compact('data','page_title'));
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
        $thispreweddingsilver = PreweddingSilver::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thispreweddingsilver){
            return redirect()->back()->with('msg','Packages not found');
        }
        else{
        //Validation
        $validatearray = [
            'nama_layanan' => 'required'
        ];

        $request->validate($validatearray);

        //Generate Slug
        if($request->nama_layanan != $thispreweddingsilver->nama_layanan){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thispackage100->slug;
        }

        //Update
        $thispreweddingsilver->update([
            'nama_layanan' => $request->nama_layanan,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
            'waktu' => $request ->waktu,
            'harga' => $request->harga
        ]);

        return redirect()->route('preweddingbronze.edit',$thispreweddingsilver->slug)->with('msg','Package updated');

        }
    }

    public function publish($slug){
        $price_prewedding_silver = PreweddingSilver::where('slug',$slug)->where('status','!=',9)->first();

        if($price_prewedding_silver){
            $price_prewedding_silver->update(['status' => 1]);
            return redirect()->back()->with('msg','Package succesully activated');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }

    }

    public function unpublish($slug){
        $price_prewedding_silver = PreweddingSilver::where('slug',$slug)->where('status','!=',9)->first();

        if($price_prewedding_silver){
            $price_prewedding_silver->update(['status' => 0]);
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
        $price_prewedding_silver = PreweddingSilver::where('slug',$slug)->where('status','!=',9)->first();

        if($price_prewedding_silver){
            $price_prewedding_silver->update(['status' => 9]);
            return redirect()->back()->with('msg','Package succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }
    }
}
