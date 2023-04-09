<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ServicesBody;
use Auth;
class ServicesBodyController extends Controller
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
        $page_title = "Body Treatment";

        $price_body = ServicesBody::where('status','!=',9)->get();

        return view('servicesbody',compact('page_title','price_body'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Services";

        return view('adds.addservicesbody',compact('page_title'));
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
        $price_body = new ServicesBody;
        $price_body->nama_layanan = $request->nama_layanan;
        $price_body->user_id = Auth::user()->id;
        $price_body->slug = $slug;
        $price_body->content = $request->content;
        $price_body->waktu = $request->waktu;
        $price_body->harga = $request->harga;
        $price_body->status = 1;

        $price_body->save();

        return redirect()->route('servicesbody.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = ServicesBody::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewservicesbody',compact('data','page_title'));
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
        $data = ServicesBody::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editservicesbody',compact('data','page_title'));
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
        $thisservicebody = ServicesBody::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thisservicebody){
            return redirect()->back()->with('msg','Packages not found');
        }
        else{
        //Validation
        $validatearray = [
            'name' => 'required'
        ];

        $request->validate($validatearray);

        //Generate Slug
        if($request->nama_layanan != $thisservicesbody->nama_layanan){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thisservicesbody->slug;
        }

        //Update
        $thisservicesbody->update([
            'nama_layanan' => $request->nama_layanan,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
            'waktu' => $request -> waktu,
            'harga' => $request->harga
        ]);

        return redirect()->route('servicesbody.edit',$thisservicesbody->slug)->with('msg','Package updated');

        }
    }

    public function publish($slug){
        $price_body = ServicesBody::where('slug',$slug)->where('status','!=',9)->first();

        if($price_body){
            $price_body->update(['status' => 1]);
            return redirect()->back()->with('msg','Package succesully activated');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }

    }

    public function unpublish($slug){
        $price_body = PackageBody::where('slug',$slug)->where('status','!=',9)->first();

        if($price_body){
            $price_body->update(['status' => 0]);
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
        $price_body = PackageBody::where('slug',$slug)->where('status','!=',9)->first();

        if($price_body){
            $price_body->update(['status' => 9]);
            return redirect()->back()->with('msg','Package succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }
    }
}
