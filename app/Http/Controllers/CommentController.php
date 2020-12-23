<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function __construct()
    {
    $this->middleware('auth');
    }

    public function index()
    {
        //


    }


    public function create()
    {
        //


    }

    public function store(Request $request)
    {


        $this->validate($request, [
            'post_id'    =>  'required',
            'commentuser'    =>  'required',
            'comment'    =>  'required',
         ]);
//dd($request);

        Comment::create([
            'post_id'     =>  $request->get('post_id'),
            'commentuser'     =>  $request->get('commentuser'),
            'comment'     =>  $request->get('comment'),
        ]);
        return  back();




    }


    public function show(Comment $comment)
    {
        //
    }


    public function edit(Comment $comment)
    {
        //
    }


    public function update(Request $request, Comment $comment)
    {
        //
    }


    public function destroy(Comment $comment)
    {
        //
    }
}
