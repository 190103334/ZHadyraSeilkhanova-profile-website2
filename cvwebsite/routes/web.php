<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Http\Controllers\BlogController;
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


Route::get('blog', [BlogController::class, 'index']);
Route::get('blog/create', function(){
     return view('post.create');
});

<<<<<<< HEAD
Route::post('blog/create', [BlogController::class, 'store'])->name('add-post');
=======
Route::post('post/create', [BlogController::class, 'store'])->name('add-post');
>>>>>>> e4127c8212bdcecd137fecc086df3df0fc95de7a

Route::get('post/{id}', [BlogController::class, 'get_post']);