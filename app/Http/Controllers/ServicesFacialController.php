<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ServicesFacial;
use Auth;
class ServicesFacialController extends Controller
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
        $page_title = "Facial Treatment";

        $price_facial = ServicesFacial::where('status','!=',9)->get();

        return view('servicesfacial',compact('page_title','price_facial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Services";

        return view('adds.addservicesfacial',compact('page_title'));
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
        $price_facial = new ServicesFacial;
        $price_facial->nama_layanan = $request->nama_layanan;
        $price_facial->user_id = Auth::user()->id;
        $price_facial->slug = $slug;
        $price_facial->content = $request->content;
        $price_facial->waktu = $request->waktu;
        $price_facial->harga = $request->harga;
        $price_facial->status = 1;

        $price_facial->save();

        return redirect()->route('servicesfacial.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = ServicesFacial::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewservicesfacial',compact('data','page_title'));
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
<<<<<<< Updated upstream
        $data = ServicesFacial::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editservicesfacial',compact('data','page_title'));
=======
        $price_facial = ServicesFacial::where('slug',$slug)->where('status','!=',9)->first();

        if($price_facial){
            $page_title = $price_facial->name." Edit";
            return view('edits.editservicesfacial',compact('price_facial','page_title'));
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        $thisservicefacial = ServicesFacial::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thisservicefacial){
=======
        $price_facial = ServicesFacial::where('slug',$slug)->where('status','!=',9)->first();

        if(!$price_facial){
>>>>>>> Stashed changes
            return redirect()->back()->with('msg','Packages not found');
        }
        else{
        //Validation
        $validatearray = [
<<<<<<< Updated upstream
            'name' => 'required'
=======
            'nama_layanan' => 'required'
>>>>>>> Stashed changes
        ];

        $request->validate($validatearray);

        //Generate Slug
<<<<<<< Updated upstream
        if($request->nama_layanan != $thisservicesfacial->nama_layanan){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thisservicesfacial->slug;
        }

        //Update
        $thisservicesfacial->update([
=======
        if($request->nama_layanan != $price_facial->nama_layanan){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $price_facial->slug;
        }

        //Update
        $price_facial->update([
>>>>>>> Stashed changes
            'nama_layanan' => $request->nama_layanan,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
<<<<<<< Updated upstream
            'waktu' => $request -> waktu,
            'harga' => $request->harga
        ]);

        return redirect()->route('servicesfacial.edit',$thisservicesfacial->slug)->with('msg','Package updated');
=======
            'waktu' => $request ->waktu,
            'harga' => $request->harga
        ]);

        return redirect()->route('servicesfacial.edit',$price_facial->slug)->with('msg','Package updated');
>>>>>>> Stashed changes

        }
    }

    public function publish($slug){
        $price_facial = ServicesFacial::where('slug',$slug)->where('status','!=',9)->first();

        if($price_facial){
            $price_facial->update(['status' => 1]);
            return redirect()->back()->with('msg','Package succesully activated');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }

    }

    public function unpublish($slug){
<<<<<<< Updated upstream
        $price_facial = PackageFacial::where('slug',$slug)->where('status','!=',9)->first();
=======
        $price_facial = ServicesFacial::where('slug',$slug)->where('status','!=',9)->first();
>>>>>>> Stashed changes

        if($price_facial){
            $price_facial->update(['status' => 0]);
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
<<<<<<< Updated upstream
        $price_facial = PackageFacial::where('slug',$slug)->where('status','!=',9)->first();
=======
        $price_facial = ServicesFacial::where('slug',$slug)->where('status','!=',9)->first();
>>>>>>> Stashed changes

        if($price_facial){
            $price_facial->update(['status' => 9]);
            return redirect()->back()->with('msg','Package succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Package not found');
        }
    }
}
