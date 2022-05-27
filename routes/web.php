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
Route::get('/article/{id}', [PostController::class, 'show'])->whereNumber('id')->name('article'); //permet de vérifier si bien un nombre
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
