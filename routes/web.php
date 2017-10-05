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
/*
Route::get('/', function () {
	$table = App\Sn_table::orderBy('created_at','desc')->take(30)->get()->reverse();
    return view('layouts.index', compact('table'));
});
*/
Route::get('/', 'SerialController@index');
Route::post('/posts', 'SerialController@store');
