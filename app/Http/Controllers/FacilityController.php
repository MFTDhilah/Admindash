<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Facilities;
use Auth;
class FacilityController extends Controller
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
        $page_title = "Facilities";

        $facility = Facilities::where('status','!=',9)->get();

        return view('facility',compact('page_title','facility'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Facilities";

        return view('adds.addfacility',compact('page_title'));
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
        $facility = new Facilities;
        $facility->name = $request->name;
        $facility->user_id = Auth::user()->id;
        $facility->slug = $slug;
        $facility->content = $request->content;
        $facility->status = 1;

        if($request->file('postimage')){
            $path = $request->file('postimage')->getRealPath();
            $image = file_get_contents($path);
            $postimage = base64_encode($image);
            $facility->image = $postimage;
        }
        $facility->save();

        return redirect()->route('facility.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Facilities::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewfacility',compact('data','page_title'));
        }
        else{
            return redirect()->back()->with('msg','Post not found');
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
        $data = Facility::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editfacility',compact('data','page_title'));
        }
        else{
            return redirect()->back()->with('msg','Post not found');
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
        $thisfacility = Facilities::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thisfacility){
            return redirect()->back()->with('msg','Post not found');
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
        if($request->name != $thisfacility->name){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thisfacility->slug;
        }

        //Image
        if($request->file('postimage')){
            $path = $request->file('postimage')->getRealPath();
            $image = file_get_contents($path);
            $postimage = base64_encode($image);
        }
        else{
            $postimage = $thisfacility->image;
        }

        //Update
        $thisfacility->update([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $postimage
        ]);

        return redirect()->route('facility.edit',$thisfacility->slug)->with('msg','Post updated');

        }
    }

    public function publish($slug){
        $facility = Facilities::where('slug',$slug)->where('status','!=',9)->first();

        if($facility){
            $facility->update(['status' => 1]);
            return redirect()->back()->with('msg','Post succesully activated');
        }
        else{
            return redirect()->back()->with('msg','Post not found');
        }

    }

    public function unpublish($slug){
        $facility = Facilities::where('slug',$slug)->where('status','!=',9)->first();

        if($facility){
            $facility->update(['status' => 0]);
            return redirect()->back()->with('msg','Post succesully deactivated');
        }
        else{
            return redirect()->back()->with('msg','Post not found');
        }
    }
    public function deleteimage($slug){
        $facility = Facilities::where('slug',$slug)->where('status','!=',9)->first();

        if($facility){
            $facility->update(['image' => NULL]);
            return redirect()->route('facility.edit',$facility->slug)->with('msg','Post Image Deleted');
        }
        else{
            return redirect()->back()->with('msg','Post not found');
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
        $facility = Facilities::where('slug',$slug)->where('status','!=',9)->first();

        if($facility){
            $facility->delete();
            return redirect()->back()->with('msg','Post succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Post not found');
        }
    }
}
