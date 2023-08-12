<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Licences;
use Auth;
class LicencesController extends Controller
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
        $page_title = "Licences";

        $licences = Licences::where('status','!=',9)->get();

        return view('licenses',compact('page_title','licences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Licences";

        return view('adds.addlicences',compact('page_title'));
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
        $licence = new Licences;
        $licence->name = $request->name;
        $licence->user_id = Auth::user()->id;
        $licence->slug = $slug;
        $licence->content = $request->content;
        $licence->status = 1;

        if($request->file('postimage')){
            $path = $request->file('postimage')->getRealPath();
            $image = file_get_contents($path);
            $postimage = base64_encode($image);
            $licence->image = $postimage;
        }
        $licence->save();

        return redirect()->route('licences.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Licences::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewlicence',compact('data','page_title'));
        }
        else{
            return redirect()->back()->with('msg','Licence not found');
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
        $data = Licences::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editlicence',compact('data','page_title'));
        }
        else{
            return redirect()->back()->with('msg','Licence not found');
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
        $thislicence = Licences::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thislicence){
            return redirect()->back()->with('msg','Licence not found');
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
        if($request->name != $thislicence->name){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thislicence->slug;
        }

        //Image
        if($request->file('postimage')){
            $path = $request->file('postimage')->getRealPath();
            $image = file_get_contents($path);
            $postimage = base64_encode($image);
        }
        else{
            $postimage = $thislicence->image;
        }

        //Update
        $thislicence->update([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $postimage
        ]);

        return redirect()->route('licences.edit',$thislicence->slug)->with('msg','Licence updated');

        }
    }

    public function publish($slug){
        $licence = Licences::where('slug',$slug)->where('status','!=',9)->first();

        if($licence){
            $licence->update(['status' => 1]);
            return redirect()->back()->with('msg','Licence succesully activated');
        }
        else{
            return redirect()->back()->with('msg','Licence not found');
        }

    }

    public function unpublish($slug){
        $licence = Licences::where('slug',$slug)->where('status','!=',9)->first();

        if($licence){
            $licence->update(['status' => 0]);
            return redirect()->back()->with('msg','Licence succesully deactivated');
        }
        else{
            return redirect()->back()->with('msg','Licence not found');
        }
    }
    public function deleteimage($slug){
        $licence = Licences::where('slug',$slug)->where('status','!=',9)->first();

        if($licence){
            $licence->update(['image' => NULL]);
            return redirect()->route('licences.edit',$licence->slug)->with('msg','Licence Image Deleted');
        }
        else{
            return redirect()->back()->with('msg','Licence not found');
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
        $licence = Licences::where('slug',$slug)->where('status','!=',9)->first();

        if($licence){
            $licence->update(['status' => 9]);
            return redirect()->back()->with('msg','Licence succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Licence not found');
        }
    }
}
