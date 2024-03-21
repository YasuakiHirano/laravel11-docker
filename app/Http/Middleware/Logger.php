<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Logger
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        \Log::info('[middleware] start run logger');
        $this->outputRequest($request);
        $response = $next($request);
        \Log::info('[middleware] end run logger');

        return $response;
    }

    /**
     * リクエストパラメータ出力.
     * @param Request $request
     */
    private function outputRequest(Request $request)
    {
        $requestMethod = $request->method();
        $requestParams = json_encode($request->all());
        \Log::info("{$requestMethod} : {$requestParams}");
    }
}
