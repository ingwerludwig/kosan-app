@extends('layouts.app')

@section('content')
    @auth
    {{-- <img src="{{ Auth::user()->name }}" alt=""> --}}

    <h1>{{ Auth::user()->name }}</h1>

    <form action="{{ route('find.kost') }}" method="POST">
      @csrf
    <div class="wrap">
        <div class="search">
           <input name="alamat" id="alamat" type="text" class="searchTerm" placeholder="Lokasi yang diinginkan">
           <button type="submit" class="searchButton">
             <i class="fa fa-search"></i>
          </button>
        </div>
     </div>
    </form>
    @endauth
@endsection