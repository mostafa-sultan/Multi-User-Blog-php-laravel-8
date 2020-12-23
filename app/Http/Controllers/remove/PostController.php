<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
//        $posts = Post::all()->random();
        // dd($students);
        //   $students = DB::select('select * from students');
        //        $students = Student::all()->toArray();
        //   dd($students);
        return view('user.profile', compact('posts'));
    }


    public function create()
    {
        return view('user.addform');
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
            'description'     =>  $request->get('description')

        ]);
        return redirect('a');
    }


    public function show($id)
    {
        $post = Post::find($id);
        //  dd($students);
        return view('user.select', compact('post', 'id'));    }


    public function edit($id)
    {
        $posts = Post::find($id);
        //  dd($students);
        return view('user.update', compact('posts', 'id'));    }

    public function update(Request $request,$id)
    {
//       dd($request);
         $this->validate($request, [
             'image'    =>  'required',
             'title'    =>  'required',
             'user'    =>  'required',
             'name'    =>  'required',
            'description'     =>  'required'
        ]);
        Post::where("id",$id)->update([
           'image'    =>  $request->get('image'),
            'title'     =>  $request->get('title'),
            'user'     =>  $request->get('user'),
            'name'     =>  $request->get('name'),
            'description'     =>  $request->get('description')

        ]);
        return redirect('/a');

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
        return redirect('a');
    }
}


//
//public function index()
//{
//    $posts = Post::all();
//    // dd($students);
//    //   $students = DB::select('select * from students');
//    //        $students = Student::all()->toArray();
//    //   dd($students);
//    return view('dashbord.show', compact('posts'));
//}
//
//
//public function create()
//{
//    return view('dashbord.addform');
//}
//
//
//public function store(Request $request)
//{
////        $this->validate($request, [
////            'first_name'    =>  'required',
////            'last_name'     =>  'required'
////        ]);
////        $student = new Student([
////            'first_name'    =>  $request->get('first_name'),
////            'last_name'     =>  $request->get('last_name')
////        ]);
////        $student->save();
//    $this->validate($request, [
//        'image'    =>  'required',
//        'title'    =>  'required',
//        'user'    =>  'required',
//        'name'    =>  'required',
//        'description'     =>  'required'
//    ]);
//    Post::create([
//        'image'    =>  $request->get('image'),
//        'title'     =>  $request->get('title'),
//        'user'     =>  $request->get('user'),
//        'name'     =>  $request->get('name'),
//        'description'     =>  $request->get('description')
//
//    ]);
//    return redirect('a');
//}
//
//
//public function show($id)
//{
//    $post = Post::find($id);
//    //  dd($students);
//    return view('dashbord.select', compact('post', 'id'));    }
//
//
//public function edit($id)
//{
//    $posts = Post::find($id);
//    //  dd($students);
//    return view('dashbord.update', compact('posts', 'id'));    }
//
//public function update(Request $request,$id)
//{
////       dd($request);
//    $this->validate($request, [
//        'image'    =>  'required',
//        'title'    =>  'required',
//        'user'    =>  'required',
//        'name'    =>  'required',
//        'description'     =>  'required'
//    ]);
//    Post::where("id",$id)->update([
//        'image'    =>  $request->get('image'),
//        'title'     =>  $request->get('title'),
//        'user'     =>  $request->get('user'),
//        'name'     =>  $request->get('name'),
//        'description'     =>  $request->get('description')
//
//    ]);
//    return redirect('/a');
//
////        $this->validate($request, [
////            'first_name'    =>  'required',
////            'last_name'     =>  'required'
////        ]);
////
////        $student = Student::find($id);
////        $student->first_name = $request->get('first_name');
////        $student->last_name = $request->get('last_name');
////        $student->save();
//
//}
//
//
//public function destroy($id)
//{
//    $post = Post::find($id);
//    $post->delete();
//    return redirect('a');
//}
//}
