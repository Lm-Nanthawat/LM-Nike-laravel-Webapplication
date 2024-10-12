<!-- resources/views/components/navbar.blade.php -->
<nav class="navbar-main">
    <div class="hidden md:flex topbar-box">
        <div class="flex justify-between items-center topbar">
            <div class="logo-left">
                <img src='https://upload.wikimedia.org/wikipedia/en/3/37/Jumpman_logo.svg' alt="jordan-logo"></img>
            </div>
            <div class="user-menu">
                <ul class="flex text-xs items-center ">
                    <li>Find a Store</li>
                    <div></div>
                    <li>Help</li>
                    <div></div>
                    @if(Auth::check())
                        <!-- Show user's name when logged in -->
                        <li>Welcome, {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</li>
                        <div></div>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    @else
                        <!-- Show Join and Sign In buttons if not logged in -->
                        <li><a href="{{ url('/login/step1') }}">Join US</a></li>
                        <div></div>
                        <li><a href="{{ url('/register/step1') }}">Sign In</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
        <div class="navbar-box">
            <div class="flex justify-between items-center navbar">
                <div class="main-logo">
                    <a href="/"><img src='https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg' alt="nike-logo"></img></a>
                </div>
                <div class="menu-list">
                    <ul class="hidden md:flex text-md font-[500] space-x-6">
                        <li>New</li>
                        <li>Men</li>
                        <li>Women</li>
                        <li>Kids</li>
                        <li>Jordan</li>
                        <li>Sale</li>
                    </ul>
                </div>
                <div class="flex menu-icons">
                    <a href="" class="flex lg:flex"><x-bi-search /></a>
                    <a href="" class="lg:hidden"><x-feathericon-user /></a>
                    <a href="" class="hidden md:flex"><x-far-heart /></a>
                    <a href="/cart"><x-bi-bag /></a>
                    <a href="" class="flex md:hidden"><x-radix-hamburger-menu /></a>
                </div>
            </div>
        </div>
        
</nav>
