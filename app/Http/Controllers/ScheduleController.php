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
        if(auth()->user()->role ==2){

            $doctor = auth()->user()->doctor()->first();
            $schedule = Schedule::where('doctor_id',$doctor->id)->get();
            return view('schedule.index',compact('schedule','doctor'));
        
        }
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
    //    dd($data);
  
        $user = auth()->user()->id;
        // $doctor = auth()->user()->doctor->id;
    //    dd($doctor);
        if(auth()->user()->role ==1){
            $doctor_id = $data['doctor_id'];
        }
        else{
            $doctor_id =  auth()->user()->doctor->id;
        }
        foreach($data['start_time']as $key => $item){
            $schedule= new Schedule();
            $schedule->nepali_date = $data['nepali_date'];
            $schedule->english_date = $data['english_date'];
            $schedule->limit = $data['limit'];
            $schedule->start_time = $data['start_time'][$key];
            $schedule->end_time = $data['end_time'][$key];
            $schedule->doctor_id = $doctor_id ;
            $schedule->user_id = $user ;
            $schedule->save();

        }       
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
        // dd($id);
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();
        Alert::success('Success','Schedule deleted');
        return redirect()->route('schedule.index');
    }
}
