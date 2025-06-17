@extends('frontend.layouts.main')
@section('content')
@section('product', 'active')
@section('meta_title', seo_helper(4)->meta_title)
@section('meta_keyword', seo_helper(4)->meta_keyword)
@section('meta_description', seo_helper(4)->meta_desc)


{{-- <section id="subheader" class="relative bg-light">
    <div class="container relative z-index-1000">
        <div class="row">
            <div class="col-lg-6">
                <ul class="crumb">
                    <li><a href="{{ route('front.index') }}">Home</a></li>
                    <li class="active">product All</li>
                </ul>
                <h1 class="text-uppercase">product All</h1>
                <p class="col-lg-10 lead">Transform Your Garden into a Personal Paradise!</p>
            </div>
        </div>
    </div>
    <img src="{{ url('storage/app/' . business_setting('header_logo')) }}" class="bottom-0 w-20 abs end-0 z-2" alt="">
</section>

<section>
    <div class="container">
        <div class="row g-4">


            <div class="col-lg-12">
                <div class="row g-4">
                    @foreach ($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="text-center de__pcard">
                            <div class="atr__images">
                                <div class="atr__promo">
                                    {{ business_setting('site_name') }}
                                </div>
        
                                    
                                    <a href="{{ route('front.product_details', ['slug' => $product->slug]) }}">
                                    <img class="atr__image-main" src="{{ url('storage/app/' . $product->image) }}"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';" style="aspect-ratio: 1/1; width: 280px;">
                                    <img class="atr__image-hover" src="{{ url('storage/app/' . business_setting('header_logo')) }}"
                                    onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';" style="aspect-ratio: 1/1; width: 280px;">
                                </a>
                  

                            <h3>{{$product->title}}</h3>
                            <div class="atr__main-price">
                                ₹{{ $product->price }}
                            </div>

                            
                            
                        </div>
                    </div>
                    @endforeach
                    <!-- product item end -->                                   
                </div>
            </div>
        </div>
        
    </div>
</section> --}}

<section class="px-4 py-5 career-section bg-light text-dark">
            <div class="container">
                <div class="mb-5 text-center">
                    <h2 class="fw-bold text-primary-color display-5">Join RnStack
                        Solution</h2>
                    <p class="lead text-muted">
                        Shape the future of technology with a team that cares
                        about innovation, learning, and growth.
                    </p>
                </div>

                <!-- {/* Job Openings */} -->
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="shadow-sm card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Frontend
                                    Developer</h5>
                                <p class="card-text text-muted">React.js,
                                    HTML/CSS, Tailwind</p>
                                <p class="text-primary-color">Full-Time |
                                    Remote</p>
                                <button class="btn btn-gradient w-100">Apply
                                    Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="shadow-sm card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Backend
                                    Developer</h5>
                                <p class="card-text text-muted">Laravel,
                                    MySQL, REST API</p>
                                <p class="text-primary-color">Full-Time |
                                    Hybrid</p>
                                <button class="btn btn-gradient w-100">Apply
                                    Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="shadow-sm card h-100">
                            <div class="card-body">
                                <h5 class="card-title">UI/UX Designer</h5>
                                <p class="card-text text-muted">Figma, Adobe
                                    XD, Wireframes</p>
                                <p class="text-primary-color">Internship |
                                    Remote</p>
                                <button class="btn btn-gradient w-100">Apply
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- {/* Resume Form */} -->
                <div class="p-4 mt-5 bg-white rounded shadow-sm">
                    <h4 class="mb-3">Didn’t find a role that fits? Send us
                        your resume!</h4>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control"
                                placeholder="Your Name" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control"
                                placeholder="you@example.com" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Upload Resume (PDF
                                only)</label>
                            <input type="file" class="form-control" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Portfolio / LinkedIn
                                (optional)</label>
                            <input type="text" class="form-control"
                                placeholder="https://" />
                        </div>
                        <div class="col-12">
                            <label class="form-label">Why do you want to
                                join us?</label>
                            <textarea rows="4" class="form-control"
                                placeholder="Tell us in brief..."></textarea>
                        </div>
                        <div class="col-12 text-end">
                            <button
                                class="px-4 btn btn-gradient">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

@endsection
