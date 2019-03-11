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


// Route for profile management 
Route::post('login', 'ApiController\AuthController@dologin'); //route for login 

// Route::group(['middleware' => ['jwt.auth', 'ApiLog']], function () {
    
 
// });
// Route::get('refresh', 'ApiController\AuthApiController@refresh');