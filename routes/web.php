<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/home', function () {
//     return Response::file(public_path('index.html'));
// });

// Route::get('/login', function () {
//     return Response::file(public_path('resources/views/login.html'));
// });
// Route::get('/', [Controller::class, 'checkUser']);
Route::get('/home', [Controller::class, 'HomePage']);
Route::get('/login', [Controller::class, 'LoginPage']);
Route::get('/learn_html', [Controller::class, 'LearnHTML']);
Route::get('/learn_php', [Controller::class, 'LearnPHP']);
