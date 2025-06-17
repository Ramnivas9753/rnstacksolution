@extends('frontend.layouts.main')
@section('content')
@section('blog', 'active')
@section('meta_title', $blog_details->meta_title)
@section('meta_keyword', $blog_details->meta_keyword)
@section('meta_description', $blog_details->meta_desc)

<!-- ------Blogs------ -->
        <div class="container py-5">
            <div class="p-2 row justify-content-center p-md-0">
                <div class="p-4 bg-white shadow col-xl-8 col-lg-10 rounded-4">

                    <!-- Blog Image -->
                    <img src="{{ url('storage/app/' . $blog_details->banner) }}"
                        alt="Website Development"
                        class="mb-4 rounded img-fluid w-100" />

                    <!-- Blog Title -->
                    <h1 class="mb-3 fw-bold text-dark">{{ $blog_details->title }}</h1>

                    <!-- Author & Date -->
                    <div
                        class="mb-4 d-flex align-items-center text-muted small">
                        <img src="{{ url('storage/app/' . $blog_details->image) }}"
                            alt="RnStack Solution" class="rounded-circle me-2"
                            width="65" height="65" />
                        <span class="me-3">
                            <i class="fa fa-user me-1 text-primary"></i> RnStack
                            Solution
                        </span>
                        <span>
                            <i class="fa fa-calendar-alt me-1 text-primary"></i>
                            {{ date('M d, Y', strtotime($blog_details->date)) }}
                        </span>
                    </div>

                    <!-- Blog Content -->
                    <div class="blog-content fs-5 lh-lg text-dark">
                        <p>
                            {!! $blog_details->long_description !!}
                        </p>
                    </div>

                    <!-- Share Buttons -->
                    <div class="pt-4 mt-5 border-top">
                        <h6 class="text-muted">Share this blog:</h6>
                        <div class="gap-3 mt-3 d-flex">
                            <a href="https://wa.me/" target="_blank"
                                class="shadow-sm d-flex align-items-center justify-content-center"
                                style="width: 38px; height: 38px; border-radius: 50%; background-color: #ffffff; color: #1e3c72; font-size: 16px; transition: 0.3s;"
                                onmouseover="this.style.backgroundColor='#003399'; this.style.color='#fff';"
                                onmouseout="this.style.backgroundColor='#ffffff'; this.style.color='#1e3c72';">
                                <i class="fab fa-whatsapp"></i>
                            </a>

                            <a href="https://facebook.com/" target="_blank"
                                class="shadow-sm d-flex align-items-center justify-content-center"
                                style="width: 38px; height: 38px; border-radius: 50%; background-color: #ffffff; color: #1e3c72; font-size: 16px; transition: 0.3s;"
                                onmouseover="this.style.backgroundColor='#003399'; this.style.color='#fff';"
                                onmouseout="this.style.backgroundColor='#ffffff'; this.style.color='#1e3c72';">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="https://instagram.com/" target="_blank"
                                class="shadow-sm d-flex align-items-center justify-content-center"
                                style="width: 38px; height: 38px; border-radius: 50%; background-color: #ffffff; color: #1e3c72; font-size: 16px; transition: 0.3s;"
                                onmouseover="this.style.backgroundColor='#003399'; this.style.color='#fff';"
                                onmouseout="this.style.backgroundColor='#ffffff'; this.style.color='#1e3c72';">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a href="https://twitter.com/" target="_blank"
                                class="shadow-sm d-flex align-items-center justify-content-center"
                                style="width: 38px; height: 38px; border-radius: 50%; background-color: #ffffff; color: #1e3c72; font-size: 16px; transition: 0.3s;"
                                onmouseover="this.style.backgroundColor='#003399'; this.style.color='#fff';"
                                onmouseout="this.style.backgroundColor='#ffffff'; this.style.color='#1e3c72';">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Back Button -->
                    <button class="mt-4 btn btn-outline-danger"
                        onclick="history.back()">
                        <i class="fa fa-arrow-left me-2"></i> Back
                    </button>
                </div>
            </div>
        </div>

        <!-- ------Blogs------ -->

@endsection
