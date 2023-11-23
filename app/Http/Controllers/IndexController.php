<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function index(){
        $departments = Department::all();
        // dd($departments);
        return view('index',compact('departments'));
    }
}
