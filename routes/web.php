<?php

use App\Http\Controllers\PostController;
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
    $router->get('/login', 'login')->name('login');
    $router->get('/register', 'register')->name('register');
    $router->post('/signin', 'signin')->name('signin');
    $router->post('/signup', 'signup')->name('signup');
    $router->get('/logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function ($router) {

    $router->redirect('', [PostController::class, 'index'])->name('posts.index');
    $router->controller(PostController::class)
        ->prefix('posts')
        ->group(function ($router) {
        $router->get('create', 'create')->name('posts.create');
        $router->post('store', 'store')->name('posts.store');
//        $router->get('', '')->name('posts.');
//        $router->get('', '');
    });
});
