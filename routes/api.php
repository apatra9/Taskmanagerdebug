<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('tasks/{id}', 'TaskController@show');
Route::get('tasks/{id}/members/{member}', 'TaskController@showmembertasks');
Route::get('tasks','TaskController@showalive');
Route::post('tasks/{id}','TaskController@func1');
Route::patch('tasks/{id}', 'TaskController@patchitup');



Route::get('teams/{id?}', 'TeamController@show');
Route::post('teams','TeamController@store');
Route::post('teams/{id}/member', 'TeammembersController@func1');


