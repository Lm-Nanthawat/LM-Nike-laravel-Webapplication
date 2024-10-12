<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password Nike.</title>
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
            <h1 class="text-3xl font-normal">Enter your Email to reset Password.</h1>
            </header>
            <div class="space-y-10 pt-4 form">
                <h2 class="text-[#0e0e0e]">Thailand <span class="text-[#616161] underline">Change</h2>

                <form action="{{ route('password.email') }}" method="POST">
                
                <div class="space-y-4">
                @csrf
                <input type="text" name="email" class="focus:border-black focus:ring-0" placeholder="Email*" required></input>
                
                @error('email')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                
                <div class="ml-4">
                    <p class="text-[#616161] font-light">For reset password please enter your email to get a Reset Link.<br></p>
                </div>
                

               
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