@extends('frontend.layouts.main')
@section('about', 'active')
@section('meta_title', seo_helper(2)->meta_title)
@section('meta_keyword', seo_helper(2)->meta_keyword)
@section('meta_description', seo_helper(2)->meta_desc)
@section('content')

<!-- Header Section -->
<section id="subheader" class="bg-gradient-color mt-1 text-white py-5 position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent px-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">About</li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold text-uppercase">About Us</h1>
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

     <!-- About -->
        <section class="py-5" id="about">
            <div class="container">
                <div class="row align-items-center">

                    <!-- {/* Left Image */} -->
                    <div class="mb-4 col-md-6 mb-md-0" data-aos="fade-right"
                        data-aos-duration="1500">
                        <img
                            src={{ url('storage/app/' . business_setting('about_image')) }}
                            alt="About RnStack"
                            class="rounded img-fluid" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';"/>
                    </div>

                    <!-- {/* Right Text */} -->
                    <div class="col-md-6" data-aos="fade-left"
                        data-aos-duration="1500">
                        <h2 class="mb-4 text-primary-color">{{ business_setting('about_us') }}</h2>
                        <p>
                          {!! business_setting('long_description') !!}
                          {{-- {!! Str::limit(business_setting('long_description'), 400) !!} --}}
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <!-- About End -->



@endsection
