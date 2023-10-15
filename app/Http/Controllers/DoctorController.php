<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function index()
    {
        $doctors = Doctor::get();
       
        return view('doctors.index')->with('doctors', $doctors);
    }
    public function create(){
            return view('doctors.create');
    }
}
