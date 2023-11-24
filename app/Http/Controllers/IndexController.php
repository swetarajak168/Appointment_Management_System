<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function index(){
       
        $departments = Department::withCount('doctor')->get();
        return view('index',compact('departments'));
    }
}
