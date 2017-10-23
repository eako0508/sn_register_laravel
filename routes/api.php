<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Use App\Sn_table;
/*
Route::get('sn_table', function(){
	return Sn_table::all();

});

Route::get('sn_table/{id}', function($id){
	return Sn_table::find(id);
});
*/

Route::get('/sn_table', 'SerialController@lookup');
Route::post('/posts', 'SerialController@store');
Route::delete('/delete/{id}', 'SerialController@destroy');
Route::get('/add', 'SerialController@api_add');
