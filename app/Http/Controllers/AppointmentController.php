<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'            => 'required|string|max:255', 
            'phoneNo'         => 'required|digits:10', 
            'email'           => 'required|email',
            'appointmentType' => 'required|string|max:255',
        ]);
        $data = $request->all();
        // dd($data);
        Appointment::create($data);
        return redirect()->back()->with('message',"Appointment Added Successfully.");
    }
}
