<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ShowPost extends Controller
{
    //

    public function details($id){
        $post=Post::where('id',$id)->first();
        $randomposts=Post::all()->random(3);
        return view('blogdetails',compact('post','randomposts'));
    }
}
