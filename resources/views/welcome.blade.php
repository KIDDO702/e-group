<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLVCK RADIO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> --}}
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-[#1C2326]">
    <nav class="bg-gradient-to-r from-[#EAAE1C] to-[#8B0101] z-40 sticky top-0">
        <div class="container mx-auto flex justify-between items-center">
            <!-- logo -->
            <a href="#" class="w-[70px]">
                <img src="logo-removebg-preview.png" alt="logo" class="w-full">
            </a>

            <!-- menu items -->
            <ul class="hidden lg:flex space-x-10 text-white uppercase font-semibold">
                <li>
                    <a href="#home" class="hover:text-[#5E0000]">Home</a>
                </li>
                <li>
                    <a href="#about" class="hover:text-[#5E0000]">About Us</a>
                </li>
                <li>
                    <a href="#" class="hover:text-[#5E0000]">Podcast</a>
                </li>
                <li>
                    <a href="#" class="hover:text-[#5E0000]">Blog</a>
                </li>
                <li>
                    <a href="#team" class="hover:text-[#5E0000]">Team</a>
                </li>
                <li>
                    <a href="#" class="hover:text-[#5E0000]">Contact</a>
                </li>
            </ul>

            <!--social media-->
            <ul class="hidden lg:flex space-x-4">
                <li>
                    <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
                <!-- <li>
                    <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li> -->
            </ul>
        </div>
    </nav>
    <main>
        <section id="home">
            <!-- <div class="swiper couresel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide relative">
                        <img src="asset/couresel/couresel 1.jpg" alt="relative">
                        <div class="absolute left-0 top-0 w-full h-full bg-black opacity-75">
                            <h3 class="text-center text-white lg:mt-40 text-9xl uppercase font-bold">Blvck Radio</h3>
                        </div>
                    </div>
                    <div class="swiper-slide relative">
                        <img src="asset/couresel/couresel 1.jpg" alt="relative">
                        <div class="absolute left-0 top-0 w-full h-full bg-black opacity-75">
                            <h3 class="text-center text-white lg:mt-40 text-9xl uppercase font-bold">Blvck Radio</h3>
                        </div>
                    </div>
                    <div class="swiper-slide relative">
                        <img src="asset/couresel/couresel 1.jpg" alt="relative">
                        <div class="absolute left-0 top-0 w-full h-full bg-black opacity-75">
                            <h3 class="text-center text-white lg:mt-40 text-9xl uppercase font-bold">Blvck Radio</h3>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="relative">
                <img src="couresel/couresel 1.jpg" alt="relative">
                <div class="absolute left-0 top-0 w-full h-full bg-black opacity-75">
                    <h3 class="text-center text-white lg:mt-40 text-8xl uppercase font-bold">Blvck Radio</h3>
                    <!-- <div class="flex justify-center items-center mt-4 space-x-20">
                        <a href="#" class="text-white bg-[#5E0000] flex items-center justify-center p-2 rounded text-xl">
                            Learn More
                        </a>
                        <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                            <i class="fa-solid fa-play text-xl"></i>
                        </a>
                    </div> -->
                </div>
            </div>
        </section>

        <div class="mx-auto absolute container bg-[#5E0000] -mt-14 py-5 rounded">
            <div class="container mx-auto flex items-center justify-around space-x-40 text-white">
                <div class="uppercase font-bold">
                    <h1 class="text-7xl">0</h1>
                    <p class="text-sm mt-1.5 font-light">subscribers</p>
                </div>
                <div class="uppercase font-bold">
                    <h1 class="text-7xl">0</h1>
                    <p class="text-sm mt-1.5 font-light">podcasts</p>
                </div>
                <div class="uppercase font-bold">
                    <h1 class="text-7xl">0</h1>
                    <p class="text-sm mt-1.5 font-light">viewers</p>
                </div>
            </div>
        </div>

        <section class="py-20 mt-16">
            <h2 class="text-center uppercase mt-20 text-white font-bold text-5xl">Latest <span class="text-[#EAAE1C]">Episodes</span></h2>
            <div class="container mx-auto mt-20 flex flex-col lg:flex-row space-x-10 justify-center">

                <!-- episode 1 -->
                <div class="lg:w-[450px]">
                    <div>
                        <img src="latest-podcast/cover-1.png" alt="podcast-1" class="w-full">
                    </div>
                    <div class="mt-2 font-semibold">
                        <div class="flex space-x-10 my-2">
                            <h5 class="text-[#EAAE1C] uppercase font-light">Introduction</h5>
                            <h5 class="text-white font-light">
                                <i class="fa-solid fa-calendar-days mr-1.5"></i> 02.04.2023
                            </h5>
                        </div>
                        <h3 class="text-white uppercase text-2xl">Eps 1 | Getting started with Blvck Radio</h3>
                        <P class="font-light text-white text-base my-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt adipisci veniam accusantium maxime ea cupiditate?
                        </P>
                        <a href="#" class="text-[#EAAE1C] hover:text-[#5E0000]">
                            View Episode <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- episode 2 -->
                <div class="lg:w-[450px]">
                    <div>
                        <img src="latest-podcast/cover-2.jpg" alt="podcast-1" class="w-full">
                    </div>
                    <div class="mt-2 font-semibold">
                        <div class="flex space-x-10 my-2">
                            <h5 class="text-[#EAAE1C] uppercase font-light">Introduction</h5>
                            <h5 class="text-white font-light">
                                <i class="fa-solid fa-calendar-days mr-1.5"></i> 02.04.2023
                            </h5>
                        </div>
                        <h3 class="text-white uppercase text-2xl">Eps 1 | Getting started with Blvck Radio</h3>
                        <P class="font-light text-white text-base my-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt adipisci veniam accusantium maxime ea cupiditate?
                        </P>
                        <a href="#" class="text-[#EAAE1C] hover:text-[#5E0000]">
                            View Episode <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- episode 3 -->
                <div class="lg:w-[450px]">
                    <div>
                        <img src="latest-podcast/cover-3.jpg" alt="podcast-1" class="w-full">
                    </div>
                    <div class="mt-2 font-semibold">
                        <div class="flex space-x-10 my-2">
                            <h5 class="text-[#EAAE1C] uppercase font-light">Introduction</h5>
                            <h5 class="text-white font-light">
                                <i class="fa-solid fa-calendar-days mr-1.5"></i> 02.04.2023
                            </h5>
                        </div>
                        <h3 class="text-white uppercase text-2xl">Eps 1 | Getting started with Blvck Radio</h3>
                        <P class="font-light text-white text-base my-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt adipisci veniam accusantium maxime ea cupiditate?
                        </P>
                        <a href="#" class="text-[#EAAE1C] hover:text-[#5E0000]">
                            View Episode <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="bg-[#21282B] py-20">
            <div class="container mx-auto grid grid-cols-2 gap-4 mt-10">
                <div class="">
                    <h3 class="text-white uppercase font-semibold text-lg">About Us</h3>
                    <h1 class="mt-5 text-5xl text-white font-bold tracking-[3px] leading-tight">We Provide The Latest <span class="text-[#EAAE1C]">Entertainment</span> For You</h1>
                    <p class="text-white mt-3 font-light">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore quas eligendi beatae est nisi odit harum, laborum minima ab minus ex nostrum dolores accusamus rerum provident delectus inventore! Illum, et ratione? Deleniti dolorem sequi rerum beatae nostrum velit harum minus cum architecto? Corrupti, et cum quia dolore repudiandae odio laudantium?
                    </p>
                    <p class="mt-5 text-3xl font-bold text-white">Listen to our podcast on</p>
                    <ul class="mt-3 flex items-center space-x-5">
                        <li>
                            <a href="#" class="w-[50px]">
                                <img src="about/spotify.png" alt="spotify" class="w-[150px]">
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w-[50px]">
                                <img src="about/youtube.png" alt="youtube" class="w-[150px]">
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w-[50px]">
                                <img src="about/google.png" alt="google" class="w-[150px]">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="h-[450px] bg-[#5E0000] p-2 rounded flex items-center justify-center">
                    <img src="about/about.jpg" alt="about" class="h-full w-full rounded">
                </div>
            </div>
        </section>

        <section class="py-20" id="team">
            <h4 class="text-center text-white text-lg">Our Team</h4>
            <h2 class="mt-5 text-5xl text-white tracking-lead text-center font-bold">Meet Our <span class="text-[#EAAE1C]">Hosts</span></h2>
            <div class="container mx-auto mt-10 flex flex-col lg:flex-row space-x-5 justify-center">

                <!-- team 1 -->
                <div class="lg:w-[400px] bg-[#21282B] p-4 rounded">
                    <div>
                        <img src="team/team-1.jpg" alt="host-1" class="w-full rounded">
                    </div>
                    <div class="py-3 text-center">
                        <h2 class="text-white text-2xl font-bold uppercase">Robert Ochieng</h2>
                        <p class="text-[#EAAE1C] text-lg font-semibold">Host</p>
                        <ul class="flex items-center space-x-5 justify-center mt-3">
                            <li>
                                <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- team 2 -->
                <div class="lg:w-[400px] bg-[#21282B] p-4 rounded">
                    <div>
                        <img src="team/team-2.jpg" alt="host-1" class="w-full rounded">
                    </div>
                    <div class="py-3 text-center">
                        <h2 class="text-white text-2xl font-bold uppercase">Robert Ochieng</h2>
                        <p class="text-[#EAAE1C] text-lg font-semibold">Host</p>
                        <ul class="flex items-center space-x-5 justify-center mt-3">
                            <li>
                                <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- team-3 -->
                <div class="lg:w-[400px] bg-[#21282B] p-4 rounded">
                    <div>
                        <img src="team/team-3.jpg" alt="host-1" class="w-full rounded">
                    </div>
                    <div class="py-3 text-center">
                        <h2 class="text-white text-2xl font-bold uppercase">Robert Ochieng</h2>
                        <p class="text-[#EAAE1C] text-lg font-semibold">Host</p>
                        <ul class="flex items-center space-x-5 justify-center mt-3">
                            <li>
                                <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- team 4 -->
                <div class="lg:w-[400px] bg-[#21282B] p-4 rounded">
                    <div>
                        <img src="team/team-4.jpg" alt="host-1" class="w-full rounded">
                    </div>
                    <div class="py-3 text-center">
                        <h2 class="text-white text-2xl font-bold uppercase">Robert Ochieng</h2>
                        <p class="text-[#EAAE1C] text-lg font-semibold">Host</p>
                        <ul class="flex items-center space-x-5 justify-center mt-3">
                            <li>
                                <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-[#F9BC2E] text-[#5E0000] flex items-center justify-center p-2 rounded-full hover:bg-black hover:text-white">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center mt-20">
                <a href="#" class="text-center text-[#5E0000] bg-[#F9BC2E] p-3 rounded font-semibold hover:bg-[#5E0000] hover:text-[#F9BC2E]">
                    See More
                </a>
            </div>
        </section>
    </main>
    
</body>
</html>