<?php

use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\PostController;
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


Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
Route::get('/acercade/{nombre?}', function ($nombre = "sin datos") {
    return "Hola mundo ".$nombre;
})->name('acerca');

Route::get('home/{nombre?}/{apellido?}', function ($nombre = "sin datos", $apellido = "sin datos") {
     return view("home")->with("nombre", $nombre." ".$apellido);
})->name('home');
*/

//Route::get('post', [PostController::class, 'index'])->name('post');

// Route::group(['prefix' => 'admin'], function () {
//     Route::resource('post', PostController::class);   
// });


Route::resource('dashboard/post', PostController::class); 
Route::post('dashboard/post/{post}/image', [PostController::class, 'image'])->name('post.image');

Route::resource('dashboard/category', CategoryController::class); 



