<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\editor\EditorController;
use App\Http\Controllers\SocialController;

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
});

Auth::routes();
// User Route
Route::middleware(['auth','user-role:user'])->group(function()
{
    Route::get("/home",[HomeController::class,'userHome'])->name('home');
});

// Editor Route
Route::middleware(['auth','user-role:editor'])->group(function()
{
    Route::get("/editor/home",[EditorController::class,'editorHome'])->name('home.editor');
});

// Admin Route
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/home",[AdminController::class,'adminHome'])->name('home.admin');
});


//! Facebook Login Routes
// Route::get('auth/facebook', 'App\Http\ControllersSocialController@facebookRedirect');
// Route::get('auth/facebook/callback', 'App\Http\ControllersSocialController@loginWithFacebook');

//! Google Login Routes 
Route::controller(SocialController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
    Route::get('auth/facebook', 'facebookRedirect');
    Route::get('auth/facebook\callback', 'loginWithFacebook');

});