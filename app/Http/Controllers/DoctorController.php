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
            $validateddata['password'] = Hash::make($validateddata['password']);
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
            foreach ($validateddata['institution'] as $key => $item) {
                $educationData = [
                    'doctor_id' => $doctor_store->id,
                    'institution' => $validateddata['institution'][$key],
                    'board' => $validateddata['board'][$key],
                    'level' => $validateddata['level'][$key],
                    'completionDate' => $validateddata['completionDate'][$key],
                    'marks' => $validateddata['marks'][$key],
                ];
                Education::create($educationData);
            }


            $experiencedata = [];
            foreach ($validateddata['organization_name'] as $key => $item) {
                $experiencedata = [
                    'doctor_id' => $doctor_store->id,
                    'organization_name' => $validateddata['organization_name'][$key],
                    'position' => $validateddata['position'][$key],
                    'startDate' => $validateddata['startDate'][$key],
                    'endDate' => $validateddata['endDate'][$key],
                    'jobDescription' => $validateddata['jobDescription'][$key],

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
                'name' => $doctorvalidated['name'],
                'email' => $doctorvalidated['email'],
                'role' => $doctorvalidated['role'],
                'status' => $doctorvalidated['status'],
            ]);
            $doctor->update($doctorvalidated);
            
            $del_education = Doctor::find($doctor->id);  
            if ($del_education) {
                 Education::where('doctor_id', $doctor->id)->delete();              
                         
            }
        //   dd($doctorvalidated['institution']);
                     
            foreach ($doctorvalidated['institution'] as $key => $item) {
                $education = new Education();
                $education->doctor_id = $doctor->id;
                $education->level = $doctorvalidated['level'][$key];
                $education->institution = $doctorvalidated['institution'][$key];
                $education->board = $doctorvalidated['board'][$key];
                $education->completionDate = $doctorvalidated['completionDate'][$key];
                $education->marks = $doctorvalidated['marks'][$key];
                $education->save();
            }
            if ($del_education) {
                Experience::where('doctor_id', $doctor->id)->delete();
            } 
            
            foreach ($doctorvalidated['organization_name'] as $key => $item) {
                $experience = new Experience();
                $experience->doctor_id = $doctor->id;
                $experience->organization_name = $doctorvalidated['organization_name'][$key];
                $experience->position = $doctorvalidated['position'][$key];
                $experience->startDate = $doctorvalidated['startDate'][$key];
                $experience->endDate = $doctorvalidated['endDate'][$key];
                $experience->jobDescription = $doctorvalidated['jobDescription'][$key];
                $experience->save();
                    
            }
            return redirect()->route('doctor.index')->withSuccess('Doctor was successfully updated.');
        });
    }

    public function destroy(Doctor $doctor)
    {
        return DB::transaction(function () use ($doctor) {

        $education = Education::where('doctor_id', $doctor->id);
        $education->delete();

        $experience = Experience::where('doctor_id', $doctor->id);
        $experience->delete();

        $doctor->delete();

       
        return redirect()->route('doctor.index')->withSuccess('Doctor was successfully deleted.');
        });
    }
}