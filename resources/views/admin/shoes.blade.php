<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nike Shoes. Management</title>
    @vite(['resources/css/main.css', 'resources/js/app.js'])
</head>
<body class="flex">
    @include('admin.components.navbar')
    <div class="container">
        <div class="w-[95%]  h-[100dvh] m-auto container-box">

            <header>
                <div class="h-[3.5vh] offset-top"></div>

            <div>
                <h1 class="text-3xl font-bold">SHOES</h1>
            </div>
            <div class="h-[3.5vh] offset-top"></div>
            </header>
            
            <section class="w-[100%] bg-[black] h-[20vh] shadow-2xl dashboard ">
                <div class="flex justify-center h-[100%] items-center">
                    <h1 class="text-white text-4xl font-semibold">Dashboard Information.</h1>
                </div>
            </section>

            <div class="h-[5vh] offset"></div>

            <section class="w-[100%] bg-[] border  h-[60vh] shadow-xl Men-Shoes">
                <h1 class="text-2xl font-[450] pt-4 pl-4">Men Shoes Management</h1>
                
                <div class="h-[3vh] offset"></div>

                <div class="w-[95%]  m-auto Add-Shoes">
                    <form action="{{ route('admin.shoes.post') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        <div class="grid lg:grid-cols-2 md:grid-cols-1 text-xl lg:gap-x-8 sm:gap-y-4">
                                <div class="left space-y-4">
                                    <div class="flex justify-between">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" required class="w-[400px]">
                                    </div>
                                    <div class="flex justify-between">
                                        <label for="description">Description</label>
                                        <textarea name="description" required class="w-[400px]"></textarea>
                                    </div>
                                    <div class="flex justify-between">
                                        <label for="price">Price</label>
                                        <input type="text" name="price" required class="w-[400px]">
                                    </div>
                                    
                                </div>

                                <div class="right space-y-4">
                                    <div class="flex justify-between">
                                        <label for="category">Category</label>
                                        <select name="category" required class="w-[400px]">
                                            <option value="" disabled selected>Select category</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Lifestyle">Lifestyle</option>
                                            <option value="Running">Running</option>
                                            <option value="Basketball">Basketball</option>
                                            <option value="Training & Gym">Training & Gym</option>
                                            <option value="Walking">Walking</option>
                                            <option value="Soccer">Soccer</option>
                                            <option value="Skateboarding">Skateboarding</option>
                                            <option value="ACG">ACG</option>
                                            <option value="Football">Football</option>
                                            <option value="Tennins">Tennins</option>
                                            <option value="Golf">Golf</option>
                                            <option value="Baseball">Baseball</option>
                                            <option value="Boots">Boots</option>
                                            <option value="Sandals & Slides">Sandals & Slides</option>
                                            <option value="Track & Field">Track & Field</option>
                                            <option value="Nike By You">Nike By You</option>
                                            <option value="Lacrosse">Lacrosse</option>
                                            <option value="Wrestling">Wrestling</option>
                                        </select>
                                    </div>
                                    <div class="flex justify-between">
                                        <label for="image_url">Image URL</label>
                                        <input type="url" name="image_url">
                                    </div>
                                    <div class="flex justify-between space-x-4">
                                        <label for="image_file">Upload Image</label>
                                        <input type="file" name="image_file">
                                    </div>
                                </div>
                        </div>

                        <div class="text-end mr-4">
                            <button type="submit" class="text-xl bg-[black] text-white p-4 px-6 hover:bg-[#5d5d5f] transition">Add Shoe</button>
                        </div>
                        
                    </form>
                </div>
            </section>




        </div>
    </div>
</body>
</html>