@extends('frontend.layouts.main')
@section('privacy', 'active')
@section('meta_title', seo_helper(6)->meta_title)
@section('meta_keyword', seo_helper(6)->meta_keyword)
@section('meta_description', seo_helper(6)->meta_desc)
@section('content')

    <!-- Custom Styles -->
    <style>
        .privacy-wrapper {
            max-width: 900px;
            margin: 60px auto;
            background-color: #fff;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            animation: fadeInUp 0.7s ease-out;
        }

        .privacy-title {
            font-size: 2.8rem;
            font-weight: 700;
            color: #0d6efd;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 1.25rem;
            color: #212529;
            font-weight: 600;
            margin-top: 30px;
        }

        .privacy-wrapper p {
            font-size: 1rem;
            color: #555;
            line-height: 1.8;
        }

        .last-updated {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .contact-box {
            margin-top: 40px;
            padding: 25px;
            background-color: #f1f5ff;
            border-left: 5px solid #0d6efd;
            border-radius: 10px;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .highlight {
            color: #0d6efd;
            font-weight: 500;
        }
    </style>
<div class="container">
    <div class="privacy-wrapper">
        <h1 class="privacy-title">Privacy Policy</h1>
        <p class="last-updated">Last Updated: 23 June 2025</p>

        <p>At <span class="highlight">RnStack Solution</span>, we respect your privacy and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, and safeguard your data when you visit our website or use our services.</p>

        <h5 class="section-title">1. What Information We Collect</h5>
        <p>We may collect your name, email, phone number, and technical data such as IP address, browser type, and pages visited.</p>

        <h5 class="section-title">2. How We Use Your Information</h5>
        <p>Your data helps us communicate with you, improve our services, and provide a better user experience. We <strong>do not sell</strong> your data to third parties.</p>

        <h5 class="section-title">3. Your Rights</h5>
        <p>You can request access to your data, update it, or ask us to delete it. You can also unsubscribe from emails at any time.</p>

        <h5 class="section-title">4. Data Protection</h5>
        <p>We use secure methods to protect your information, but no system is 100% secure. We continuously work to enhance our security.</p>

        <h5 class="section-title">5. Third-Party Websites</h5>
        <p>Our site may link to external websites. We are not responsible for their privacy practices. Please read their policies separately.</p>

        <h5 class="section-title">6. Changes to This Policy</h5>
        <p>We may update this Privacy Policy from time to time. Please review it regularly for any changes.</p>

        <div class="contact-box">
            <h5>Contact Us</h5>
            <p>If you have any questions regarding this policy, feel free to contact us:</p>
            <ul class="list-unstyled">
                <li><strong>Email:</strong> support@rnstacksolution.com</li>
                <li><strong>Phone:</strong> +91 9752902223</li>
                <li><strong>Website:</strong> https://rnstacksolution.villageterracegarden.com</li>
            </ul>
        </div>
    </div>
</div>



@endsection
