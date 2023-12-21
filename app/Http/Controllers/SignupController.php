<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Signup;

class SignupController extends Controller
{
    public function signup(Request $request)
    {
        $signup = new Signup;
        $signup->fname = $request->fname;
        $signup->lname = $request->lname;
        $signup->mname = $request->mname;
        $signup->email = $request->email;
        $signup->pass = $request->pass;
        $signup->cpass = $request->cpass;

        $signup->save();
        return view('signup');
    }
}
