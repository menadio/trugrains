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

        <h1 class="mt-20 mb-[47px] font-wagner text-white text-5xl md:text-6xl lg:text-8xl text-center font-bold drop-shadow-lg">1 Little
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
            <div class="px-4 md:px-6 lg:px-[100px] pt-[60px] lg:pt-[120px] bg-orange text-white rounded-tl-[100px] rounded-tr-[100px]">
                <h2 class="font-wagner">
                    <span class="text-3xl font-bold">Our</span>
                    <br>
                    <span class="text-6xl font-bold">Products</span>
                </h2>
            </div>

            <div class="py-[60px] lg:py-[120px] bg-orange">
                <div class="mx-6 md:mx-8 lg:mx-[100px] grid grid-cols-1 md:grid-cols-2 items-center md:gap-x-18">
                    <div>
                        <img src="{{ asset('images/png/Group 13789.png') }}" alt="" class="object-cover">
                    </div>

                    <div class="md:pl-20 text-white">
                        <h2 class="font-wagner font-bold text-5xl lg:text-[72px]">Nutty grains</h2>
                        <h3 class="mb-[24px] font-sora font-bold text-2xl lg:text-[48px]">350g</h3>
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

            <div class="py-[60px] lg:py-[120px] bg-lemon">
                <div class="mx-6 md:mx-8 lg:mx-[100px] grid grid-cols-1 md:grid-cols-2 items-center md:gap-x-18">
                    <div>
                        <img src="{{ asset('images/png/Group 13788.png') }}" alt="" class="object-cover">
                    </div>

                    <div class="md:pl-20 text-white">
                        <h2 class="font-wagner font-bold text-5xl lg:text-[72px]">Multigrain</h2>
                        <h3 class="mb-[24px] font-sora font-bold text-2xl lg:text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-[18px]">A healthy mix of Millet, Guinea corn, Yellow
                            <br>corn, White corn, Soya beans, Crawfish, Dried <br>Shad fish.
                        </p>

                        <a href="{{ route('product.multigrain') }}"
                            class="px-[42px] py-[18px] rounded-full border animate-bounce transition-colors duration-500 ease-in  hover:animate-none hover:bg-white hover:text-lemon">
                            SEE DETAILS
                        </a>
                    </div>
                </div>
            </div>

            <div class="py-[60px] lg:py-[120px] bg-purple">
                <div class="mx-6 md:mx-8 lg:mx-[100px] grid grid-cols-1 md:grid-cols-2 items-center md:gap-x-18">
                    <div>
                        <img src="{{ asset('images/png/Group 13852.png') }}" alt="" class="object-cover">
                    </div>

                    <div class="md:pl-20 text-white">
                        <h2 class="font-wagner font-bold text-5xl lg:text-[72px] tracking-normal leading-[4.5rem]">Sweet Potato
                            <br>cereal
                        </h2>
                        <h3 class="mb-[24px] font-sora font-bold text-2xl lg:text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-[18px]">A rich blend of Millet, Guinea corn, Yellow corn,
                            <br>White corn, Soya beans, Crawfish, Dried Shad <br>fish and Peanuts.
                        </p>
                        <a href="{{ route('product.potatoe') }}"
                            class="px-[42px] py-[18px] rounded-full border animate-bounce transition-colors duration-500 ease-in  hover:animate-none hover:bg-white hover:text-purple">
                            SEE DETAILS
                        </a>
                    </div>
                </div>
            </div>

            <div class="py-[60px] lg:py-[120px] bg-blue">
                <div class="mx-6 md:mx-8 lg:mx-[100px] grid grid-cols-1 md:grid-cols-2 items-center md:gap-x-18">
                    <div class="">
                        <img src="{{ asset('images/png/Group 13786.png') }}" alt="" class="object-cover">
                    </div>

                    <div class="md:pl-20 text-white">
                        <h2 class="font-wagner font-bold text-5xl lg:text-[72px]">Rice Cereal</h2>
                        <h3 class="mb-[24px] font-sora font-bold text-2xl lg:text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-[18px]">A healthy combo of Rice and Soya beans</p>
                        <a href="{{ route('product.rice') }}"
                            class="px-[42px] py-[18px] rounded-full border animate-bounce transition-colors duration-500 ease-in  hover:animate-none hover:bg-white hover:text-blue">
                            SEE DETAILS
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-green">
                <div class="h-20 bg-blue rounded-bl-[100px] rounded-br-[100px]"></div>
            </div>
        </section>

        {{-- stores --}}
        @include('layouts.partials.store')

        {{-- testimonials --}}
        @include('layouts.partials.testimonial')

        {{-- blog --}}
    </main>

    @include('layouts.partials.footer')
</body>

</html>
