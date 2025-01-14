<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('app');
});

Route::get('/login', function() {
   return view('login');
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', function() {
   return view('register');
});

Route::post('/register', [AuthController::class, 'register']);
