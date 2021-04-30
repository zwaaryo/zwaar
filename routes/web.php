<?php

use Illuminate\Support\Facades\Route;
  use Illuminate\Cache\CacheServiceProvider;
  use App\Posts;
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
   return view('layouts.welcome');
 
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Viwe Profile
 Route::get('/profile', '\App\Http\Controllers\ProfileController@index');

 // Check Users See Web Link
 Route::get('/check', '\App\Http\Controllers\CheckController@check');
 // Add ID User
 Route::post('/add_id_user', '\App\Http\Controllers\CheckController@add_id_user_check')->name('add_id_user_check');


 // Add Link In View
Route::get('/add', '\App\Http\Controllers\ProfileController@addlink')->name('addlink'); 
// Add Link In DataBase
Route::post('/add', '\App\Http\Controllers\ProfileController@add')->name('addlink'); 

// Users Web
Route::get('/user_web', '\App\Http\Controllers\UserWebController@user_web')->name('user_web'); 
Route::post('/call', '\App\Http\Controllers\ProfileController@call')->name('call'); 

Route::post('add_post_user', '\App\Http\Controllers\PostsLinkUserController@add_post_user')->name('add_post_user'); 


Route::delete('delete/link/{id}' , '\App\Http\Controllers\ProfileController@destroy')->name('delete.destroy'); // Delete Link Web 
Route::get('checkbox_website_number/{id}' , '\App\Http\Controllers\ProfileController@checkbox_website_number')->name('checkbox_website_number');


//  زياره الرابط
Route::post('checkbox_user_id_link' , '\App\Http\Controllers\PostsLinkUserController@checkbox_user_id_link')->name('checkbox_user_id_link');
 

// Logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

 
Route::group([  'middleware' => ['role:admin']], function() {
// Controolr Admin
Route::get('/admin', 'AdminlteController@adminlte');
Route::get('admin/linknotEnabled', 'AdminlteController@linknotEnabled');
Route::get('admin', 'AdminlteController@index');// Function index
Route::get('allLink_enabled', 'AdminlteController@allLink_enabled');
Route::get('allLink_notenabled', 'AdminlteController@allLink_notenabled');
Route::get('addposts', 'AdminlteController@add_posts');// Add Posts In View
Route::post('add_post', 'AdminlteController@add')->name('add_post_admin');// Add Posts In DataBase
Route::delete('admin/delete/{id}' , 'AdminlteController@destroy')->name('delete.destroy.admin'); // Delete Link Web 

Route::get('all_users' , 'AdminlteController@all_users');
Route::get('call' , 'AdminlteController@call');
// delet Call user
Route::delete('delete/{id}' , 'AdminlteController@delete_call')->name('delete.call.admin');
 Route::get('clarCache','AdminlteController@clarCache');
 
 // Delete All Posts Users
 Route::get('delete_all_post_user' ,'AdminlteController@delete_all_post_user')->name('delete_all_post_user');
 Route::post('deleteallpost', 'AdminlteController@deletAll');

// Delet All User ID

Route::get('delete_all_user_id' ,'AdminlteController@delete_all_userid')->name('delete_all_user_id');
Route::post('deletealluserid', 'AdminlteController@deletAll_userid');


 // View Add Roles
 Route::get('addroles', 'AdminlteController@addroles')->name('addroles');

 // All Name Roles
 Route::get('allroles', 'AdminlteController@allroles')->name('allroles');


 // Add Roles
 Route::post('addroles', 'AdminlteController@add_roles')->name('add_roles');
 
 // View All Roles UserName
   Route::get('allroles_username', 'AdminlteController@all_roles_username')->name('all_roles_username');


// View Edit Roles
Route::delete('delete_roles/{id}', 'AdminlteController@delete_roles')->name('delete_roles');

// Edit Roles
Route::get('edit_role/{id}' , 'AdminlteController@edit_role')->name('edit_role');


// Add Roles And UserName
 Route::post('update_role', 'AdminlteController@update_role')->name('update_role');
Route::get('add_role_user' , 'AdminlteController@add_role_user')->name('add_role_user');

Route::post('add_roleusername' , 'AdminlteController@add_roleusername')->name('add_roleusername');

// Delete Role UserName
Route::delete('delete_roleusername/{id}' , 'AdminlteController@delete_roleusername')->name('delete.roleusername');

Route::post('add_roleuser','AdminlteController@add_roleuser')->name('add_roleuser');



});
Route::get('check' ,'\App\Http\Controllers\CheckController@user_check');
  
