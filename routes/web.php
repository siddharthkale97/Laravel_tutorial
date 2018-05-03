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

Route::get('/', function(){
    return view('welcome');
});
Route::get('/home','HomeController@index')->name('home');

Auth::routes();

Route::middleware(['auth'])->group(function(){//middleware to make user guest user can't access these pages
  Route::resource('/companies', 'CompaniesController');
  Route::get('/projects/create/{company_id?}', 'ProjectsController@create');
  Route::resource('/projects', 'ProjectsController');
  Route::resource('/roles', 'RolesController');
  Route::resource('/tasks', 'TasksController');
  Route::resource('/users', 'UsersController');
  Route::resource('/comments', 'CommentsController');

});
