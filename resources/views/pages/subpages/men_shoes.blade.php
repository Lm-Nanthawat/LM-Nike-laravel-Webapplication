<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Men Shoes Nike.com</title>
    @vite(['resources/css/women.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.navbar')
    <section class="w-full main-wall-header" id="wall-header">
    <div class="h-[2vh] offest"></div>
    <div class="h-[6vh] wall-header">
        <div class="w-[94%] m-auto h-[100%] flex justify-between items-center wall-header-box">
            <h1 class="text-2xl">Men's Shoes & Sneakers</h1>
            <div class="space-x-8 text-lg font-light filter">
                <ll><a href="">Hide Filter</a></ll>
                <ll><a href="">Sort By</a></ll>
            </div>
        </div>
    </div>
    <div class="h-[2vh] offset"></div>
    </section>

    <section class="flex h-[79vh] main-content" >
        <div class="w-[19%] h-[75vh] flex justify-end leftbar" id="sidebar">
            <div class="w-[85%]  overflow-y-scroll container">
                <div class="pickup">
                    <p class="text-lg">Pick Up Today</p>
                </div>
    
                <div class="h-[3vh] offset"></div>
    
                <div class="main-list">
                    <ul class="text-base font-[500] space-y-2">
                        <li><a href="">Jordan</a></li>
                        <li><a href="">Lifestyle</a></li>
                        <li><a href="">Running</a></li>
                        <li><a href="">Basketball</a></li>
                        <li><a href="">Training & Gym</a></li>
                        <li><a href="">Walking</a></li>
                        <li><a href="">Soccer</a></li>
                        <li><a href="">Skateboarding</a></li>
                        <li><a href="">ACG</a></li>
                        <li><a href="">Football</a></li>
                        <li><a href="">Tennis</a></li>
                        <li><a href="">Golf</a></li>
                        <li><a href="">Baseball</a></li>
                        <li><a href="">Boots</a></li>
                        <li><a href="">Sandals & Slides</a></li>
                        <li><a href="">Track & Field</a></li>
                        <li><a href="">Nike By You</a></li>
                        <li><a href="">Lacrosse</a></li>
                        <li><a href="">Wrestling</a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
        
        <section class="w-[81%] h-[200vh] main-shoes-wrapper">

            

        </section>

    </section>
    

    
</body>
</html>