<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/greeting', function(){
    return 'Hello World';
});


Route::get('/messageboard', 'ListController@list');
Route::get('/add', 'ListController@add');
Route::post('/post', 'ListController@save');
Route::delete('/{id}', 'ListController@delete');
Route::post('/editmessage/{id}', 'ListController@edit');
Route::put('/{id}', 'ListController@update');

// Route::put("/{id}", function($id){
    // return $id;
// });

// Route::put("/{id}", [ListController::class,'update']);