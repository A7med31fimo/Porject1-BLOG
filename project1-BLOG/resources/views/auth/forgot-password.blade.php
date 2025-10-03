<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - {{ config('app.name') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .forgot-container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            width: 350px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #1e3a8a;
        }

        input {
            width: 100%;
            margin: 10px 0;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        button {
            background: #1e3a8a;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #15306d;
        }

        .status {
            color: green;
            margin-top: 10px;
            font-size: 14px;
        }

        .error {
            color: red;
            font-size: 13px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="forgot-container">
        <h2>🔑 Forgot Password</h2>
        <p>Enter your email address and we’ll send you a link to reset your password.</p>

        @if (session('status'))
        <div class="status">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <input type="email" name="email" placeholder="Enter your email" required>
            @error('email') <div class="error">{{ $message }}</div> @enderror

            <button type="submit">Send Reset Link</button>
        </form>
    </div>
</body>

</html>