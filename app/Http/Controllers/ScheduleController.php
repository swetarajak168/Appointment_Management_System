<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScheduleRequest;
use App\Models\Doctor;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Schedule::get();

        $doctors = Doctor::get();
        

        $auth_user = auth()->user();
        if ($auth_user->role == 2) {

            $doctor = $auth_user->doctor()->first();
            $schedule = Schedule::where('doctor_id', $doctor->id)->get();
            return view('schedule.index', compact('schedule', 'doctor', 'auth_user'));

        }
        return view('schedule.index', compact('schedules', 'doctors', 'auth_user'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ScheduleRequest $request)
    {
        $data = $request->all();

        $user = auth()->user()->id;

        if (auth()->user()->role == 1) {
            $doctor_id = $data['doctor_id'];
        } else {
            $doctor_id = auth()->user()->doctor->id;
        }
        foreach ($data['start_time'] as $key => $item) {
            $startTime = Carbon::parse($data['start_time'][$key]);
            $endTime = Carbon::parse($data['end_time'][$key]);
            $timeSlots = [];
            
            $currentTime = clone $startTime;

            while ($currentTime < $endTime) {
                $timeSlots[] = $currentTime->format('H:i');
                $currentTime->addMinutes(30); // Add 30 minutes for the next time slot
            }
            foreach ($timeSlots as $key => $timeSlot) {
                $schedule = new Schedule();
                $schedule->nepali_date = $data['nepali_date'];
                $schedule->english_date = $data['english_date'];
    
                $schedule->start_time = $timeSlot;
                
                // Assuming a fixed duration of 30 minutes for each time slot
                $schedule->end_time = Carbon::parse($timeSlot)->addMinutes(30)->format('H:i');
    
                $schedule->doctor_id = $doctor_id;
                $schedule->user_id = $user;
                $schedule->save();
            }
           

        }
        Alert::success('Success', 'Schedule added');
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
        Alert::success('Success', 'Schedule deleted');
        return redirect()->route('schedule.index');
    }
}
