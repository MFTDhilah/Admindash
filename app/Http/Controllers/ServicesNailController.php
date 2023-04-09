<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ServicesNail;
use Auth;
class ServicesNailController extends Controller
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
        $page_title = "Nail Treatment";

        $price_nail = ServicesNail::where('status','!=',9)->get();

        return view('servicesnail',compact('page_title','price_nail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Services";

        return view('adds.addservicesnail',compact('page_title'));
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
        $price_nail = new ServicesNail;
        $price_nail->nama_layanan = $request->nama_layanan;
        $price_nail->user_id = Auth::user()->id;
        $price_nail->slug = $slug;
        $price_nail->content = $request->content;
        $price_nail->waktu = $request->waktu;
        $price_nail->harga = $request->harga;
        $price_nail->status = 1;

        $price_nail->save();

        return redirect()->route('servicesnail.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = ServicesNail::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewservicesnail',compact('data','page_title'));
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
        $data = ServicesNail::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editservicesnail',compact('data','page_title'));
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
        $thisservicenail = ServicesNail::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thisservicenail){
            return redirect()->back()->with('msg','Packages not found');
        }
        else{
        //Validation
        $validatearray = [
            'name' => 'required'
        ];

        $request->validate($validatearray);

        //Generate Slug
        if($request->nama_layanan != $thisservicesnail->nama_layanan){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thisservicesnail->slug;
        }

        //Update
        $thisservicesnail->update([
            'nama_layanan' => $request->nama_layanan,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
            'waktu' => $request -> waktu,
            'harga' => $request->harga
        ]);

        return redirect()->route('servicesnail.edit',$thisservicesnail->slug)->with('msg','Package updated');

        }
    }

    public function publish($slug){
        $price_nail = ServicesNail::where('slug',$slug)->where('status','!=',9)->first();

        if($price_nail){
            $price_nail->update(['status' => 1]);
            return redirect()->back()->with('msg','Package succesully activated');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }

    }

    public function unpublish($slug){
        $price_nail = PackageNail::where('slug',$slug)->where('status','!=',9)->first();

        if($price_Nail){
            $price_Nail->update(['status' => 0]);
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
        $price_Nail = PackageNail::where('slug',$slug)->where('status','!=',9)->first();

        if($price_nail){
            $price_nail->update(['status' => 9]);
            return redirect()->back()->with('msg','Package succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }
    }
}
