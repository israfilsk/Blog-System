<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Reg;
use App\Post;
use Crypt;
use Session;

class Users extends Controller
{
    //
    // function dbCheck(){
    //     $user=DB::table('signup')
    //     ->where('username','alam')
    //     ->delete();
    //     print_r($user);
    // }

    public function index(){
        // $posts=Post::latest()->take(6)->get();
        $posts=Post::orderBy('created_at', 'desc')->simplePaginate(6);
        return view('home',compact('posts'));
    }

    function register(Request $req){
        $Reg=new Reg;
        $Reg->username=$req->input('username');
        $Reg->email=$req->email;
        $Reg->password=Crypt::encrypt($req->input('password'));
        $Reg->save();
        // $req->session()->put('data',$req->input('username'));
        return redirect("success");
    }

    function logs(Request $req){
        $user=Reg::where('email',$req->input('email'))->get();
        if (Crypt::decrypt($user[0]->password)==$req->input('password')){
            $req->session()->put('user',$user[0]->username);
            return redirect('home');
        }else{
            return redirect('login');
        }
        
    }
}
