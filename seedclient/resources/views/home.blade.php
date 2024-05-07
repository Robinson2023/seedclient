
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Blog Template</title>
    <meta name="author" content="Robinson Galvez">
    <meta name="description" content="SeedEM">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-family-karla">

    <!-- Top Bar Nav -->
    <nav class="w-full py-4 bg-blue-800 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

            <nav>
           
                 <a href="https://www.seedem.com">
                 <img src="/images/Logo Seed Horizontal White.png"  alt="SeeDEM Logo" class="h-8 w-auto">
                 </a>
            </nav>   
            <!--<ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
               
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="#">Shop</a></li>
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="#">About</a></li>
                </ul>-->
           

            <div class="flex items-center text-lg no-underline text-white pr-6">
                <a class="" href="https://www.facebook.com/seedem">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="pl-6" href="https://www.drupal.org/seed-em">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="pl-6" href="https://twitter.com/SeeD_EM">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-6" href="https://www.linkedin.com/company/seed-em">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="http://127.0.0.1:8001/dashboard/login">
                SeeD Client
            </a>
            <p class="text-lg text-gray-600">
                Sistema de gestión de tickets
            </p>
        </div>
    </header>


    <!-- Topic Nav 
    <nav class="w-full py-4 border-t border-b bg-gray-100" ">
        
        <div class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Technology</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Automotive</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Finance</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Politics</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Culture</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Sports</a>
            </div>
        </div>
    </nav>
    -->

    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full  flex flex-col items-center px-3">

        @foreach ($posts as $post)

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="/{{$post->slug}}" class="hover:opacity-75">
                    <img src="https://localhost:8000/storage/{{$post->image_url}}">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$post->category->name}}</a>
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</a>
                    <p href="#" class="text-sm pb-3">
                        By <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, Published on {{$post->created_at}}
                    </p>
                    <a href="/{{$post->slug}}" class="pb-6">{!! \Illuminate\Support\Str::limit ($post->body, 50 ,'...') !!}</a>
                    <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

        @endforeach


            <!-- Pagination -->
            <div class="flex items-center py-8">
                <a href="#" class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
                <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">2</a>
                <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next <i class="fas fa-arrow-right ml-2"></i></a>
            </div>

        </section>

        <!-- Sidebar Section 
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">About Us</p>
                <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                    Get to know us
                </a>
            </div>
        -->

        </aside>

    </div>

    <footer class="w-full border-t bg-blue-800 pb-12 ">
        
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
                <a href="https://www.seedem.co/es" class="uppercase px-6 text-white">Acerca de</a>
                <a href="https://www.seedem.co/es/politicas-de-privacidad" class="uppercase px-6 text-white">Política de privacidad</a>
                <a href="https://www.expertosendrupal.com/" class="uppercase px-6 text-white">Expertos Drupal</a>
                <a href="https://www.seedem.co/es/contactenos" class="uppercase px-6 text-white">Contactenos</a>
            </div>
            <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-3">
                <a href="https://www.seedem.co/" class="uppercase pb-3 text-white"> info@seedem.co </a>
            </div>
        </div>

    </footer>

    

</body>
</html>