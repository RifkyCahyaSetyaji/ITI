@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<h3>Welcome, {{ auth()->user()->name }}</h3>
<p>Your role: {{ auth()->user()->role }}</p>
<img src="{{ auth()->user()->photo_url }}" alt="photo" style="max-width:120px;border-radius:8px">
@endsection
