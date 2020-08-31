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

Route::get('tasks/{id}', 'TaskController@show');                                //Show single task by id
Route::get('tasks/{id}/members/{member}', 'TaskController@showmembertasks');       //Show pending tasks for team and member
Route::get('tasks','TaskController@showalive');                                    //Show all pending tasks
Route::post('tasks/{id}','TaskController@func1');                                  //Add a task to a team
Route::patch('tasks/{id}', 'TaskController@patchitup');                         //Mark a task as done



Route::get('teams/{id?}', 'TeamController@show');               //Show team by id
Route::post('teams','TeamController@store');                    //Add a team
Route::post('teams/{id}/member', 'TeammembersController@func1');   //Add a member to a team


