<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In. Authenication</title>
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

            <h1 class="text-4xl font-normal">Now let's make you a Nike <br>Member.</h1>
            <p class="text-lg font-light text-[#0e0e0e] pt-4">We've sent a code to</p>
            <p class="text-lg font-light text-[#0e0e0e]">{{ session('email') }} <span class="underline text-[#616161]"><a href="/register/step1">Edit</a></p>
            </header>

            <form action="{{ route('registers.postStep2') }}" method="POST">
            @csrf
            <div class="space-y-10 pt-4 form">
                
                <input type="text" name="code" class="focus:border-black focus:ring-0" placeholder="Code*"></input>


                <div class="flex flex-cols-2 space-x-2 justify-between name-form">
                    <div>
                        <input type="text" name="firstname" class="focus:border-black focus:ring-0" placeholder="First Name*"></input>
                    @error('firstname')
                        <p class="text-red-500 text-sm ml-4">{{ $message }}</p>
                    @enderror
                    </div>
                    
                    <div>
                        <input type="text" name="lastname" class="focus:border-black focus:ring-0" placeholder="Surname*"></input>
                    @error('lastname')
                        <p class="text-red-500 text-sm ml-4">{{ $message }}</p>
                    @enderror
                    </div>
                    
                </div>
                
                <div class="password-form">
                    <input type="password" name="password" class="focus:border-black focus:ring-0" placeholder="Password*"></input>
                    @error('password')
                        <p class="text-red-500 text-sm ml-4">{{ $message }}</p>
                    @enderror

                    <p class="ml-4 pt-2 text-xs text-[#a9a9a9]">Minimun of 8 characters</p>
                    <p class="ml-4 pt-2 text-xs text-[#a9a9a9]">Uppercase, lowercase letters and one number</p>
                </div>

                <div class="shopping-preference">
                    <div class="custom-select-container">
                        <select name="preference" id="preference" class="focus:border-black focus:ring-0" required>
                            <option value="" disabled selected>Select Preference</option>
                            <option value="men">Men's</option>
                            <option value="women">Women's</option>
                        </select>
                    </div>
                    @error('preference')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                

                <div>
                <p class="ml-4 pb-4 font-light text-sm">Date of Birth</p>
                <div class="flex flex-cols-3 space-x-4 date-of-birth-form">
                    <input type="number" name="date" min="1" max="31" class="focus:border-black focus:ring-0" placeholder="Date*"></input>
                    @error('date')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                    <input type="number" name="month"min="1" max="12" class="focus:border-black focus:ring-0" placeholder="Month*"></input>
                    @error('month')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                    <input type="number" name="year" min="1900" max="{{ date('Y') }}" class="focus:border-black focus:ring-0" placeholder="Year*"></input>
                    @error('year')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                    
                </div>
                    <p class="ml-4 pt-2 text-xs text-[#a9a9a9]">Get a Nike Member Reward on your birthday.</p>
                </div>

                

                <div class="flex flex-cols-2 ml-2 space-x-4 agreement">
                    <div class="text-center">
                        <input name="checkbox1" type="checkbox" class=""></input>
                    </div>
                    <p class="font-normal">Sign up for emails to get updates from Nike on <br>products, offers and your Member benefits.</p>
                </div>
    
                <div class="flex flex-cols-2 ml-2 space-x-4 agreement">
                    <div class="text-center">
                        <input name="checkbox2" type="checkbox"></input>
                    </div>
                    <p class="font-normal">I agree to Nike's <span class="underline font-semibold">Privacy Policy</span> and  <span class="underline font-semibold">Terms of Use.</p>
                </div>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
               
                
                <div class="text-end submit-button">
                    <button type="submit" id="create-account">Create Account</button>
                </div>
            </form>
                <div class="offset"></div>
                
            </div>
            

        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>