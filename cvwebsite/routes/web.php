<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NinethController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/post/create', function () {
    DB::table('post')->insert([
       'title' => 'MyTitle',
       'body' => 'MyBody'
    ]);
});

Route::get('/post', function(){
   $post = post::find(1);
   return $post;
});

Route::get('blog', [BlogController::class, 'index']);
Route::get('blog/create', function(){
     return view('post.create');
});


Route::post('blog/create', [BlogController::class, 'store'])->name('add-post');

Route::get('post/{id}', [BlogController::class, 'get_post']);


// Laboratory 9

Route::get('{lang}',function ($lang){
	App()->setLocale($lang);
	return view('main'); //main, about, contact
});

Route::get('lang/{lang}', [NinethController::class, 'index']);

