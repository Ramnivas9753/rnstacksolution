<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield('meta_title') | RnStack Solution</title>
    <link rel="icon" href="{{ url('storage/app/' . business_setting('header_logo')) }}" type="image/gif" sizes="16x16">

    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet" type="text/css">

     <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
            rel="stylesheet" crossorigin="anonymous">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
            crossorigin="anonymous" referrerpolicy="no-referrer" />

             <!-- Swiper CSS -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

        <!-- AOS CSS -->
        <link rel="stylesheet"
            href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

</head>

<body>

    <!-- Enquiry Modal -->
        <div class="modal fade" id="enquiryModal" tabindex="-1"
            aria-labelledby="enquiryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-4">
                    <div class="text-white modal-header bg-gradient-color">
                        <h5 class="modal-title" id="enquiryModalLabel">Contact
                            Us</h5>
                        <button type="button" class="bg-white btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="py-4 modal-body">
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

        <!-- preloader begin -->
        <div id="de-loader"></div>
       

        <!-- Marquee with Pause on Hover -->
        <div
            class="px-3 py-2 text-white bg-gradient-color border-bottom">
            <marquee
                behavior="scroll"
                direction="left"
                scrollamount="6"
                onmouseover="this.stop();"
                onmouseout="this.start();">
                📢 लेटेस्ट अपडेट: अब हमारी IT सेवाएं भारतभर में उपलब्ध हैं! 🖥️
                | 🌐
                <strong>RnStack Solution</strong> अब आपके लिए लेकर आया है
                Website & App Development, 📱 | 🚀
                Digital Marketing, SEO, Branding और Complete Tech Solutions 🎯
                अपने बिज़नेस को ऑनलाइन ले जाएं और बढ़ाएं ग्रोथ — हमारी टीम के
                साथ। 📞 आज ही संपर्क करें | 💼 Let's build your digital future
                together!
            </marquee>
        </div>
        <div
            class="px-3 py-2 text-white bg-gradient-color border-bottom">
            <marquee
                behavior="scroll"
                direction="left"
                scrollamount="6"
                onmouseover="this.stop();"
                onmouseout="this.start();">
                📢 लेटेस्ट अपडेट: अब हमारी IT सेवाएं भारतभर में उपलब्ध हैं! 🖥️
                | 🌐
                <strong>RnStack Solution</strong> अब आपके लिए लेकर आया है
                Website & App Development, 📱 | 🚀
                Digital Marketing, SEO, Branding और Complete Tech Solutions 🎯
                अपने बिज़नेस को ऑनलाइन ले जाएं और बढ़ाएं ग्रोथ — हमारी टीम के
                साथ। 📞 आज ही संपर्क करें | 💼 Let's build your digital future
                together!
            </marquee>
        </div>
        <div
            class="px-3 py-2 text-white bg-gradient-color border-bottom">
            <marquee
                behavior="scroll"
                direction="left"
                scrollamount="6"
                onmouseover="this.stop();"
                onmouseout="this.start();">
                📢 लेटेस्ट अपडेट: अब हमारी IT सेवाएं भारतभर में उपलब्ध हैं! 🖥️
                | 🌐
                <strong>RnStack Solution</strong> अब आपके लिए लेकर आया है
                Website & App Development, 📱 | 🚀
                Digital Marketing, SEO, Branding और Complete Tech Solutions 🎯
                अपने बिज़नेस को ऑनलाइन ले जाएं और बढ़ाएं ग्रोथ — हमारी टीम के
                साथ। 📞 आज ही संपर्क करें | 💼 Let's build your digital future
                together!
            </marquee>
        </div>

        <!-- Navbar -->
        <nav
            class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient-color custom-navbar sticky-navbar">
            <div class="container">
                <a href="{{ route('front.index') }}"
                    class="navbar-brand d-flex align-items-center">
                    <img src="{{ url('storage/app/' . business_setting('header_logo')) }}" alt="RnStack Solution"
                        class="rounded" style="width: 180px; height: 60px;"  data-aos="fade-right"
                        data-aos-duration="1500" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';"/>
                </a>

                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center"
                    id="navbarNav">
                    <ul class="gap-3 navbar-nav">
                        <li class="nav-item" data-aos="flip-up"
                        data-aos-duration="1500">
                            <a class="text-white nav-link fw-semibold"
                                href={{ route('front.index') }}>Home</a>
                        </li>
                        <li class="nav-item" data-aos="flip-up"
                        data-aos-duration="1500">
                            <a class="text-white nav-link fw-semibold"
                                href={{ route('front.about') }}>About</a>
                        </li>
                        <li class="nav-item" data-aos="flip-up"
                        data-aos-duration="1500">
                            <a class="text-white nav-link fw-semibold"
                                href={{ route('front.blog') }}>Blogs</a>
                        </li>
                        {{-- <li class="nav-item" data-aos="flip-up"
                        data-aos-duration="1500">
                            <a class="text-white nav-link fw-semibold"
                                href="/faqs.html">Faq</a>
                        </li> --}}
                        <li class="nav-item" data-aos="flip-up"
                        data-aos-duration="1500">
                            <a class="text-white nav-link fw-semibold"
                                href="{{ route('front.product') }}">Career</a>
                        </li>
                        <li class="nav-item" data-aos="flip-up"
                        data-aos-duration="1500">
                            <a class="text-white nav-link fw-semibold"
                                href={{ route('front.contact') }}>Contact Us</a>
                        </li>
                        
                    </ul>
                </div>

                <div class="d-none d-lg-block">
                    <button class="btn btn-gradient fw-bold"
                        data-bs-toggle="modal"
                        data-bs-target="#enquiryModal" data-aos="fade-left"
                        data-aos-duration="1500">ENQUIRY
                        NOW</button>

                </div>
            </div>
        </nav>
        <!-- header end -->
        <!-- content begin -->
        @yield('content')
        <!-- content end -->

        <!-- ✅ Footer -->
        <footer class="pt-5 pb-3 text-white"
            style="background: linear-gradient(120deg, #1e3c72, #2a5298); font-family: 'Segoe UI', sans-serif;">
            <div class="container">
                <div class="row">
                    <!-- Logo & Description -->
                    <div class="mb-4 col-md-4">
                        <a href="/"
                            class="mb-3 d-flex align-items-center text-decoration-none text-light">
                            <img src={{ url('storage/app/' . business_setting('header_logo')) }}
                                alt="RnStack Solution Logo" class="shadow-sm"
                                style="width: 180px; height: 60px; border-radius: 5px; margin-right: 15px;" data-aos="fade-right"
                        data-aos-duration="1500" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
                            {{-- <h4 class="m-0 fw-bold" data-aos="fade-left"
                        data-aos-duration="1500">{{ business_setting('site_name') }}</h4> --}}
                        </a>
                        <p class="mb-0" data-aos="fade-up"
                        data-aos-duration="1500">
                            <strong>{{ business_setting('site_name') }}</strong> 
                            {{ business_setting('footer_description') }}
                        </p>

                        <!-- Social Icons -->
                        <div class="gap-3 mt-3 d-flex">
                            <a href="https://wa.me/919753102497" target="_blank"
                                class="social-icon">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href={{ business_setting('facebook') }}
                                target="_blank" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href={{ business_setting('instagram') }}
                                target="_blank" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href={{ business_setting('youtube') }}
                                target="_blank" class="social-icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Useful Links -->
                    <div class="mb-4 col-md-2">
                        <h6 class="mb-3 fw-bold">USEFUL LINKS</h6>
                        <ul class="list-unstyled small">
                            <li><a href={{ route('front.index') }}
                                    class="mb-2 text-white text-decoration-none d-block">»
                                    Home</a></li>
                            <li><a href={{ route('front.about') }}
                                    class="mb-2 text-white text-decoration-none d-block">»
                                    About Us</a></li>
                            <li><a href={{ route('front.contact') }}
                                    class="mb-2 text-white text-decoration-none d-block">»
                                    Contact</a></li>
                        </ul>
                    </div>

                    <!-- Quick Access -->
                    <div class="mb-4 col-md-2">
                        <h6 class="mb-3 fw-bold">QUICK ACCESS</h6>
                        <ul class="list-unstyled small">
                            <li><a href="/careers.html"
                                    class="mb-2 text-white text-decoration-none d-block">»
                                    Careers</a></li>
                            {{-- <li><a href="/faqs.html"
                                    class="mb-2 text-white text-decoration-none d-block" data-aos="fade-up"
                        data-aos-duration="1500">»
                                    FAQs</a></li> --}}
                            <li><a href={{ route('front.blog') }}
                                    class="mb-2 text-white text-decoration-none d-block">»
                                    Blog</a></li>
                        </ul>
                    </div>

                    <!-- Newsletter -->
                    <div class="mb-4 col-md-4">
                        <h6 class="mb-3 fw-bold">NEWSLETTER</h6>
                        <p class="small">Subscribe for latest news and special
                            offers!</p>
                        <div class="mt-3 shadow-sm input-group">
                            <input type="email"
                                class="p-2 form-control rounded-start"
                                placeholder="Enter your email"
                                style="background-color: #f8f9fa; border: none; font-size: 14px;">
                            <button
                                class="btn text-light fw-semibold rounded-end btn-gradient">Subscribe</button>
                        </div>
                    </div>
                </div>

                <hr class="mt-4 border-light">
                <div class="mt-3 text-center small">
                    {{ business_setting('copyright') }}
                </div>
            </div>
        </footer>
        <!-- footer end -->


     <!-- Swiper JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

 <!-- Bootstrap Bundle JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>

        <!-- AOS JS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        {{-- <script src="./assets/js/index.js"></script> --}}
        <script src="{{ asset('assets') }}/js/index.js"></script>

        <script>
    AOS.init();
  </script>

</body>

</html>
