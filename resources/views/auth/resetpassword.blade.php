<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    @vite('resources/css/login.css') <!-- ใส่ stylesheet ของคุณ -->
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us. Login Nike.</title>
    @vite('resources/css/login.css')
</head>
<body>
    <div class="register md:w-[576px]">
        <div class="flex flex-col register-box">
            <header>
            <div class="flex text-center items-center space-x-4 logo">
                <a href="/"><img class="nike-logo" src='https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg' alt="nike-logo"></img></a>
                <a href="/"><img class="jordan-logo" src='https://upload.wikimedia.org/wikipedia/en/3/37/Jumpman_logo.svg' alt="jordan-logo"></img></a>
            </div>
            <h1 class="text-3xl font-normal">Enter your New Password to Reset Password.</h1>
            </header>
            <div class="space-y-10 pt-4 form">
                <h2 class="text-[#0e0e0e]">Thailand <span class="text-[#616161] underline">Change</h2>

                <form action="{{ route('password.update') }}" method="POST">
                
                <div class="space-y-4">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ $email }}">

                <input type="password" name="password" class="focus:border-black focus:ring-0" placeholder="New Password*" required></input>
                
                @error('email')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                
                <div class="ml-4">
                    <p class="text-[#616161] font-light">For login please enter your Email and Password <br>if don't have please <span class="underline"><a href="/register/step1">Sign Up.</a></p>
                </div>
                
                
                
                <input type="password" name="password_confirmation" class="focus:border-black focus:ring-0" placeholder="Confirm Password*" required></input>
                @error('password')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror

                <div class="ml-4">
                    <p class="text-[#616161] font-light underline"><a href="/password/reset">Forgot Password ?</a></p>
                </div>


                @if (session('success'))
                <div class="text-green-500">
                    {{ session('success') }}
                </div>
                @endif
                <div class="text-end">
                    <button type="submit">Continue</button>
                </div>
                </div>
                </form>
            </div>

        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>

