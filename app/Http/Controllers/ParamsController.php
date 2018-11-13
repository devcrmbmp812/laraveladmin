<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParamsController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        $name = $request->name;
        return response($name, 200)
            ->header('Content-Type', 'text/plain');

    }
}
