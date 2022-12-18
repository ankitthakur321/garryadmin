<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ImageUploader;

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


Route::get('/', [Controller::class, 'index']);
Route::group(
    ['prefix' => 'admin'],
    function () {
        //User Routes
        Route::get('/', [UserController::class, 'index']);
        Route::get('/login', [UserController::class, 'login'])->name('admin/login');
        Route::post('/dologin', [UserController::class, 'doLogin']);
        Route::get('/dashboard', [UserController::class, 'dashboard']);
        Route::get('/logout', [UserController::class, 'doLogout']);


        //Blog Routes
        Route::get('/add-blog', [BlogController::class, 'addBlog']);
        Route::post('/save-blog', [BlogController::class, 'saveBlog']);
        Route::get('/view-blogs', [BlogController::class, 'viewBlogs']);
        Route::get('/edit-blog/{id}', [BlogController::class, 'editBlog']);
        Route::post('/update-blog', [BlogController::class, 'updateBlog']);
        Route::post('/delete-blog', [BlogController::class, 'destroyBlog']);

        //Image Upload Route
        Route::post('/upload-image', [ImageUploader::class, 'upload']);
    }
);

