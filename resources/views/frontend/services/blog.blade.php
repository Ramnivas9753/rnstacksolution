@extends('frontend.layouts.main')
@section('content')
@section('blog', 'active')
@section('meta_title', seo_helper(4)->meta_title)
@section('meta_keyword', seo_helper(4)->meta_keyword)
@section('meta_description', seo_helper(4)->meta_desc)

{{-- <section id="subheader" class="relative jarallax text-light">
    <img loading="lazy" src="{{ asset('assets') }}/images/defaultimg.webp" class="jarallax-img" alt="{{business_setting('site_name')}}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
    <div class="container relative z-index-1000">
        <div class="row">
            <div class="col-lg-6">
                <ul class="crumb">
                    <li><a href="\">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
                <h1 class="text-uppercase">Blog</h1>
                <p class="col-lg-10 lead">Transform Your Garden into a Personal Paradise!</p>
            </div>
        </div>
    </div>
    <img loading="lazy" src="{{ url('storage/app/' . business_setting('header_logo')) }}" class="bottom-0 w-20 bg-light abs end-0 z-2" alt="{{business_setting('site_name')}}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
    <div class="de-gradient-edge-top dark"></div>
    <div class="de-overlay"></div>
</section>

<section>
    <div class="container">
        <div class="row g-4">
            
            @foreach ($blogs as $blog)
                    <div class="col-lg-6">
                        <div class="overflow-hidden bg-light">
                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12" style="aspect-ratio:3/3;">
                                            <div class="relative h-100 w-100 auto-height--" style="aspect-ratio:3/3;">
                                                <img loading="lazy" src="{{'storage/app/' . $blog->image }}" class="w-100 h-100" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';" alt="{{ $blog->title }}">
                                                <div
                                                    class="top-0 p-3 pb-2 m-3 text-center text-white abs start-0 bg-color-2 fw-600 rounded-5px">
                                                    <div class="mb-0 fs-36">{{ date('d', strtotime($blog->date)) }}
                                                    </div>
                                                    <span
                                                        class="text-uppercase">{{ date('M', strtotime($blog->date)) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative col-sm-6">
                                    <div class="p-30 pb-60">
                                        <h4><a class="text-dark" href="{{ route('front.blog_details', ['slug' => $blog->slug]) }}">{!! Str::limit($blog->title, 80) !!}</a></h4>
                                        <p class="mb-0">{!! Str::limit($blog->short_description, 200) !!}</p>

                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            
            <!-- pagination begin -->
            {{-- <div class="pt-4 text-center col-lg-12">
                <div class="d-inline-block">
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                </div>
            </div> 
            <!-- pagination end -->
        </div>
    </div>
</section> --}}

 <!-- ------Blogs------ -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="mb-5 text-center fw-bold text-primary-color">
                    Better Choices in Web, App & Branding
                </h2>

                <div id="blogSwiper" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                         @foreach ($blogs as $blog)
                        <div class="swiper-slide">
                            <div
                                class="text-white card bg-dark position-relative rounded-4"
                                style="
                  background: url('{{'storage/app/' . $blog->banner }}') center/cover;
                  height: 350px;
                ">
                                <div
                                    class="top-0 position-absolute start-0 w-100 h-100"
                                    style="background-color: rgba(0, 0, 0, 0.6); z-index: 1"></div>
                                <div
                                    class="p-4 card-img-overlay d-flex flex-column justify-content-center"
                                    style="z-index: 2">
                                    <h6 class="text-center fw-bold">
                                        {!! Str::limit($blog->title, 80) !!}
                                    </h6>
                                    <div
                                        class="mt-3 d-flex justify-content-center align-items-center">
                                        <img
                                            src={{'storage/app/' . $blog->image }}
                                            class="rounded-circle me-2"
                                            alt="Author"
                                            width="60"
                                            height="60" />
                                        <span class="fw-bold">RnStack
                                            Solution</span>
                                    </div>

                                    <button
                                        class="mx-auto mt-3 btn btn-gradient d-block">
                                        <a href="{{ route('front.blog_details', ['slug' => $blog->slug]) }}"
                                            class="text-decoration-none text-light">
                                            Read More
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        

                        <!-- Slide 2 -->
                        {{-- <div class="swiper-slide">
                            <div
                                class="text-white card bg-dark position-relative rounded-4"
                                style="
                  background: url('./assets/images/blogs/blog2.jpg') center/cover;
                  height: 350px;
                ">
                                <div
                                    class="top-0 position-absolute start-0 w-100 h-100"
                                    style="background-color: rgba(0, 0, 0, 0.6); z-index: 1"></div>
                                <div
                                    class="p-4 card-img-overlay d-flex flex-column justify-content-center"
                                    style="z-index: 2">
                                    <h6 class="text-center fw-bold">
                                        Custom Android & iOS App Development
                                    </h6>
                                    <div
                                        class="mt-3 d-flex justify-content-center align-items-center">
                                        <img
                                            src="./assets/images/team/ramnivas.jpeg"
                                            class="rounded-circle me-2"
                                            alt="Author"
                                            width="60"
                                            height="60" />
                                        <span class="fw-bold">RnStack
                                            Solution</span>
                                    </div>
                                    <button
                                        class="mx-auto mt-3 btn btn-gradient d-block">
                                        <a href="blog-details.html"
                                            class="text-decoration-none text-light">
                                            Read More
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Slide 3 -->
                        {{-- <div class="swiper-slide">
                            <div
                                class="text-white card bg-dark position-relative rounded-4"
                                style="
                  background: url('./assets/images/blogs/blog3.jpg') center/cover;
                  height: 350px;
                ">
                                <div
                                    class="top-0 position-absolute start-0 w-100 h-100"
                                    style="background-color: rgba(0, 0, 0, 0.6); z-index: 1"></div>
                                <div
                                    class="p-4 card-img-overlay d-flex flex-column justify-content-center"
                                    style="z-index: 2">
                                    <h6 class="text-center fw-bold">
                                        Boost Your Brand with Digital Marketing
                                    </h6>
                                    <div
                                        class="mt-3 d-flex justify-content-center align-items-center">
                                        <img
                                            src="./assets/images/team/ramnivas.jpeg"
                                            class="rounded-circle me-2"
                                            alt="Author"
                                            width="60"
                                            height="60" />
                                        <span class="fw-bold">RnStack
                                            Solution</span>
                                    </div>
                                    <button
                                        class="mx-auto mt-3 btn btn-gradient d-block">
                                        <a href="blog-details.html"
                                            class="text-decoration-none text-light">
                                            Read More
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div> --}}
                        <!-- Slide 4 -->
                        {{-- <div class="swiper-slide">
                            <div
                                class="text-white card bg-dark position-relative rounded-4"
                                style="
                  background: url('./assets/images/blogs/blog3.jpg') center/cover;
                  height: 350px;
                ">
                                <div
                                    class="top-0 position-absolute start-0 w-100 h-100"
                                    style="background-color: rgba(0, 0, 0, 0.6); z-index: 1"></div>
                                <div
                                    class="p-4 card-img-overlay d-flex flex-column justify-content-center"
                                    style="z-index: 2">
                                    <h6 class="text-center fw-bold">
                                        Boost Your Brand with Digital Marketing
                                    </h6>
                                    <div
                                        class="mt-3 d-flex justify-content-center align-items-center">
                                        <img
                                            src="./assets/images/team/ramnivas.jpeg"
                                            class="rounded-circle me-2"
                                            alt="Author"
                                            width="60"
                                            height="60" />
                                        <span class="fw-bold">RnStack
                                            Solution</span>
                                    </div>
                                    <button
                                        class="mx-auto mt-3 btn btn-gradient d-block">
                                        <a href="blog-details.html"
                                            class="text-decoration-none text-light">
                                            Read More
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <!-- Navigation Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- ------Blogs------ -->

@endsection
