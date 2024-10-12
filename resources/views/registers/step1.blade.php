<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In. Nike.com</title>
    @vite('resources/css/register.css')
</head>
<body>
    <div class="register md:w-[576px]">
        <div class="flex flex-col register-box">
            <header>
            <div class="flex text-center items-center space-x-4 logo">
                <a href="/"><img class="nike-logo" src='https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg' alt="nike-logo"></img></a>
                <a href="/"><img class="jordan-logo" src='https://upload.wikimedia.org/wikipedia/en/3/37/Jumpman_logo.svg' alt="jordan-logo"></img></a>
            </div>
            <h1 class="text-3xl font-normal">Enter your Email to join us or sign <br>in.</h1>
            </header>
            <div class="space-y-10 pt-4 form">
                <h2 class="text-[#0e0e0e]">Thailand <span class="text-[#616161] underline">Change</h2>

                <form action="{{ route('registers.postStep1') }}" method="POST">
                
                @csrf
                <input type="text" name="email" class="focus:border-black focus:ring-0" placeholder="Email*" required></input>

                @error('email')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <p class="text-[#616161] font-light">By continuing, I agree to Nike’s <span class="underline">Privacy Policy</span> <br>and  <span class="underline">Terms of Use.</p>
                
                <div class="text-end">
                    <button type="submit">Continue</button>
                </div>
                </form>
            </div>

        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>