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
Route::get('admin/blogs', 'HomeController@blogs')->name('blogs');
Route::get('admin/blog/add', 'HomeController@addBlog')->name('addBlog');
Route::post('admin/blog/add', 'HomeController@postAddBlog')->name('postAddBlog');
Route::get('admin/blog/edit/{id}', 'HomeController@editBlog')->name('editBlog');
Route::post('admin/blog/edit/{id}', 'HomeController@postEditBlog')->name('postEditBlog');
Route::get('admin/blog/delete/{id}', 'HomeController@deleteBlog')->name('deleteBlog');
Route::get('admin/blog/categories', 'HomeController@blogCategories')->name('blogCategories');
Route::get('admin/blog/categorie/add', 'HomeController@addBlogCategorie')->name('addBlogCategorie');
Route::post('admin/blog/categorie/add', 'HomeController@postAddBlogCategorie')->name('postAddBlogCategorie');
Route::get('admin/blog/categorie/edit/{id}', 'HomeController@editBlogCategorie')->name('editBlogCategorie');
Route::post('admin/blog/categorie/edit/{id}', 'HomeController@postEditBlogCategorie')->name('postEditBlogCategorie');
Route::get('admin/blogs/categorie/delete/{id}', 'HomeController@deleteBlogCategorie')->name('deleteBlogCategorie');
// end blog route

// service route
Route::get('admin/services', 'HomeController@services')->name('services');
Route::get('admin/service/add', 'HomeController@addService')->name('addService');
Route::post('admin/service/add', 'HomeController@postAddService')->name('postAddService');
Route::get('admin/service/edit/{id}', 'HomeController@editService')->name('editService');
Route::post('admin/service/edit/{id}', 'HomeController@postEditService')->name('postEditService');
Route::get('admin/service/delete/{id}', 'HomeController@deleteService')->name('deleteService');
Route::get('admin/service/categories', 'HomeController@serviceCategories')->name('serviceCategories');
Route::get('admin/service/categorie/add', 'HomeController@addServiceCategorie')->name('addServiceCategorie');
Route::post('admin/service/categorie/add', 'HomeController@postAddServiceCategorie')->name('postAddServiceCategorie');
Route::get('admin/service/categorie/edit/{id}', 'HomeController@editServiceCategorie')->name('editServiceCategorie');
Route::post('admin/service/categorie/edit/{id}', 'HomeController@postEditServiceCategorie')->name('postEditServiceCategorie');
Route::get('admin/service/categorie/delete/{id}', 'HomeController@deleteServiceCategorie')->name('deleteServiceCategorie');
// end service route
