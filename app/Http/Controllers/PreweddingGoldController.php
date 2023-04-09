<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PreweddingGold;
use Auth;
class PreweddingGoldController extends Controller
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

        $price_prewedding_gold = PreweddingGold::where('status','!=',9)->get();

        return view('preweddinggold',compact('page_title','price_prewedding_gold'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Packages";

        return view('adds.addpreweddinggold',compact('page_title'));
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
        $price_prewedding_gold = new PreweddingGold;
        $price_prewedding_gold->nama_layanan = $request->nama_layanan;
        $price_prewedding_gold->user_id = Auth::user()->id;
        $price_prewedding_gold->slug = $slug;
        $price_prewedding_gold->content = $request->content;
        $price_prewedding_gold->waktu = $request->waktu;
        $price_prewedding_gold->harga = $request->harga;
        $price_prewedding_gold->status = 1;

        $price_prewedding_gold->save();

        return redirect()->route('preweddinggold.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = PreweddingGold::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewpreweddinggold',compact('data','page_title'));
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
        $data = Preweddinggold::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editpreweddinggold',compact('data','page_title'));
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
        $thispreweddinggold = PreweddingGold::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thispreweddinggold){
            return redirect()->back()->with('msg','Packages not found');
        }
        else{
        //Validation
        $validatearray = [
            'nama_layanan' => 'required'
        ];

        $request->validate($validatearray);

        //Generate Slug
        if($request->nama_layanan != $thispreweddinggold->nama_layanan){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thispackage100->slug;
        }

        //Update
        $thispreweddinggold->update([
            'nama_layanan' => $request->nama_layanan,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
            'waktu' => $request -> waktu,
            'harga' => $request->harga
        ]);

        return redirect()->route('preweddingbronze.edit',$thispreweddinggold->slug)->with('msg','Package updated');

        }
    }

    public function publish($slug){
        $price_prewedding_gold = PreweddingGold::where('slug',$slug)->where('status','!=',9)->first();

        if($price_prewedding_gold){
            $price_prewedding_gold->update(['status' => 1]);
            return redirect()->back()->with('msg','Package succesully activated');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }

    }

    public function unpublish($slug){
        $price_prewedding_gold = PreweddingGold::where('slug',$slug)->where('status','!=',9)->first();

        if($price_prewedding_gold){
            $price_prewedding_gold->update(['status' => 0]);
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
        $price_prewedding_gold = PreweddingGold::where('slug',$slug)->where('status','!=',9)->first();

        if($price_prewedding_gold){
            $price_prewedding_gold->update(['status' => 9]);
            return redirect()->back()->with('msg','Package succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }
    }
}
