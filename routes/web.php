<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', [PostController::class, 'index'])->name('welcome');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); //permet de créer un post
Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store'); //route post qui va avec form.blade.php permet de créer un post
Route::get('/posts/{id}', [PostController::class, 'show'])->whereNumber('id')->name('posts.show'); //permet de vérifier si bien un nombre
Route::get('/contact', [PostController::class, 'contact'])->name('contact');


//Route::get('article', [PostController::class, 'article']);
//on peut aussi écrire 
//Route::get('article', 'App\Http\Controllers\PostController@article');






/* 
Route::get('/hello', function() {
    return response()->json([
        'title' => 'mon super titre',
        'description' => 'Ma super description'
    ]);
});

Route::get('/article', function() {
        return view('article');
}); */
