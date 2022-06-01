<?php

// use Illuminate\Support\Facades\Route;

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

// Route::get('/messageboard', function () {
//     return 1;
// });
Route::get('/messageboard', 'ListController@list');
Route::get('/add', 'ListController@add');
Route::post('/post', 'ListController@save');
Route::delete('/{id}', 'ListController@delete');
Route::post("/editmessage/{id}", 'ListController@edit');
Route::put("/{id}", 'ListController@update');

// Route::get('/messageboard', [ListController::class, 'list']);
// Route::get('/add', [ListController::class, 'add']);
// Route::post('/post', [ListController::class, 'save']);
// Route::delete('/{id}', [ListController::class, 'delete']);
// Route::post("/editmessage/{id}", [ListController::class,'edit']);
// Route::patch("/{id}", [ListController::class,'update']);