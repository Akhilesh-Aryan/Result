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
use App\Http\Controllers\Home;
use App\Models\Post;
use App\Models\Standard;

Route::get('/', function () {
    return view('home',['posts'=>Post::all()],['standards'=>Standard::all()]);
})->name('homepage');
Route::get('/insert', function () {
    return view('insert');
})->name('insertpage');
Route::post("/insert-Class",[Home::class,"insertClass"])->name('insertClass');
Route::post("/insert-Details",[Home::class,"insertDetails"])->name('insertDetails');