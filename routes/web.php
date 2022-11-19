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

//laravel 9 prueba02 metodo welcome
//contacto
//about
//blog


Route::view ('/', 'welcome')->name('home');
Route::view ('/contact', 'contact')->name('contact');
Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::view ('/about', 'about')->name('about');

#Route::get('/', function () {
#    return view('welcome');
#})
