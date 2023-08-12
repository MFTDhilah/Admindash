<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Certifications;
use Auth;
class SertificationsController extends Controller
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
        $page_title = "Sertifications";

        $sertifications = Sertifications::where('status','!=',9)->get();

        return view('licenses',compact('page_title','sertifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Sertifications";

        return view('adds.addsertifications',compact('page_title'));
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

        if ($request->postimage) {
        //Append validation
            $validatearray['postimage'] = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }

        $request->validate($validatearray);

        //Generate Slug
        $slug = str()->slug($request->name."-".time());

        //Create Post
        $sertification = new Sertifications;
        $sertification->name = $request->name;
        $sertification->user_id = Auth::user()->id;
        $sertification->slug = $slug;
        $sertification->content = $request->content;
        $sertification->status = 1;

        if($request->file('postimage')){
            $path = $request->file('postimage')->getRealPath();
            $image = file_get_contents($path);
            $postimage = base64_encode($image);
            $sertification->image = $postimage;
        }
        $sertification->save();

        return redirect()->route('sertifications.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Sertifications::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewsertification',compact('data','page_title'));
        }
        else{
            return redirect()->back()->with('msg','Sertification not found');
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
        $data = Sertifications::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editsertification',compact('data','page_title'));
        }
        else{
            return redirect()->back()->with('msg','Sertification not found');
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
        $thissertification = Sertifications::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thissertification){
            return redirect()->back()->with('msg','Sertification not found');
        }
        else{
        //Validation
        $validatearray = [
            'name' => 'required'
        ];

        if ($request->postimage) {
        //Append validation
            $validatearray['postimage'] = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }

        $request->validate($validatearray);

        //Generate Slug
        if($request->name != $thissertification->name){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thissertification->slug;
        }

        //Image
        if($request->file('postimage')){
            $path = $request->file('postimage')->getRealPath();
            $image = file_get_contents($path);
            $postimage = base64_encode($image);
        }
        else{
            $postimage = $thissertification->image;
        }

        //Update
        $thissertification->update([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $postimage
        ]);

        return redirect()->route('sertifications.edit',$thissertification->slug)->with('msg','Sertification updated');

        }
    }

    public function publish($slug){
        $sertification = Sertifications::where('slug',$slug)->where('status','!=',9)->first();

        if($sertification){
            $sertification->update(['status' => 1]);
            return redirect()->back()->with('msg','Sertification succesully activated');
        }
        else{
            return redirect()->back()->with('msg','Sertification not found');
        }

    }

    public function unpublish($slug){
        $sertification = Sertifications::where('slug',$slug)->where('status','!=',9)->first();

        if($sertification){
            $sertification->update(['status' => 0]);
            return redirect()->back()->with('msg','Sertification succesully deactivated');
        }
        else{
            return redirect()->back()->with('msg','Sertification not found');
        }
    }
    public function deleteimage($slug){
        $sertification = Sertifications::where('slug',$slug)->where('status','!=',9)->first();

        if($sertification){
            $sertification->update(['image' => NULL]);
            return redirect()->route('sertifications.edit',$sertification->slug)->with('msg','Sertification Image Deleted');
        }
        else{
            return redirect()->back()->with('msg','Sertification not found');
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
        $sertification = Sertifications::where('slug',$slug)->where('status','!=',9)->first();

        if($sertification){
            $sertification->update(['status' => 9]);
            return redirect()->back()->with('msg','Sertification succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Sertification not found');
        }
    }
}
