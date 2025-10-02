<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Password Reset</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 30px;">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="600" cellpadding="20" cellspacing="0" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <tr>
                        <td align="center" style="border-bottom: 1px solid #ddd;">
                            <h2 style="color:#1e4798; margin: 0;">Tech Blog</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="font-size: 16px; color: #333;">Hello,</p>
                            <p style="font-size: 16px; color: #333;">
                                We received a request to reset your password.
                            </p>
                            <p style="font-size: 16px; color: #333;">
                                Click the button below to reset your password:
                            </p>

                            <p style="text-align: center; margin: 30px 0;">
                                <a href="{{ url('/reset-password/'.$token) }}"
                                    style="background-color: #1e4798; color: #fff; padding: 12px 25px; 
                                          text-decoration: none; border-radius: 8px; font-size: 16px; 
                                          display: inline-block; font-weight: bold;">
                                    Reset Password
                                </a>
                            </p>

                            <p style="font-size: 14px; color: #666;">
                                If you didn’t request this, you can safely ignore this email.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="border-top: 1px solid #ddd;">
                            <p style="font-size: 12px; color: #999; margin: 0;">
                                &copy; {{ date('Y') }} Tech Blog . All rights reserved.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>