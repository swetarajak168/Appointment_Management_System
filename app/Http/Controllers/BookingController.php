<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Schedule;
use App\Models\Doctor;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $departments = Department::get();
        // dd($departments);
        //
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
        // dd($departments->id);
        // $doctors = Doctor::where('department_id',$departments->id)->get();
        $doctors = $departments->doctor()->with('schedule')->get();
        // dd($doctors);
        return view('bookings.show',compact("doctors"));

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
