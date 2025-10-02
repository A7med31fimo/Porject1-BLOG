<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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
            padding: 25px 30px;
            border-radius: 12px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        h2 {
            text-align: center;
            color: #1e4798;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            font-size: 15px;
        }

        input:focus {
            border-color: #1e4798;
            box-shadow: 0 0 5px rgba(30, 71, 152, 0.3);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #1e4798;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.3s;
        }

        button:hover {
            background: #163774;
        }

        .note {
            text-align: center;
            font-size: 13px;
            color: #666;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="reset-container">
        <h2>Reset Your Password</h2>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="New Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

            <button type="submit">Reset Password</button>
        </form>
        <p class="note">Enter your new password and confirm it to reset your account.</p>
    </div>
</body>

</html>