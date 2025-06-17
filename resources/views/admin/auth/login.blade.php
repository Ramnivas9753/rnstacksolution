<!DOCTYPE html>
<html lang="en" class="h-100">

<!--  page-login  08:46:40 GMT -->

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords"
        content="admin dashboard, admin template, administration, analytics, bootstrap, disease, doctor, elegant, health, hospital admin, medical dashboard, modern, responsive admin dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">
    <meta name="description"
        content="Welly is a clean-code, responsive HTML Admin template that can be easily customized to fit the needs of various hospital, medical dashboard, health, doctor, and other businesses.">
    <meta property="og:title" content="Welly - Hospital Admin Dashboard Bootstrap HTML Template">
    <meta property="og:description"
        content="Welly is a clean-code, responsive HTML Admin template that can be easily customized to fit the needs of various hospital, medical dashboard, health, doctor, and other businesses.">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Admin Login || {{ business_setting('site_name') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ url('storage/app/' . business_setting('fav_icon')) }}">
    <link href="{{ asset('admin-assets') }}/css/style.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <style>
        .wrapper {
            /* max-width: 350px; */
            /* min-height: 500px; */
            margin: 10px auto;
            padding: 40px 30px 30px 30px;
            background-color: #325067;
            border-radius: 15px;
            box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
        }

        .logo {
            width: 80px;
            margin: auto;
        }

        .logo img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0px 0px 3px #5f5f5f,
                0px 0px 0px 5px #ecf0f3,
                8px 8px 15px #a7aaa7,
                -8px -8px 15px #fff;
        }

        .wrapper .name {
            font-weight: 600;
            font-size: 1.4rem;
            letter-spacing: 1.3px;
            padding-left: 10px;
        }

        .wrapper .form-field input {
            width: 100%;
            display: block;
            border: none;
            outline: none;
            background: none;
            font-size: 1.2rem;
            padding: 10px 15px 10px 10px;
        }

        .wrapper .form-field {
            padding-left: 10px;
            margin-bottom: 20px;
            border-radius: 20px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
        }

        .wrapper .btn {
            box-shadow: none;
            width: 100%;
            /* height: 40px; */
            background-color: #03A9F4;
            color: #fff;
            border-radius: 20px;
            box-shadow: 3px 3px 3px #b1b1b1,
                -3px -3px 3px #fff;
            letter-spacing: 1.3px;
        }


        /* @media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
} */
    </style>
    </style>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    {{-- <div class="mb-3 text-center">
                        <a href="{{ route('front.index') }}"><img loading="lazy"
                                src="{{ url('storage/app/' . business_setting('header_logo')) }}"
                                alt="{{ business_setting('site_name') }}" style="height:200px;"></a>
                    </div> --}}
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    {{-- <h4 class="mb-4 text-center text-white">Sign in your account</h4> --}}
                                    @if (session('error'))
                                        <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                                    @endif

                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                                    @endif
                                    <div class="form-validation">
                                        {{-- <form action="{{ route('admin.login') }}" method="post"
                                            class="needs-validation" novalidate>
                                            @csrf
                                            <div class="form-group">
                                                <label class="mb-1 text-white"
                                                    for="email"><strong>Email</strong><span
                                                        class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                                    <input type="text" name="email" id="email"
                                                        pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
                                                        title="Enter Valid Email" class="form-control border-s-1"
                                                        placeholder="Enter a email.." required>
                                                    <div class="invalid-feedback">Please enter a email.</div>
                                                </div>
                                            </div>
                                            @error('email')
                                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                            @enderror

                                            <div class="form-group">
                                                <label class="mb-1 text-white"
                                                    for="dlab-password"><strong>Password</strong><span
                                                        class="text-danger">*</span></label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                                    <input type="password" name="password" id="dlab-password" required
                                                        class="form-control" placeholder="Choose a safe one..">
                                                    <span class="input-group-text show-pass border-s-1 ">
                                                        <i class="fa fa-eye-slash"></i>
                                                        <i class="fa fa-eye"></i>
                                                    </span>
                                                    <div class="invalid-feedback">Please enter a password.</div>
                                                </div>
                                            </div>
                                            @error('password')
                                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                            @enderror

                                            <div class="text-center">
                                                <button type="submit" class="bg-white btn text-primary btn-block">Sign
                                                    Me In</button>
                                            </div>
                                        </form> --}}



                                        <div class="wrapper">
                                            <div class="logo">
                                                <img loading="lazy" src="{{ url('storage/app/' . business_setting('header_logo')) }}"
                                                    alt="{{ business_setting('site_name') }}">
                                                {{-- <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt=""> --}}
                                            </div>
                                            <div class="mt-4 text-center text-white name">
                                                {{ business_setting('site_name') }}
                                            </div>
                                            <form class="p-3 mt-3" action="{{ route('admin.login') }}" method="post">
                                                @csrf
                                                <div class="text-white form-field d-flex align-items-center">
                                                    <span class="text-white far fa-user"></span>
                                                    <input type="text" class="text-white" name="email"
                                                        id="email" placeholder="ENTER YOUR EMAIL">
                                                    <div class="invalid-feedback">Please enter a email.</div>
                                                </div>
                                                @error('email')
                                                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                                @enderror
                                                <div class="text-white form-field d-flex align-items-center">
                                                    <span class="text-white fas fa-key"></span>
                                                    <input type="password" class="text-white" name="password"
                                                        id="dlab-password" placeholder="Password">
                                                    <div class="invalid-feedback">Please enter a password.</div>
                                                </div>
                                                @error('password')
                                                    <div class="alert alert-danger" role="alert">{{ $message }}
                                                    </div>
                                                @enderror
                                                {{-- <button class="mt-3 btn">Login</button> --}}
                                                <button class="mt-3 bg-white btn text-primary btn-block">Login</button>
                                            </form>
                                            {{-- <div class="text-center fs-6">
                                                      <a href="#">Forget password?</a> or <a href="#">Sign up</a>
                                                  </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('admin-assets') }}/vendor/global/global.min.js" ></script>
    <script src="{{ asset('admin-assets') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" ></script>
    <script src="{{ asset('admin-assets') }}/js/custom.min.js" ></script>
    <script src="{{ asset('admin-assets') }}/js/deznav-init.js" ></script>
    <!-- Jquery Validation -->
    <script src="{{ asset('admin-assets') }}/vendor/jquery-validation/jquery.validate.min.js" ></script>
    <!-- Form validate init -->
    <script src="{{ asset('admin-assets') }}/js/plugins-init/jquery.validate-init.js" ></script>
    <script>
        (function() {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
<!--  page-login  08:46:41 GMT -->

</html>
