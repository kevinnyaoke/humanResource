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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addemployee','PagesController@addemployee')->name('addemployee');

//Admin
Route::post('/submitemployee','AdminController@submitemployee')->name('submitemployee');
Route::get('/viewemployee','AdminController@viewemployee')->name('viewemployee');
Route::get('/adddepartment','AdminController@adddepartment')->name('adddepartment');
Route::post('/adddepartment','AdminController@submitdepartment')->name('submitdepartment');
Route::get('/viewdepartment','AdminController@viewdepartment')->name('viewdepartment');
Route::post('/updateemployee','AdminController@update')->name('updateemployee');
Route::post('/asignsalary','AdminController@asignsalary')->name('asignsalary');
Route::get('/viewsalary','AdminController@viewsalary')->name('viewsalary');
Route::post('/updatedepartment','AdminController@updatedep')->name('updatedepartment');
Route::get('/asigndep','AdminController@asigndep')->name('asigndep');
Route::post('/submitdep','AdminController@submitdep')->name('submitdep');



Route::get('delete/{id}',[
    'uses'=>'AdminController@delete',
    'as'=>'delete',
]);
Route::get('edit/{id}',[
    'uses'=>'AdminController@edit',
    'as'=>'edit',
]);
Route::get('employeesalary/{id}',[
    'uses'=>'AdminController@salary',
    'as'=>'salary',
]);
Route::get('deletedep/{id}',[
    'uses'=>'AdminController@deletedep',
    'as'=>'deletedep',
]);
Route::get('editdepartment/{id}',[
    'uses'=>'AdminController@editdep',
    'as'=>'editdep',
]);
Route::get('asigndepartment/{id}',[
    'uses'=>'AdminController@department',
    'as'=>'department',
]);
