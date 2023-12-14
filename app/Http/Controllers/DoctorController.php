<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Models\Department;
use App\Models\District;
use App\Models\Doctor;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Municipality;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class DoctorController extends Controller
{
    //
    public function index()
    {
        $doctors = Doctor::latest()->paginate(6);

        return view('doctors.index')->with('doctors', $doctors);
    }
    public function create()
    {
        $departments = Department::all();

        return view('doctors.create', compact('departments'));
    }


    public function store(DoctorRequest $request)
    {

        return DB::transaction(function () use ($request) {
            $validateddata = $request->validated();
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
            $province = Province::where('id', $request->province)->value('province_name');
            $district = District::where('id', $request->district)->value('name');
            $municipality = Municipality::where('id', $request->municipality)->value('name');

            $validateddata['province']=$province;
            $validateddata['district']=$district;
            $validateddata['municipality']=$municipality;

            $doctor_store = Doctor::create($validateddata);


            $educationData = [];
            foreach ($validateddata['institution'] as $key => $item) {
                $educationData = [
                    'doctor_id' => $doctor_store->id,
                    'institution' => $validateddata['institution'][$key],
                    'board' => $validateddata['board'][$key],
                    'level' => $validateddata['level'][$key],
                    'completionDate' => $validateddata['completionDate'][$key],
                    'CompletionDateAD' => $validateddata['CompletionDateAD'][$key],
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
                    'startEnglishDate' => $validateddata['startEnglishDate'][$key],
                    'endDate' => $validateddata['endDate'][$key],
                    'endEnglishDate' => $validateddata['endEnglishDate'][$key],
                    'jobDescription' => $validateddata['jobDescription'][$key],

                ];
                Experience::create($experiencedata);
            }
            Alert::success('Success', 'Doctor Added successfully');

            return redirect()->route('doctor.index');
        });

    }
    public function edit($id)
    {
        $departments = Department::all();

        $doctor = Doctor::findOrFail($id);
        return view('doctors.edit', compact('departments', 'doctor')
        );
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
                $imagePath = $request->file('image');
                $fileName = $imagePath->getClientOriginalName();
                $doctorvalidated['image'] = 'storage/img/' . $fileName;
                $imagePath->storeAs('public/img', $fileName);
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

            foreach ($doctorvalidated['institution'] as $key => $item) {
                $education = new Education();
                $education->doctor_id = $doctor->id;
                $education->level = $doctorvalidated['level'][$key];
                $education->institution = $doctorvalidated['institution'][$key];
                $education->board = $doctorvalidated['board'][$key];
                $education->completionDate = $doctorvalidated['completionDate'][$key];
                $education->completionDateAD = $doctorvalidated['CompletionDateAD'][$key];
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
                $experience->startEnglishDate = $doctorvalidated['startDate'][$key];
                $experience->endDate = $doctorvalidated['endDate'][$key];
                $experience->endEnglishDate = $doctorvalidated['endDate'][$key];
                $experience->jobDescription = $doctorvalidated['jobDescription'][$key];
                $experience->save();

            }
            Alert::success('Success', 'Doctor Updated successfully');

            return redirect()->route('doctor.index');
        });
    }




    public function destroy(Doctor $doctor)
    {
        return DB::transaction(function () use ($doctor) {
            $doctor->delete();


            return redirect()->route('doctor.index')->withSuccess('Doctor was successfully deleted.');
        });
    }

    public function getDistrict(Request $request)
    {
        $province = $request->input('province');
        // Query the database to get districts based on the selected province
        $districts = District::where('province_id', $province)->pluck('name', 'id');
        return response()->json($districts);
    }
   public function getMunicipality(Request $request){
    $district_id = $request->input("district");
    $district = District::findOrFail($district_id);
    $municipality = Municipality::where('district_name', $district->name)->pluck('name', 'id');
    return response()->json($municipality);
   }
}