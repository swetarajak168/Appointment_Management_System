<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\User;
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
        return DB::transaction(function () use ($request) {
        $doctorvalidated = $request->validated();
        $uservalidated['name'] = $doctorvalidated['fname'] . ' ' . $doctorvalidated['lname'];
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
            $doctorvalidated['image'] = $imagePath;
        }

       
        $user = User::create(
            [
                'name' => $uservalidated['name'],
                'email' => $doctorvalidated['email'],
                'status' => $doctorvalidated['status'],
                'role' => $doctorvalidated['role'],
            ]

        );
        $doctorvalidated['user_id'] = $user->id;
        Doctor::create($doctorvalidated);
        return redirect()->route('doctor.index')->withSuccess('Doctor was successfully inserted.');
    });
    }

    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.edit', [
            'doctor' => $doctor,
        ]);
    }
 public function show($id){
    $doctor = Doctor::findOrFail($id);
    return view('doctors.show',['doctor'=>$doctor]);
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
                'status' => $doctorvalidated['status'],
                'role' => $doctorvalidated['role'],
                 ]);
           
    
        
        $doctor->update($doctorvalidated);
        return redirect()->route('doctor.index')->withSuccess('Doctor was successfully updated.');
    });
    }

    public function destroy(Doctor $doctor)
    {
        return DB::transaction(function () use ($doctor) {
        $user_id = $doctor->user_id;
        $doctor->delete();
        $user = User::findOrFail($user_id);
        $user->delete();
        return redirect()->route('doctor.index')->withSuccess('Doctor was successfully deleted.');
    });
    }
}