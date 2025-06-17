@extends('frontend.layouts.main')
@section('content')
@section('productEnquiry', 'active')
@section('meta_title', seo_helper(18)->meta_title)
@section('meta_keyword', seo_helper(18)->meta_keyword)
@section('meta_description', seo_helper(18)->meta_desc)

<section id="subheader" class="relative jarallax text-light">
  <img loading="lazy" src="{{ asset('assets') }}/images/defaultimg.webp" class="jarallax-img" alt="{{ business_setting('site_name') }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
  <div class="container relative z-index-1000">
      <div class="row">
          <div class="col-lg-6">
              <ul class="crumb">
                  <li><a href="\">Home</a></li>
                  <li class="active">product Enquiry</li>
              </ul>
              <h1 class="text-uppercase">product Enquiry</h1>
              <p class="col-lg-10 lead">Transform Your Garden into a Personal Paradise!</p>
          </div>
      </div>
  </div>
  <img loading="lazy" src="{{ url('storage/app/' . business_setting('header_logo')) }}" class="bottom-0 w-20 bg-light abs end-0 z-2" alt="{{ business_setting('site_name') }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
  <div class="de-gradient-edge-top dark"></div>
  <div class="de-overlay"></div>
</section>

<section class="">
  <div class="container">
      <div class="row g-4">
        <div class="col-12">
            <div class="col-md-6">
                <h3 class="wow fadeInUp">Send Your Message</h3>

              <p>If you need help growing a specific vegetable or want any special tips, I’m always here to assist you.</p>
            </div>
        </div>
          <div class="col-lg-6">
              

              <div class="spacer-single"></div>

              <div class="overflow-hidden rounded-1 bg-light">
                  <div class="row g-2 ">
                      <div class="col-sm-6">
                          <div class="relative auto-height" data-bgimage="url({{ asset('assets') }}/images/blog/1.webp)"></div>
                      </div>   
                      <div class="relative col-sm-6">
                          <div class="p-30">

                              <div class="spacer-20"></div>

                              <div class="fw-bold text-dark"><i class="icofont-location-pin me-2 id-color-2"></i>Office Location</div>
                              {{business_setting('address')}}

                              <div class="spacer-20"></div>

                              <div class="fw-bold text-dark"><i class="icofont-phone me-2 id-color-2"></i>Call Us Directly</div>
                              <a href="tel:{{business_setting('phone_no1')}}">{{business_setting('phone_no1')}}</a>

                              <div class="spacer-20"></div>

                              <div class="fw-bold text-dark"><i class="icofont-envelope me-2 id-color-2"></i>Send a Message</div>
                              {{business_setting('email_id')}}                                            
                          </div>
                      </div>                             
                  </div>
              </div>

          </div>

          <div class="col-lg-6">
              <div class="p-4 rounded-10px">
                  <form name="productEnquiryForm" id="productEnquiry_form" class="position-relative z1000" method="POST" action="{{ route('productEnquiry_create') }}" enctype="multipart/form-data">
                    @csrf
                      <div class="field-set">
                          <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                      </div>

                      <div class="field-set">
                          <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" required>
                      </div>

                      <div class="field-set">
                          <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                      </div>

                      <div class="field-set mb20">
                          <textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                      </div>
                        
                      <div id='submit' class="mt20">
                          <input type='submit' id='send_message' value='Send Message' class="btn-main">
                      </div>

                      <div id="success_message" class='success'>
                          Your message has been sent successfully. Refresh this page if you want to send more messages.
                      </div>
                      <div id="error_message" class='error'>
                          Sorry there was an error sending your form.
                      </div>
                  </form>
              </div>
          </div>
          
      </div>
  </div>
</section>  

@endsection
