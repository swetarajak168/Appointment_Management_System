<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Http\Requests\EducationRequest;
use App\Http\Requests\ExperienceRequest;
use App\Models\Doctor;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Education;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    //
    public function index()
    {
        $doctors = Doctor::latest()->get();

        return view('doctors.index')->with('doctors', $doctors);
    }
    public function create()
    {
        return view('doctors.create');
    }


    public function store(DoctorRequest $request)
    {
        // dd( $request->all());
        return DB::transaction(function () use ($request) {
            $validateddata = $request->validated();
            // dd($validateddata['level']);
            $validateddata['name'] = $validateddata['fname'] . ' ' . $validateddata['lname'];
            $user_store = User::create($validateddata);
            
            $validateddata['user_id'] = $user_store->id;
            $doctor_store = Doctor::create($validateddata);
         
            $validateddata['doctor_id'] = $doctor_store->id;
            Education::create([
                'Level' => $validateddata['level'],
                'Institution' => $validateddata['Institution'],
                'CompletionDate' => $validateddata['CompletionDate'],
                'Board' => $validateddata['Board'],
                'Marks' => $validateddata['Scores'],
                'doctor_id' => $validateddata['doctor_id']
            ]);
                
            Experience::create([
                'Organization Name' =>$validateddata['organization_name'],
                'Position'=>$validateddata['position'],
                'StartDate'=>$validateddata['startDate'],
                'EndDate'=>$validateddata['endDate'],
                'JobDescription'=>$validateddata['jobDescription'],
                'doctor_id' => $validateddata['doctor_id']
            ]);
                
            return redirect()->route('doctor.index');
        });
       
    }





    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.edit', [
            'doctor' => $doctor,
        ]);
    }
    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.show', ['doctor' => $doctor]);
    }

    public function update(DoctorRequest $request, Doctor $doctor)
    {
        // dd($doctor);
        return DB::transaction(function () use ($request, $doctor) {
            $doctorvalidated = $request->validated();
            $doctorvalidated['name'] = $doctorvalidated['fname'] . ' ' . $doctorvalidated['lname'];
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('image', 'public');
                $doctorvalidated['image'] = $imagePath;
            }
            $user = User::findOrFail($doctor->user_id);
            $user->update($doctorvalidated);
            $doctor->update($doctorvalidated);
            return redirect()->route('doctor.index')->withSuccess('Doctor was successfully updated.');
        });
    }

    public function destroy(Doctor $doctor)
    {
        return DB::transaction(function () use ($doctor) {
            $doctor->user->delete();
            $doctor->delete();
            return redirect()->route('doctor.index')->withSuccess('Doctor was successfully deleted.');
        });
    }
}