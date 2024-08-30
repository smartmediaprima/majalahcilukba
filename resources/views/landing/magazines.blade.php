@extends('landing.layouts.app')
@section('content')
    <!-- Sesi 2 -->
    <section id="hero">

        <div class="container">
            <div class="justify-content-center align-items-center text-center">
                <div data-aos="zoom-out">
                    <h1>Daftar Majalah</h1>
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section>
    <!-- End Sesi 2 -->

    <div class="container position-relative py-4">
        <div class="row py-4 justify-center">
            <div class="col me-auto">
                {{ $magazines->links() }}
            </div>
            <div class="col-5">
                <form class="d-flex justify-content-end" role="search">
                    @if (request('cat_id'))
                        <input type="hidden" name="cat_id" value="{{ request('cat_id') }}">
                    @endif
                    @if (request('edisi'))
                        <input type="hidden" name="edisi" value="{{ request('edisi') }}">
                    @endif
                    <input class="form-control me-2 bg-light text-dark" type="search" id="search" name="search"
                        autocomplete="off" placeholder="Cari Majalah / Edisi" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>

        <div class="row g-4">
            @forelse ($magazines as $magz)
                <div class="col-6 col-md-4 col-lg-3 wow fadeIn" data-wow-delay="0.1s" data-aos="fade-in">
                    <a class="position-absolute mt-2 mx-3" href="/majalah?cat={{ $magz->cat->slug }}">
                        <span class="badge text-bg-{{ $magz->cat->color }}">{{ $magz->cat->name }}</span>
                    </a>
                    <div class="product-item text-center p-4 ">
                        <img class="img-fluid mb-4" src="{{ asset('assets/img/majalah/cover-cilukba/C107.png') }}"
                            alt="#">
                        <a href="/majalah/{{ $magz->id }}" class="h5 fw-bold d-inline-block mb-2">
                            {{ $magz->cat->name }} Ed. {{ $magz->edisi }}</a>
                    </div>
                </div>
            @empty
                <div class="align-self-center text-center">
                    <h1 class="fs-1 fw-bolder">404</h1>
                    <p class="fs-5">Article Not Found :(</p>
                    <a href="/majalah" class="btn btn-outline-danger"><i class="bi bi-arrow-left"></i> Back to all Posts</a>
                </div>
            @endforelse
        </div>
    </div>
@endsection
