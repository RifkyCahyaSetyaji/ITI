@extends('layouts.app')
@section('title','Edit Profile')
@section('content')
<div class="row">
  <div class="col-md-8">
    <h3>Edit Profile</h3>
    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control">
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control">
      </div>
      <div class="mb-3">
        <label>New Password (leave empty to keep)</label>
        <input type="password" name="password" class="form-control">
      </div>
      <div class="mb-3">
        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control">
      </div>
      <div class="mb-3">
        <label>Photo (jpg, png, max 2MB)</label>
        <input type="file" name="photo" class="form-control">
        @if($user->photo)
          <img src="{{ asset('storage/'.$user->photo) }}" style="max-width:120px;margin-top:10px">
        @endif
      </div>
      <button class="btn btn-primary">Save</button>
    </form>
  </div>
</div>
@endsection
