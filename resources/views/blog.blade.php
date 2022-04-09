@extends('layouts.public')

@section('content')
    <header class="py-20">
        <p class="font-sora text-black text-[21px] text-center">
            THE
        </p>
        <h2 class="mb-[30px] font-wagner font-bold text-8xl text-black text-center">
            Tru Blog
        </h2>
    </header>

    <main class="mx-[100px]">
        {{-- most recent --}}
        <section class="px-[100px]">
            <div class="flex gap-[90px] items-center">
                <img src="{{ asset('images/png/Union 1.png') }}" alt="" class="rounded-t-full">

                <div class="w-6/12">
                    <p class="mb-8 font-sora font-medium text-black text-sm">BABY HEALTH AND CARE</p>
                    <h3 class="mb-5 font-wagner font-bold text-black text-[52px] leading-[56px]">
                        Strengthen & nourish roots to grown healthier hair
                    </h3>
                    <p class="mb-8 font-sora text-black">
                        A 5-minute easy recipe to make our Grandma’s secret recipe of vegan Golden Milk with turmeric,
                        ashwagandha and dashmool – it’s truly a mood boosting cure!
                    </p>
                    <button class="px-[63px] py-[18px] border border-black font-sora text-lg text-black rounded-full">
                        READ
                    </button>
                </div>
            </div>
        </section>

        <hr class="my-[80px] border border-black">

        <section>
            <div class="mb-[240px] grid grid-cols-3 gap-8">
                <div class="w-96">
                    <img src="{{ asset('images/png/Union 1.png') }}" alt="" class="mb-6 rounded-t-full">
                    <h4 class="mb-6 font-sora font-medium text-sm text-black">BABY HEALTH AND CARE</h4>
                    <h3 class="mb-8 font-wagner font-bold text-2xl text-black cursor-pointer">Strengthen & nourish roots to
                        grow stronger, healthier hair.
                    </h3>
                    <button class="px-[63px] py-[18px] border border-black font-sora text-lg text-black rounded-full">
                        READ
                    </button>
                </div>

                <div class="w-96">
                    <img src="{{ asset('images/png/Union 9.png') }}" alt="" class="mb-6 rounded-t-full">
                    <h4 class="mb-6 font-sora font-medium text-sm text-black">MAMA’S SPECIAL</h4>
                    <h3 class="mb-8 font-wagner font-bold text-2xl text-black cursor-pointer">
                        Best recipe shared by Mama
                    </h3>
                    <button class="px-[63px] py-[18px] border border-black font-sora text-lg text-black rounded-full">
                        READ
                    </button>
                </div>

                <div class="w-96">
                    <img src="{{ asset('images/png/Union 10.png') }}" alt="" class="mb-6 rounded-t-full">
                    <h4 class="mb-6 font-sora font-medium text-sm text-black">LOVE AND LIGHT</h4>
                    <h3 class="mb-8 font-wagner font-bold text-2xl text-black cursor-pointer">
                        The true meaning of Child time
                    </h3>
                    <button class="px-[63px] py-[18px] border border-black font-sora text-lg text-black rounded-full">
                        READ
                    </button>
                </div>
            </div>
        </section>
    </main>
@endsection
