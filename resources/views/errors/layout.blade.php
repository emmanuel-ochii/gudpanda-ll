<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Gudpanda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> {{-- Your Tailwind/Bootstrap --}}
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            background: #f8f9fa;
        }
        .error-box {
            max-width: 600px;
            padding: 30px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }
        .error-code {
            font-size: 5rem;
            font-weight: bold;
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="error-box">
        @yield('content')
        <div class="mt-4">
            <a href="{{ route('guest.shop') }}" class="btn btn-primary">Back to Shop</a>
        </div>
    </div>
</body>
</html>
