@extends('dashboard.layouts.main')

@section('container')


<div class="container">
    <div class="alert alert-info" role="alert">
        Data pendaftaran Anda masih dalam proses verifikasi. Harap tunggu sampai pendaftaran Anda disetujui.
    </div>

    <div class="card">
        <div class="card-header">Data Pendaftaran</div>

        <div class="card-body">
            {{ $registration->registration_data }}
        </div>
    </div>
</div>

@endsection