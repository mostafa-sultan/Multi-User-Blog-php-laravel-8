<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class Dashbord extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    $useer = auth()->user();

//    dd($useer->name);
        $posts = Post::where('name','=', $useer->name)->get() ;
//     dd($posts);
        return view('dashbord.index', compact('posts'));

//        $posts = Post::all()->random();
        // dd($students);
        //   $students = DB::select('select * from students');
        //        $students = Student::all()->toArray();
        //   dd($students);
    }


    public function create()
    {
        return view('dashbord.addform');
    }


    public function store(Request $request)
    {
//        $this->validate($request, [
//            'first_name'    =>  'required',
//            'last_name'     =>  'required'
//        ]);
//        $student = new Student([
//            'first_name'    =>  $request->get('first_name'),
//            'last_name'     =>  $request->get('last_name')
//        ]);
//        $student->save();
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
//        if ($request->has('image')) {
//            $request->file('image')->storeAs('public/images');
//             // ensure every image has a different name
//            $file_name = $request->file('image')->hashName();

        // save new image $file_name to database
//            $model->update(['image' => $file_name]);
//        }

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
        //  dd($students);
        return view('dashbord.select', compact('post', 'id'));    }


    public function edit($id)
    {
       $posts = Post::find($id);
//         dd($posts);
        return view('dashbord.edit', compact('posts', 'id'));    }

    public function update(Request $request,$id)
    {
//        dd(Storage::disk('public')->exists('/images/1.jpg'));
//       dd($request);
        $this->validate($request, [
            // 'image'    =>  'required',
            'title'    =>  'required',
            'user'    =>  'required',
            'name'    =>  'required',
            'description'     =>  'required'
        ]);
        //dd($request->image);
if($request->image){
      //dd($request->image);
    $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    ]);

//    dd(Storage::disk('public')->delete(public_path('images/1602456978.jpeg')));
//    dd('images/'.$request->oldimg);
    $imageName = time().'.'.$request->image->extension();

    $request->image->move(public_path('images'), $imageName);
//dd('images/'.$request->oldimg);

//    if(Storage::exists(public_path('images/1602456978.jpeg'))){
//      dd('images/'.$request->oldimg);
//    }else{
//        Storage::disk('public')->delete($path);
//
//        Storage::delete(public_path('images/1602456978.jpeg'));

        //dd('images/'.$request->oldimg);
//    }
//    Storage::delete(public_path('images/1602456978.jpeg'));

    Post::where("id",$id)->update([
        'image'    =>   $imageName,
        'title'     =>  $request->get('title'),
        'user'     =>  $request->get('user'),
        'name'     =>  $request->get('name'),
        'description'     =>  $request->get('description')

    ]);
}else{
    Post::where("id",$id)->update([
//  'image'    =>  $request->get('image'),
    'title'     =>  $request->get('title'),
    'user'     =>  $request->get('user'),
    'name'     =>  $request->get('name'),
    'description'     =>  $request->get('description')

]);}


        return redirect('dashbord');

//        $this->validate($request, [
//            'first_name'    =>  'required',
//            'last_name'     =>  'required'
//        ]);
//
//        $student = Student::find($id);
//        $student->first_name = $request->get('first_name');
//        $student->last_name = $request->get('last_name');
//        $student->save();

    }


    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('dashbord');
    }
}
