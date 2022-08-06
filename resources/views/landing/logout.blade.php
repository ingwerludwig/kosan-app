@extends('layouts.app')

@section('content')
    @auth
        @csrf
        <button type="submit"  value="Logout">Logout</button>
    
    <h1>{{ Auth::user()->name }}</h1>
    @endauth
@endsection