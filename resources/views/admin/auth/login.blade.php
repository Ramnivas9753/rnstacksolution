<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <title>Admin Login | {{ business_setting('site_name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #1f1c2c, #928dab);
            color: #fff;
            height: 100vh;
            display: flex;
            align-items: center;
        }
        .login-container {
            width: 450px;
            background-color: #ffffff12;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 0 10px #00000050;
            margin: auto;
        }
        .login-container .form-control {
            background-color: #ffffff1a;
            color: #fff;
            border: none;
        }
        .login-container .form-control::placeholder {
            color: #ccc;
        }
        .login-container .form-control:focus {
            background-color: #ffffff2a;
            border: 1px solid #fff;
            box-shadow: none;
            color: #fff;
        }
        .login-container .btn-primary {
            background-color: #fff;
            color: #1f1c2c;
            border: none;
        }
        .login-container .btn-primary:hover {
            background-color: #ddd;
        }
        .login-container .logo img {
            max-height: 80px;
        }
    </style>
</head>
<body>

<div class="login-container text-center">
    <div class="logo mb-4">
        <img src="{{ url('storage/app/' . business_setting('header_logo')) }}" alt="{{ business_setting('site_name') }}">
    </div>
    <h4 class="mb-3">{{ business_setting('site_name') }}</h4>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.login') }}" method="POST" class="text-start needs-validation" novalidate>
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
            <div class="input-group">
                <span class="input-group-text bg-white text-dark"><i class="fas fa-envelope"></i></span>
                <input type="text" class="form-control" name="email" id="email"
                    placeholder="Enter your email" required
                    pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
                    title="Enter valid email">
                <div class="invalid-feedback">Please enter a valid email.</div>
            </div>
            @error('email')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
            <div class="input-group">
                <span class="input-group-text bg-white text-dark"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" name="password" id="password"
                    placeholder="Enter your password" required>
                <div class="invalid-feedback">Please enter your password.</div>
            </div>
            @error('password')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Sign In</button>
        </div>
    </form>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    (function () {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
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
</html>
