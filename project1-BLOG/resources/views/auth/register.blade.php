<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - {{ config('app.name') }}</title>
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

        .auth-container {
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

        .links {
            margin-top: 15px;
            font-size: 14px;
        }

        .links a {
            color: #1e3a8a;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="auth-container">
        <h2>📝 Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" placeholder="Full Name" required>
            @error('name') <div style="color:red;font-size:13px;">{{ $message }}</div> @enderror

            <input type="email" name="email" placeholder="Email" required>
            @error('email') <div style="color:red;font-size:13px;">{{ $message }}</div> @enderror

            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            @error('password') <div style="color:red;font-size:13px;">{{ $message }}</div> @enderror

            <button type="submit">Register</button>
        </form>

        <div class="links">
            <a href="{{ route('login') }}">Already have an account? Login</a>
        </div>
    </div>
</body>

</html>