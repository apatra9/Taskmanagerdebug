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

//Route::post('teams/{id}/tasks', 'PersonController@testpersons');
Route::get('tasks/{task?}', 'TaskController@show');
Route::post('task','TaskController@func1');
Route::post('team','TeamController@store');
Route::get('teams/{team?}', 'TeamController@show');
//Route::apiResource('/team','TeamController');