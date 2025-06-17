@extends('frontend.layouts.main')
@section('term_condition', 'active')
@section('meta_title', seo_helper(7)->meta_title)
@section('meta_keyword', seo_helper(7)->meta_keyword)
@section('meta_description', seo_helper(7)->meta_desc)
@section('content')


    <section id="subheader" class="relative jarallax text-light">
        <img loading="lazy" src="{{ asset('assets') }}/images/defaultimg.webp" class="jarallax-img" alt="{{ business_setting('site_name') }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
        <div class="container relative z-index-1000">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="crumb">
                        <li><a href="\">Home</a></li>
                        <li class="active">Terms & Condition</li>
                    </ul>
                    <h1 class="text-uppercase">Terms & Condition</h1>
                    <p class="col-lg-10 lead">Transform Your Garden into a Personal Paradise!</p>
                </div>
            </div>
        </div>
        <img loading="lazy" src="{{ url('storage/app/' . business_setting('header_logo')) }}" class="bottom-0 w-20 bg-light abs end-0 z-2" alt="{{ business_setting('site_name') }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
        <div class="de-gradient-edge-top dark"></div>
        <div class="de-overlay"></div>
    </section>

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

{{-- Section --}}
<section class="mb-5">
    <div class="container relative z-1">
        <div class="row g-4 gx-5 align-items-center">
            <div class="px-2 col-lg-12 px-md-5">
                <div class="mb-3 subtitle wow fadeInUp">{{business_setting('site_name')}}</div>
                {{-- <h2 class="text-uppercase wow fadeInUp" data-wow-delay=".2s">Terms & Condition</h2> --}}
                {{-- <p class="wow fadeInUp">{!! business_setting('term_condition') !!}</p> --}}

                <p><strong>परिचय (Introduction)</strong></p>
        <p>आपका स्वागत है <strong>RnStack Solution</strong> पर। इस वेबसाइट का उपयोग करते हुए, आप हमारी निम्नलिखित शर्तों और नीतियों से सहमत होते हैं। कृपया इन शर्तों को ध्यान से पढ़ें, क्योंकि ये आपके अधिकारों और कर्तव्यों को परिभाषित करती हैं।</p>
        
        <h2 class="section-title">वेबसाइट का उपयोग (Use of Website)</h2>
        <p>आप इस वेबसाइट का उपयोग केवल वैध उद्देश्यों के लिए कर सकते हैं।</p>
        <p>आपको इस वेबसाइट के किसी भी हिस्से को अवैध, अपमानजनक, या अवैध कार्यों के लिए उपयोग करने का अधिकार नहीं है।</p>
        <p>हम किसी भी जानकारी या सामग्री को अपनी वेबसाइट पर बिना पूर्व सूचना के बदल सकते हैं।</p>

        <h2 class="section-title">उत्पाद और सेवाएं (Products and Services)</h2>
        <p>हम बीज और अन्य संबंधित उत्पाद प्रदान करते हैं।</p>
        <p>हम यह सुनिश्चित करते हैं कि हमारे उत्पादों की जानकारी सही और अद्यतन हो, लेकिन किसी भी गलती के लिए हम जिम्मेदार नहीं होंगे।</p>
        <p>हमारे उत्पाद की उपलब्धता समय-समय पर बदल सकती है।</p>

        <h2 class="section-title">ऑर्डर प्रक्रिया (Order Process)</h2>
        <p>जब आप हमारे उत्पादों को खरीदते हैं, तो आप हमारी शर्तों से सहमत होते हैं।</p>
        <p>हम ऑर्डर की प्रक्रिया को पूरी तरह से सुरक्षित और संरक्षित करते हैं।</p>
        <p>सभी भुगतान और शिपिंग जानकारी को हम अपने ग्राहक डेटा सुरक्षा प्रणाली में संरक्षित रखते हैं।</p>

        <h2 class="section-title">भुगतान और बिलिंग (Payment and Billing)</h2>
        <p>हम भुगतान की प्रक्रिया को पूरी तरह से सुरक्षित करते हैं। सभी भुगतान गेटवे हमारी वेबसाइट पर सुरक्षित रूप से काम करते हैं।</p>
        <p>आप अपनी ऑर्डर जानकारी को सटीक और अद्यतित रखें, ताकि ऑर्डर और शिपिंग में कोई समस्या न हो।</p>

        <h2 class="section-title">वापसी और रिफंड (Returns and Refunds)</h2>
        <p>अगर आपने गलत उत्पाद प्राप्त किया है, या किसी उत्पाद में दोष है, तो आप उसे वापसी/रिफंड के लिए भेज सकते हैं।</p>
        <p>कृपया हमारे <a href="/returns-policy">Returns Policy</a> पेज पर जाकर रिफंड और वापसी के विस्तृत निर्देश पढ़ें।</p>

        <h2 class="section-title">उत्तरदायित्व की सीमा (Limitation of Liability)</h2>
        <p>हम किसी भी अप्रत्याशित नुकसान या हानि के लिए जिम्मेदार नहीं होंगे, जो वेबसाइट के उपयोग से उत्पन्न हो सकती है। हम केवल वेबसाइट पर उपलब्ध जानकारी को उपयोगकर्ताओं के लिए उचित और लाभकारी मानते हैं।</p>

        <h2 class="section-title">नियमों में बदलाव (Changes to These Terms)</h2>
        <p>हम इन नियमों को समय-समय पर अद्यतन कर सकते हैं। कोई भी बदलाव इस पेज पर प्रदर्शित किया जाएगा। कृपया इस पेज को नियमित रूप से जांचें।</p>

        <h2 class="section-title">संपर्क करें (Contact Us)</h2>
        <p>अगर आपको इन शर्तों के बारे में कोई सवाल या चिंता है, तो कृपया हमसे संपर्क करें:</p>
        <p>ईमेल: <a href="mailto:info@RnStack Solution.in">info@RnStack Solution.in</a></p>
            </div>

        </div>
    </div>

</section>
{{-- Section --}}


@endsection
