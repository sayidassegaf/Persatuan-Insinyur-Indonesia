@extends('dashboard.layouts.main')

@section('container')

{{-- <div class="container"> --}}
  @if (session('success'))
      <div class="alert alert-success">
          Registration submitted successfully!
      </div>
  @elseif (session('warning'))
      <div class="alert alert-warning">
          You already have a pending registration.
      </div>
  @endif
        <div class="row justify-content-md-center">
          <div class="col-md-9 ">
              <div class="card px-5 py-3 mt-5 shadow">
                <div class="section-headers mt-4 mb-4 text-center">
                    <h3>APEC ENGINER REGISTER</h3>
                    <h2>REGISTRATION APPLICATION FORM</h2>
                </div>
    
                          <div class="nav nav-fill">
                            <label class="nav-link shadow-sm step0">Personal Details</label>
                            <label class="nav-link shadow-sm step1" >Contract Details</label>
                            <label class="nav-link shadow-sm step2" >Education Background</label>
                            {{-- <label class="nav-link shadow-sm step3" >Terms & Privacy</label> --}}
                          </div>
            
                  <form action="/dashboard/registrations" method="post" class="registrations_forms" enctype="multipart/form-data">
                   @csrf
                <div class="form-section">

            <div class="row justify-content-center">
                
                    <div class="form-group col-8">
                        <label for="image" class="form-label">Profil Picture</label>
                        <div class="imagebox">
                            <img class="img-preview img-fluid mb-3 rounded-circle mx-auto" width="256">
                            <div class="col-md-10">    
                        <input class="form-control-img @error('image') is-invalid @enderror" type="file" id="image" 
                                name="image" onchange="previewImage()">
                                <label for="image"><i class="bi bi-camera"> </i>Add Image</label>
                            @error('image') 
                        <div class="alert alert-danger"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>     
                    </div>
                
            </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
        
                        <div class="col-md-10">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="form-group col-6">
                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>
        
                        <div class="col-md-10">
                            <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
        
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>    
        
                <div class="row">
                    <div class="form-group col-6">
                        <label for="pii_membership_no" class="col-md-4 col-form-label text-md-right">{{ __('PII M\'Ship No') }}</label>
        
                        <div class="col-md-10">
                            <input id="pii_membership_no" type="text" class="form-control @error('pii_membership_no') is-invalid @enderror" name="pii_membership_no" value="{{ old('pii_membership_no') }}" required>
        
                            @error('pii_membership_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="form-group col-6">
                        <label for="pii_membership_issued_date" class="col-md-4 col-form-label text-md-right">{{ __('Issuance Date') }}</label>
        
                        <div class="col-md-10">
                            <input id="pii_membership_issued_date" type="date" class="form-control @error('pii_membership_issued_date') is-invalid @enderror" name="pii_membership_issued_date" value="{{ old('pii_membership_issued_date') }}" required>
        
                            @error('pii_membership_issued_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="ip_no" class="col-md-4 col-form-label text-md-right">{{ __('IP NO') }}</label>
        
                        <div class="col-md-10">
                            <input id="ip_no" type="text" class="form-control @error('ip_no') is-invalid @enderror" name="ip_no" value="{{ old('ip_no') }}" required>
        
                            @error('ip_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="form-group col-6">
                        <label for="ip_issued_date" class="col-md-4 col-form-label text-md-right">{{ __('Issuance Date') }}</label>
        
                        <div class="col-md-10">
                            <input id="ip_issued_date" type="date" class="form-control @error('ip_issued_date') is-invalid @enderror" name="ip_issued_date" value="{{ old('ip_issued_date') }}" required>
        
                            @error('ip_issued_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="bk_name" class="col-md-4 col-form-label text-md-right">{{ __('BK Name') }}</label>
        
                        <div class="col-md-10">
                            <input id="bk_name" type="text" class="form-control @error('bk_name') is-invalid @enderror" name="bk_name" value="{{ old('bk_name') }}" required>
        
                            @error('bk_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="form-group col-6">
                        <label for="graduation_date" class="col-md-4 col-form-label text-md-right">{{ __('Gradute Year') }}</label>
        
                        <div class="col-md-10">
                            <input id="graduation_date" type="date" class="form-control @error('graduation_date') is-invalid @enderror" name="graduation_date" value="{{ old('graduation_date') }}" required>
        
                            @error('graduation_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="place_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Place of Birth') }}</label>
        
                        <div class="col-md-10">
                            <input id="place_of_birth" type="text" class="form-control @error('place_of_birth') is-invalid @enderror" name="place_of_birth" value="{{ old('place_of_birth') }}" required>
        
                            @error('place_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="form-group col-6">
                        <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
        
                        <div class="col-md-10">
                            <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
        
                            @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="nik" class="col-md-4 col-form-label text-md-right">{{ __('NIK/ID Card Number') }}</label>
        
                        <div class="col-md-10">
                            <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required>
        
                            @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="form-group col-6">
                        <label for="nik_issued_date" class="col-md-4 col-form-label text-md-right">{{ __('Issuance Date') }}</label>
        
                        <div class="col-md-10">
                            <input id="nik_issued_date" type="date" class="form-control @error('nik_issued_date') is-invalid @enderror" name="nik_issued_date" value="{{ old('nik_issued_date') }}" required>
        
                            @error('nik_issued_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="passport_number" class="col-md-4 col-form-label text-md-right">{{ __('Passport Number') }}</label>
        
                        <div class="col-md-10">
                            <input id="passport_number" type="text" class="form-control @error('passport_number') is-invalid @enderror" name="passport_number" value="{{ old('passport_number') }}" required>
        
                            @error('passport_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="form-group col-6">
                        <label for="passport_issued_date" class="col-md-4 col-form-label text-md-right">{{ __('Issuance Date') }}</label>
        
                        <div class="col-md-10">
                            <input id="passport_issued_date" type="date" class="form-control @error('passport_issued_date') is-invalid @enderror" name="passport_issued_date" value="{{ old('passport_issued_date') }}" required>
        
                            @error('passport_issued_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title*') }}</label>
        
                        <div class="col-md-10">
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required>
        
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="form-group col-6">
                        <label for="citizenship" class="col-md-4 col-form-label text-md-right">{{ __('Citizenship') }}</label>
        
                        <div class="col-md-10">
                            <input id="citizenship" type="text" class="form-control @error('citizenship') is-invalid @enderror" name="citizenship" value="{{ old('citizenship') }}" required>
        
                            @error('citizenship')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="experience" class="col-md-4 col-form-label text-md-right">{{ __('Years of Experience') }}</label>
        
                        <div class="col-md-10">
                            <input id="experience" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}" required>
        
                            @error('experience')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group col-6">
                        <label for="spesific_experience" class="col-md-4 col-form-label text-md-right">{{ __('Tittle*') }}</label>
        
                        <div class="col-md-10">
                            <input id="spesific_experience" type="text" class="form-control @error('spesific_experience') is-invalid @enderror" name="spesific_experience" value="{{ old('spesific_experience') }}" required>
        
                            @error('spesific_experience')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                    
                </div>
    
                  {{-- Section 2 --}}
            <div class="form-section">
                    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="home_address" class="col-md-4 col-form-label text-md-right">{{ __('Home Address') }}</label>
        
                        <div class="col-md-10">
                            <input id="home_address" type="text" class="form-control @error('home_address') is-invalid @enderror" name="home_address" value="{{ old('home_address') }}" required>
        
                            @error('home_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label for="office_address" class="col-md-4 col-form-label text-md-right">{{ __('office Address') }}</label>
        
                        <div class="col-md-10">
                            <input id="office_address" type="text" class="form-control @error('office_address') is-invalid @enderror" name="office_address" value="{{ old('office_address') }}" required>
        
                            @error('office_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="home_country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>
        
                        <div class="col-md-10">
                            <input id="home_country" type="text" class="form-control @error('home_country') is-invalid @enderror" name="home_country" value="{{ old('home_country') }}" required>
        
                            @error('home_country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label for="office_country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>
        
                        <div class="col-md-10">
                            <input id="office_country" type="text" class="form-control @error('office_country') is-invalid @enderror" name="office_country" value="{{ old('office_country') }}" required>
        
                            @error('office_country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-6">
                        <label for="home_province" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>
        
                        <div class="col-md-10">
                            <input id="home_province" type="text" class="form-control @error('home_province') is-invalid @enderror" name="home_province" value="{{ old('home_province') }}" required>
        
                            @error('home_province')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label for="office_province" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>
        
                        <div class="col-md-10">
                            <input id="office_province" type="text" class="form-control @error('office_province') is-invalid @enderror" name="office_province" value="{{ old('office_province') }}" required>
        
                            @error('office_province')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="home_city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
        
                        <div class="col-md-10">
                            <input id="home_city" type="text" class="form-control @error('home_city') is-invalid @enderror" name="home_city" value="{{ old('home_city') }}" required>
        
                            @error('home_city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label for="office_city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
        
                        <div class="col-md-10">
                            <input id="office_city" type="text" class="form-control @error('office_city') is-invalid @enderror" name="office_city" value="{{ old('office_city') }}" required>
        
                            @error('office_city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="home_postal_code" class="col-md-4 col-form-label text-md-right">{{ __('Post Code') }}</label>
        
                        <div class="col-md-10">
                            <input id="home_postal_code" type="text" class="form-control @error('home_postal_code') is-invalid @enderror" name="home_postal_code" value="{{ old('home_postal_code') }}" required>
        
                            @error('home_postal_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label for="office_postal_code" class="col-md-4 col-form-label text-md-right">{{ __('Post Code') }}</label>
        
                        <div class="col-md-10">
                            <input id="office_postal_code" type="text" class="form-control @error('office_postal_code') is-invalid @enderror" name="office_postal_code" value="{{ old('office_postal_code') }}" required>
        
                            @error('office_postal_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="home_email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
        
                        <div class="col-md-10">
                            <input id="home_email" type="email" class="form-control @error('home_email') is-invalid @enderror" name="home_email" value="{{ old('home_email') }}" required>
        
                            @error('home_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label for="office_email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
        
                        <div class="col-md-10">
                            <input id="office_email" type="email" class="form-control @error('office_email') is-invalid @enderror" name="office_email" value="{{ old('office_email') }}" required>
        
                            @error('office_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="home_phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Telephone') }}</label>
        
                        <div class="col-md-10">
                            <input id="phone" type="tel" class="form-control @error('home_phone_number') is-invalid @enderror" name="home_phone_number" value="{{ old('home_phone_number') }}" required>
        
                            @error('home_phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label for="office_phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Telephone') }}</label>
        
                        <div class="col-md-10">
                            <input id="phone1" type="tel" class="form-control @error('office_phone_number') is-invalid @enderror" name="office_phone_number" value="{{ old('office_phone_number') }}" required>
        
                            @error('office_phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="home_whatsapp_number" class="col-md-4 col-form-label text-md-right">{{ __('Whatsapp Number') }}</label>
        
                        <div class="col-md-10">
                            <input id="home_whatsapp_number" type="text" class="form-control @error('home_whatsapp_number') is-invalid @enderror" name="home_whatsapp_number" value="{{ old('home_whatsapp_number') }}" required>
        
                            @error('home_whatsapp_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label for="office_whatsapp_number" class="col-md-4 col-form-label text-md-right">{{ __('Whatsapp Number') }}</label>
        
                        <div class="col-md-10">
                            <input id="office_whatsapp_number" type="text" class="form-control @error('office_whatsapp_number') is-invalid @enderror" name="office_whatsapp_number" value="{{ old('office_whatsapp_number') }}" required>
        
                            @error('office_whatsapp_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="home_instagram" class="col-md-4 col-form-label text-md-right">{{ __('Instagram / Facebook Link') }}</label>
        
                        <div class="col-md-10">
                            <input id="home_instagram" type="text" class="form-control @error('home_instagram') is-invalid @enderror" name="home_instagram" value="{{ old('home_instagram') }}" required>
        
                            @error('home_instagram')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>                
    
                    <div class="form-group col-6">
                        <label for="office_instagram" class="col-md-4 col-form-label text-md-right">{{ __('Instagram / Facebook Link') }}</label>
        
                        <div class="col-md-10">
                            <input id="office_instagram" type="text" class="form-control @error('office_instagram') is-invalid @enderror" name="office_instagram" value="{{ old('office_instagram') }}" required>
        
                            @error('office_instagram')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>        
                    {{-- Section 3 --}}            
                  <div class="form-section">
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="banchelor_university" class="col-md-4 col-form-label text-md-right">{{ __('Banchelor Degree University') }}</label>
        
                        <div class="col-md-10">
                            <input id="banchelor_university" type="text" class="form-control @error('banchelor_university') is-invalid @enderror" name="banchelor_university" value="{{ old('banchelor_university') }}" required>
        
                            @error('banchelor_university')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group col-6">
                        <label for="banchelor_field" class="col-md-4 col-form-label text-md-right">{{ __('Fiel of Study') }}</label>
        
                        <div class="col-md-10">
                            <input id="banchelor_field" type="text" class="form-control @error('banchelor_field') is-invalid @enderror" name="banchelor_field" value="{{ old('banchelor_field') }}" required>
        
                            @error('banchelor_field')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="form-group col-6">
                        <label for="banchelor_start_date" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>
        
                        <div class="col-md-10">
                            <input id="banchelor_start_date" type="date" class="form-control @error('banchelor_start_date') is-invalid @enderror" name="banchelor_start_date" value="{{ old('banchelor_start_date') }}" required>
        
                            @error('banchelor_start_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group col-6">
                        <label for="banchelor_end_date" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>
        
                        <div class="col-md-10">
                            <input id="banchelor_end_date" type="date" class="form-control @error('banchelor_end_date') is-invalid @enderror" name="banchelor_end_date" value="{{ old('banchelor_end_date') }}" required>
        
                            @error('banchelor_end_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="master_university" class="col-md-4 col-form-label text-md-right">{{ __('Master Degree University') }}</label>
        
                        <div class="col-md-10">
                            <input id="master_university" type="text" class="form-control @error('master_university') is-invalid @enderror" name="master_university" value="{{ old('master_university') }}" required>
        
                            @error('master_university')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group col-6">
                        <label for="master_field" class="col-md-4 col-form-label text-md-right">{{ __('Fiel of Study') }}</label>
        
                        <div class="col-md-10">
                            <input id="master_field" type="text" class="form-control @error('master_field') is-invalid @enderror" name="master_field" value="{{ old('master_field') }}" required>
        
                            @error('master_field')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="form-group col-6">
                        <label for="master_start_date" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>
        
                        <div class="col-md-10">
                            <input id="master_start_date" type="date" class="form-control @error('master_start_date') is-invalid @enderror" name="master_start_date" value="{{ old('master_start_date') }}" required>
        
                            @error('master_start_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group col-6">
                        <label for="master_end_date" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>
        
                        <div class="col-md-10">
                            <input id="master_end_date" type="date" class="form-control @error('master_end_date') is-invalid @enderror" name="master_end_date" value="{{ old('master_end_date') }}" required>
        
                            @error('master_end_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="dectorate_university" class="col-md-4 col-form-label text-md-right">{{ __('Dectorate Degree University') }}</label>
        
                        <div class="col-md-10">
                            <input id="dectorate_university" type="text" class="form-control @error('dectorate_university') is-invalid @enderror" name="dectorate_university" value="{{ old('dectorate_university') }}" required>
        
                            @error('dectorate_university')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group col-6">
                        <label for="dectorate_field" class="col-md-4 col-form-label text-md-right">{{ __('Fiel of Study') }}</label>
        
                        <div class="col-md-10">
                            <input id="dectorate_field" type="text" class="form-control @error('dectorate_field') is-invalid @enderror" name="dectorate_field" value="{{ old('dectorate_field') }}" required>
        
                            @error('dectorate_field')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="form-group col-6">
                        <label for="dectorate_start_date" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>
        
                        <div class="col-md-10">
                            <input id="dectorate_start_date" type="date" class="form-control @error('dectorate_start_date') is-invalid @enderror" name="dectorate_start_date" value="{{ old('dectorate_start_date') }}" required>
        
                            @error('dectorate_start_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group col-6">
                        <label for="dectorate_end_date" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>
        
                        <div class="col-md-10">
                            <input id="dectorate_end_date" type="date" class="form-control @error('dectorate_end_date') is-invalid @enderror" name="dectorate_end_date" value="{{ old('dectorate_end_date') }}" required>
        
                            @error('dectorate_end_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="discipline_regis" class="col-md-4 col-form-label text-md-right">{{ __('Discipline for Registration') }}</label>
        
                        <div class="col-md-10">
                            <input id="discipline_regis" type="text" class="form-control @error('discipline_regis') is-invalid @enderror" name="discipline_regis" value="{{ old('discipline_regis') }}" required>
        
                            @error('discipline_regis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                      
                  </div>
    
                <div class="form-navigation mt-3">
                   <button type="button" class="previous btn btn-primary float-start">&lt; Previous</button>
                   <button type="button" class="next btn btn-primary float-end">Next &gt;</button>
                   <button type="submit" class="btn btn-success float-right">Submit</button>
                   
                </div>
              </form>
          </div>
              
        </div>
    </div>
{{-- </div> --}}
@if ($errors->any())
                   @foreach ($errors->all() as $error)
                       <div>{{ $error }}</div>
                   @endforeach
                   @endif
                   
   
@endsection
