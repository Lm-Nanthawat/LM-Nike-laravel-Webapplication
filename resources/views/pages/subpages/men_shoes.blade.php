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
        <div class="w-[94%] m-auto h-[100%] lg:flex justify-between items-center wall-header-box">
            <h1 class="text-2xl">Men's Shoes & Sneakers</h1>
            <div class="hidden lg:flex space-x-8 text-lg font-light filter">
                <ll><a href="">Hide Filter</a></ll>
                <ll><a href="">Sort By</a></ll>
            </div>

            <div class="h-[2dvh] block lg:hidden"></div>

            <div class="block h-[4.5vh] lg:hidden overflow-x-scroll top-menu">
                <ul class='flex whitespace-nowrap font-medium space-x-4'>
                    <li>Life Style</li>
                    <li>Jordan</li>
                    <li>Running</li>
                    <li>Basketball</li>
                    <li>American Football</li>
                    <li>Training</li>
                    <li>Sketboard</li>
                    <li>Golf</li>
                    <li>Tennis</li>
                    <li>Athletics</li>
                    <li>Walking</li>
                  </ul>
            </div>
        </div>
    </div>
    <div class="h-[2vh] offset"></div>
    </section>

    <section class="flex h-[79vh] pt-4 lg:pt-0 main-content" >
        <div class="w-[19%] h-[75vh] hidden lg:flex justify-end leftbar" id="sidebar">
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
         

        <section class="w-[100%] lg:w-[81%] h-[100dvh] overflow-y-scroll m-auto main-shoes-wrapper">
            <div class='productgrid-content'>
                <div class='grid grid-cols-2 lg:grid-cols-3 h-screen justify-center gap-x-6 gap-y-20 product-grid' id="shoe-list">
                    

                </div>
            </div>

        </section>

    </section>
  
    
    <script>
        async function fetchMenShoes() {
            const response = await fetch('/api/men/shoes');
            const shoes = await response.json();
            return shoes;
        }

        function displayShoes(shoes) {
            const shoeList = document.getElementById('shoe-list');
            shoeList.innerHTML = shoes.map(shoe => `
            <div class='w-[100%] hover:cursor-pointer product-card'>
                <div class='w-[93%] m-auto product-img'>
                    <img src="${shoe.image_url}" alt="${shoe.name}" />
                </div>
                <div class='pt-4 w-[93%] m-auto space-y-4 product-content'>
                    <h1 class='font-semibold text-xl'>${shoe.name}</h1>
                    <p class='text-lg'>฿${shoe.price}</p>
                </div>
            </div>
            `).join('');
        }

        fetchMenShoes().then(displayShoes);
    </script>

    
</body>
</html>