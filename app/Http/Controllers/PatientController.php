<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use App\Models\Booking;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(PatientRequest $request)
    {

        // dd($request); 
        return DB::transaction(function () use ($request) {
            $patientdata = $request->all();
            $patient = Patient::create($patientdata);
            $patients_id = $patient->id;

            $patientdata['patients_id'] = $patients_id;
            $book = Booking::create($patientdata);


            $book->schedule()->update(['status' => 'approved']);   //to update status for hiding button

            return redirect()->back()->withSuccess('Booking was successfully added.');
        });
    }
    public function updateStatus(Request $request, $id)
    {
        dd($id);
        $request->validate([
            'status' => 'required|in:approved,canceled',
        ]);

        $item = Booking::find($id);
        if ($item) {

            $item->status = $request->input('status');
            $item->save();
            return redirect()->back()->with('success', 'Status updated successfully');
        }
            
        

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
