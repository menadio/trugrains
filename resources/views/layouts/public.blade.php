<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trugrains</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-lime-500">
    <header class="pt-[40px] pb-20 bg-banner-bg bg-center bg-no-repeat bg-cover">
        <nav class="mb-20 font-sora font-medium">
            <div class="px-[100px]">
                <ul class="flex justify-between place-items-center">
                    <li>Products</li>
                    <li>About Us</li>
                    <li>Tru Recipes</li>
                    <li class="mx-[181px]">
                        <a href="#">
                            <img src="{{ asset('images/png/trugrain-logo.png') }}" alt="" srcset="">
                        </a>
                    </li>
                    <li>The Store</li>
                    <li>Blog</li>
                    <li>Contact</li>
                </ul>
            </div>
        </nav>

        <h1 class="mb-[47px] font-wagner text-white text-8xl text-center font-bold drop-shadow-lg animate-pulse">1 Little
            Spoon, Seven
            <br>Star Nutrients
        </h1>

        <div class="mb-20 flex justify-center">
            <img src="{{ asset('images/png/trugrainsboxes.png') }}" alt="" srcset="" class="object-center">
        </div>
    </header>

    <main class="-mt-24">
        {{-- products --}}
        <section>
            <div class="px-[100px] pt-[120px] bg-orange text-white rounded-tl-[100px] rounded-tr-[100px]">
                <h2 class="font-wagner">
                    <span class="text-3xl font-bold">Our</span>
                    <br>
                    <span class="text-6xl font-bold">Products</span>
                </h2>
            </div>

            <div class="py-[120px] bg-orange">
                <div class="mx-[100px] grid grid-cols-2 items-center gap-x-18">
                    <div class="">
                        <img src="{{ asset('images/png/Group 13789.png') }}" alt="" class="object-cover">
                    </div>

                    <div class="pl-20 text-white">
                        <h2 class="font-wagner font-bold text-[72px]">Nutty grains</h2>
                        <h3 class="mb-[24px] font-sora font-bold text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-[18px]">A rich blend of Millet, Guinea corn, Yellow corn,
                            <br>White corn, Soya beans, Crawfish, Dried Shad <br>fish and Peanuts.
                        </p>
                        <button class="px-[42px] py-[21px] uppercase rounded-full border border-2">see details</button>
                    </div>
                </div>
            </div>

            <div class="py-[120px] bg-lemon">
                <div class="mx-[100px] grid grid-cols-2 items-center gap-x-18">
                    <div class="">
                        <img src="{{ asset('images/png/Group 13788.png') }}" alt="" class="object-cover">
                    </div>

                    <div class="pl-20 text-white">
                        <h2 class="font-wagner font-bold text-[72px]">Multigrain</h2>
                        <h3 class="mb-[24px] font-sora font-bold text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-[18px]">A healthy mix of Millet, Guinea corn, Yellow
                            <br>corn, White corn, Soya beans, Crawfish, Dried <br>Shad fish.
                        </p>

                        <button class="px-[42px] py-[21px] uppercase rounded-full border border-2">see details</button>
                    </div>
                </div>
            </div>

            <div class="py-[120px] bg-purple">
                <div class="mx-[100px] grid grid-cols-2 items-center gap-x-18">
                    <div class="">
                        <img src="{{ asset('images/png/Group 13852.png') }}" alt="" class="object-cover">
                    </div>

                    <div class="pl-20 text-white">
                        <h2 class="font-wagner font-bold text-[72px] tracking-normal leading-[4.5rem]">Sweet Potato <br>cereal</h2>
                        <h3 class="mb-[24px] font-sora font-bold text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-[18px]">A rich blend of Millet, Guinea corn, Yellow corn,
                            <br>White corn, Soya beans, Crawfish, Dried Shad <br>fish and Peanuts.
                        </p>
                        <button class="px-[42px] py-[21px] uppercase rounded-full border border-2">see details</button>
                    </div>
                </div>
            </div>

            <div class="py-[120px] bg-blue">
                <div class="mx-[100px] grid grid-cols-2 items-center gap-x-18">
                    <div class="">
                        <img src="{{ asset('images/png/Group 13786.png') }}" alt="" class="object-cover">
                    </div>

                    <div class="pl-20 text-white">
                        <h2 class="font-wagner font-bold text-[72px]">Rice Cereal</h2>
                        <h3 class="mb-[24px] font-sora font-bold text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-[18px]">A healthy combo of Rice and Soya beans</p>
                        <button class="px-[42px] py-[21px] uppercase rounded-full border border-2">see details</button>
                    </div>
                </div>
            </div>

            <div class="bg-green">
                <div class="h-20 bg-blue rounded-bl-[100px] rounded-br-[100px]"></div>
            </div>
        </section>

        {{-- recipes --}}
        <section class="px-[100px] py-[120px] bg-green">
            <div class="py-[80px] bg-tru-recipes bg-top bg-no-repeat">
                <h2 class="mb-9 font-wagner font-bold text-white text-8xl text-center">Tru <br>Recipes</h2>
                <p class="font-sora text-center text-white text-[21px]">Take a look at the keyhole of our Tru kitchen!
                    Get <br>ideas on how to turn your baby food into a Tru <br>experience.</p>
            </div>

            <div class="mx-[200px] bg-tru-recipes-2 bg-center bg-no-repeat">
                <div class="pt-[120px] grid grid-cols-2 gap-[200px]">
                    <div class="font-wagner font-bold text-white text-[36px]">
                        <img src="{{ asset('images/png/apple_carrot_puree@2x.png') }}" alt="" class="mb-12">
                        <h2>Apple, Carrot Puree</h2>
                    </div>

                    <div class="mt-[120px] font-wagner font-bold text-white text-[36px]">
                        <img src="{{ asset('images/png/tru_fruity@2x.png') }}" alt="" class="mb-12">
                        <h2>Tru Fruity <br>Smoothie Splash</h2>
                    </div>

                    <div class="-mt-[240px] font-wagner font-bold text-white text-[36px]">
                        <img src="{{ asset('images/png/tru_blend@2x.png') }}" alt="" class="mb-12">
                        <h2>Tru Blend Banana, <br>Nuts And Whole <br>Baby Milk</h2>
                    </div>

                    <div class="-mt-[60px] font-wagner font-bold text-white text-[36px]">
                        <img src="{{ asset('images/png/carrot_puree@2x.png') }}" alt="" class="mb-12">
                        <h2>Apple, Carrot Puree</h2>
                    </div>
                </div>
            </div>

            <p class="mt-20 font-sora font-semibold text-white text-center underline cursor-pointer">See all our recipes
            </p>
        </section>

        {{-- stores --}}
        <section class="px-[138.33px] py-[120px] bg-black">
            <h2 class="mb-[60px] font-wagner text-[56px] text-white text-center">Where to Buy</h2>

            <div class="mb-20 flex justify-between">
                <img src="{{ asset('/images/png/logo-1.png') }}" alt="">
                <img src="{{ asset('/images/png/logo-1.png') }}" alt="">
                <img src="{{ asset('/images/png/logo-1.png') }}" alt="">
                <img src="{{ asset('/images/png/logo-1.png') }}" alt="">
                <img src="{{ asset('/images/png/logo-1.png') }}" alt="">
                <img src="{{ asset('/images/png/logo-1.png') }}" alt="">
            </div>

            <div class="flex justify-center">
                <button class="px-9 py-5 font-sora font-medium text-xl bg-white rounded-full">FIND IN OUR STORE</button>
            </div>
        </section>

        {{-- testimonials --}}
        <section class="py-[120px] bg-lime">
            <h2 class="mb-[120px] font-wagner text-black text-5xl text-center">Real Words from Real Trugrain Mums</h2>

            <div class="flex gap-8">
                <div class="ml-[100px] w-5/6">
                    <div class="mb-[30px]">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="96" height="65.842"
                            viewBox="0 0 96 65.842">
                            <path id="Path_32518" data-name="Path 32518"
                                d="M54.119-25.744c0,11.255,5.517,23.393,22.731,23.393,13.462,0,22.51-8.828,22.51-20.083,0-10.372-5.738-18.759-20.745-19.862a3.177,3.177,0,0,1-2.428-4.193c2.207-5.738,6.621-10.814,11.7-15.448a3.99,3.99,0,0,0,.441-4.634A3.5,3.5,0,0,0,83.912-67.9C67.139-60.834,54.119-46.047,54.119-25.744Zm-50.759,0c0,11.255,5.517,23.393,22.731,23.393,13.462,0,22.51-8.828,22.51-20.083,0-10.372-5.738-18.759-20.524-19.862a3.173,3.173,0,0,1-2.648-4.193c2.428-5.738,6.841-10.814,11.7-15.448a3.421,3.421,0,0,0,.441-4.634A3.431,3.431,0,0,0,33.153-67.9C16.381-60.834,3.36-46.047,3.36-25.744Z"
                                transform="translate(-3.36 68.193)" fill="#242121" opacity="0.2" />
                        </svg>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="mb-[30px] font-wagner text-3xl">My son was having a hard time adjusting to solids,
                                but he’s really loving the Trugrains cereal.</p>
                            <p class="font-sora font-medium  text-lg text-gray">— Sandra, Surulere</p>
                        </div>

                        <div>
                            <img src="{{ asset('/images/png/kristaps.png') }}" alt="" class="object-cover">
                        </div>
                    </div>
                </div>

                <div class="ml-[100px] w-5/6">
                    <div class="mb-[30px]">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="96" height="65.842"
                            viewBox="0 0 96 65.842">
                            <path id="Path_32518" data-name="Path 32518"
                                d="M54.119-25.744c0,11.255,5.517,23.393,22.731,23.393,13.462,0,22.51-8.828,22.51-20.083,0-10.372-5.738-18.759-20.745-19.862a3.177,3.177,0,0,1-2.428-4.193c2.207-5.738,6.621-10.814,11.7-15.448a3.99,3.99,0,0,0,.441-4.634A3.5,3.5,0,0,0,83.912-67.9C67.139-60.834,54.119-46.047,54.119-25.744Zm-50.759,0c0,11.255,5.517,23.393,22.731,23.393,13.462,0,22.51-8.828,22.51-20.083,0-10.372-5.738-18.759-20.524-19.862a3.173,3.173,0,0,1-2.648-4.193c2.428-5.738,6.841-10.814,11.7-15.448a3.421,3.421,0,0,0,.441-4.634A3.431,3.431,0,0,0,33.153-67.9C16.381-60.834,3.36-46.047,3.36-25.744Z"
                                transform="translate(-3.36 68.193)" fill="#242121" opacity="0.2" />
                        </svg>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="mb-[30px] font-wagner text-3xl">My princess has been eating Trugrain since she
                                turned 6 months. Now she is 15 months and still loves her Trugrain</p>
                            <p class="font-sora font-medium  text-lg text-gray">— Mercy, Abuja</p>
                        </div>

                        <div>
                            <img src="{{ asset('/images/png/siora-photography.png') }}" alt="" class="object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- blog --}}
        <section class="py-[120px] bg-lime">
            <div class="mx-[100px] mb-[60px] flex justify-between items-center">
                <h2 class="font-wagner text-black">
                    <span class="text-4xl">From Our</span>
                    <br>
                    <span class="text-8xl">Blog</span>
                </h2>

                <a class="font-sora font-semibold text-black text-base underline cursor-pointer">
                    Read all
                    <br>
                    our articles
                </a>
            </div>

            <div class="mx-[100px] grid grid-cols-3 gap-[48px]">
                <div class="w-96">
                    <img src="{{ asset('images/png/Union 1.png') }}" alt="" class="mb-6 rounded-t-full">
                    <h4 class="mb-6 font-sora font-medium text-sm text-black">BABY HEALTH AND CARE</h4>
                    <h3 class="font-wagner font-bold text-2xl text-black cursor-pointer">Strengthen & nourish roots to
                        grow stronger, healthier hair.</h3>
                </div>

                <div class="w-96">
                    <img src="{{ asset('images/png/Union 9.png') }}" alt="" class="mb-6 rounded-t-full">
                    <h4 class="mb-6 font-sora font-medium text-sm text-black">MAMA’S SPECIAL</h4>
                    <h3 class="font-wagner font-bold text-2xl text-black cursor-pointer">Best recipe shared by Mama
                    </h3>
                </div>

                <div class="w-96">
                    <img src="{{ asset('images/png/Union 10.png') }}" alt="" class="mb-6 rounded-t-full">
                    <h4 class="mb-6 font-sora font-medium text-sm text-black">LOVE AND LIGHT</h4>
                    <h3 class="font-wagner font-bold text-2xl text-black cursor-pointer">The true meaning of Child time
                    </h3>
                </div>
            </div>
        </section>

        {{-- follow us --}}
        <section class="py-[35px] flex justify-around bg-green text-white">
            <div class="flex items-center">
                <h4 class="mr-4 font-sora font-medium text-2xl">FOLLOW US @TRUGRAINS</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="45.316" height="45.316" viewBox="0 0 45.316 45.316"
                    class="fill-white">
                    <g id="noun-grain-4060474" transform="translate(-217.789 70.949) rotate(-45)">
                        <path id="Path_32508" data-name="Path 32508"
                            d="M188.386,151.614a.841.841,0,0,0,1.217,0l2.783-2.783a9.186,9.186,0,0,0,12.435-.522.841.841,0,0,0,0-1.217,9.214,9.214,0,0,0-6.522-2.7,7.659,7.659,0,0,0-1.478.174l1.826-1.826a9.445,9.445,0,0,0,5.913,2.087,9,9,0,0,0,6.522-2.7.841.841,0,0,0,0-1.217,9.431,9.431,0,0,0-8.087-2.609l1.913-1.913a9.186,9.186,0,0,0,12.435-.522.841.841,0,0,0,0-1.217,9.431,9.431,0,0,0-8.087-2.609l1.565-1.565a9.769,9.769,0,0,0,9.391-9.739.822.822,0,0,0-.87-.87,9.711,9.711,0,0,0-9.739,9.391l-1.565,1.565a9.18,9.18,0,0,0-2.609-8.087.841.841,0,0,0-1.217,0,9.186,9.186,0,0,0-.522,12.435l-1.913,1.913a9.18,9.18,0,0,0-2.609-8.087.841.841,0,0,0-1.217,0,9.327,9.327,0,0,0-.609,12.434l-1.826,1.826a9.684,9.684,0,0,0,.174-1.478,9.214,9.214,0,0,0-2.7-6.522.841.841,0,0,0-1.217,0,9.327,9.327,0,0,0-.609,12.434l-2.783,2.783a.741.741,0,0,0,0,1.13Zm4-14.521a7.386,7.386,0,0,1,1.565,4.609,7.212,7.212,0,0,1-1.565,4.609,7.386,7.386,0,0,1-1.565-4.609A6.752,6.752,0,0,1,192.386,137.093Zm10.522,10.522a7.7,7.7,0,0,1-9.3,0,7.386,7.386,0,0,1,4.609-1.565A7.283,7.283,0,0,1,202.908,147.615Zm6.261-6.261a7.7,7.7,0,0,1-9.3,0A7.7,7.7,0,0,1,209.169,141.354Zm6.348-6.261a7.386,7.386,0,0,1-4.609,1.565,7.212,7.212,0,0,1-4.609-1.565A7.567,7.567,0,0,1,215.517,135.093Zm3.043-13.653a7.953,7.953,0,0,1-7.043,7.043A7.953,7.953,0,0,1,218.56,121.441Zm-13.653,3.043a7.7,7.7,0,0,1,0,9.3,7.7,7.7,0,0,1,0-9.3Zm-6.261,6.348a7.7,7.7,0,0,1,0,9.3A7.452,7.452,0,0,1,198.647,130.832Z"
                            transform="translate(0)" fill="#fff" />
                    </g>
                </svg>
            </div>

            <div class="flex items-center">
                <h4 class="mr-4 font-sora font-medium text-2xl">FOLLOW US @TRUGRAINS</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="45.316" height="45.316" viewBox="0 0 45.316 45.316"
                    class="fill-white">
                    <g id="noun-grain-4060474" transform="translate(-217.789 70.949) rotate(-45)">
                        <path id="Path_32508" data-name="Path 32508"
                            d="M188.386,151.614a.841.841,0,0,0,1.217,0l2.783-2.783a9.186,9.186,0,0,0,12.435-.522.841.841,0,0,0,0-1.217,9.214,9.214,0,0,0-6.522-2.7,7.659,7.659,0,0,0-1.478.174l1.826-1.826a9.445,9.445,0,0,0,5.913,2.087,9,9,0,0,0,6.522-2.7.841.841,0,0,0,0-1.217,9.431,9.431,0,0,0-8.087-2.609l1.913-1.913a9.186,9.186,0,0,0,12.435-.522.841.841,0,0,0,0-1.217,9.431,9.431,0,0,0-8.087-2.609l1.565-1.565a9.769,9.769,0,0,0,9.391-9.739.822.822,0,0,0-.87-.87,9.711,9.711,0,0,0-9.739,9.391l-1.565,1.565a9.18,9.18,0,0,0-2.609-8.087.841.841,0,0,0-1.217,0,9.186,9.186,0,0,0-.522,12.435l-1.913,1.913a9.18,9.18,0,0,0-2.609-8.087.841.841,0,0,0-1.217,0,9.327,9.327,0,0,0-.609,12.434l-1.826,1.826a9.684,9.684,0,0,0,.174-1.478,9.214,9.214,0,0,0-2.7-6.522.841.841,0,0,0-1.217,0,9.327,9.327,0,0,0-.609,12.434l-2.783,2.783a.741.741,0,0,0,0,1.13Zm4-14.521a7.386,7.386,0,0,1,1.565,4.609,7.212,7.212,0,0,1-1.565,4.609,7.386,7.386,0,0,1-1.565-4.609A6.752,6.752,0,0,1,192.386,137.093Zm10.522,10.522a7.7,7.7,0,0,1-9.3,0,7.386,7.386,0,0,1,4.609-1.565A7.283,7.283,0,0,1,202.908,147.615Zm6.261-6.261a7.7,7.7,0,0,1-9.3,0A7.7,7.7,0,0,1,209.169,141.354Zm6.348-6.261a7.386,7.386,0,0,1-4.609,1.565,7.212,7.212,0,0,1-4.609-1.565A7.567,7.567,0,0,1,215.517,135.093Zm3.043-13.653a7.953,7.953,0,0,1-7.043,7.043A7.953,7.953,0,0,1,218.56,121.441Zm-13.653,3.043a7.7,7.7,0,0,1,0,9.3,7.7,7.7,0,0,1,0-9.3Zm-6.261,6.348a7.7,7.7,0,0,1,0,9.3A7.452,7.452,0,0,1,198.647,130.832Z"
                            transform="translate(0)" fill="#fff" />
                    </g>
                </svg>
            </div>

            <div class="flex items-center">
                <h4 class="mr-4 font-sora font-medium text-2xl">FOLLOW US @TRUGRAINS</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="45.316" height="45.316" viewBox="0 0 45.316 45.316"
                    class="fill-white">
                    <g id="noun-grain-4060474" transform="translate(-217.789 70.949) rotate(-45)">
                        <path id="Path_32508" data-name="Path 32508"
                            d="M188.386,151.614a.841.841,0,0,0,1.217,0l2.783-2.783a9.186,9.186,0,0,0,12.435-.522.841.841,0,0,0,0-1.217,9.214,9.214,0,0,0-6.522-2.7,7.659,7.659,0,0,0-1.478.174l1.826-1.826a9.445,9.445,0,0,0,5.913,2.087,9,9,0,0,0,6.522-2.7.841.841,0,0,0,0-1.217,9.431,9.431,0,0,0-8.087-2.609l1.913-1.913a9.186,9.186,0,0,0,12.435-.522.841.841,0,0,0,0-1.217,9.431,9.431,0,0,0-8.087-2.609l1.565-1.565a9.769,9.769,0,0,0,9.391-9.739.822.822,0,0,0-.87-.87,9.711,9.711,0,0,0-9.739,9.391l-1.565,1.565a9.18,9.18,0,0,0-2.609-8.087.841.841,0,0,0-1.217,0,9.186,9.186,0,0,0-.522,12.435l-1.913,1.913a9.18,9.18,0,0,0-2.609-8.087.841.841,0,0,0-1.217,0,9.327,9.327,0,0,0-.609,12.434l-1.826,1.826a9.684,9.684,0,0,0,.174-1.478,9.214,9.214,0,0,0-2.7-6.522.841.841,0,0,0-1.217,0,9.327,9.327,0,0,0-.609,12.434l-2.783,2.783a.741.741,0,0,0,0,1.13Zm4-14.521a7.386,7.386,0,0,1,1.565,4.609,7.212,7.212,0,0,1-1.565,4.609,7.386,7.386,0,0,1-1.565-4.609A6.752,6.752,0,0,1,192.386,137.093Zm10.522,10.522a7.7,7.7,0,0,1-9.3,0,7.386,7.386,0,0,1,4.609-1.565A7.283,7.283,0,0,1,202.908,147.615Zm6.261-6.261a7.7,7.7,0,0,1-9.3,0A7.7,7.7,0,0,1,209.169,141.354Zm6.348-6.261a7.386,7.386,0,0,1-4.609,1.565,7.212,7.212,0,0,1-4.609-1.565A7.567,7.567,0,0,1,215.517,135.093Zm3.043-13.653a7.953,7.953,0,0,1-7.043,7.043A7.953,7.953,0,0,1,218.56,121.441Zm-13.653,3.043a7.7,7.7,0,0,1,0,9.3,7.7,7.7,0,0,1,0-9.3Zm-6.261,6.348a7.7,7.7,0,0,1,0,9.3A7.452,7.452,0,0,1,198.647,130.832Z"
                            transform="translate(0)" fill="#fff" />
                    </g>
                </svg>
            </div>

            <div class="flex items-center">
                <h4 class="mr-4 font-sora font-medium text-2xl">FOLLOW US @TRUGRAINS</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="45.316" height="45.316" viewBox="0 0 45.316 45.316"
                    class="fill-white">
                    <g id="noun-grain-4060474" transform="translate(-217.789 70.949) rotate(-45)">
                        <path id="Path_32508" data-name="Path 32508"
                            d="M188.386,151.614a.841.841,0,0,0,1.217,0l2.783-2.783a9.186,9.186,0,0,0,12.435-.522.841.841,0,0,0,0-1.217,9.214,9.214,0,0,0-6.522-2.7,7.659,7.659,0,0,0-1.478.174l1.826-1.826a9.445,9.445,0,0,0,5.913,2.087,9,9,0,0,0,6.522-2.7.841.841,0,0,0,0-1.217,9.431,9.431,0,0,0-8.087-2.609l1.913-1.913a9.186,9.186,0,0,0,12.435-.522.841.841,0,0,0,0-1.217,9.431,9.431,0,0,0-8.087-2.609l1.565-1.565a9.769,9.769,0,0,0,9.391-9.739.822.822,0,0,0-.87-.87,9.711,9.711,0,0,0-9.739,9.391l-1.565,1.565a9.18,9.18,0,0,0-2.609-8.087.841.841,0,0,0-1.217,0,9.186,9.186,0,0,0-.522,12.435l-1.913,1.913a9.18,9.18,0,0,0-2.609-8.087.841.841,0,0,0-1.217,0,9.327,9.327,0,0,0-.609,12.434l-1.826,1.826a9.684,9.684,0,0,0,.174-1.478,9.214,9.214,0,0,0-2.7-6.522.841.841,0,0,0-1.217,0,9.327,9.327,0,0,0-.609,12.434l-2.783,2.783a.741.741,0,0,0,0,1.13Zm4-14.521a7.386,7.386,0,0,1,1.565,4.609,7.212,7.212,0,0,1-1.565,4.609,7.386,7.386,0,0,1-1.565-4.609A6.752,6.752,0,0,1,192.386,137.093Zm10.522,10.522a7.7,7.7,0,0,1-9.3,0,7.386,7.386,0,0,1,4.609-1.565A7.283,7.283,0,0,1,202.908,147.615Zm6.261-6.261a7.7,7.7,0,0,1-9.3,0A7.7,7.7,0,0,1,209.169,141.354Zm6.348-6.261a7.386,7.386,0,0,1-4.609,1.565,7.212,7.212,0,0,1-4.609-1.565A7.567,7.567,0,0,1,215.517,135.093Zm3.043-13.653a7.953,7.953,0,0,1-7.043,7.043A7.953,7.953,0,0,1,218.56,121.441Zm-13.653,3.043a7.7,7.7,0,0,1,0,9.3,7.7,7.7,0,0,1,0-9.3Zm-6.261,6.348a7.7,7.7,0,0,1,0,9.3A7.452,7.452,0,0,1,198.647,130.832Z"
                            transform="translate(0)" fill="#fff" />
                    </g>
                </svg>
            </div>
        </section>

        {{-- our pictures --}}
        <section class="bg-lime">
        </section>
    </main>

    <footer class="pt-[120px] pb-[60px] bg-lime">
        <div class="mb-[120px] flex justify-center">
            <img src="{{ asset('images/png/trugrain-logo@2x.png') }}" alt="" srcset="">
        </div>

        <div class="mb-[30px] mx-[102px] flex items-end">
            <div class="w-1/2">
                <h2 class="mb-3 font-wagner font-bold text-black text-[86px]">Stay Tru</h2>
                <p class="mb-[30px] font-sora text-black text-[21px]">Fresh Updates, <br>Direct to Your Inbox</p>
                <form action="">
                    <input type="email" placeholder="Enter Your Email"
                        class="py-[18px] bg-lime border-black border-b-2 font-sora text-base w-[450px]">
                </form>
            </div>

            <div class="w-1/2">
                <h4 class="mb-4 font-wagner font-bold text-2xl text-black">Follow Us: <br>@Trugrains</h4>
                <div class="mb-[60px] flex gap-8">
                    <div class="flex items-center font-sora font-medium text-base text-black">
                        <img src="{{ asset('images/png/instagram.png') }}" alt="" srcset="" class="mr-2">
                        Instagram
                    </div>
                    <div class="flex items-center font-sora font-medium text-base text-black">
                        <img src="{{ asset('images/png/instagram.png') }}" alt="" srcset="" class="mr-2">
                        Facebook
                    </div>
                </div>
                <div>
                    <ul class="flex justify-between font-sora font-semibold text-black text-base">
                        <li>Contact Us</li>
                        <li>Terms And Conditions</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mx-[102px] font-sora text-gray text-sm">
            <p>© 2021 Trugrains. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>
