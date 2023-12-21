<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function getProfile(Request $request)
    {
        return response()->json([
            "name" => $request->fname,
            "age" => 22
        ]);
    }

    
}
