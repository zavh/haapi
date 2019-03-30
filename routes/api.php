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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::post('/user/login', ['middleware' => 'cors',function(){
// 	return ['status'=>'success'];
// }]);
Route::middleware(['cors'])->group(function () {
    Route::post('/user/login', 'UserController@login');
    Route::post('/user/register', 'UserController@register');
});

Route::middleware(['jwt.auth','cors'])->group(function () {

    Route::get('users/list', function(){
        $users = App\User::all();
        $response = ['success'=>true, 'data'=>$users];
        return response()->json($response, 201);
    });
});
