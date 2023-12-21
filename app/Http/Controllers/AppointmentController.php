<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\appointment;

class AppointmentController extends Controller
{
    public function appointment(Request $request)
    {
        $appointment = new Appointment;
        $appointment-> fname = $request->fname;
        $appointment-> email = $request->email;
        $appointment-> rson = $request->rson;
        $appointment-> time = $request->time;
        $appointment-> date = $request->date;


        $appointment->save();
        return view('appointment');
    }

    public function getData()
    {
        $appointments = Appointment::all();

        return view('list', ["data" => $appointments]);
    }
       
}
