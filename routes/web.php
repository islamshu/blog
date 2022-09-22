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

Route::get('/', function () {
    return view('index');
});
Route::get('/blogs', 'App\Http\Controllers\HomeController@blogs');
Route::get('/blog/{id}', 'App\Http\Controllers\HomeController@blog')->name('blog');

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function () {
    Route::get('/','App\Http\Controllers\HomeController@dashboard')->name('dashboard');
    Route::get('logout','App\Http\Controllers\HomeController@logout')->name('logout');
    Route::get('edit_profile','App\Http\Controllers\HomeController@edit_profile')->name('edit_profile');
    Route::post('update_profile','App\Http\Controllers\HomeController@update_profile')->name('update_profile');
    Route::resource('blogs','App\Http\Controllers\BlogController');
});
Route::get('login','App\Http\Controllers\HomeController@login_dashboard')->name('login_dashboard');
Route::post('login_dashboard','App\Http\Controllers\HomeController@login_dashboard_post')->name('login_dashboard_post');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
