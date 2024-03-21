<?php

use App\Http\Middleware\Hello;
use App\Http\Middleware\Logger;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // ミドルウェアを追加して、自動的に全体に適用する
        // $middleware->append(Logger::class);

        // Loggerミドルウェアに別名'logger'をつける(自動的に使われることはない)
        $middleware->alias([
            'logger' => Logger::class,
            'hello' => Hello::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
