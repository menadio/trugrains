@extends('layouts.public')

@section('content')
    <header class="mx-6 py-20">
        <h2 class="mb-[30px] font-wagner font-bold text-6xl md:text-8xl text-black text-center">1 Little Spoon, Seven <br>Star Nutrients
        </h2>
        <p class="font-sora text-black text-[21px] text-center">Nutrition is at the heart of our business!</p>
    </header>

    <main class="py-[120px] bg-green">
        {{-- intro --}}
        <section class="mx-6 md:mx-[100px] lg:mx-[150px]">
            <p class="mb-12 font-wagner text-center text-xl md:text-2xl lg:text-[32px] text-white lg:leading-relaxed">Trugrains Cereals Are Made With Love From Real
                Wholesome Grains. We Source Great Quality, Locally Grown Ingredients To Make Your Baby’s Meal Nutritious,
                Delicious And Fun. It’s All Your Baby Needs In One Little Scoop!</p>

            <p class="font-wagner text-center text-xl md:text-2xl lg:text-[32px] text-white lg:leading-relaxed">We’re So Excited To Share This With You! We Hope Your
                Baby Enjoys It As Much As All Our Kids Have Over The Years.</p>
        </section>

        {{-- products --}}
        <section class="mx-6 mx-8 lg:mx-[80px] pt-8 md:pt-[210px]">
            <div class="mb-[170px]">
                <div class="grid grid-col-1 md:grid-cols-2 items-center md:gap-x-18">
                    <div>
                        <img src="{{ asset('images/png/Group 13789.png') }}" alt="" class="object-cover">
                    </div>

                    <div class="md:pl-20 text-white">
                        <h2 class="font-wagner font-bold text-2xl md:text-3xl lg:text-[72px] lg:leading-tight">Nutty grains</h2>
                        <h3 class="lg:mt-8 mb-[24px] font-sora font-bold text-xl md:text-2xl lg:text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-base md:text-[18px]">A rich blend of Millet, Guinea corn, Yellow corn,
                            <br>White corn, Soya beans, Crawfish, Dried Shad <br>fish and Peanuts.
                        </p>

                        <div class="lg:flex lg:gap-6">
                            <button
                                class="px-8 xl:px-[43px] py-[21px] bg-orange font-sora text-xs lg:text-base text-white rounded-full transition duration-500 hover:scale-x-105">
                                BUY NOW
                            </button>
                            <a href="{{ route('product.nutty') }}"
                                class="px-8 xl:px-[43px] py-[21px] font-sora text-xs lg:text-base rounded-full border border-orange transition duration-500 ease-in hover:bg-orange">
                                SEE DETAILS
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-[170px]">
                <div class="grid grid-col-1 md:grid-cols-2 items-center md:gap-x-18">
                    <div class="">
                        <img src="{{ asset('images/png/Group 13788.png') }}" alt="" class="object-cover">
                    </div>

                    <div class="md:pl-20 text-white">
                        <h2 class="font-wagner font-bold text-2xl md:text-3xl lg:text-[72px] lg:leading-tight">Multigrain</h2>
                        <h3 class="lg:mt-8 mb-[24px] font-sora font-bold text-xl md:text-2xl lg:text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-base md:text-[18px]">A healthy mix of Millet, Guinea corn, Yellow
                            <br>corn, White corn, Soya beans, Crawfish, Dried <br>Shad fish.
                        </p>

                        <div class="lg:flex lg:gap-6">
                            <button
                                class="px-8 xl:px-[43px] py-[21px] bg-lemon font-sora text-xs lg:text-base text-white rounded-full transition duration-500 hover:scale-x-105">
                                BUY NOW
                            </button>

                            <a href="{{ route('product.multigrain') }}"
                                class="px-8 xl:px-[43px] py-[21px] font-sora text-xs lg:text-base rounded-full border border-lemon transition duration-500 ease-in hover:bg-lemon">
                                SEE DETAILS
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-[170px]">
                <div class="grid grid-col-1 md:grid-cols-2 items-center md:gap-x-18">
                    <div class="">
                        <img src="{{ asset('images/png/Group 13852.png') }}" alt="" class="object-cover">
                    </div>

                    <div class="md:pl-20 text-white">
                        <h2 class="font-wagner font-bold text-2xl md:text-3xl lg:text-[72px] lg:leading-tight">Sweet Potato cereal</h2>
                        <h3 class="lg:mt-8 mb-[24px] font-sora font-bold text-xl md:text-2xl lg:text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-base md:text-[18px]">A rich blend of Millet, Guinea corn, Yellow corn,
                            <br>White corn, Soya beans, Crawfish, Dried Shad <br>fish and Peanuts.
                        </p>

                        <div class="lg:flex lg:gap-6">
                            <button
                                class="px-8 xl:px-[43px] py-[21px] bg-purple font-sora text-xs lg:text-base text-white rounded-full transition duration-500 hover:scale-x-105">
                                BUY NOW
                            </button>

                            <a href="{{ route('product.potatoe') }}"
                                class="px-8 xl:px-[43px] py-[21px] font-sora text-xs lg:text-base rounded-full border border-purple transition duration-500 ease-in hover:bg-purple">
                                SEE DETAILS
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="grid grid-col-1 md:grid-cols-2 items-center md:gap-x-18">
                    <div class="">
                        <img src="{{ asset('images/png/Group 13786.png') }}" alt="" class="object-cover">
                    </div>

                    <div class="md:pl-20 text-white">
                        <h2 class="font-wagner font-bold text-2xl md:text-3xl lg:text-[72px] lg:leading-tight">Rice Cereal</h2>
                        <h3 class="lg:mt-8 mb-[24px] font-sora font-bold text-xl md:text-2xl lg:text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-base md:text-[18px]">A healthy combo of Rice and Soya beans</p>

                        <div class="lg:flex lg:gap-6">
                            <button
                                class="px-8 xl:px-[43px] py-[21px] bg-blue font-sora text-xs lg:text-base text-white rounded-full transition duration-500 hover:scale-x-105">
                                BUY NOW
                            </button>

                            <a href="{{ route('product.rice') }}"
                                class="px-8 xl:px-[43px] py-[21px] font-sora text-xs lg:text-base rounded-full border border-blue transition duration-500 ease-in hover:bg-blue">
                                SEE DETAILS
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- store --}}
    @include('layouts.partials.store')

    {{-- blog --}}
{{--    @include('layouts.partials.blog')--}}
@endsection
