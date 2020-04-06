<?php
use Symfony\Component\HttpFoundation\Response;

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

Route::get('/', 'PostController@index')
->middleware(['web','auth:admin'])->name('post.index');

Auth::routes();



Route::get('admin/login','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login','Admin\LoginController@login');
Route::post('admin/logout','Admin\LoginController@logout')->name('admin.logout');






//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
