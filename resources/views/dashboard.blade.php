@extends('layouts.main')

@section('container')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <!-- Tambahkan lebih banyak kolom sesuai dengan kebutuhan Anda -->
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($anggota as $a)
            <tr>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->email }}</td>
                <!-- Tambahkan lebih banyak kolom sesuai dengan kebutuhan Anda -->
                <td>
                    <form method="POST" action="/validasi/{{ $a->id }}">
                        @csrf
                        <button type="submit">Validasi</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


    
@endsection