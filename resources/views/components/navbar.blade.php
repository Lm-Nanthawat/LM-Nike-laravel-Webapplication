<!-- resources/views/components/navbar.blade.php -->
<nav class="navbar-main">
    <div class="hidden md:flex w-[100%] h-[4vh] m-auto bg-[#f5f5f5] topbar-box">
        <div class="flex justify-between items-center w-[94%] m-auto topbar">
            <div class="logo-left">
                <img src='https://upload.wikimedia.org/wikipedia/en/3/37/Jumpman_logo.svg' class="h-[20px] max-h-[100%] object-cover" alt="jordan-logo"></img>
            </div>
            <div class="user-menu">
                <ul class="flex text-xs items-center ">
                    <li class="hover:text-[#5d5d5f] cursor-pointer transition-all duration-300">Find a Store</li>
                    <div class="h-[12px] m-[12px] border-r-[1px] border-[black]"></div>
                    <li class="hover:text-[#5d5d5f] cursor-pointer transition-all duration-300">Help</li>
                    <div class="h-[12px] m-[12px] border-r-[1px] border-[black]"></div>
                    @if(Auth::check())
                        
                        <li class="hover:text-[#5d5d5f] cursor-pointer transition-all duration-300">Welcome, {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</li>
                        <div class="h-[12px] m-[12px] border-r-[1px] border-[black]"></div>
                        <li class="hover:text-[#5d5d5f] cursor-pointer transition-all duration-300"><a href="{{ route('logout') }}">Logout</a></li>
                    @else
                      
                        <li class="hover:text-[#5d5d5f] cursor-pointer transition-all duration-300"><a href="{{ url('/login/step1') }}">Join US</a></li>
                        <div class="h-[12px] m-[12px] border-r-[1px] border-[black]"></div>
                        <li class="hover:text-[#5d5d5f] cursor-pointer transition-all duration-300"><a href="{{ url('/register/step1') }}">Sign In</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
        <div class="w-[100%] h-[7vh] bg-[white] navbar-box">
            <div class="flex justify-between items-center w-[94%] h-[100%] m-auto navbar">
                <div class="w-[16%] flex main-logo">
                    <a href="/"><img src='https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg' class="w-[60px]" alt="nike-logo"></img></a>
                </div>
                <div class="flex lg:flex menu-list">
                    <ul class="hidden md:flex text-md font-[500] space-x-6">
                        <li class="decoration-[white] hover:underline decoration-2 underline-offset-8 hover:decoration-[black] transiton-all duration-300 cursor-pointer">New</li>
                        <a href="/Men"><li class="decoration-[white] hover:underline decoration-2 underline-offset-8 hover:decoration-[black] transiton-all duration-300 cursor-pointer">Men</li></a>
                        <li class="decoration-[white] hover:underline decoration-2 underline-offset-8 hover:decoration-[black] transiton-all duration-300 cursor-pointer">Women</li>
                        <li class="decoration-[white] hover:underline decoration-2 underline-offset-8 hover:decoration-[black] transiton-all duration-300 cursor-pointer">Kids</li>
                        <li class="decoration-[white] hover:underline decoration-2 underline-offset-8 hover:decoration-[black] transiton-all duration-300 cursor-pointer">Jordan</li>
                        <li class="decoration-[white] hover:underline decoration-2 underline-offset-8 hover:decoration-[black] transiton-all duration-300 cursor-pointer">Sale</li>
                    </ul>
                </div>
                <div class="flex text-end menu-icons">
                    <input type="text" placeholder="Search" class="w-[170px] hidden lg:flex rounded-full bg-[#f5f5f5] border-none hover:bg-[#e5e5e5] transition focus:ring-0 focus:border-black"></input>
                    <a href="" class="p-[1px] px-[10px] rounded-full hover:bg-[#e5e5e5] transition-all duration-300">
                        <x-bi-search class="w-[20px] h-[40px]" />
                    </a>
                    <a href="" class="p-[1px] px-[10px] rounded-full hover:bg-[#e5e5e5] transition-all duration-300 lg:hidden">
                        <x-feathericon-user class="w-[20px] h-[40px]" />
                    </a>
                    <a href="" class="p-[1px] px-[10px] rounded-full hover:bg-[#e5e5e5] transition-all duration-300 hidden md:flex">
                        <x-far-heart class="w-[20px] h-[40px]" />
                    </a>
                    <a href="/cart" class="p-[1px] px-[10px] rounded-full hover:bg-[#e5e5e5] transition-all duration-300">
                        <x-bi-bag class="w-[20px] h-[40px]" />
                    </a>
                    <a href="" class="p-[1px] px-[10px] rounded-full hover:bg-[#e5e5e5] transition-all duration-300 flex md:hidden">
                        <x-radix-hamburger-menu class="w-[20px] h-[40px]" />
                    </a>
                    
                </div>
            </div>
        </div>
        
</nav>
