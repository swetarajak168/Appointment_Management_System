<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Doctor;
use App\Models\Experience;
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
        // dd($request->Institution);
        return DB::transaction(function () use ($request) {
            $validateddata = $request->validated();
            // dd($validateddata['Level']);
            $validateddata['name'] = $validateddata['fname'] . ' ' . $validateddata['lname'];
            $validateddata['password'] = Hash::make( $validateddata['password']);
            $user_store = User::create($validateddata);

            $validateddata['user_id'] = $user_store->id;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image');
                $fileName = $imagePath->getClientOriginalName();
                $validateddata['image'] = 'storage/img/' . $fileName;
                $imagePath->storeAs('public/img', $fileName);
            }

            $doctor_store = Doctor::create($validateddata);


            $educationData = [];
            for ($i = 0; $i < count($validateddata['institution']); $i++) {               
                $educationData = [
                    'doctor_id' => $doctor_store->id,
                    'institution' => $validateddata['institution'][$i],
                    'board' => $validateddata['board'][$i],
                    'level' => $validateddata['level'][$i],
                    'completionDate' => $validateddata['completionDate'][$i],
                    'marks' => $validateddata['marks'][$i],
                ];
                Education::create($educationData);
            }

            $experiencedata = [];
            for ($i = 0; $i < count($validateddata['organization_name']); $i++) {      
                $experiencedata = [
                    'doctor_id' => $doctor_store->id,
                    'organization_name' =>  $validateddata['organization_name'][$i],
                    'position' =>  $validateddata['position'][$i],
                    'startDate' =>  $validateddata['startDate'][$i],
                    'endDate' =>  $validateddata['endDate'][$i],
                    'jobDescription' =>  $validateddata['jobDescription'][$i],

                ];
                Experience::create($experiencedata);
            }
           
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
  
        return DB::transaction(function () use ($request, $doctor) {
            $doctorvalidated = $request->validated();
            $doctorvalidated['name'] = $doctorvalidated['fname'] . ' ' . $doctorvalidated['lname'];
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('image', 'public');
                $doctorvalidated['image'] = $imagePath;
            }
            $user = User::findOrFail($doctor->user_id);
            $user->update([
                'name'=> $doctorvalidated['name'],
                'email'=> $doctorvalidated['email'],
                'role'=> $doctorvalidated['role'],
                'status'=> $doctorvalidated['status'],
            ]);
            $doctor->update($doctorvalidated);


            $educationData = [];
            $education = Education::where('doctor_id',$doctor->id);
            for ($i = 0; $i < count($doctorvalidated['institution']); $i++) {               
                $educationData = [                   
                    'institution' => $doctorvalidated['institution'][$i],
                    'board' => $doctorvalidated['board'][$i],
                    'level' => $doctorvalidated['level'][$i],
                    'completionDate' => $doctorvalidated['completionDate'][$i],
                    'marks' => $doctorvalidated['marks'][$i],
                ];
               $education->update($educationData);
            }


            $experiencedata = [];
            $experience = Experience::where('doctor_id',$doctor->id);
            for ($i = 0; $i < count($doctorvalidated['organization_name']); $i++) {      
                $experiencedata = [
                   
                    'organization_name' =>  $doctorvalidated['organization_name'][$i],
                    'position' =>  $doctorvalidated['position'][$i],
                    'startDate' =>  $doctorvalidated['startDate'][$i],
                    'endDate' =>  $doctorvalidated['endDate'][$i],
                    'jobDescription' =>  $doctorvalidated['jobDescription'][$i],

                ];
                $experience->update($experiencedata);
            }
            return redirect()->route('doctor.index')->withSuccess('Doctor was successfully updated.');
        });
    }

    public function destroy(Doctor $doctor)
    {
        return DB::transaction(function () use ($doctor) {
          
            $education = Education::where('doctor_id',$doctor->id);
            $education->delete();

            $experience = Experience::where('doctor_id',$doctor->id);
            $experience->delete();
          
            $doctor->delete();

            $user = User::findOrFail($doctor->user_id);
            $user->delete();

            return redirect()->route('doctor.index')->withSuccess('Doctor was successfully deleted.');
        });
    }
}