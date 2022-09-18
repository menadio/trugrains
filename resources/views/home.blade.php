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
    <header class="pt-[20px] pb-20 bg-banner-bg bg-center bg-no-repeat bg-cover">
        @include('layouts.partials.navbar')

        <h1 class="mt-20 mb-[47px] font-wagner text-white text-8xl text-center font-bold drop-shadow-lg">1 Little
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
                        <a href="{{ route('product.nutty') }}"
                            class="px-[42px] py-[18px] rounded-full border animate-bounce transition-colors duration-500 ease-in  hover:animate-none hover:bg-white hover:text-orange">
                            SEE DETAILS
                        </a>
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

                        <button
                            class="px-[42px] py-[18px] rounded-full border animate-bounce transition-colors duration-500 ease-in  hover:animate-none hover:bg-white hover:text-lemon">
                            SEE DETAILS
                        </button>
                    </div>
                </div>
            </div>

            <div class="py-[120px] bg-purple">
                <div class="mx-[100px] grid grid-cols-2 items-center gap-x-18">
                    <div class="">
                        <img src="{{ asset('images/png/Group 13852.png') }}" alt="" class="object-cover">
                    </div>

                    <div class="pl-20 text-white">
                        <h2 class="font-wagner font-bold text-[72px] tracking-normal leading-[4.5rem]">Sweet Potato
                            <br>cereal
                        </h2>
                        <h3 class="mb-[24px] font-sora font-bold text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-[18px]">A rich blend of Millet, Guinea corn, Yellow corn,
                            <br>White corn, Soya beans, Crawfish, Dried Shad <br>fish and Peanuts.
                        </p>
                        <button
                            class="px-[42px] py-[18px] rounded-full border animate-bounce transition-colors duration-500 ease-in  hover:animate-none hover:bg-white hover:text-purple">
                            SEE DETAILS
                        </button>
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
                        <button
                            class="px-[42px] py-[18px] rounded-full border animate-bounce transition-colors duration-500 ease-in  hover:animate-none hover:bg-white hover:text-blue">
                            SEE DETAILS
                        </button>
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
        @include('layouts.partials.store')

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
                            <p class="mb-[30px] font-wagner text-3xl">My son was having a hard time adjusting to
                                solids,
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
                            <img src="{{ asset('/images/png/siora-photography.png') }}" alt=""
                                class="object-cover">
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
    </main>

    @include('layouts.partials.footer')
</body>

</html>
