<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Certifications;
use Auth;
class CertificationsController extends Controller
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
        $page_title = "Certifications";

        $certifications = Certifications::where('status','!=',9)->get();

        return view('certifications',compact('page_title','certifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Certifications";

        return view('adds.addcertifications',compact('page_title'));
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
        $certification = new Certifications;
        $certification->name = $request->name;
        $certification->user_id = Auth::user()->id;
        $certification->slug = $slug;
        $certification->content = $request->content;
        $certification->status = 1;

        if($request->file('postimage')){
            $path = $request->file('postimage')->getRealPath();
            $image = file_get_contents($path);
            $postimage = base64_encode($image);
            $certification->image = $postimage;
        }
        $certification->save();

        return redirect()->route('certifications.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Certifications::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewcertifications',compact('data','page_title'));
        }
        else{
            return redirect()->back()->with('msg','Certification not found');
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
        $data = Certifications::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editcertifications',compact('data','page_title'));
        }
        else{
            return redirect()->back()->with('msg','Certification not found');
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
        $thiscertification = Certifications::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thiscertification){
            return redirect()->back()->with('msg','Certification not found');
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
        if($request->name != $thiscertification->name){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thiscertification->slug;
        }

        //Image
        if($request->file('postimage')){
            $path = $request->file('postimage')->getRealPath();
            $image = file_get_contents($path);
            $postimage = base64_encode($image);
        }
        else{
            $postimage = $thiscertification->image;
        }

        //Update
        $thiscertification->update([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $postimage
        ]);

        return redirect()->route('certifications.edit',$thiscertification->slug)->with('msg','Certification updated');

        }
    }

    public function publish($slug){
        $certification = Certifications::where('slug',$slug)->where('status','!=',9)->first();

        if($certification){
            $certification->update(['status' => 1]);
            return redirect()->back()->with('msg','Certification succesully activated');
        }
        else{
            return redirect()->back()->with('msg','Certification not found');
        }

    }

    public function unpublish($slug){
        $certification = Certifications::where('slug',$slug)->where('status','!=',9)->first();

        if($certification){
            $certification->update(['status' => 0]);
            return redirect()->back()->with('msg','Certification succesully deactivated');
        }
        else{
            return redirect()->back()->with('msg','Certification not found');
        }
    }
    public function deleteimage($slug){
        $certification = Certifications::where('slug',$slug)->where('status','!=',9)->first();

        if($certification){
            $certification->update(['image' => NULL]);
            return redirect()->route('certifications.edit',$certification->slug)->with('msg','Certification Image Deleted');
        }
        else{
            return redirect()->back()->with('msg','Certification not found');
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
        $certification = Certifications::where('slug',$slug)->where('status','!=',9)->first();

        if($certification){
            $certification->update(['status' => 9]);
            return redirect()->back()->with('msg','Certification succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Certification not found');
        }
    }
}
