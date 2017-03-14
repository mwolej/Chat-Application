<?php

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
Route::get('index', function(){

    return View::make('index');

});
Route::get('welcome', function()
{
    $obj = new registration() ;
    return $obj->store();
});
Route::get('job', function () {
    return view('job');
});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::GET('admin','adminController@index');
Route::POST('admin','admin\LoginController@login');
Route::GET('admin','admin\LoginController@showLoginForm')->name('admin.login');
Route:: POST('admin-password/email','admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::POST('admin-password/reset','admin\ResetPasswordController@reset');
Route::GET('admin-password/reset','admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::GET('admin-password/reset/{token}','admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::resource('itemCRUD','ItemCRUDController');