@extends('layouts.public')

@section('content')
    <header class="py-20">
        <h2 class="mb-[30px] font-wagner font-bold text-8xl text-black text-center">
            Tru Recipes
        </h2>
        <p class="font-sora text-black text-[21px] text-center">
            Take a look at the keyhole of our Tru kitchen! Get <br>ideas on how to turn your baby food into a Tru
            <br>experience.
        </p>
    </header>

    <main class="">
        <h2 class="mx-[100px] py-[80px] mb-[30px] font-wagner font-bold text-6xl text-black text-center">
            Sit tight moms, we are cooking something special just for your babies.
        </h2>

        {{-- recipes
        <section class="py-[120px] bg-orange">
            <div class="mx-[200px] grid grid-cols-2 gap-x-[150px] font-wagner font-bold text-white text-[36px]">
                <div class="mb-[120px]">
                    <img src="{{ asset('images/png/apple_carrot_puree.png') }}" alt="" class="mb-12">
                    <h2>Apple, Carrot Puree</h2>
                </div>

                <div class="my-[120px]">
                    <img src="{{ asset('images/png/tru_fruity.png') }}" alt="" class="mb-12">
                    <h2>Tru Fruity <br>Smoothie Splash</h2>
                </div>

                <div class="-mt-[120px]">
                    <img src="{{ asset('images/png/tru_blend.png') }}" alt="" class="mb-12">
                    <h2>Tru Blend Banana, <br>Nuts And Whole <br>Baby Milk</h2>
                </div>

                <div class="">
                    <img src="{{ asset('images/png/carrot_puree.png') }}" alt="" class="mb-12">
                    <h2>Apple, Carrot Puree</h2>
                </div>
            </div>
        </section> --}}

        @include('layouts.partials.store')
    </main>
@endsection
