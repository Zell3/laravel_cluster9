<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter OTP</title>
</head>
<body>
    <h2>Enter OTP</h2>
    <form action="verify_otp" method="post">
        @csrf 
        <label for="otp">OTP:</label>
        <input type="text" id="otp" name="otp">
        <input type="submit" value="Verify OTP">
    </form>
</body>
</html>