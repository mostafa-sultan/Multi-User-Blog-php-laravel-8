<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Profile extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($user)
    {
        $useer = auth()->user();
         if($useer->email== $user){
            $posts = Post::where('user','=', $useer->email)->paginate(6) ;
            $data = User::where('email','=', $user)->get() ;
            foreach($posts as $key => $value){
                $data = User::where('email','=',$value->user)->get('image') ;

                $posts[$key]->userimage = $data[0]->image;
            }

            return view('user.myprofile', compact('posts','data'));
        }else{
//            $posts = DB::table('posts')->whereBetween('id', [$min, $max])->get();
              $posts = Post::where('user','=', $user)->get() ;
//            dd($posts);
              $data = User::where('email','=', $user)->get() ;
//            dd($data);
            foreach($posts as $key => $value){
                $data = User::where('email','=',$value->user)->get('image') ;

                $posts[$key]->userimage = $data[0]->image;
//            dd($value);
            }
            return view('user.profile', compact('posts','data'));
        }
//        $min = 0;
//        $max = 9;
//        $posts = DB::table('posts')->whereBetween('id', [$min, $max])->get();
//
//        return view('home1', compact('posts'));
    }}
