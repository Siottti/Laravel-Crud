<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\registration;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


class RegistrationController extends Controller
{
    public function registration(Request $request)
    {
        $registration = new registration;
        $registration->fname = $request->fname  ;
        $registration->email = $request->email;
        $registration->date = $request->date;
        $registration->password = $request->password;
        $registration->password_confirmation = $request->password_confirmation;
      
        $registration->save();
        return view('registration');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "fname" => ['required', 'min:4'],
            "email" => ['required', 'email', Rule::unique('registrations', 'email')],  
            'password' => 'required|min:6',
            'date' => 'required',
            'password_confirmation' => 'required',
        ]);
        
        Log::info($validated);
        $user = registration::create($validated);
        auth()->login($user);
    }
}
