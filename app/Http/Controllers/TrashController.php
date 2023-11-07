<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $softDeletedItems = Doctor::onlyTrashed()->get();       
        return view('trash.index', compact('softDeletedItems'));
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
        $doctor = Doctor::onlyTrashed()->find($id);

        $doctor->forceDelete();

        return redirect()->route('trash.index')->withSuccess('Doctor deleted permanently.');
    }
}
