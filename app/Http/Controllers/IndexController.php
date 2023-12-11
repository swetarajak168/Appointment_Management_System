<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\Menu;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function index(){
        $limit = 6; 
        $departments = Department::withCount('doctor')->get();
        $doctors = Doctor::take($limit)->get();
        return view('index',compact('departments','doctors'));
    }
    public function about(){
        return view('frontend.about');

    }
    public function contact(){
        return view('frontend.contact');

    }
    public function navbar(){
        $menus = Menu::get();
        return view('frontend.navbar',compact('menus'));
    }
}
