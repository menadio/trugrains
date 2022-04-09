@extends('layouts.public')

@section('content')
    <header class="py-20">
        <h2 class="mb-[30px] font-wagner font-bold text-8xl text-black text-center">1 Little Spoon, Seven <br>Star Nutrients
        </h2>
        <p class="font-sora text-black text-[21px] text-center">Nutrition is at the heart of our business!</p>
    </header>

    <main class="py-[120px] bg-green">
        {{-- intro --}}
        <section class="mx-[300px]">
            <p class="mb-12 font-wagner text-center text-[32px] text-white">Trugrains Cereals Are Made With Love From Real
                Wholesome Grains. We Source Great Quality, Locally Grown Ingredients To Make Your Baby’s Meal Nutritious,
                Delicious And Fun. It’s All Your Baby Needs In One Little Scoop!</p>

            <p class="font-wagner text-center text-[32px] text-white">We’re So Excited To Share This With You! We Hope Your
                Baby Enjoys It As Much As All Our Kids Have Over The Years.</p>
        </section>

        {{-- products --}}
        <section class="mx-[80px] pt-[210px]">
            <div class="mb-[170px]">
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
                        <div class="flex gap-6">
                            <button class="px-[43px] py-[21px] bg-orange font-sora text-lg text-white rounded-full">BUY
                                NOW</button>
                            <button
                                class="px-[43px] py-[21px] font-sora text-lg rounded-full border border-orange border-2">SEE
                                DETAILS</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-[170px]">
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

                        <div class="flex gap-6">
                            <button class="px-[43px] py-[21px] bg-lemon font-sora text-lg text-white rounded-full">BUY
                                NOW</button>
                            <button
                                class="px-[43px] py-[21px] font-sora text-lg rounded-full border border-lemon border-2">SEE
                                DETAILS</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-[170px]">
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

                        <div class="flex gap-6">
                            <button class="px-[43px] py-[21px] bg-purple font-sora text-lg text-white rounded-full">BUY
                                NOW</button>
                            <button
                                class="px-[43px] py-[21px] font-sora text-lg rounded-full border border-purple border-2">SEE
                                DETAILS</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="mx-[100px] grid grid-cols-2 items-center gap-x-18">
                    <div class="">
                        <img src="{{ asset('images/png/Group 13786.png') }}" alt="" class="object-cover">
                    </div>

                    <div class="pl-20 text-white">
                        <h2 class="font-wagner font-bold text-[72px]">Rice Cereal</h2>
                        <h3 class="mb-[24px] font-sora font-bold text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-[18px]">A healthy combo of Rice and Soya beans</p>

                        <div class="flex gap-6">
                            <button class="px-[43px] py-[21px] bg-blue font-sora text-lg text-white rounded-full">BUY
                                NOW</button>
                            <button
                                class="px-[43px] py-[21px] font-sora text-lg rounded-full border border-blue border-2">SEE
                                DETAILS</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- store --}}
    @include('layouts.partials.store')

    {{-- blog --}}
    @include('layouts.partials.blog')
@endsection
