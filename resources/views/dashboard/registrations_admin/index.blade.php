@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <h2>Dashboard Admin</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Form Registrasi yang Belum Divalidasi</div>

                <div class="card-body">
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
                                        <td>{{ $form->created_at }}</td>
                                        {{-- <td>
                                            <a href="{{ $form }}">Form Registrasi {{ $form->name }}</a>
                                        </td>
                                        <td>
                                            <form action="{{ url('/dashboard/registrations/' .$form->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-success">Validasi Form</button>
                                                <label>Validated User Registration</label>
                                                <div class="input-group">
                                                    <select name="" class="form-select">
                                                        <option value="">Select The Status</option>
                                                        <option value=""></option>p
                                                    </select>
                                                </div>
                                            </form>
                                        </td> --}}

                                        <td>
                                            <a href="{{ route('dashboard.registrations_admin.form_detail', $form) }}">Form Registrasi #{{ $form->id }}</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('dashboard.registrations_admin.validate_form', $form) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-success">Validasi Form</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>Tidak ada form registrasi yang belum divalidasi.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


