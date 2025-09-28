<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up | Tech Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            background: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1600&q=80') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .register-container {
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
            max-width: 450px;
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
    <div class="register-container">
        <div class="card">
            <h2>Create an Account</h2>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">👤 Name</label>
                    <input type="text" name="name" id="name"
                        class="form-control" value="{{ old('name') }}" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">📧 Email</label>
                    <input type="email" name="email" id="email"
                        class="form-control" value="{{ old('email') }}" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">🔑 Password</label>
                    <input type="password" name="password" id="password"
                        class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">✅ Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>

            <div class="extra-text">
                Already have an account? <a href="{{ route('login') }}">Login here</a>.
            </div>
        </div>
    </div>
</body>

</html>