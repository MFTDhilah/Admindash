<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PostsWorker;
use Auth;
class PostsWorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Posts Worker";

        $postsworker = PostsWorker::where('status','!=',9)->get();

        return view('postsworker',compact('page_title','postsworker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add Posts";

        return view('adds.addpostworker',compact('page_title'));
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
        $postsworker = new PostsWorker;
        $postsworker->name = $request->name;
        $postsworker->user_id = Auth::user()->id;
        $postsworker->slug = $slug;
        $postsworker->content = $request->content;
        $postsworker->status = 1;

        if($request->file('postimage')){
            $path = $request->file('postimage')->getRealPath();
            $image = file_get_contents($path);
            $postimage = base64_encode($image);
            $postsworker->image = $postimage;
        }
        $postsworker->save();

        return redirect()->route('postsworker.all')->with('msg','Succesully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = PostsWorker::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." View";
            return view('details.viewpostworker',compact('data','page_title'));
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
        $data = PostsWorker::where('slug',$slug)->where('status','!=',9)->first();

        if($data){
            $page_title = $data->name." Edit";
            return view('edits.editpostworker',compact('data','page_title'));
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
        $thispostsworker = PostsWorker::where('slug',$slug)->where('status','!=',9)->first();

        if(!$thispostsworker){
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
        if($request->name != $thispostsworker->name){
           $slug = str()->slug($request->name."-".time());
        }
        else{
             $slug = $thispostsworker->slug;
        }

        //Image
        if($request->file('postimage')){
            $path = $request->file('postimage')->getRealPath();
            $image = file_get_contents($path);
            $postimage = base64_encode($image);
        }
        else{
            $postimage = $thispostsworker->image;
        }

        //Update
        $thispostsworker->update([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $postimage
        ]);

        return redirect()->route('postsworker.edit',$thispostsworker->slug)->with('msg','Post updated');

        }
    }

    public function publish($slug){
        $postsworker = PostsWorker::where('slug',$slug)->where('status','!=',9)->first();

        if($postsworker){
            $postsworker->update(['status' => 1]);
            return redirect()->back()->with('msg','Post succesully activated');
        }
        else{
            return redirect()->back()->with('msg','Post not found');
        }

    }

    public function unpublish($slug){
        $postsworker = PostsWorker::where('slug',$slug)->where('status','!=',9)->first();

        if($postsworker){
            $postsworker->update(['status' => 0]);
            return redirect()->back()->with('msg','Post succesully deactivated');
        }
        else{
            return redirect()->back()->with('msg','Post not found');
        }
    }
    public function deleteimage($slug){
        $postsworker = PostsWorker::where('slug',$slug)->where('status','!=',9)->first();

        if($postsworker){
            $postsworker->update(['image' => NULL]);
            return redirect()->route('postsworker.edit',$postsworker->slug)->with('msg','Post Image Deleted');
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
        $postsworker = PostsWorker::where('slug',$slug)->where('status','!=',9)->first();

        if($postsworker){
            $postsworker->delete();
            return redirect()->back()->with('msg','Post succesully deleted');
        }
        else{
            return redirect()->back()->with('msg','Post not found');
        }
    }
}
