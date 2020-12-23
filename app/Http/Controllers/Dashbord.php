<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class Dashbord extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    $useer = auth()->user();

        $posts = Post::where('name','=', $useer->name)->get() ;
        return view('dashbord.index', compact('posts'));

    }


    public function create()
    {
        return view('dashbord.addform');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'    =>  'required',
            'category'    =>  'required',
            'user'    =>  'required',
            'name'    =>  'required',
            'description'     =>  'required'
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);


        Post::create([
            'image'    =>  $imageName,
            'title'     =>  $request->get('title'),
            'user'     =>  $request->get('user'),
            'name'     =>  $request->get('name'),
            'category'     =>  $request->get('category'),
            'description'     =>  $request->get('description')

        ]);
        return redirect('dashbord');
    }


    public function show($id)
    {
        $post = Post::find($id);
        return view('dashbord.select', compact('post', 'id'));    }


    public function edit($id)
    {
       $posts = Post::find($id);
        return view('dashbord.edit', compact('posts', 'id'));    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            // 'image'    =>  'required',
            'title'    =>  'required',
            'user'    =>  'required',
            'name'    =>  'required',
            'description'     =>  'required'
        ]);
    if($request->image){
    $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    ]);
  $imageName = time().'.'.$request->image->extension();

    $request->image->move(public_path('images'), $imageName);

    Post::where("id",$id)->update([
        'image'    =>   $imageName,
        'title'     =>  $request->get('title'),
        'user'     =>  $request->get('user'),
        'name'     =>  $request->get('name'),
        'description'     =>  $request->get('description')

    ]);
}else{
    Post::where("id",$id)->update([
    'title'     =>  $request->get('title'),
    'user'     =>  $request->get('user'),
    'name'     =>  $request->get('name'),
    'description'     =>  $request->get('description')

]);}


        return redirect('dashbord');

    }


    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('dashbord');
    }
}
