<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::controller(AuthController::class)->group(function ($router) {
    $router->get('/', 'login')->name('login');
    $router->get('/register', 'register')->name('register');
    $router->post('/signin', 'signin')->name('signin');
    $router->post('/signup', 'signup')->name('signup');
    $router->get('/logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function ($router) {
    $router->view('dashboard', 'dashboard')->name('dashboard');
});
