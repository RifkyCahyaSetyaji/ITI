@extends('layouts.app')
@section('title','Register')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <h3>Register</h3>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <div class="mb-3">
        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control">
      </div>
      <button class="btn btn-primary">Register</button>
    </form>
  </div>
</div>
@endsection
