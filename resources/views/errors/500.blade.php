<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 - Internal Server Error | RnStack Solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f9f1;
            font-family: 'Arial', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .error-container {
            max-width: 600px;
            text-align: center;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 2px solid #4caf50;
        }
        .error-image {
            width: 100%;
            max-width: 300px;
            height: auto;
            margin-bottom: 2rem;
        }
        .error-code {
            font-size: 6rem;
            font-weight: bold;
            color: #4caf50;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        .error-message {
            font-size: 1.5rem;
            color: #2e7d32;
            margin-bottom: 2rem;
        }
        .refresh-button {
            font-size: 1.2rem;
            padding: 0.75rem 2rem;
            transition: all 0.3s ease;
            background-color: #4caf50;
            border-color: #4caf50;
        }
        .refresh-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: #45a049;
            border-color: #45a049;
        }
        .plant-icon {
            font-size: 2rem;
            color: #4caf50;
            margin: 1rem 0;
        }
        @keyframes sway {
            0%, 100% { transform: rotate(0deg); }
            50% { transform: rotate(5deg); }
        }
        .sway {
            display: inline-block;
            animation: sway 2s ease-in-out infinite;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <img loading="lazy" class="error-image" src="{{ url('storage/app/' . business_setting('header_logo')) }}" style="aspect-ratio:6/2;" alt="{{ business_setting('site_name') }}" onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
        <div class="error-code">500</div>
        <div class="error-message">Oops! Our garden is facing some issues.</div>
        <p class="mb-4">It seems like our garden tools are temporarily unavailable. We're working hard to get things back to growth.</p>
        <div class="plant-icon">
            <i class="fas fa-seedling sway"></i>
            <i class="fas fa-leaf sway"></i>
            <i class="fas fa-hand-holding-water sway"></i>
        </div>
        <a href="{{url('/')}}" class="btn btn-primary refresh-button">
            <i class="fas fa-sync-alt me-2"></i>Go To Home
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
