<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department = Department::withCount('doctor')->get();
        return view('department.index')->with('department', $department);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
      
        Department::create([
            'department_name'=> $request->department_name
        ]);
        return redirect()->route('department.index')->withSuccess( 'Department was successfully added.');
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
        $departments = Department::findOrFail($id);
        return view('department.edit',[
            'department'=>$departments,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $departments=Department::findOrFail($id);
        // dd($request->all());
        $departments->update( [
            'department_name' => $request->department_name,
        ]);
        return redirect()->route('department.index')->withSuccess( 'department was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
                //
       $dep = Department::findOrFail($id);
       $dep->delete();
       return redirect()->route('department.index')->withSuccess( 'Department was successfully deleted.');
    }
}
