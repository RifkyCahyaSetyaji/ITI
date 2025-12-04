@extends('layouts.app')
@section('title','Admin - Users')
@section('content')
<h3>Users</h3>
<table class="table">
  <thead><tr><th>#</th><th>Name</th><th>Email</th><th>Role</th><th>Actions</th></tr></thead>
  <tbody>
    @foreach($users as $u)
      <tr>
        <td>{{ $u->id }}</td>
        <td>{{ $u->name }}</td>
        <td>{{ $u->email }}</td>
        <td>{{ $u->role }}</td>
        <td>
          <a href="{{ route('admin.users.edit', $u) }}" class="btn btn-sm btn-warning">Edit</a>
          <form method="POST" action="{{ route('admin.users.delete', $u) }}" style="display:inline">@csrf
            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete user?')">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $users->links() }}
@endsection
