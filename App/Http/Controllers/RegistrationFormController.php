<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RegistrationForm;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image;
use App\Http\Requests\StoreRegistrationFormRequest;
use App\Http\Requests\UpdateRegistrationFormRequest;
use App\Mail\RegistrationForm as MailRegistrationForm;

class RegistrationFormController extends Controller
{
    public function create()
    {
        // Cek apakah pengguna sudah mengisi form registrasi sebelumnya
        return view('dashboard.registrations.create', [
            'registration_forms' =>RegistrationForm::all()
        ]);
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $forms = RegistrationForm::where('user_id', auth()->id())->get();
        // return view('dashboard.registrations.index', compact('form'));

        // return view('dashboard.registrations.index', [
        //     'posts' => RegistrationForm::where('user_id', auth()->user()->id )->get()
        // ]);

        $forms = RegistrationForm::where('user_id', auth()->id())->get();
        return view('dashboard.registrations.index', compact('forms'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'name' => 'required|string|max:255',
            'image' => 'image|file|max:1024',
            'gender' => 'required|string',
            'pii_membership_no' => 'required|string|max:255',
            'pii_membership_issued_date' => 'required|date',
            'ip_no' => 'required|string|max:255',
            'ip_issued_date' => 'required|date',
            'bk_name' => 'required|string|max:255',
            'graduation_date' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'nik' => 'required|string|max:255',
            'nik_issued_date' => 'required|date',
            'title' => 'required|string|max:255',
            'citizenship' => 'required|string|max:255',
            'experience' => 'nullable|string',
            'specific_experience' => 'nullable|string',
            'home_address' => 'required|string|max:255',
            'home_country' => 'required|string|max:255',
            'home_province' => 'required|string|max:255',
            'home_city' => 'required|string|max:255',
            'home_postal_code' => 'required|string|max:255',
            'home_email' => 'required|email|max:255',
            'home_phone_number' => 'required|string|max:255',
            'home_whatsapp_number' => 'required|string|max:255',
            'home_instagram' => 'nullable|string|max:255',
            'office_address' => 'nullable|string|max:255',
            'office_country' => 'nullable|string|max:255',
            'office_province' => 'nullable|string|max:255',
            'office_city' => 'nullable|string|max:255',
            'office_postal_code' => 'nullable|string|max:255',
            'office_email' => 'nullable|email|max:255',
            'office_phone_number' => 'nullable|string|max:255',
            'office_whatsapp_number' => 'nullable|string|max:255',
            'office_instagram' => 'nullable|string|max:255',
            'banchelor_university' => 'nullable|string|max:255',
            'banchelor_field' => 'nullable|string|max:255',
            'banchelor_start_date' => 'nullable|date',
            'banchelor_end_date' => 'nullable|date',
            'master_university' => 'nullable|string|max:255',
            'master_field' => 'nullable|string|max:255',
            'master_start_date' => 'nullable|date',
            'master_end_date' => 'nullable|date',
            'dectorate_university' => 'nullable|string|max:255',
            'dectorate_field' => 'nullable|string|max:255',
            'dectorate_start_date' => 'nullable|date',
            'dectorate_end_date' => 'nullable|date',
            'discipline_regis' => 'nullable|string|max:255',
            'signature' => 'nullable|string|max:255'
        ]);

        $image = $request->file('image');
        $form = RegistrationForm::where('user_id', auth()->id())->first();
        if($form) {
            return redirect()->back()->with('alert', 'Your Registration Already Created.');
        }
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('RegistrationForm-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Image::make($image)->resize(400, 400)->save();
        RegistrationForm::create($validatedData);
        Mail::to("sayid.assegaf12@gmail.com")->send(new MailRegistrationForm());
            // 'user_id' => auth()->id(),
            // 'name' => $request->name,
            // 'email' => $request->email,
            // 'gender' => $request->gender,
            // 'pii_membership_no' => $request->pii_membership_no,
            // 'pii_membership_issued_date' => $request->pii_membership_issued_date,
            // 'ip_no' => $request->ip_no,
            // 'ip_issued_date' => $request->ip_issued_date,
            // 'bk_name' => $request->bk_name,
            // 'graduation_date' => $request->graduation_date,
            // 'place_of_birth' => $request->place_of_birth,
            // 'date_of_birth' => $request->date_of_birth,
            // 'nik' => $request->nik,
            // 'nik_issued_date' => $request->nik_issued_date,
            // 'passport_number' => $request->passport_number,
            // 'passport_issued_date' => $request->passport_issued_date,
            // 'title' => $request->title,
            // 'citizenship' => $request->citizenship,
            // 'experience' => $request->experience,
            // 'specific_experience' => $request->specific_experience,
            // 'home_address' => $request->home_address,
            // 'home_country' => $request->home_country,
            // 'home_province' => $request->home_province,
            // 'home_city' => $request->home_city,
            // 'home_postal_code' => $request->home_postal_code,
            // 'home_email' => $request->home_email,
            // 'home_phone_number' => $request->home_phone_number,
            // 'home_whatsapp_number' => $request->home_whatsapp_number,
            // 'home_instagram' => $request->home_instagram,
            // 'office_address' => $request->office_address,
            // 'office_country' => $request->office_country,
            // 'office_province' => $request->office_province,
            // 'office_city' => $request->office_city,
            // 'office_postal_code' => $request->office_postal_code,
            // 'office_email' => $request->office_email,
            // 'office_phone_number' => $request->office_phone_number,
            // 'office_whatsapp_number' => $request->office_whatsapp_number,
            // 'office_instagram' => $request->office_instagram,
            // 'banchelor_university' => $request->banchelor_university,
            // 'banchelor_field' => $request->banchelor_field,
            // 'banchelor_start_date' => $request->banchelor_start_date,
            // 'banchelor_end_date' => $request->banchelor_end_date,
            // 'master_university' => $request->master_university,
            // 'master_field' => $request->master_field,
            // 'master_start_date' => $request->master_start_date,
            // 'master_end_date' => $request->master_end_date,
            // 'dectorate_university' => $request->dectorate_university,
            // 'dectorate_field' => $request->dectorate_field,
            // 'dectorate_start_date' => $request->dectorate_start_date,
            // 'dectorate_end_date' => $request->dectorate_end_date,
            // 'discipline_regis' => $request->discipline_regis,
            // 'signature' => $request->signature,
        // ]);
        return redirect('/dashboard/registrations')->with('success', 'Registration Has Been Created');
    }

    public function show(RegistrationForm $form)
    {
        if(!$form->is_valid) {
            return view('dashboard.registrations.form_in_validation', compact('form'));
        }
        return view('dashboard.registrations.form_detail', compact('form'));
    }

    public function validateForm(RegistrationForm $form)
    {
        $form->update(['is_valid' => true]);

        return redirect()->route('dashboard.registrations_admin')->with('success', 'Registrations Has Been Approve.');
    }

    public function sendmail(){
       
    }
}
