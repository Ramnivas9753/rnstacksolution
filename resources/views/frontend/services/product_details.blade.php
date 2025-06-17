@extends('frontend.layouts.main')
@section('content')
@section('product', 'active')
@section('meta_title', $product_details->meta_title)
@section('meta_keyword', $product_details->meta_keyword)
@section('meta_description', $product_details->meta_desc)

<section id="subheader" class="relative jarallax text-light">
    <img loading="lazy" src="{{ asset('assets') }}/images/defaultimg.webp" class="jarallax-img"
        alt="{{ $product_details->title }}"
        onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
    <div class="container relative z-index-1000">
        <div class="row">
            <div class="col-lg-6">
                <ul class="crumb">
                    <li><a href="\">Home</a></li>
                  <li class="active">Product</li>
                </ul>
                <h1 class="text-uppercase">{{ $product_details->title }}</h1>
            </div>
        </div>
    </div>
    <img loading="lazy" src="{{ url('storage/app/' . business_setting('header_logo')) }}" class="bottom-0 w-20 bg-light abs end-0 z-2"
        alt="{{ $product_details->title }}"
        onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
    <div class="de-gradient-edge-top dark"></div>
    <div class="de-overlay"></div>
</section>

<section class="pt-20 pb-20 bg-light mt75 sm-mt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="m-0 crumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="shop-homepage.html">Shop</a></li>
                    <li class="active">Aglonema Plant</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="pt-100 pb-100">
    <div class="container">
        <div class="row gy-4 gx-5">
            <div class="col-md-6">
                    <div id="sync1" class="owl-carousel owl-theme">
                        <div class="item"><img src="{{ url('storage/app/' . $product_details->image) }}" class="w-100"
                                alt="{{ $product_details->title }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';"></div>
                        <div class="item"><img src="{{ url('storage/app/' . $product_details->image2) }}" class="w-100"
                                alt="{{ $product_details->title }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';"></div>
                        <div class="item"><img src="{{ url('storage/app/' . $product_details->image3) }}" class="w-100"
                                alt="{{ $product_details->title }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';"></div>
                        <div class="item"><img src="{{ url('storage/app/' . $product_details->image4) }}" class="w-100"
                                alt="{{ $product_details->title }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';"></div>
                        <div class="item"><img src="{{ url('storage/app/' . $product_details->image5) }}" class="w-100"
                                alt="{{ $product_details->title }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';"></div>
                    </div>
    
                    <div id="sync2" class="owl-carousel owl-theme">
                                                    
                        <div class="item"><img src="{{ url('storage/app/' . $product_details->image) }}" class="w-100"
                                alt="{{ $product_details->title }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';"></div>
                        <div class="item"><img src="{{ url('storage/app/' . $product_details->image2) }}" class="w-100"
                                alt="{{ $product_details->title }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';"></div>
                        <div class="item"><img src="{{ url('storage/app/' . $product_details->image3) }}" class="w-100"
                                alt="{{ $product_details->title }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';"></div>
                        <div class="item"><img src="{{ url('storage/app/' . $product_details->image4) }}" class="w-100"
                                alt="{{ $product_details->title }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';"></div>
                        <div class="item"><img src="{{ url('storage/app/' . $product_details->image5) }}" class="w-100"
                                alt="{{ $product_details->title }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';"></div>
                    </div>

            </div>

            {{-- ================ --}}
            <div class="col-md-6">
                <h2 class="fs-40">{{ $product_details->title }}</h2>
                <p class="col-lg-10">{!! $product_details->long_description !!}</p>
            
                <div class="mb-4 d-flex align-items-center">
                    <h3 class="mb-0 fs-32 me-2" id="productPrice">₹{{ $product_details->price }}</h3>
                </div>
            
                <div class="mb-4 group radio__button">
                    <h5 class="mb-3">Quantity</h5>
                    <div class="de-number">
                        <button onclick="updateQuantity(-1)">-</button>
                        <input type="text" id="quantityInput" value="1" readonly>
                        <button onclick="updateQuantity(1)">+</button>
                    </div>
                </div>
            
                <a class="btn-main" onclick="showModal(event)">Buy Now</a>
            
                <!-- Modal -->
                <div id="imageModal" class="modal-overlay">
                    <div class="modal-box">
                        <span class="close-btn" onclick="hideModal()">&times;</span>
                        <div id="qrCode"></div>
                        <form name="productEnquiryForm" id="productEnquiry_Form" class="position-relative z1000" method="POST" action="{{ route('productEnquiry_create') }}" enctype="multipart/form-data">
                            @csrf
                              <div class="my-2 field-set">
                                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" required>
                              </div>
        
                              <div class="my-2 field-set">
                                  <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email" required>
                              </div>
        
                              <div class="my-2 field-set">
                                  <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Your Phone Number" required>
                              </div>
                              
                              <div class="my-2 field-set">
                                  <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Transection ID" required>
                              </div>
                              
                              <div class="my-2 field-set">
                                  <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Enter quantity" readonly required>
                              </div>
                              
                              <div class="my-2 field-set">
                                  <input type="text" name="price" id="price" class="form-control" placeholder="Enter price" readonly required>
                              </div>
                              
                              <div class="my-2 field-set mb20">
                                  <textarea name="message" id="message" class="form-control" placeholder="Enter Your Address" required></textarea>
                                </div>
                                
                            

                                
                              <div id='submit' class="my-2 mt20">
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
            
                <!-- JS Libraries -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
            
                <script>
                    let basePrice = {{ $product_details->price }};
                    const upiId = 'ramnivasrajput608@ybl';
            
                    function updateQuantity(change) {
                        let quantityInput = document.getElementById('quantityInput');
                        let currentQuantity = parseInt(quantityInput.value);
                        let newQuantity = currentQuantity + change;
                        if (newQuantity < 1) newQuantity = 1;
                        quantityInput.value = newQuantity;
                        let totalPrice = basePrice * newQuantity;
                        document.getElementById('productPrice').textContent = `₹${totalPrice}`;
                        generateQRCode(totalPrice);
                    }

                        window.onload = function() {
                        generateQRCode(basePrice);
                    };


            
                    function generateQRCode(amount) {
                        let upiURL = `upi://pay?pa=${upiId}&pn=RnStack Solution&am=${amount}&cu=INR`;
                        document.getElementById("qrCode").innerHTML = "";
                        new QRCode(document.getElementById("qrCode"), { text: upiURL, width: 200, height: 200, });
                    }
            
                    // function showModal(event) {
                    //     event.preventDefault();
                    //     document.getElementById('imageModal').style.display = "flex";
                    // }

                    function showModal(event) {
    event.preventDefault();
    document.getElementById('imageModal').style.display = "flex";

    // Get quantity and total price
    let quantity = document.getElementById('quantityInput').value;
    let totalPrice = basePrice * quantity;

    // Set them in the form inputs
    document.getElementById('quantity').value = quantity;
    document.getElementById('price').value = `₹${totalPrice}`;
}

            
                    function hideModal() {
                        document.getElementById('imageModal').style.display = "none";
                    }
            
                </script>
            
            <style>
                /* Modal Overlay Styling */
               
                #qrCode img {
                margin: auto;
                padding-bottom: 2rem;
               }
                .modal-overlay {
                    display: none;
                    position: fixed;
                    left: 50%; top: 50%; transform: translate(-50%, -50%);
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.7);
                    align-items: center;
                    justify-content: center;
                    z-index: 1000000;
                    animation: fadeIn 0.3s ease-in-out;
                }
            
                /* Modal Box Styling */
                .modal-box {
                    background: white;
                    padding: 25px;
                    border-radius: 12px;
                    width: 50%;
                    height: 100%;
                    text-align: center;
                    position: relative;
                    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                    transform: scale(0.8);
                    animation: scaleIn 0.3s ease-in-out forwards;
                }

                @media(max-width:768px){
                    .modal-box {
                    background: white;
                    padding: 25px;
                    border-radius: 12px;
                    width: 80%;
                    height: 100%;
                }
                }
            
                /* Close Button Styling */
                .close-btn {
                    cursor: pointer;
                    position: absolute;
                    top: 10px;
                    right: 15px;
                    font-size: 22px;
                    font-weight: bold;
                    color: #333;
                    transition: 0.3s;
                }
            
                .close-btn:hover {
                    color: red;
                }
            
                /* Form Input Styling */
                #paymentForm input {
                    display: block;
                    width: 100%;
                    margin: 12px 0;
                    padding: 10px;
                    border: 1px solid #ddd;
                    border-radius: 6px;
                    font-size: 16px;
                }
            
                /* Submit Button Styling */
                #paymentForm button {
                    background: #28a745;
                    color: white;
                    border: none;
                    padding: 12px;
                    cursor: pointer;
                    width: 100%;
                    border-radius: 6px;
                    font-size: 18px;
                    transition: 0.3s;
                }
            
                #paymentForm button:hover {
                    background: #218838;
                }
            
                /* Invoice Modal Styling */
                #invoiceModal .modal-box {
                    width: 450px;
                }
            
                /* Keyframe Animations */
                @keyframes fadeIn {
                    from { opacity: 0; }
                    to { opacity: 1; }
                }
            
                @keyframes scaleIn {
                    from { transform: scale(0.8); }
                    to { transform: scale(1); }
                }
            </style>
            </div>
                       
            {{-- ================ --}}
        </div>
    </div>

    
</section>

@endsection
