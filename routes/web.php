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


/* Route::get('/', function () {
    return view('vtype');
});
*/
Route::get('/dashboard', function() {
    return view('dashboard');
});
Route::post('/login', 'AuthController@login');
Route::get('/', function() {
    return view('index');
});

Route::get('institute', 'InstituteMasterController@index');
Route::get('/add-institute', 'InstituteMasterController@create');
Route::post('/create-institute', 'InstituteMasterController@store');
Route::get('institute/edit/{id}', 'InstituteMasterController@edit');
Route::post('institute/update/{id}', 'InstituteMasterController@update');
Route::get('institute/delete/{id}', 'InstituteMasterController@destroy');

Route::get('programme', 'ProgramMasterController@index');
Route::get('/add-programme', 'ProgramMasterController@create');
Route::post('/create-programme', 'ProgramMasterController@store');
Route::get('programme/edit/{id}', 'ProgramMasterController@edit');
Route::post('programme/update/{id}', 'ProgramMasterController@update');
Route::get('programme/delete/{id}', 'ProgramMasterController@destroy');

Route::get('programtype', 'ProgramTypeController@index');
Route::get('/add-progType', 'ProgramTypeController@create');
Route::post('/create-progType', 'ProgramTypeController@store');
Route::get('progtype/edit/{id}', 'ProgramTypeController@edit');
Route::post('progtype/update/{id}', 'ProgramTypeController@update');
Route::get('progtype/delete/{id}', 'ProgramTypeController@destroy');

Route::get('programcat', 'ProgramCategoryController@index');
Route::get('/add-progcat', 'ProgramCategoryController@create');
Route::post('/create-progcat', 'ProgramCategoryController@store');
Route::get('progcat/edit/{id}', 'ProgramCategoryController@edit');
Route::post('progcat/update/{id}', 'ProgramCategoryController@update');
Route::get('progcat/delete/{id}', 'ProgramCategoryController@destroy');

Route::get('course', 'CourseMasterController@index');
Route::get('/add-course', 'CourseMasterController@create');
Route::post('/create-course', 'CourseMasterController@store');
Route::get('course/edit/{id}', 'CourseMasterController@edit');
Route::post('course/update/{id}', 'CourseMasterController@update');
Route::get('course/delete/{id}', 'CourseMasterController@destroy');

Route::get('grade', 'GradeMasterController@index');
Route::get('/add-grade', 'GradeMasterController@create');
Route::post('/create-grade', 'GradeMasterController@store');
Route::get('grade/edit/{id}', 'GradeMasterController@edit');
Route::post('grade/update/{id}', 'GradeMasterController@update');
Route::get('grade/delete/{id}', 'GradeMasterController@destroy');

// Route::get('/vehicletype','VehTypeController@index' );
// Route::get('/vehicletype/create', 'VehTypeController@create');
// Route::get('/vehicletype/upload', 'VehTypeController@upload');

// Route::post('/uploadvtype', 'VehTypeController@uploaddata');
// Route::get('/exportvtype', 'VehTypeController@exportdata');


// Route::post('/crt_vtype','VehTypeController@store' );
// Route::get('/pcat','PropertyCatController@index' );


// Route::get('/addpcat','PropertyCatController@create' );
// Route::post('/storepcat','PropertyCatController@store' );
// Route::get('/editpcat/{id}','PropertyCatController@update' );
// Route::post('/updpcat/{id}','PropertyCatController@edit' );
// Route::get('/delpcat/{id}','PropertyCatController@destroy');

// Route::get('/property','PropertyMasterController@index' );
// Route::get('/addprop','PropertyMasterController@create' );
// Route::get('/storeprop','PropertyMasterController@store' );
// Route::get('/editprop','PropertyMasterController@update' );
// Route::get('/updprop','PropertyMasterController@edit' );
// Route::get('/delprop','PropertyMasterController@destroy' );



//Route::post('/crt_vtype','VehTypeController@store' );

