<?php

namespace App\Http\Controllers;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllController extends Controller {
    function test()
    {
        return response()->json(Application::all());
    }
}
