@extends('frontend.layouts.main')
@section('about', 'active')
@section('meta_title', seo_helper(1)->meta_title)
@section('meta_keyword', seo_helper(1)->meta_keyword)
@section('meta_description', seo_helper(1)->meta_desc)
@section('content')

<section id="subheader" class="relative jarallax text-light">
    <img loading="lazy" src="{{ asset('assets') }}/images/defaultimg.webp" class="jarallax-img" alt="{{ business_setting('site_name') }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
    <div class="container relative z-index-1000">
        <div class="row">
            <div class="col-lg-6">
                <ul class="crumb">
                    <li><a href="\">Home</a></li>
                    <li class="active">Gallery</li>
                </ul>
                <h1 class="text-uppercase">Gallery</h1>
                <p class="col-lg-10 lead">Transform Your Garden into a Personal Paradise!</p>
            </div>
        </div>
    </div>
    <img loading="lazy" src="{{ url('storage/app/' . business_setting('header_logo')) }}" class="bottom-0 w-20 bg-light abs end-0 z-2" alt="{{ business_setting('site_name') }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
    <div class="de-gradient-edge-top dark"></div>
    <div class="de-overlay"></div>
</section>

<section class="relative">
    <div class="container">
        <div class="row g-4">
            @foreach($gallerys as $gallery)
            <div class="text-center col-lg-4">
                <a href="{{ url('storage/app/' . $gallery->image) }}" class="image-popup d-block hover">
                    <div class="relative overflow-hidden rounded-10">
                        <div class="absolute text-center text-white start-0 w-100 abs-middle fs-36 z-2">
                            <h4 class="mb-0 hover-scale-in-3">View</h4>
                        </div> 
                        <div class="absolute top-0 w-100 h-100 bg-dark hover-op-05"></div>
                        <img loading="lazy" src="{{ url('storage/app/' . $gallery->image) }}" class="img-fluid hover-scale-1-2" alt="{{ $gallery->title }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';" style="aspect-ratio:4/4">
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>


@endsection
