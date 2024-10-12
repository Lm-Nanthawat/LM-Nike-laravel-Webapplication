<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike. Just Do It. Nike.com</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.navbar') <!-- รวม Navbar component -->
    <div class="text-center video-banner1">

            <video class="w-full max-h-[78vh] aspect-[9/16] lg:aspect-video w-full lg:max-h-[55vh] object-cover" preload="auto" muted autoPlay="autoPlay" loop="loop" playsinline>
                <source src="{{ asset('videos/NikeAds.mp4') }}" type="video/mp4"/>
            </video>
        
        <div class="space-y-4 pt-[2rem] video-content">
            <h1 class="text-7xl font-bold">ICONIC FOR A REASON</h1>
            <p class="text-xl font-light">Classic running kicks & timeless retro styles.</p>
            <button class="font-semibold">Shop</button>
        </div>
    </div>

    @include('components.footer')

    @vite('resources/js/app.js')
    
</body>
</html>
