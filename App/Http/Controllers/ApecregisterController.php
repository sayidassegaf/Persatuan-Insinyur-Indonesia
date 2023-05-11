<?php

namespace App\Http\Controllers;

use App\Models\Apecregister;
use Illuminate\Http\Request;

class ApecregisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('multi-step-form', [
            "title" => "Registration",
            "active" => 'Form'
        ]);
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
        Apecregister::created($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Apecregister $apecregister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apecregister $apecregister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apecregister $apecregister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apecregister $apecregister)
    {
        //
    }
}
