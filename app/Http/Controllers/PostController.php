<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=Post::orderBy('created_at', 'desc')->paginate(4);
        return view('index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'image'=>'image|max:1999'
        ]);

        if($request->hasFile('image')){
            $filenameext=$request->file('image')->getClientOriginalName();
            $filename=pathinfo($filenameext,PATHINFO_FILENAME);
            $ext=$request->file('image')->getClientOriginalExtension();
            $filestore=$filename.'_'.time().'.'.$ext;
            $path=$request->file('image')->storeAs('public/images',$filestore);
        }
        else{
            $filestore='default.jpg';
        }

        $post=new Post;
        $post->title=$request->input('title');
        $post->image=$filestore;
        $post->body=$request->input('body');
        $post->save();

        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        // $posts = $post;
        return view('show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        // $posts = $post;
        return view('edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);

        if($request->hasFile('image')){
            $filenameext=$request->file('image')->getClientOriginalName();
            $filename=pathinfo($filenameext,PATHINFO_FILENAME);
            $ext=$request->file('image')->getClientOriginalExtension();
            $filestore=$filename.'_'.time().'.'.$ext;
            $path=$request->file('image')->storeAs('public/images',$filestore);
        }
        // $post=new Post;
        $post->title=$request->input('title');
        if($request->hasFile('image')){
            $post->image=$filestore;
        }
        $post->body=$request->input('body');
    
        $post->save();

        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        if($post->image!='default.jpg'){
            Storage::delete('public/images/'.$post->image);
        }

        $post->delete();
        return redirect('post');

    }
}
