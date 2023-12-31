<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Schedule;
use App\Models\User;
use App\Notifications\EmailNotification;
use App\Notifications\NewBooking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
        return DB::transaction(function () use ($request) {
            $patientdata = $request->all();
            $patient = Patient::create($patientdata);
            $patients_id = $patient->id;

            $patientdata['patients_id'] = $patients_id;
            $book = Booking::create($patientdata);
            Mail::send(
                'emails.patientbook',
                ['book' => $book],

                function ($message) {
                    $message->to('swetarajak168@gmail.com', 'Sweta Rajak')->subject('You have new booking');
                }

            );

            $doctor = Doctor::where('id', $book->doctor->id)->first();
            $doctor->notify(new NewBooking($book));

            $book->schedule()->update(['status' => 'approved']);   //to update status for hiding button

            return redirect()->back()->withSuccess('Booking was successfully added.');
        });

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $departments = Department::findOrFail($id);


        $scheduled_doctor = [];
        $doctors = $departments->doctor()->get();
        foreach ($doctors as $doctor) {
            if ($doctor->schedule->isNotEmpty()) {
                $scheduled_doctor[] = $doctor;
            }

        }
        return view('bookings.show', compact("scheduled_doctor"));
        // dd($scheduled_doctor)       ;
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

    public function liveSearch(Request $request)
{
    $output="";
    $departmentId = $request->input('department_id');
    $searchQuery = $request->input('search');

    $query = Doctor::query();

    if ($departmentId) {
        $query->where('department_id', $departmentId);
    }

    if ($searchQuery) {
        $query->where('fname', 'like', '%' . $searchQuery . '%');
    }

    $doctors = $query->get();
    $output .=$doctors;
    return Response($output);
    // return view('doctors.live_search_results', ['doctors' => $doctors]);
}

public function search(Request $request)
    {
        $search = $request->input('search');
        $departmentId = $request->input('department_id');

        $query = Doctor::query();

        if ($search) {
            $query->where(function ($query) use ($search) {
                $query->where('fname', 'like', '%' . $search . '%');
                    
            });
        }
        if ($departmentId) {
            $query->where('department_id', $departmentId);
        }
        $doctors = $query->get();
        return view('frontend.searchresult', compact('doctors'));
    }
}
