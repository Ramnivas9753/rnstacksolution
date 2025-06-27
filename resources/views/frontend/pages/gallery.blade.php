@extends('frontend.layouts.main')
@section('about', 'active')
@section('meta_title', seo_helper(1)->meta_title)
@section('meta_keyword', seo_helper(1)->meta_keyword)
@section('meta_description', seo_helper(1)->meta_desc)
@section('content')

<!-- Header Section -->
<section id="subheader" class="bg-gradient-color mt-1 text-white py-5 position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent px-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Gallery</li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold text-uppercase">Gallery</h1>
                <p class="lead">Our Expertise in Web, App & Tech Solutions!</p>
            </div>
            <div class="col-lg-6 text-end">
                <img src="{{ url('storage/app/' . business_setting('header_logo')) }}"
                     alt="{{ business_setting('site_name') }}"
                     onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';"
                     class="img-fluid" style="max-height: 80px;">
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            @foreach($gallerys as $gallery)
            <div class="col-md-4 col-sm-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative overflow-hidden rounded-3">
                        <a href="{{ url('storage/app/' . $gallery->image) }}" target="_blank">
                            <img src="{{ url('storage/app/' . $gallery->image) }}"
                                 class="card-img-top img-fluid gallery-img"
                                 alt="{{ $gallery->title }}"
                                 onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';"
                                 style="aspect-ratio: 4 / 4; object-fit: cover; transition: 0.4s ease;">
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex align-items-center justify-content-center hover-overlay">
                                <h5 class="text-white fw-bold m-0">View</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Optional Hover Zoom Style -->
<style>
    .gallery-img:hover {
        transform: scale(1.05);
    }
    .hover-overlay {
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }
    .card:hover .hover-overlay {
        opacity: 1;
    }
</style>

@endsection
