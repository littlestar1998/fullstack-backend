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

// 小程序api
Route::any('wxMpLogin/login', 'Auth\\WxMpLoginController@login')->name('api/wxMpLogin/login');

Route::group(['prefix' => 'miniprogram','namespace' => 'MiniProgram','middleware' => 'auth:api'],function ($router) {
    // 小程序登录认证后路由
});