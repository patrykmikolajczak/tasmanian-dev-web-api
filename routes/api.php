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
use Illuminate\Support\Facades\Redis;

Route::get('', function (Request $request) {
    return $request;
});

Route::domain('{workspace}.' . env('APP_DOMAIN'))->middleware(['workspace','auth:api'])->group(function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/user2', function (Request $request) {
        $key = 'user:profile:'.$request->user()->id;
        if(!Redis::exists($key)){
            Redis::set($key, json_encode($request->user()));
        }
        return response()->json(json_decode(Redis::get($key)));
    });
});
