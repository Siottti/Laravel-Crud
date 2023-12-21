<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    
    
    public function create(Request $request)
    {
        $profile = new Profile;
        $profile->fname = $request->fname;
        $profile->lname = $request->lname;
        $profile->mname = $request->mname;

        $profile->save();
        return view('test');
    }


    public function getlist()
    {
        $profiles = Profile::all();

        return view('getData', ["data" => $profiles]);
    
    }
}

  