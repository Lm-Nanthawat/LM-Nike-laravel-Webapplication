<nav class="h-[100vh] w-[20%] bg-[#0f0f0e] shadow-xl">
    <div class="w-[90%] h-[100vh] m-auto navbox">
        <div class="flex flex-col text-center space-y-[12rem] header">
            <div class="text-[white] text-4xl font-bold pt-10 list-none">
                <li><a href="{{ route('dashboard') }}">NIKE</a></li>
            </div>
            <div class="admininfo">
                <h1 class="text-lg text-white">{{ Auth::user()->firstname }}</h1>
                <p class="text-white">{{ Auth::user()->lastname }}</p>
            </div>
        </div>   

        <div class="h-[6vh]"></div>

        <div class="flex flex-col text-center h-[53%] justify-between main-menu">
            <ul class="text-white text-xl ">
                <li class="hover:bg-[white] hover:text-black transition py-3"><a href="{{ route('adminShoes') }}">Shoes</a></li>
                <li class="hover:bg-[white] hover:text-black transition py-3">Clothing</li>
                <li class="hover:bg-[white] hover:text-black transition py-3">Accessories</li>
            </ul>

            <div class="text-center space-y-2 log-out">
                <li class="text-white bg-[#282725] py-3 px-16 hover:bg-[#31302f] transition list-none"><a href="{{ route('logout') }}">LOG OUT</a></li>
                <p class="text-white">Admin Dashboard Nike.com</p>
            </div>
            
        </div>

        
    
    </div>
</nav>