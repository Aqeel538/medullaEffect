<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Verification</title>
</head>
<body>
    <h1>OTP Verification Page</h1>
    <form action="{{route('verify.otp')}}" method="POST">
        @csrf
        <div class="form-group">
            <Label for="token">OTP Token: </Label>
            <input type="number" name="token" id="token" placeholder="OTP Token Here:" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>