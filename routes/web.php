<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroller;
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

Route::get('/',[formcontroller::class,'registerformget']);
Route::post('/',[formcontroller::class,'registerformpost']);
Route::get('/login',[formcontroller::class,'loginget']);
Route::post('/login',[formcontroller::class,'loginpost']);


