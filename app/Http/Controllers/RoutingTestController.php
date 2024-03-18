<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingTestController extends Controller
{
    public function index()
    {
        return view('routing_test');
    }

    public function param(Request $request)
    {
        dd(
            $request->method(),
            $request->age,
            $request->my_name
        );
    }

    public function urlParam(int $age, string $name)
    {
        dd($age, $name);
    }
}
