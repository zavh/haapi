<?php

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
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

    Route::get('/users/list', function(){
        $users = App\User::all();
        $response = ['success'=>true, 'data'=>$users];
        return response()->json($response, 201);
    });

    Route::get('/sse', function(){

        $response = new StreamedResponse();
        $response->setCallback(function () {
            $serverTime = time();        
            $data['id'] = $serverTime;
            $data['data'] = date("h:i:s", time());
            echo 'data: ' . json_encode($data) .PHP_EOL;
            echo 'retry :10000'.PHP_EOL;
            ob_flush();
            flush();
            sleep(60);
        });
        $response->headers->set('Content-Type', 'text/event-stream');
        $response->headers->set('X-Accel-Buffering', 'no');
        $response->headers->set('Cache-Control', 'no-cache');
        
        return $response;
    });
});
