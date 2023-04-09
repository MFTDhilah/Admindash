<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PreweddingBronze;
use Auth;
class PreweddingBronzeController extends Controller
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
        $page_title = "Prewedding Bronze";

        $price_prewedding_bronze = PreweddingBronze::where('status','!=',9)->get();

        return view('preweddingbronze',compact('page_title','price_prewedding_bronze'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Packages";

        return view('adds.addpreweddingbronze',compact('page_title'));
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
        $price_prewedding_bronze = new PreweddingBronze;
        $price_prewedding_bronze->nama_layanan = $request->nama_layanan;
        $price_prewedding_bronze->user_id = Auth::user()->id;
        $price_prewedding_bronze->slug = $slug;
        $price_prewedding_bronze->content = $request->content;
        $price_prewedding_bronze->waktu = $request->waktu;
        $price_prewedding_bronze->harga = $request->harga;
        $price_prewedding_bronze->status = 1;

        $price_prewedding_bronze->save();

        return redirect()->route('preweddingbronze.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = PreweddingBronze::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewpreweddingbronze',compact('data','page_title'));
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
        $data = PreweddingBronze::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editpreweddingbronze',compact('data','page_title'));
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
        $thispreweddingbronze = PreweddingBronze::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thispreweddingbronze){
            return redirect()->back()->with('msg','Packages not found');
        }
        else{
        //Validation
        $validatearray = [
            'nama_layanan' => 'required'
        ];

        $request->validate($validatearray);

        //Generate Slug
        if($request->nama_layanan != $thispreweddingbronze->nama_layanan){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thispackage100->slug;
        }

        //Update
        $thispreweddingbronze->update([
            'nama_layanan' => $request->nama_layanan,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
            'waktu' => $request -> waktu,
            'harga' => $request->harga
        ]);

        return redirect()->route('preweddingbronze.edit',$thispreweddingbronze->slug)->with('msg','Package updated');

        }
    }

    public function publish($slug){
        $price_prewedding_bronze = PreweddingBronze::where('slug',$slug)->where('status','!=',9)->first();

        if($price_prewedding_bronze){
            $price_prewedding_bronze->update(['status' => 1]);
            return redirect()->back()->with('msg','Package succesully activated');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }

    }

    public function unpublish($slug){
        $price_prewedding_bronze = PreweddingBronze::where('slug',$slug)->where('status','!=',9)->first();

        if($price_prewedding_bronze){
            $price_prewedding_bronze->update(['status' => 0]);
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
        $price_prewedding_bronze = PreweddingBronze::where('slug',$slug)->where('status','!=',9)->first();

        if($price_prewedding_bronze){
            $price_prewedding_bronze->update(['status' => 9]);
            return redirect()->back()->with('msg','Package succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }
    }
}
