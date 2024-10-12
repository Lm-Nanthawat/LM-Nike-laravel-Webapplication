<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart. Nike Store.</title>
    @vite('resources/css/cart.css')
    @vite('resources/css/app.css')
    
</head>
<body>
    @include('components.navbar')
    @include('components.headerbanner')
    <div class="offset-top"></div>
    <div class="space-y-4 container-box">
        <div class="text-center lg:flex flex-cols-2 justify-between content">
            <div class="lg:w-[64%] bag">
                <div class="header">
                    <h1 class="text-3xl">Bag</h1>
                    <p class="ml-0 lg:ml-4 text-lg text-[#7c7c7f]">There are no items in your bag.</p>
                </div>
            </div>
            <div class="lg:w-[34%] summary">
                <h1 class="text-3xl">Summary</h1>
                <div class="text-xl pt-8 w-[90%]">
                    <p class="text-left">Do you have a Promo Code?</p>

                    <div class="flex flex-cols-2 pt-4 text-[#616161] justify-between">
                        <div>
                            <p>Subtotal</p>
                        </div>
                        <div class="">
                            <p>-</p>
                        </div>
                    </div>

                    <div class="flex flex-cols-2 pt-4 text-[#616161] justify-between">
                        <div>
                            <p class="text-left">Estimated Shipping & Handling</p>
                        </div>
                        <div class="">
                            <p>Free</p>
                        </div>
                    </div>

                    <div class="flex flex-cols-2 pt-4 pb-4 text-[#616161] justify-between">
                        <div>
                            <p>Estimated Tax</p>
                        </div>
                        <div class="">
                            <p>-</p>
                        </div>
                    </div>

                    <div class="offset-border"></div>

                    <div class="flex flex-cols-2 pt-4 pb-4 text-[#616161] justify-between">
                        <div>
                            <p>Total</p>
                        </div>
                        <div class="">
                            <p>-</p>
                        </div>
                    </div>
                    <div class="offset-border"></div>
                    
                    <div class="pt-8 checkout">
                        <button class="w-[100%] bg-[black] text-[white] px-10 py-8 rounded-full hover:bg-[#5d5d5f] disabled:bg-[#f3f3f3] disabled:text-[#868686]" disabled>Checkout</button>
                    </div>

                </div>

                

            </div>
        </div>


        <div class="favorites">
            <h1 class="text-2xl">Favorites</h1>
            <p class="text-lg text-[#7c7c7f]">Want to view your favorites? <span class="text-[#cbcbcd] underline cursor-pointer"><a href="/login/step1">Join us</a></span> or <span class="text-[#cbcbcd] underline cursor-pointer"><a href="/register/step1">Sign-in</a></p>
        </div>
    </div>


  @vite('resources/js/app.js')
  
</body>
</html>