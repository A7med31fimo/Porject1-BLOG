<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome | Tech Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            background: url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1600&q=80') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .welcome-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
            backdrop-filter: blur(3px);
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 40px 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            max-width: 450px;
            width: 100%;
        }

        h1 {
            font-weight: bold;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        p {
            color: #555;
            margin-bottom: 25px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
        }

        .btn-login {
            background-color: #dadde2ff;
            color: #000000ff;
            border: none;
        }

        .btn-register {
            background-color: #dadde2ff;
            color: #000000ff;
            border: none;
        }

        .btn:hover {
            opacity: 0.9;
            transform: scale(1.02);
            transition: all 0.2s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="welcome-container">
        <div class="card">
            <h1>Welcome to Tech Blog 🚀</h1>
            <p>Share your thoughts, read amazing posts, and join our tech community.</p>

            <a href="{{ route('login') }}" class="btn btn-login">Login</a>
            <a href="{{ route('register') }}" class="btn btn-register">Sign Up</a>
        </div>
    </div>
</body>

</html>