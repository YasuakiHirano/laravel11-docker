<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class MiddlewareTestController extends Controller
{
    public function index()
    {
        // 有効なミドルウェアのエイリアスリストが取れる
        dd(Route::getMiddleware());
    }

    public function output()
    {
        echo "テスト！";
        logger()->info("ミドルウェアのテストです。");
    }
}
