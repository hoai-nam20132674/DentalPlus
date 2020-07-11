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
    return view('front-end.index');
});

Auth::routes();

Route::get('admin', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@postLogin')->name('postLogin');
Route::get('admin/index', 'HomeController@index')->name('home');
Route::get('admin/logout', 'Auth\LoginController@logout')->name('logout');
// user route
Route::get('admin/users', 'HomeController@users')->name('users');
Route::get('admin/user/add', 'HomeController@addUser')->name('addUser');
Route::post('admin/user/add', 'HomeController@postAddUser')->name('postAddUser');
Route::get('admin/user/edit/{id}', 'HomeController@editUser')->name('editUser');
Route::post('admin/user/edit/{id}', 'HomeController@postEditUser')->name('postEditUser');
Route::post('admin/user/edit-password/{id}', 'HomeController@postEditPassword')->name('postEditPassword');
// end user route
// service route

// end servive route

// blog route
Route::get('admin/blog/categories', 'HomeController@blogCategories')->name('blogCategories');
Route::get('admin/blog/categories/add', 'HomeController@addBlogCategorie')->name('addBlogCategorie');
Route::post('admin/blog/categories/add', 'HomeController@postAddBlogCategorie')->name('postAddBlogCategorie');
Route::get('admin/blog/categories/edit/{id}', 'HomeController@editBlogCategorie')->name('editBlogCategorie');
Route::post('admin/blog/categories/edit/{id}', 'HomeController@postEditBlogCategorie')->name('postEditBlogCategorie');
// end blog route

