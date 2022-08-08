@extends('layouts.app')

@section('content')
    @auth
    <h1>Profil</h1>
    {{-- <img src="{{ Auth::user()->name }}" alt=""> --}}

    <h1>{{ Auth::user()->name }}</h1>
    
    @endauth
@endsection