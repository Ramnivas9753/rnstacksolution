@extends('frontend.layouts.main')
@section('services', 'active')
@section('meta_title', seo_helper(1)->meta_title)
@section('meta_keyword', seo_helper(1)->meta_keyword)
@section('meta_description', seo_helper(1)->meta_desc)
@section('content')


<!-- Service Section -->
        <section class="py-5 bg-white" id="services">
            <div class="container">
                <h2 class="mb-5 text-center text-primary-color">Our
                    Services</h2>
                <div class="row g-4">

                    @foreach($services as $service)
                    <div class="col-md-6 col-lg-4" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div class="p-4 text-center border rounded h-100">
                            <i class="mb-3 fa fa-code fa-2x text-primary-color"></i>
                            {{-- {{ url('storage/app/' . $service->image) }} --}}
                            <h5>{{ $service->title }}</h5>
                            <p>{{ $service->subtitle }}</p>
                            {{-- <h5>{{ $service->description }}</h5> --}}
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>


@endsection
