<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - {{ config('app.name') }}</title>
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

        .reset-container {
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

        .error {
            color: red;
            font-size: 13px;
            margin-top: 5px;
        }

        .status {
            color: green;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="reset-container">
        <h2>🔒 Reset Password</h2>

        @if (session('status'))
        <div class="status">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <input type="email" name="email" placeholder="Enter your email" value="{{ $email ?? old('email') }}" required>
            @error('email') <div class="error">{{ $message }}</div> @enderror

            <input type="password" name="password" placeholder="New Password" required>
            @error('password') <div class="error">{{ $message }}</div> @enderror

            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

            <button type="submit">Reset Password</button>
        </form>
    </div>
</body>

</html>