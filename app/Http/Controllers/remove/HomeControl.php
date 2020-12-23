<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeControl extends Controller
{

    public function index()
    {
//        $min=0;
//        $max=99;
//        $posts = Post::all()->random(5);
        $posts = Post::paginate(6);
//        $posts=DB::table('posts')->whereBetween('id',[$min, $max])->get();
//         $data = User::where('email','=','a@a.a')->get('image') ;
//         dd($data);
        foreach($posts as $key => $value){
       $data = User::where('email','=',$value->user)->get('image') ;

            $posts[$key]->userimage = $data[0]->image;
//            dd($value);
        }
//$posts[0]->userimage= 'lklklk';
//dd($posts);
        return view('home1', compact('posts'));
    }
    public function posts()
    {
////        $min=0;
////        $max=9;
//        $posts=DB::table('posts')->whereBetween('id',[$min, $max])->get();
        $posts = Post::paginate(9);
//dd($posts);


        foreach($posts as $key => $value){
            $data = User::where('email','=',$value->user)->get('image') ;

            $posts[$key]->userimage = $data[0]->image;
//            dd($value);
        }




        return view('posts', compact('posts'));


    }










    public function postcatigory($category)
    {
////        $min=0;
////        $max=9;
//        $posts=DB::table('posts')->whereBetween('id',[$min, $max])->get();
        $posts = Post::where('category', $category)->paginate(9);
//        dd($posts);
        foreach($posts as $key => $value){
            $data = User::where('email','=',$value->user)->get('image') ;

            $posts[$key]->userimage = $data[0]->image;
//            dd($value);
        }
        return view('posts', compact('posts'));
    }

    public function show($id)
    {

        $post = Post::find($id);
        $data = User::where('email','=',$post->user)->get() ;
        $sideposts = Post::all()->random(3);


//        $frequency = Post::select('category')
//            ->groupBy('category')
//            ->orderByRaw('COUNT(*) DESC')
//            ->limit(1)
//            ->get();
        $frequency = Post::select('category')
            ->selectRaw('COUNT(*) AS count')
            ->groupBy('category')
            ->orderByDesc('count')
            ->limit(5)
            ->get();
        $comment= Comment::where('post_id','=',$post->id)->get() ;
   if ($comment->count()){
    foreach($comment as $key => $value){
        $datauser = User::where('email','=',$value->commentuser)->get(['image','name']) ;

        $comment[$key]->userimage = $datauser[0]->image;
        $comment[$key]->username = $datauser[0]->name;
//            dd($comment);
    }
//    dd($comment);
}
//        dd($frequency);
//        dd($data);
//        dd($post);
        return view('post', compact('post', 'data','sideposts','frequency','comment'));
    }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }




    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
