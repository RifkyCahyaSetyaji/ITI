@extends('layouts.app')
@section('title','Edit User')
@section('content')
<h3>Edit User</h3>
<form method="POST" action="{{ route('admin.users.update', $user) }}">
  @csrf
  <div class="mb-3"><label>Name</label>
    <input name="name" value="{{ old('name', $user->name) }}" class="form-control"></div>
  <div class="mb-3"><label>Email</label>
    <input name="email" value="{{ old('email', $user->email) }}" class="form-control"></div>
  <div class="mb-3"><label>Role</label>
    <select name="role" class="form-control">
      <option value="user" {{ $user->role=='user' ? 'selected' : '' }}>User</option>
      <option value="admin" {{ $user->role=='admin' ? 'selected' : '' }}>Admin</option>
    </select>
  </div>
  <button class="btn btn-primary">Save</button>
</form>
@endsection
