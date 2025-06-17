@extends('frontend.layouts.main')
@section('privacy', 'active')
@section('meta_title', seo_helper(6)->meta_title)
@section('meta_keyword', seo_helper(6)->meta_keyword)
@section('meta_description', seo_helper(6)->meta_desc)
@section('content')


    <section id="subheader" class="relative jarallax text-light">
        <img loading="lazy" src="{{ asset('assets') }}/images/defaultimg.webp" class="jarallax-img" alt="{{ business_setting('site_name') }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
        <div class="container relative z-index-1000">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="crumb">
                        <li><a href="\">Home</a></li>
                        <li class="active">Privacy Policy</li>
                    </ul>
                    <h1 class="text-uppercase">Privacy Policy</h1>
                    <p class="col-lg-10 lead">Transform Your Garden into a Personal Paradise!</p>
                </div>
            </div>
        </div>
        <img loading="lazy" src="{{ url('storage/app/' . business_setting('header_logo')) }}" class="bottom-0 w-20 bg-light abs end-0 z-2" alt="{{ business_setting('site_name') }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
        <div class="de-gradient-edge-top dark"></div>
        <div class="de-overlay"></div>
    </section>

{{-- Section --}}
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin-top: 20px;
    }
    h1, h2 {
        color: #333;
        margin-bottom: 20px;
    }
    h3 {
        color: #555;
        margin-top: 30px;
    }
    p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #666;
    }
    .section-title {
        margin-bottom: 10px;
        font-size: 30px !important;
    }

</style>

<section class="mb-5">
    <div class="container relative z-1">
        <div class="row g-4 gx-5 align-items-center">
            <div class="px-2 col-lg-12 px-md-5">
                <div class="mb-3 subtitle wow fadeInUp">{{business_setting('site_name')}}</div>
                {{-- <h2 class="text-uppercase wow fadeInUp" data-wow-delay=".2s">Privacy Policy</h2> --}}
                {{-- <p class="wow fadeInUp">{!! business_setting('privacy') !!}</p> --}}

                <p><strong>परिचय (Introduction)</strong></p>
        <p>आपका स्वागत है <strong>RnStack Solution</strong> पर। आपकी गोपनीयता हमारे लिए बेहद महत्वपूर्ण है। इस गोपनीयता नीति में हम यह बताएंगे कि हम आपकी व्यक्तिगत जानकारी को कैसे इकट्ठा, उपयोग और सुरक्षित रखते हैं। कृपया इस पेज को ध्यान से पढ़ें, ताकि आप हमारी गोपनीयता प्रथाओं को समझ सकें।</p>

        <h2 class="section-title">हम कौनसी जानकारी इकट्ठा करते हैं (Information We Collect)</h2>
        <p>हम अपनी वेबसाइट पर निम्नलिखित प्रकार की जानकारी एकत्र करते हैं:</p>
        <ul>
            <li>व्यक्तिगत जानकारी: जैसे आपका नाम, ईमेल पता, शिपिंग और बिलिंग पते, फोन नंबर, आदि।</li>
            <li>ऑर्डर संबंधित जानकारी: यदि आप हमारे उत्पाद खरीदते हैं, तो हम ऑर्डर, भुगतान, और शिपिंग से संबंधित जानकारी एकत्र करते हैं।</li>
            <li>सामान्य जानकारी: जैसे IP एड्रेस, ब्राउज़र जानकारी, और आपके द्वारा हमारी वेबसाइट पर की गई गतिविधियाँ।</li>
        </ul>

        <h2 class="section-title">हम आपकी जानकारी का उपयोग कैसे करते हैं (How We Use Your Information)</h2>
        <p>हम आपकी जानकारी का उपयोग निम्नलिखित उद्देश्यों के लिए करते हैं:</p>
        <ul>
            <li>आपके ऑर्डर को पूरा करना और उत्पादों की शिपिंग करना।</li>
            <li>ग्राहक सेवा प्रदान करना और आपके सवालों का उत्तर देना।</li>
            <li>हमारी सेवाओं और उत्पादों में सुधार करना।</li>
            <li>ट्रैकिंग और विश्लेषण करना ताकि हम आपकी वेबसाइट अनुभव को बेहतर बना सकें।</li>
        </ul>

        <h2 class="section-title">कुकीज़ (Cookies)</h2>
        <p>हमारी वेबसाइट कुकीज़ का उपयोग करती है, जो आपकी पसंदीदा सेटिंग्स और वेबसाइट पर नेविगेशन को याद रखने में मदद करती हैं। आप अपनी ब्राउज़र सेटिंग्स में कुकीज़ को नियंत्रित या हटा सकते हैं, लेकिन यह वेबसाइट के कुछ कार्यों को प्रभावित कर सकता है।</p>

        <h2 class="section-title">थर्ड-पार्टी लिंक (Third-Party Links)</h2>
        <p>हमारी वेबसाइट पर कुछ थर्ड-पार्टी वेबसाइटों के लिंक हो सकते हैं। हम इन वेबसाइटों की गोपनीयता नीतियों के लिए जिम्मेदार नहीं हैं और आपको इन साइटों पर जाने से पहले उनकी नीतियों को पढ़ने की सलाह दी जाती है।</p>

        <h2 class="section-title">डेटा सुरक्षा (Data Security)</h2>
        <p>हम आपकी जानकारी की सुरक्षा के लिए उपयुक्त तकनीकी और भौतिक उपायों का पालन करते हैं। हालांकि, कृपया ध्यान दें कि इंटरनेट पर कोई भी डेटा ट्रांसमिशन पूरी तरह से सुरक्षित नहीं हो सकता।</p>

        <h2 class="section-title">गोपनीयता नीति में बदलाव (Changes to This Privacy Policy)</h2>
        <p>हम अपनी गोपनीयता नीति को समय-समय पर अपडेट कर सकते हैं। कोई भी बदलाव इस पेज पर प्रकाशित किया जाएगा। कृपया नियमित रूप से इस पेज को चेक करें।</p>

        <h2 class="section-title">संपर्क करें (Contact Us)</h2>
        <p>यदि आपके पास हमारी गोपनीयता नीति से संबंधित कोई प्रश्न हैं, तो कृपया हमें <a href="mailto:info@RnStack Solution.in">info@RnStack Solution.in</a> पर संपर्क करें।</p>

            </div>

        </div>
    </div>

</section>
{{-- Section --}}


@endsection
