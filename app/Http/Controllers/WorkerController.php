<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Worker;
use Auth;
class WorkerController extends Controller
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
        $page_title = "Workers";

        $worker = Worker::where('status','!=',9)->get();

        return view('worker',compact('page_title','worker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Workers";

        return view('adds.addworker',compact('page_title'));
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
        $worker = new Worker;
        $worker->name = $request->name;
        $worker->user_id = Auth::user()->id;
        $worker->slug = $slug;
        $worker->content = $request->content;
        $worker->status = 1;

        if($request->file('postimage')){
            $path = $request->file('postimage')->getRealPath();
            $image = file_get_contents($path);
            $postimage = base64_encode($image);
            $worker->image = $postimage;
        }
        $worker->save();

        return redirect()->route('worker.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Worker::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewworker',compact('data','page_title'));
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
        $data = Worker::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editworker',compact('data','page_title'));
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
        $thisworker = Worker::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thisworker){
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
        if($request->name != $thisworker->name){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thisworker->slug;
        }

        //Image
        if($request->file('postimage')){
            $path = $request->file('postimage')->getRealPath();
            $image = file_get_contents($path);
            $postimage = base64_encode($image);
        }
        else{
            $postimage = $thisworker->image;
        }

        //Update
        $thisworker->update([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $postimage
        ]);

        return redirect()->route('worker.edit',$thisworker->slug)->with('msg','Post updated');

        }
    }

    public function publish($slug){
        $worker = Worker::where('slug',$slug)->where('status','!=',9)->first();

        if($worker){
            $worker->update(['status' => 1]);
            return redirect()->back()->with('msg','Post succesully activated');
        }
        else{
            return redirect()->back()->with('msg','Post not found');
        }

    }

    public function unpublish($slug){
        $worker = Worker::where('slug',$slug)->where('status','!=',9)->first();

        if($worker){
            $worker->update(['status' => 0]);
            return redirect()->back()->with('msg','Post succesully deactivated');
        }
        else{
            return redirect()->back()->with('msg','Post not found');
        }
    }
    public function deleteimage($slug){
        $worker = Worker::where('slug',$slug)->where('status','!=',9)->first();

        if($worker){
            $worker->update(['image' => NULL]);
            return redirect()->route('worker.edit',$worker->slug)->with('msg','Post Image Deleted');
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
        $worker = Worker::where('slug',$slug)->where('status','!=',9)->first();

        if($worker){
            $worker->update(['status' => 9]);
            return redirect()->back()->with('msg','Post succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Post not found');
        }
    }
}
