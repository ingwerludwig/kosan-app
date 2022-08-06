@extends('layouts.app')

@section('content')
    @auth
    {{-- <img src="{{ Auth::user()->name }}" alt=""> --}}

    <h1>{{ Auth::user()->name }}</h1>
    <section class="section about-section" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        <h3 class="dark-color">Ingwer Ludwig Nommensen</h3>
                        <h6 class="theme-color lead">Teknik Informatika ITS 2020</h6>
                        <p>A <mark>hard-worker</mark> student at Sepuluh Nopember Institute of Technology and pursuing a Bachelor of Informatics, I'm very impassioned for learning backend and other things to overcome real world challenging problems</p>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Birthday</label>
                                    <p>11th November</p>
                                </div>
                                <div class="media">
                                    <label>Umur</label>
                                    <p>19 Tahun</p>
                                </div>
                                <div class="media">
                                    <label>Domisili</label>
                                    <p>Surabaya</p>
                                </div>
                                <div class="media">
                                    <label>Alamat</label>
                                    <p>Jalan Kejawan Gebang 1 No. 17</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <label>E-mail</label>
                                    <p>ingwerflash@gmail.com</p>
                                </div>
                                <div class="media">
                                    <label>No. Telp</label>
                                    <p>0812-8258-7212</p>
                                </div>
                                <div class="media">
                                    <label>Instagram</label>
                                    <p>@ingwerludwig_</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endauth
@endsection