<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 40px, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        .error-page {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .animated-text {
            animation: fadeInUp 0.8s ease-out;
        }

        .animated-button {
            animation: pulse 2s infinite;
            transition: all 0.3s ease;
        }

        .animated-button:hover {
            transform: scale(1.1);
        }

        .animated-image {
            animation: float 6s ease-in-out infinite;
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="error-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-md-8">
                    <div class="mb-4 animated-image">
                        <img loading="lazy" class="error-image" src="{{ url('storage/app/' . business_setting('header_logo')) }}" style="aspect-ratio:6/2;  width: 280px;" alt="{{ business_setting('site_name') }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">    
                    </div>
                    <h1 class="display-1 fw-bold text-success animated-text">404</h1>
                    <p class="fs-3 text-danger animated-text">
                        <span class="text-danger">Oops!</span> Page not found.
                    </p>
                    <p class="lead animated-text">
                        The page you're looking for seems to have wandered off.
                    </p>
                    <a href="{{url('/')}}" class="btn btn-success btn-lg animated-button">
                        Go To Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>