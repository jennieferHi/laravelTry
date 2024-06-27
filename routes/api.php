<?php

use App\Http\Controllers\Custom\CustomController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Custom 路由
Route::group(["prefix" => "custom"], function () {
    Route::get('/v1/get', [CustomController::class, 'index']);
    Route::match(['put', 'post'],'/v1/edit/{id}', [CustomController::class,'edit']);
    Route::post('/v1/create', [CustomController::class, 'create']);
    Route::delete('/v1/delete/{id}', [CustomController::class, 'delete']);
});

// 确保这里也使用了正确的控制器，或者如果这个资源路由不应存在，则移除它
// Route::resource('custom', CustomController::class)->except(['create', 'edit']);
