@extends('layouts.app')
@section('title','Login')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <h3>Login</h3>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <button class="btn btn-primary">Login</button>
    </form>
  </div>
</div>
@endsection
