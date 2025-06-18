@extends('frontend.layouts.main')

@section('home', 'active')
@section('meta_title', seo_helper(1)->meta_title)
@section('meta_keyword', seo_helper(1)->meta_keyword)
@section('meta_description', seo_helper(1)->meta_desc)

@section('content')



<!-- Hero Section -->
@if (count($sliders) > 0)
            @php $slider = $sliders[0]; @endphp
        <section
            class="hero-section bg-gradient-color d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center g-5">
                    <!-- {/* Left Content */} -->
                    <div
                        class="text-center text-white col-md-6 text-md-start"
                        data-aos="fade-right"
                        data-aos-duration="1500">
                        <h1 class="display-3 fw-bold ">
                            {{ $slider->title }}
                            <br />
                            <!-- {/* <span class="text-highlight">Mobile Repair Training App</span> */} -->
                            {{-- <span class="text-highlight">That Help Your Business
                                Grow Online</span> --}}
                        </h1>
                        <p class="mt-3 lead">
                            {{ $slider->sub_title }}
                        </p>
                  
                        <div>
                            <a href="#contact"
                                class="px-5 py-2 btn btn-gradient text-light">Get
                                Started</a>
                        </div>
                    </div>

                    <!-- {/* Right Image */} -->
                    <div
                        class="text-center col-md-6"
                        data-aos="fade-left"
                        data-aos-duration="1500">
                        <img
                            {{-- src={{ url('storage/app/' . business_setting('image_baner')) }} --}}
                            src={{ url('storage/app/' . $slider->image) }}
                            {{-- src={{ $slider->image }} --}}
                            alt="App preview"
                            class="img-fluid hero-img" />
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!-- Hero Section End -->


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

        <!-- Why Choose Us -->
        <section class="py-5 bg-light" id="why-choose-us">
            <div class="container">
                <h2 class="mb-5 text-center text-primary-color fs-2">Why Choose
                    RnStack Solution?</h2>

                <div class="row g-4">

                    <!-- {/* Card 1 */} -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div
                            class="p-4 bg-white rounded shadow-sm h-100 hover-shadow">
                            <!-- {/* / <fausers size={30}
                                class="mb-3 text-primary-color fs-2" /> */} -->
                            <i
                                class="mb-3 fa fa-users text-primary-color fs-2"></i>
                            <h5 class="mb-2">Experienced Team</h5>
                            <p>Highly skilled developers, designers, and project
                                managers at your service.</p>
                        </div>
                    </div>

                    <!-- {/* Card 2 */} -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div
                            class="p-4 bg-white rounded shadow-sm h-100 hover-shadow">
                            <!-- {/* <faclock size={30}
                                class="mb-3 text-primary-color fs-2" /> */ -->
                            <i
                                class="mb-3 fa fa-clock text-primary-color fs-2"></i>
                            <h5 class="mb-2">On-Time Delivery</h5>
                            <p>We value time. Projects are delivered within
                                deadlines with regular updates.</p>
                        </div>
                    </div>

                    <!-- {/* Card 3 */} -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div
                            class="p-4 bg-white rounded shadow-sm h-100 hover-shadow">
                            <!-- {/* <farupeesign size={30}
                                class="mb-3 text-primary-color fs-2" /> */} -->
                            <i
                                class="mb-3 fa fa-rupee text-primary-color fs-2"></i>
                            <h5 class="mb-2">Affordable Pricing</h5>
                            <p>We offer competitive pricing without compromising
                                quality and performance.</p>
                        </div>
                    </div>

                    <!-- {/* Card 4 */} -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div
                            class="p-4 bg-white rounded shadow-sm h-100 hover-shadow">
                            <!-- {/* <fatools size={30}
                                class="mb-3 text-primary-color fs-2" /> */} -->
                            <i
                                class="mb-3 fa fa-tools text-primary-color fs-2"></i>
                            <h5 class="mb-2">Reliable Support</h5>
                            <p>We provide continuous maintenance, updates, and
                                customer support post-launch.</p>
                        </div>
                    </div>

                    <!-- {/* Card 5 */} -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div
                            class="p-4 bg-white rounded shadow-sm h-100 hover-shadow">
                            <!-- {/* <fashieldalt size={30}
                                class="mb-3 text-primary-color fs-2" />
                            */} -->
                            <i
                                class="mb-3 fa fa-shield-alt text-primary-color fs-2"></i>
                            <h5 class="mb-2">Secure Solutions</h5>
                            <p>We follow best practices to build secure and
                                scalable web & mobile apps.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Why Choose Us End -->

        <!-- Service Section -->
        <section class="py-5 bg-white" id="services">
            <div class="container">
                <h2 class="mb-5 text-center text-primary-color">Our
                    Services</h2>
                <div class="row g-4">

                    <div class="col-md-6 col-lg-4" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div class="p-4 text-center border rounded h-100">
                            <i
                                class="mb-3 fa fa-code fa-2x text-primary-color"></i>
                            <h5>Web Development</h5>
                            <p>Custom websites with modern tech</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div class="p-4 text-center border rounded h-100">
                            <i
                                class="mb-3 fa fa-mobile-alt fa-2x text-primary-color"></i>
                            <h5>App Development</h5>
                            <p>Android/iOS hybrid apps</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div class="p-4 text-center border rounded h-100">
                            <i
                                class="mb-3 fa fa-bullhorn fa-2x text-primary-color"></i>
                            <h5>Digital Marketing</h5>
                            <p>SEO, social & PPC ads</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div class="p-4 text-center border rounded h-100">
                            <i
                                class="mb-3 fa fa-paint-brush fa-2x text-primary-color"></i>
                            <h5>UI/UX Design</h5>
                            <p>User-friendly design solutions</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div class="p-4 text-center border rounded h-100">
                            <i
                                class="mb-3 fa fa-cloud fa-2x text-primary-color"></i>
                            <h5>Cloud Solutions</h5>
                            <p>AWS, GCP & server setup</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div class="p-4 text-center border rounded h-100">
                            <i
                                class="mb-3 fa fa-shield-alt fa-2x text-primary-color"></i>
                            <h5>Cyber Security</h5>
                            <p>Secure & tested apps</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

         <!-- CTA Section -->

        <section class="py-5 text-center text-white bg-gradient-color" id="cta" data-aos="flip-up"
                        data-aos-duration="1500">
            <div class="container">
                <h2>Ready to take your business online?</h2>
                <p class="mb-4">Let’s build something amazing together.
                    Contact us now.</p>
                <a href="#contact" class="btn btn-light">Get Started</a>
            </div>
        </section>

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
                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="flip-right"
                        data-aos-duration="1500">
                        <div
                            class="p-4 text-center bg-white border-0 shadow card rounded-4 h-100">
                            <img src="{{ asset('assets') }}/images/team/ramnivas.jpeg"
                                alt="Ramnivas Rajput"
                                class="mx-auto mb-3 border shadow rounded-circle border-3 border-primary"
                                style="width:110px; height:110px; object-fit:cover;">
                            <h5 class="mb-1 fw-bold">Ramnivas Rajput</h5>
                            <p
                                class="text-primary-color small fw-semibold">Founder
                                &
                                Team Leader</p>
                            <p class="fst-italic text-secondary small">
                                “As the visionary behind RnStack Solution, I
                                lead our team with a strong foundation in
                                backend development, ensuring every project is
                                scalable, secure, and impactful.”
                            </p>
                            <a
                                href="https://www.linkedin.com/in/ramnivasrajput9753/"
                                target="_blank" class="text-primary-color fs-5">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Member 2 -->
                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="flip-right"
                        data-aos-duration="1500">
                        <div
                            class="p-4 text-center bg-white border-0 shadow card rounded-4 h-100">
                            <img src="{{ asset('assets') }}/images/team/default.avif"
                                alt="Laxmi"
                                class="mx-auto mb-3 border shadow rounded-circle border-3 border-primary"
                                style="width:110px; height:110px; object-fit:cover;">
                            <h5 class="mb-1 fw-bold">Laxmi</h5>
                            <p
                                class="text-primary-color small fw-semibold">Project
                                Manager</p>
                            <p class="fst-italic text-secondary small">
                                “With expertise in client communication and team
                                coordination, I ensure smooth delivery of each
                                project while maintaining high quality and
                                client satisfaction.”
                            </p>
                            <a href="https://www.linkedin.com/" target="_blank"
                                class="text-primary-color fs-5">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Member 3 -->
                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="flip-right"
                        data-aos-duration="1500">
                        <div
                            class="p-4 text-center bg-white border-0 shadow card rounded-4 h-100">
                            <img src="{{ asset('assets') }}/images/team/ramnivas.jpeg"
                                alt="Ramnivas Rajput"
                                class="mx-auto mb-3 border shadow rounded-circle border-3 border-primary"
                                style="width:110px; height:110px; object-fit:cover;">
                            <h5 class="mb-1 fw-bold">Ramnivas Rajput</h5>
                            <p
                                class="text-primary-color small fw-semibold">Senior
                                Frontend Developer</p>
                            <p class="fst-italic text-secondary small">
                                “I specialize in creating responsive, intuitive,
                                and pixel-perfect interfaces using React,
                                Tailwind, and modern frontend frameworks.”
                            </p>
                            <a href="https://www.linkedin.com/" target="_blank"
                                class="text-primary-color fs-5">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Member 4 -->
                    <div class="col-md-6 col-lg-4 col-xl-3" data-aos="flip-right"
                        data-aos-duration="1500">
                        <div
                            class="p-4 text-center bg-white border-0 shadow card rounded-4 h-100">
                            <img src="{{ asset('assets') }}/images/team/default.avif"
                                alt="Laxmi"
                                class="mx-auto mb-3 border shadow rounded-circle border-3 border-primary"
                                style="width:110px; height:110px; object-fit:cover;">
                            <h5 class="mb-1 fw-bold">Laxmi</h5>
                            <p class="text-primary-color small fw-semibold">SEO
                                Expert
                                & Content Strategist</p>
                            <p class="fst-italic text-secondary small">
                                “With a deep understanding of SEO algorithms and
                                keyword research, I help brands gain visibility
                                and rank higher with content that connects and
                                converts.”
                            </p>
                            <a href="https://www.linkedin.com/" target="_blank"
                                class="text-primary-color fs-5">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


          <!-- Faq  -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="mb-3 text-center fw-bold text-primary-color"
                    data-aos="fade-up" data-aos-duration="1500">
                    Frequently Asked Questions
                </h2>
                <p class="mb-5 text-center text-muted fs-5 fw-semibold"
                    data-aos="fade-up" data-aos-duration="1500">
                    Get answers to the most common questions about RnStack
                    Solution and how it can transform your business workflow.
                </p>

                <div class="row align-items-center">
                    <!-- Left Image -->
                    <div class="mb-4 text-center col-md-6 mb-md-0"
                        data-aos="zoom-in" data-aos-duration="1500">
                        <img src="{{ asset('assets') }}/images/faq.png" alt="FAQ Illustration"
                            class="img-fluid" style="max-height: 400px;" />
                    </div>

                    <!-- Right Accordion -->
                    <div class="col-md-6">
                        <div class="accordion" id="faqAccordion">
                            <!-- Q1 -->
                            <div
                                class="mb-3 overflow-hidden border-0 shadow-sm accordion-item rounded-4"
                                data-aos="fade-up" data-aos-duration="1500">
                                <h2 class="accordion-header" id="headingOne">
                                    <button
                                        class="text-white accordion-button btn-gradient fw-semibold"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne"
                                        aria-expanded="true"
                                        aria-controls="collapseOne"
                                        style="border-radius: 0; padding: 1rem 1.25rem;">
                                        What services does RnStack Solution
                                        provide?
                                    </button>
                                </h2>
                                <div id="collapseOne"
                                    class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        RnStack Solution offers Website
                                        Development, Mobile App Development,
                                        UI/UX Design, SEO, Digital
                                        Marketing, and Full-Stack Development
                                        solutions tailored to your needs.
                                    </div>
                                </div>
                            </div>

                            <!-- Q2 -->
                            <div
                                class="mb-3 overflow-hidden border-0 shadow-sm accordion-item rounded-4"
                                data-aos="fade-up" data-aos-duration="1500">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button
                                        class="text-white accordion-button btn-gradient collapsed fw-semibold"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo"
                                        aria-expanded="false"
                                        aria-controls="collapseTwo"
                                        style="border-radius: 0; padding: 1rem 1.25rem;">
                                        How can RnStack Solution help grow my
                                        business?
                                    </button>
                                </h2>
                                <div id="collapseTwo"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        We help businesses go digital, automate
                                        processes, and engage customers through
                                        responsive websites,
                                        smart apps, and growth-driven marketing
                                        strategies.
                                    </div>
                                </div>
                            </div>

                            <!-- Q3 -->
                            <div
                                class="mb-3 overflow-hidden border-0 shadow-sm accordion-item rounded-4"
                                data-aos="fade-up" data-aos-duration="1500">
                                <h2 class="accordion-header" id="headingThree">
                                    <button
                                        class="text-white accordion-button btn-gradient collapsed fw-semibold"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree"
                                        aria-expanded="false"
                                        aria-controls="collapseThree"
                                        style="border-radius: 0; padding: 1rem 1.25rem;">
                                        How do I get started with RnStack
                                        Solution?
                                    </button>
                                </h2>
                                <div id="collapseThree"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingThree"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        You can get started by contacting our
                                        team via the website or call. We'll
                                        understand your needs, propose
                                        a solution, and start your project with
                                        complete transparency.
                                    </div>
                                </div>
                            </div>

                            <!-- Q4 -->
                            <div
                                class="mb-3 overflow-hidden border-0 shadow-sm accordion-item rounded-4"
                                data-aos="fade-up" data-aos-duration="1500">
                                <h2 class="accordion-header" id="headingFour">
                                    <button
                                        class="text-white accordion-button btn-gradient collapsed fw-semibold"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour"
                                        aria-expanded="false"
                                        aria-controls="collapseFour"
                                        style="border-radius: 0; padding: 1rem 1.25rem;">
                                        What makes RnStack Solution different
                                        from other IT companies?
                                    </button>
                                </h2>
                                <div id="collapseFour"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingFour"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        We blend creativity with code. Our team
                                        ensures on-time delivery, modern tech
                                        stacks, responsive
                                        support, and solutions that are both
                                        scalable and future-ready.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion -->
                </div>
            </div>
        </section>

         <!-- Contact  -->
        <section class="py-5" id="contact">
            <div class="container">
                <h2 class="mb-5 text-center text-primary-color">Contact Us</h2>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form name="contactForm" id="contact_form" method="POST" action="{{ route('contact_create') }}" enctype="multipart/form-data">
                 @csrf
                <input
                  type="text"
                  class="p-2 mb-3 rounded form-control"
                  name="name" id="name"
                  placeholder="Your Name" />
                <input
                  type="email"
                  class="p-2 mb-3 rounded form-control"
                  name="email" id="email"
                  placeholder="Your Email" />
                <input
                  type="tel"
                  class="p-2 mb-3 rounded form-control"
                  name="phone" id="phone"
                  placeholder="Your Phone" />
                <textarea
                  class="p-2 mb-3 rounded form-control"
                  rows="3" name="message" id="message"
                  placeholder="Your Message" ></textarea>
                <button
                  type="submit" id='send_message'
                  class="px-4 py-2 mt-2 btn btn-gradient">
                  Send Message
                </button>
              </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact end -->


        {{-- Blog Section --}}

        {{-- <section>
            <div class="container">
                <div class="row g-4">
                    <div class="text-center col-lg-12">
                        <h3 class="text-uppercase">Latest Blog</h3>
                    </div>
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
                                            <h4><a class="text-dark"
                                                    href="{{ route('front.blog_details', ['slug' => $blog->slug]) }}">{!! Str::limit($blog->title, 80) !!}</a>
                                            </h4>
                                            <p class="mb-0">{!! Str::limit($blog->short_description, 200) !!}</p>

                                            <div class="bottom-0 pb-20 abs">
                                            <div class="d-inline fs-14 fw-600 me-3"><i
                                                    class="icofont-chat id-color-2 me-2"></i>10 Comments</div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section> --}}

        {{-- Blog Section --}}



    {{-- </div> --}}
    <!-- content end -->
@endsection
