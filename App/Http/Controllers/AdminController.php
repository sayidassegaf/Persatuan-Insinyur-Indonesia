<?php

namespace App\Http\Controllers;

use App\Models\RegistrationForm;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms = RegistrationForm::where('is_valid', false)->get();
        return view('dashboard.registrations_admin.index', compact('forms'));
    }

    public function validateForm(RegistrationForm $form)
    {
        $form->update(['is_valid' => true]);

        return redirect()->back()->with('success', 'Registrasi form telah divalidasi.');
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
    public function show(RegistrationForm $registrationForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegistrationForm $registrationForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RegistrationForm $registrationForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegistrationForm $registrationForm)
    {
        //
    }
}
