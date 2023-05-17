@extends('dashboard.layouts.main')

@section('container')

<div class="">
    {{-- <h2>Dashboard User</h2> --}}
    <div class="row mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3> Your Form Registration
                </h3>
                    </div>

                <div class="card-body">
                    @if(session('alert'))
                        <div class="alert alert-danger">
                            {{ session('alert') }}
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($forms->count() > 0)
                        <table class="table table-bordered">
                            <tbody>
                                @foreach($forms as $form)
                                    <tr>
                                        {{-- <td>{{ $form->created_at }}</td> --}}
                                        <td>
                                            @if($form->is_valid)                                                
                                                <div class="alert alert-success">
                                                    <h5>Your Registrations Has Been {{ ($form->is_valid == 1) ? 'Verified' : 'Waiting Validation' }}</h5>
                                                 </div>
                                                <div class="card-body">
                                                    {{ $form->name }}
                                                </div>
                                                <div class="card-body">
                                                    {{ $form->gender }}
                                                </div>
                                                <div class="card-body">
                                                    {{ $form->nik }}
                                                </div>
                                            @else
                                                <div class="alert alert-warning">
                                                    Your Registrations Hasbeen Submit, Please Wait Admin to Validated Your Form
                                                </div>

                                                <div class="card swiper-slide justify-content-center">
                                                    <div class="image-content">
                                                        <span class="overlay"></span>
                                                        <div class="card-image">
                                                            @if ($form->image)           
                                                      <img src="{{ asset('storage/' . $form->image) }}"
                                                      alt="{{ $form->name }}" class="img-fluid mx-auto" width="256">
                                                    @else
                                                      <img src="https://source.unsplash.com/500x400?{{ $form->name }}" class="card-img" alt="{{ $form->name }}">
                                                    @endif
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <h5 class="card-title">{{ $form->name }}</h5>
                                                      <p>
                                                        <small class="text-muted">
                                                          <i class="bi bi-geo-alt">{{ $form->gender }} </i>
                                                        </small>
                                                      </p>
                                                      <p class="card-text ket" ><i class="bi bi-gear"> </i>{{ $form->discipline_regis }} <br>
                                                        <i class="bi bi-mortarboard-fill"> </i>{{ $form->pii_membership_no }}
                                                      </p>
                                                    </div>
                                                </div>



                                                <div class="card">
                                                    <div class="card-body">
                                                        {{ $form->image }}
                                                    </div>
                                                    <div class="card-body">
                                                        {{ $form->gender }}
                                                    </div>
                                                    <div class="card-body">
                                                        {{ $form->nik }}
                                                    </div>
                                                    <div class="card-body">
                                                        <label class="label label-danger">{{ ($form->is_valid == 1) ? 'Verified' : 'Waiting Validation' }}</label>
                                                        
                                                    </div>
                                                </div>
                                                {{-- <a href="{{ route('dashboard.registrations.form_in_validation', $form) }}">Form Registrasi #{{ $form->id }}</a> <span class="badge badge-warning">Sedang divalidasi</span> --}}
                                                @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                    <div class="alert alert-danger">
                       <h5>You Haven't created a Registration Form</h5>
                    </div>
                        <a href="/dashboard/registrations/create" class="btn btn-primary mb-3">Apply Registration Now</a>
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection






