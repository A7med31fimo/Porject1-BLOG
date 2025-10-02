<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login | Tech Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            background: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1600&q=80') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            backdrop-filter: blur(4px);
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 100%;
            max-width: 420px;
        }

        .card h2 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .btn-primary {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border-radius: 8px;
        }

        .form-control {
            border-radius: 8px;
            padding: 10px;
        }

        .extra-text {
            text-align: center;
            margin-top: 15px;
        }

        .extra-text a {
            color: #0d6efd;
            font-weight: 600;
            text-decoration: none;
        }

        .extra-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="card">
            <h2>Login</h2>

            @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">📧 Email</label>
                    <input type="email" name="email" id="email" class="form-control" required autofocus>
                    @error('email')
                    <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">🔑 Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                    @error('password')
                    <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>

            <div class="extra-text">
                <a href="{{route('password.request')}}">Forgot Password?</a><br>
                Don’t have an account? <a href="{{ route('register') }}">Sign Up</a>
            </div>
        </div>
    </div>
</body>

</html>