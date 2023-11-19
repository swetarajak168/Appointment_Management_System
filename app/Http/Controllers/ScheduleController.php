<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Schedule;
use App\Http\Requests\ScheduleRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $schedules = Schedule::get();
        $doctors = Doctor::get();
        // return view('schedule.create',compact('doctors'));
        return view('schedule.index',compact('schedules','doctors'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $doctors = Doctor::get();
        return view('schedule.create',compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ScheduleRequest $request)
    {
        
        $data=$request->all();
    //    dd($request);
  
        $user = auth()->user()->id;
        // $doctor = auth()->user()->doctor->id;
    //    dd($doctor);
        if(auth()->user()->role ==1){
            $doctor_id = $data['doctor_id'];
        }
        else{
            $doctor_id =  auth()->user()->doctor->id;
        }
        Schedule::create([
            'nepali_date'=>$data['nepali_date'],
            'english_date'=>$data['english_date'],
            'limit'=>$data['limit'],
            'start_time'=>$data['start_time'],
            'end_time'=>$data['end_time'],
            'doctor_id'=> $doctor_id ,
            'user_id'=>$user
        ]);
        Alert::success('Success','Schedule added');
        return redirect()->route('schedule.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
