<?php

use App\Http\Controllers\MainController;
use Illuminate\Routing\Router;
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

// Route::get('/', function () {
//     return view('welcome');
// });
;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[MainController::class,'index'])->name('home');
Route::post('/register',[MainController::class,'register'])->name('register');
//Route::get('/welcome',[MainController::class,'news']);


//Route::get('/test',[MainController::class,'test']);
Route::get('/news',[MainController::class,'news']);
Route::get('/post',[MainController::class,'post']);

