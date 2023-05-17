@extends('dashboard.layouts.main')

@section('container')

<div class="container">
  @if (session('success'))
      <div class="alert alert-success">
          Registration submitted successfully!
      </div>
  @elseif (session('warning'))
      <div class="alert alert-warning">
          You already have a pending registration.
      </div>
  @endif

  <form action="{{ route('dashboard.registrations') }}" method="post">
      @csrf
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                 value="{{ old('name') }}" required>
          @error('name')
          <span class="invalid-feedback">{{ $message }}</span>
          @enderror
      </div>

      <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email"
                 class="form-control @error('email') is-invalid @enderror"
                 value="{{ old('email') }}" required>
          @error('email')
          <span class="invalid-feedback">{{ $message }}</span>
          @enderror
      </div>

      <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror"
                 value="{{ old('phone') }}" required>
          @error('phone')
          <span class="invalid-feedback">{{ $message }}</span>
          @enderror
      </div>

      <div class="form-group">
          <label for="address">Address</label>
          <textarea name="address" id="address" rows="3"
                    class="form-control @error('address') is-invalid @enderror"
                    required>{{ old('address') }}</textarea>
          @error('address')
          <span class="invalid-feedback">{{ $message }}</span>
          @enderror
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
