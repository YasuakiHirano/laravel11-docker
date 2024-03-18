<?php

use App\Http\Controllers\RoutingTestController;
use Illuminate\Support\Facades\Route;

Route::get('/routing-test-page', function () {
    return view('routing_test');
});

Route::get('/routing-test', [RoutingTestController::class, 'index']);

Route::get('/param-test', [RoutingTestController::class, 'param'])->name('routing.request.test');
Route::post('/param-test', [RoutingTestController::class, 'param'])->name('routing.request.test');

Route::get('/url-param-test/{age}/{name}', [RoutingTestController::class, 'urlParam'])->name('routing.url_request.test');