@extends('frontend.layouts.main')
@section('content')
@section('contact', 'active')
@section('meta_title', seo_helper(18)->meta_title)
@section('meta_keyword', seo_helper(18)->meta_keyword)
@section('meta_description', seo_helper(18)->meta_desc)

 <!-- Contact  -->
    <div class="py-5 contact-wrapper bg-light">
      <div class="container">
        <div class="row align-items-start">
          <!-- {/* Left Column */} -->
          <div class="mb-4 col-md-6" data-aos="fade-right"
            data-aos-duration="1500">
            <h3 class="fw-bold text-primary-color">Find Us There</h3>
            <p class="text-muted fs-5 fw-semibold">
              <strong class="text-gradient">{{ business_setting('site_name') }}</strong> is your
              trusted partner for IT solutions.
            </p>

            <div class="mb-4">
              <h6 class="fw-bold text-primary-color">Office Location</h6>
              <div class="d-flex align-items-center">
                <i class="fa fa-location-dot me-2 fs-3 text-primary-color"></i>
                <p class="mb-0">
                  {{business_setting('address')}}
                </p>
              </div>
            </div>

            <div class="mb-4">
              <h6 class="fw-bold text-primary-color">Office Hours</h6>
              <div class="d-flex align-items-center">
                <i class="fa fa-clock me-2 fs-3 text-primary-color"></i>
                <p class="mb-0">
                  Monday - Saturday<br />
                  10:00 AM - 6:00 PM
                </p>
              </div>
            </div>

            <div class="mb-4">
              <h6 class="fw-bold text-primary-color">Phone</h6>
              <div class="d-flex align-items-center">
                <i class="fa fa-phone me-2 fs-3 text-primary-color"></i>
                <div>
                  <a class="mb-0 text-decoration-none text-dark"
                    href="tel:+919753102497">
                   {{business_setting('phone_no1')}}
                  </a>
                  <br />
                  <a class="mb-0 text-decoration-none text-dark"
                    href="tel:+919752902223">
                    {{business_setting('phone_no2')}}
                  </a>
                </div>
              </div>
            </div>

            <div class="mb-4">
              <h6 class="fw-bold text-primary-color">Email</h6>
              <div class="d-flex align-items-center">
                <i class="fa fa-envelope me-2 fs-3 text-primary-color"></i>
                <a href="mailto:{{business_setting('email_id')}}"
                  class="mb-0 text-decoration-none text-dark">
                  {{business_setting('email_id')}}
                </a>
              </div>
            </div>
          </div>

          <!-- {/* Right Column */} -->
          <div class="col-md-6" data-aos="fade-left" data-aos-duration="1500">
            <div class="p-4 bg-white shadow rounded-4 contact-form">
              <h4 class="mb-2 fw-bold text-primary-color" data-aos="fade-up"
                data-aos-duration="1500">Let's Talk About Your Idea</h4>
              <p class="mb-4 text-muted" data-aos="fade-up"
                data-aos-duration="1500">
                We're here to assist you with your website design needs. Reach
                out to us!
              </p>

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
      </div>
    </div>
    <!-- Contact end -->

@endsection
