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
      $posts = Post::paginate(6);

        foreach($posts as $key => $value){
       $data = User::where('email','=',$value->user)->get('image') ;

            $posts[$key]->userimage = $data[0]->image;
        }
        return view('home1', compact('posts'));
    }




    public function posts()
    {
        $posts = Post::paginate(9);
        foreach($posts as $key => $value){
            $data = User::where('email','=',$value->user)->get('image') ;

            $posts[$key]->userimage = $data[0]->image;
        }




        return view('posts', compact('posts'));


    }










    public function postcatigory($category)
    {
        $posts = Post::where('category', $category)->paginate(9);
        foreach($posts as $key => $value){
            $data = User::where('email','=',$value->user)->get('image') ;
            $posts[$key]->userimage = $data[0]->image;
        }
        return view('posts', compact('posts'));
    }

    public function show($id)
    {

        $post = Post::find($id);
        $data = User::where('email','=',$post->user)->get() ;
        $sideposts = Post::all()->random(3);

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
    }
}

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
