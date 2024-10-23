<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Men Nike.com</title>
    @vite('resources/css/navbar.css')
    @vite('resources/css/footer.css')
    @vite('resources/js/app.js')
</head>
<body>
    @include('components.navbar')
    <div class="h-[6vh] bg-[#f5f5f5] top-ads"></div>
    
    <div class="topbar-menu">
        <div class="h-[12vh] w-[94%] m-auto bg-[white] flex flex-col text-left justify-center lg:flex-row lg:justify-between lg:items-center topbar-box">
            <div>
                <h1 class="text-2xl">Men</h1>
            </div>
            
            <div class="pt-4 flex lg:pt-0 list-none space-x-8">
            <a href="{{ route('showMen.Shoes') }}" class="hover:text-[#c5c5c7] transition"><li>Shoes</li></a>
            <a href="" class="hover:text-[#c5c5c7] transition"><li>Clothing</li></a>
            <a href="" class="hover:text-[#c5c5c7] transition"><li>Accessories</li></a>
            <a href="" class="hover:text-[#c5c5c7] transition"><li>Sales</li></a>
            </div>

            <div class="hidden md:block"></div>
        </div>   
    </div>

    <div class="container-1">
        <a href="https://ibb.co/WHhghyW"><img src="https://i.ibb.co/ZfjWj86/image.png" alt="image" border="0" width="" class="lg:w-[1920px]"></a>

       
        <div class="flex flex-col text-left lg:text-center space-y-4 pt-6 w-[94%] m-auto">
            <h1 class="text-4xl lg:text-7xl font-bold">GIVE SPROT</h1>
            <p>Give a gift that's engineered for movement and designed for comfort this holiday season.</p>
            
            <a href="" class="">
                <button class="bg-[black] text-white rounded-full p-3 hover:bg-[#5d5d5f] transition">Shop Men's Gifts</button>
            </a>
            
        </div>
    </div>

    <section class="w-[93%] lg:w-[50%] m-auto bottom-menu">
        <div class="max-h-[250px] lg:max-h-[150px] overflow-hidden hover:max-h-[1000px] hover:transition-all duration-500 ease-out  space-y-4 lg:space-y-0 grid grid-cols-1 lg:grid-cols-4">
            <div class="space-y-4 group accordion">
                <h2 class="text-2xl">Men's Shoes</h2>
                    <ul class="hidden lg:block group-hover:block  text-[#727274] space-y-4">
                        <li><a href="">Running</a></li>
                        <li><a href="">Basketball</a></li>
                        <li><a href="">Golf</a></li>
                        <li><a href="">Tennis Shoes</a></li>
                        <li><a href="">Jordan</a></li>
                        <li><a href="">Football</a></li>
                        <li><a href="">Soccer</a></li>
                        <li><a href="">Training</a></li>
                        <li><a href="">Nike Sportwear</a></li>
                        <li><a href="">Customize with Nike By you</a></li>
                    </ul>
    
            </div>
    
            <div class="space-y-4 group accordion">
                <h2 class="text-2xl">Men's Clothing</h2>
                    <ul class="hidden lg:block group-hover:block text-[#727274] space-y-4">
                        <li><a href="">Tops & T-Shirts</a></li>
                        <li><a href="">Jackets</a></li>
                        <li><a href="">Hoodies</a></li>
                        <li><a href="">Pants</a></li>
                        <li><a href=""> Joggers & Sweatpants</a></li>
                        <li><a href="">Shorts</a></li>
                        <li><a href="">Jerseys</a></li>
                        <li><a href="">Compression & Nike Pro</a></li>
                        <li><a href="">Tights & Leggingsr</a></li>
                        <li><a href="">Tanks & Sleeveless Shirtsu</a></li>
                    </ul>
    
            </div>
    
             <div class="space-y-4 group accordion">
                <h2 class="text-2xl">Men's Gear</h2>
                    <ul class="hidden lg:block group-hover:block text-[#727274] space-y-4">
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
                    <ul class="hidden lg:block group-hover:block text-[#727274] space-y-4">
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
</body>
</html>