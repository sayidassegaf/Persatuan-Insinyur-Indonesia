@extends('dashboard.layouts.main')

@section('container')

<div class="container">
        <h2>Form Registrasi #{{ $form->id }}</h2>
        <div class="card">
            <div class="card-body">
                {{ $form->form_data }}
            </div>
        </div>
    </div>






{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> --}}
            {{-- @if($user->registration && $user->registration->status === 'pending')
            <div class="alert alert-warning" role="alert">
                Formulir pendaftaran Anda sedang dalam masa validasi. Mohon tunggu konfirmasi dari admin.
            </div>
        @endif         --}}
            {{-- @if ($registration->status === 'validated')
    <div class="alert alert-success" role="alert">
        Formulir pendaftaran Anda telah divalidasi.
    </div>

    <table class="table">
        <tbody>
        <tr>
            <td>Nama</td>
            <td>{{ $registration->name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $registration->email }}</td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td>{{ $registration->phone }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>{{ $registration->address }}</td>
        </tr>
        </tbody>
    </table>
@endif

            <div class="card">
                <div class="card-header">Detail Registrasi Form</div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>{{ $registration->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $registration->email }}</td>
                        </tr>
                        <tr>
                            <th>Nomor Telepon</th>
                            <td>{{ $registration->phone }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $registration->address }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                @if ($registration->status === 'pending')
                                    <span class="badge badge-warning">Menunggu Validasi</span>
                                @else
                                    <span class="badge badge-success">Sudah Divalidasi</span>
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}
        

@endsection