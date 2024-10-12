<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verification Code</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">

    <div style="max-width: 600px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <header style="text-align: center; margin-bottom: 20px;">
            <a href=""><img src="https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg" alt="nike-logo" style="max-width: 150px; height: auto;"></a>
        </header>
        <div style="border-top: 1px solid #e5e5e5; margin-bottom: 20px;"></div>
        <div style="padding: 20px;">
            <h1 style="font-size: 24px; text-align: center; font-weight: bold; margin-bottom: 20px;">Welcome to Nike.com!</h1>
            <p style="font-size: 18px;">Hi Nanthawat,</p>
            <p style="font-size: 16px;">Thank you for registering with Nike.com! We're excited to have you on board.</p>
            <p style="font-size: 16px;">To complete your registration, please use the verification code below:</p>
            <div style="text-align: center; margin: 20px 0;">
                <li style="font-size: 20px; list-style: none;">{{ $verificationCode }}</li>
            </div>
            <p style="font-size: 16px;">If you have any questions or need assistance, feel free to reach out to our support team.</p>
            <p style="font-size: 16px; margin-top: 20px;">Thank you,<br>Nike.com Support Team</p>
        </div>
    </div>
    
</body>
</html>
