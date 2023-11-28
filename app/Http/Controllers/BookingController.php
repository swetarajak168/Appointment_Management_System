<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $departments = Department::withCount('doctor')->get();


        return view("bookings.index", compact("departments"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $departments = Department::findOrFail($id);

        $doctors = $departments->doctor()->with('schedule')->get();
        $timeSlots = [];

        foreach ($doctors as $doctor) {
            if ($doctor->schedule) {
                $scheduled_doctor[] = $doctor;
                // dump($scheduled_doctor);
            } else {
                $scheduled_doctor = [];
            }

        }
        
       
        
        return view('bookings.show', compact("scheduled_doctor"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
