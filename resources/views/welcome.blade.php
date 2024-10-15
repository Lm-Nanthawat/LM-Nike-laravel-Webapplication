<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike. Just Do It. Nike.com</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/navbar.css')
</head>
<body>
    @include('components.navbar')
    <div class="text-center video-banner1">
        <video class="w-full max-h-[78vh] aspect-[9/16] lg:aspect-video w-full lg:max-h-[55vh] object-cover" preload="auto" muted autoplay loop playsinline>
            <source src="{{ asset('videos/NikeAds.mp4') }}" type="video/mp4"/>
        </video>
        <div class="space-y-4 pt-[2rem] video-content">
            <h1 class="text-7xl font-bold">ICONIC FOR A REASON</h1>
            <p class="text-xl font-light">Classic running kicks & timeless retro styles.</p>
            <button class="font-semibold">Shop</button>
        </div>
    </div>

    <div class="h-[8vh] offset"></div>

    <section class="flex flex-col w-[93%] m-auto lg:text-center lg:items-center space-y-10 bottom-menu-header">
        <div class="flex text-center items-center menu-logo">
            <a href="/"><img class="w-[70px] nike-logo" src='https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg' alt="nike-logo"></img></a>
        </div>
        <div class="menulist">
            <ul class="flex text-left lg:text-xl lg:text-center font-[450] text-[#454545] space-x-8">
                <li><a href="">Find a Store</a></li>
                <li><a href="">Help</a></li>
                <li><a href="">Join Us</a></li>
                <li><a href="">Sign In</a></li>
            </ul>
        </div>
    </section>

    <div class="h-[10vh] offset"></div>

    <section class="w-[93%] lg:w-[1000px] m-auto bottom-menu">
        <div class="max-h-[250px] lg:max-h-[150px]  overflow-hidden hover:max-h-[1000px] hover:transition-all duration-500 ease-out  space-y-4 lg:space-y-0 grid grid-cols-1 lg:grid-cols-4">
            <div class="space-y-4 group accordion">
                <h2 class="text-2xl">Featured</h2>
                    <ul class="hidden lg:block group-hover:block ml-[1.6rem] lg:ml-0 text-[#727274] space-y-4">
                        <li><a href="">Air Force 1</a></li>
                        <li><a href="">Jordan 1</a></li>
                        <li><a href="">Metcon</a></li>
                        <li><a href="">Air Max 270</a></li>
                        <li><a href="">Air Max 97</a></li>
                        <li><a href="">Air Max 90</a></li>
                        <li><a href="">Blazer</a></li>
                        <li><a href="">Pagasus</a></li>
                        
                    </ul>
    
            </div>
    
            <div class="space-y-4 group accordion">
                <h2 class="text-2xl">Shoes</h2>
                    <ul class="hidden lg:block group-hover:block ml-[1.6rem] lg:ml-0  text-[#727274] space-y-4">
                        <li><a href="">All Shoes</a></li>
                        <li><a href="">Jordan Shoes</a></li>
                        <li><a href="">Running Shoes</a></li>
                        <li><a href="">Basketball Shoes</a></li>
                        <li><a href="">Tennis Shoes</a></li>
                        <li><a href="">Training Shoes</a></li>
                        <li><a href="">Custom Shoes</a></li>
                        <li><a href="">Sale Shoes</a></li>
                        <li><a href="">Soccer Cleats</a></li>
                        
                    </ul>
    
            </div>
    
             <div class="space-y-4 group accordion">
                <h2 class="text-2xl">Men's Gear</h2>
                    <ul class="hidden lg:block group-hover:block ml-[1.6rem] lg:ml-0  text-[#727274] space-y-4">
                        <li><a href="">All Men's Gear</a></li>
                        <li><a href="">Socks</a></li>
                        <li><a href="">Bags & Backpacks</a></li>
                        <li><a href="">Balls</a></li>
                        <li><a href="">Hats & Caps</a></li>
                        <li><a href="">Gloves & Mitts</a></li>
                        <li><a href="">Sunglassess</a></li>
                        <li><a href="">Beltso</a></li>
                        <li><a href="">Drawstring Bags</a></li>
                        <li><a href="">Duffel Bags</a></li>
                    </ul>
            </div>
    
            <div class="space-y-4 group accordion">
                <h2 class="text-2xl">Featured</h2>
                    <ul class="hidden lg:block group-hover:block ml-[1.6rem] lg:ml-0  text-[#727274] space-y-4">
                        <li><a href="">New Releases</a></li>
                        <li><a href="">Clearance</a></li>
                        <li><a href="">Metcon</a></li>
                        <li><a href="">NFL</a></li>
                        <li><a href="">Men Essentials</a></li>
                        <li><a href="">Best Sellers</a></li>
                    </ul>
            </div>
        </div>
    
        <div class="h-[10vh] offset"></div>
    </section>



    @include('components.footer')
    @vite('resources/js/app.js')


</body>
</html>
