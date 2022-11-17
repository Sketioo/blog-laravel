@extends('layouts.main')

@section('container')
    <section class="py-5">
        <div class="container bg-light p-5 all-content" style="border-radius: 20px;">
            <div class="row my-5">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="hero-content">
                        <h2 class="hero-header">Selamat Datang di OwnYourBlog <br><b>Tio's Blog</b></h2>
                        <p class="text-secondary hero-desc">Cobalah buat blog mu sendiri, <br>Tuangkan kreatifitas tanpa batas</p>

                        <a href="{{ url('/register') }}" class="btn btn-daftar"><b>Daftar Sekarang!</b></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="true"
                        data-interval="1000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/blog1.png') }}" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/blog2.png') }}" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/blog3.png') }}" class="d-block w-100">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
