@extends('frontend.layouts.main')
@section('testimonials', 'active')
@section('meta_title', seo_helper(1)->meta_title)
@section('meta_keyword', seo_helper(1)->meta_keyword)
@section('meta_description', seo_helper(1)->meta_desc)
@section('content')


<!-- Our Team -->
        <section class="py-5 bg-light" id="our-team">
            <div class="container" data-aos="fade-up"
                        data-aos-duration="1500">
                <h2 class="mb-3 text-center fw-bold text-primary-color">🚀 Meet
                    Our
                    Creative Minds</h2>
                <p class="mb-5 text-center text-muted fs-5 fw-semibold" data-aos="fade-up"
                        data-aos-duration="1500">
                    The people powering innovation – passionate, skilled, and
                    always
                    exploring new frontiers in tech.
                </p>

                <div class="row g-4">
                    <!-- Member 1 -->
                     @foreach($testimonials as $testimonial)
                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="flip-right"
                        data-aos-duration="1500">
                        <div
                            class="p-4 text-center bg-white border-0 shadow card rounded-4 h-100">
                            <img src="{{ url('storage/app/' . $testimonial->image) }}"
                                alt="Ramnivas Rajput"
                                class="mx-auto mb-3 border shadow rounded-circle border-3 border-primary"
                                style="width:110px; height:110px; object-fit:cover;">
                            <h5 class="mb-1 fw-bold">{{ $testimonial->name }}</h5>
                            <p
                                class="text-primary-color small fw-semibold">{{ $testimonial->designation }}</p>
                            <p class="fst-italic text-secondary small">
                               {{ $testimonial->comment }}
                            </p>
                            {{-- <a
                                href="https://www.linkedin.com/in/ramnivasrajput9753/"
                                target="_blank" class="text-primary-color fs-5">
                                <i class="fab fa-linkedin"></i>
                            </a> --}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


@endsection
