<?php

use App\Http\Controllers\MiddlewareTestController;
use App\Http\Controllers\RoutingTestController;
use App\Http\Middleware\Hello;
use App\Http\Middleware\Logger;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

// --- ルーティングのテスト ---
Route::get('/routing-test-page', function () {
    return view('routing_test');
});

Route::get('/routing-test', [RoutingTestController::class, 'index']);

Route::get('/param-test', [RoutingTestController::class, 'param'])->name('routing.request.test');
Route::post('/param-test', [RoutingTestController::class, 'param'])->name('routing.request.test');

Route::get('/url-param-test/{age}/{name}', [RoutingTestController::class, 'urlParam'])->name('routing.url_request.test');

// --- ミドルウェアのテスト ---
Route::get('/middleware-test', [MiddlewareTestController::class, 'index']);

// 直接指定で割り当て
// Route::get('/middleware-test-output', [MiddlewareTestController::class, 'output'])->middleware(Logger::class);

// エイリアス指定で割り当て
Route::get('/middleware-test-output', [MiddlewareTestController::class, 'output'])->middleware('logger');


// グループへの割り当て
// Route::middleware([Logger::class, Hello::class])->group(function () {
//     Route::get('/middleware-test1', function () {
//         logger()->info('test1');
//     });

//     Route::get('/middleware-test2', function () {
//         logger()->info('test2');
//     });
// });

// グループへの割り当てでエイリアスで指定する
Route::middleware(['logger', 'hello'])->group(function () {
    Route::get('/middleware-test1', function () {
        logger()->info('test1');
    });

    Route::get('/middleware-test2', function () {
        logger()->info('test2');
    });
});
