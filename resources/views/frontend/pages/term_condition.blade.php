@extends('frontend.layouts.main')
@section('term_condition', 'active')
@section('meta_title', seo_helper(7)->meta_title)
@section('meta_keyword', seo_helper(7)->meta_keyword)
@section('meta_description', seo_helper(7)->meta_desc)
@section('content')

  <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(120deg, #f9f9ff, #eef3ff);
            font-family: 'Segoe UI', sans-serif;
        }

        .terms-wrapper {
            max-width: 900px;
            margin: 60px auto;
            background-color: #fff;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            animation: fadeInUp 0.7s ease-out;
        }

        .terms-title {
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

        .terms-wrapper p {
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
    <div class="terms-wrapper">
        <h1 class="terms-title">Terms & Conditions</h1>
        <p class="last-updated">Last Updated: 23 June 2025</p>

        <p>Welcome to <span class="highlight">RnStack Solution</span>. By accessing or using our website and services, you agree to comply with and be bound by the following terms and conditions.</p>

        <h5 class="section-title">1. Use of Our Services</h5>
        <p>Our services are intended for professional and lawful use only. You agree not to use our services for any illegal or unauthorized purpose.</p>

        <h5 class="section-title">2. Intellectual Property</h5>
        <p>All content on our website, including text, graphics, logos, and software, is the property of RnStack Solution and is protected by copyright laws. You may not copy, distribute, or reproduce any content without permission.</p>

        <h5 class="section-title">3. Payments</h5>
        <p>All project payments are to be made as agreed upon in the proposal or invoice. Late payments may result in project delays or suspension.</p>

        <h5 class="section-title">4. Cancellation & Refunds</h5>
        <p>Once the project work has started or a product is delivered, no refunds will be processed unless agreed in writing. For digital services, refund policies are strictly as per project agreements.</p>

        <h5 class="section-title">5. Limitation of Liability</h5>
        <p>We are not liable for any direct, indirect, or incidental damages resulting from the use or inability to use our services. You use our website at your own risk.</p>

        <h5 class="section-title">6. Changes to Terms</h5>
        <p>We may revise these terms at any time without prior notice. Continued use of our website or services means you accept the updated terms.</p>

        <div class="contact-box">
            <h5>Contact Us</h5>
            <p>If you have any questions regarding these Terms & Conditions, please contact us:</p>
            <ul class="list-unstyled">
                <li><strong>Email:</strong> support@rnstacksolution.com</li>
                <li><strong>Phone:</strong> +91 9752902223</li>
                <li><strong>Website:</strong> https://rnstacksolution.villageterracegarden.com</li>
            </ul>
        </div>
    </div>
</div>


@endsection
