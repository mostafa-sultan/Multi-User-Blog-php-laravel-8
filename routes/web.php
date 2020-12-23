<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('home1');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//home
Route::get('/','App\Http\Controllers\HomeControl@index');
Route::get('/posts','App\Http\Controllers\HomeControl@posts');
Route::get('/posts/{category}','App\Http\Controllers\HomeControl@postcatigory');
Route::post('/comment','App\Http\Controllers\CommentController@store');

//post detal
Route::get('/postdetail/{id}','App\Http\Controllers\HomeControl@show');
// user profile
Route::get('/profile/{user}','App\Http\Controllers\Profile@index');

//dashbord
//dashborp all post
Route::get('/dashbord','App\Http\Controllers\Dashbord@index');
//dashborp form to edit
Route::get('/dashbord/edit/{id}','App\Http\Controllers\Dashbord@edit');

//dashborp reqst to update
Route::post('/dashbord/update/{id}','App\Http\Controllers\Dashbord@update');
//dashborp delete
Route::get('/dashbord/postdelete/{id}','App\Http\Controllers\Dashbord@destroy');

///dashborp add post form
Route::get('/dashbord/addform','App\Http\Controllers\Dashbord@create');
//dashborp req to add
Route::post('/dashbord/add','App\Http\Controllers\Dashbord@store');



//
//
//
//
//////dashborp all post
////Route::get('/a','App\Http\Controllers\PostController@index');
//////dashborp form to edit
////Route::get('/postupdate/{id}','App\Http\Controllers\PostController@edit');
//////dashborp reqst to update
////Route::post('/update/{id}','App\Http\Controllers\PostController@update');
//////dashborp delete
////Route::get('/postdelete/{id}','App\Http\Controllers\PostController@destroy');
//////dashborp add post form
////Route::get('/addform','App\Http\Controllers\PostController@create');
//////dashborp req to add
////Route::post('/addpost','App\Http\Controllers\PostController@store');
//////dashborp singel post
////Route::get('/selectpost/{id}','App\Http\Controllers\PostController@show');
//
//
//
////home
////test
//Route::get('/','App\Http\Controllers\HomeControl@index');
//Route::get('/posts','App\Http\Controllers\HomeControl@posts');
//Route::get('/posts/{category}','App\Http\Controllers\HomeControl@postcatigory');
//Route::post('/comment','App\Http\Controllers\CommentController@store');
//
////post detal
//Route::get('/postdetail/{id}','App\Http\Controllers\HomeControl@show');
//// user profile
//Route::get('/profile/{user}','App\Http\Controllers\Profile@index');
//
////profile
////dashborp all post
//Route::get('/a','App\Http\Controllers\PostController@index');
////dashborp form to edit
//Route::get('/postupdate/{id}','App\Http\Controllers\PostController@edit');
////dashborp reqst to update
//Route::post('/update/{id}','App\Http\Controllers\PostController@update');
////dashborp delete
//Route::get('/postdelete/{id}','App\Http\Controllers\PostController@destroy');
////dashborp add post form
//Route::get('/addform','App\Http\Controllers\PostController@create');
////dashborp req to add
//Route::post('/addpost','App\Http\Controllers\PostController@store');
////dashborp singel post
//Route::get('/selectpost/{id}','App\Http\Controllers\PostController@show');
//
////dashbord
////dashborp all post
//Route::get('/dashbord','App\Http\Controllers\Dashbord@index');
////dashborp form to edit
//Route::get('/dashbord/edit/{id}','App\Http\Controllers\Dashbord@edit');
//
////dashborp reqst to update
//Route::post('/dashbord/update/{id}','App\Http\Controllers\Dashbord@update');
////dashborp delete
//Route::get('/dashbord/postdelete/{id}','App\Http\Controllers\Dashbord@destroy');
//
/////dashborp add post form
//Route::get('/dashbord/addform','App\Http\Controllers\Dashbord@create');
////dashborp req to add
//Route::post('/dashbord/add','App\Http\Controllers\Dashbord@store');
////dashborp singel post
//Route::get('/user/selectpost/{id}','App\Http\Controllers\Dashbord@show');
