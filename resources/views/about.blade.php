@extends('layouts.public')

@section('content')
    <header class="mx-6 lg:py-20">
        <p class="font-sora text-black text-[21px] text-center">WE ARE</p>
        <h2 class="mb-[30px] font-wagner font-bold text-6xl md:text-8xl text-black text-center">Trugrains</h2>
    </header>

    <main>
        <section>
            <img src="{{ asset('images/png/350grain@2x.png') }}" alt="" class="object-cover object-center">
        </section>

        {{-- about us --}}
        <section class="bg-green">
            <div class="px-6 md:px-8 lg:px-[100px] xl:px-[200] py-12 lg:py-[120px] bg-about-bg bg-center bg-no-repeat">
                <div class="mb-6 md:mb-8 lg:mb-[120px]">
                    <h3 class="mb-[30px] font-wagner font-bold text-white">
                        <span class="text-2xl md:text-4xl">Our</span>
                        <br>
                        <span class="text-4xl md:text-6xl lg:text-8xl">Vision</span>
                    </h3>

                    <p class="font-wagner font-bold text-white text-base md:text-2xl lg:text-[32px] md:leading-10">To Be The Leading Baby Food Company <br>In Africa, Offering Mothers Nutritious Locally <br>Grown Baby Food.</p>
                </div>

                <div class="">
                    <h3 class="mb-[30px] font-wagner font-bold text-white text-right">
                        <span class="text-2xl md:text-4xl">Our</span>
                        <br>
                        <span class="text-4xl md:text-6xl lg:text-8xl">Mission</span>
                    </h3>

                    <p class="font-wagner font-bold text-white text-base md:text-2xl lg:text-[32px] text-right md:leading-10">At Trugrains, Child Nutrition Is Our Priority. <br>We Make The Weaning Journey Seamless With <br>Nutritious, Easy To Make Baby Cereals For A <br>Smooth Transition Into Solid Food And <br>Toddlerhood.</p>
                </div>
            </div>
        </section>

        {{-- our story --}}
        <section class="">
            <div class="px-6 md:px-8 lg:px-[100px] xl:px-[200] py-12 lg:py-[120px] bg-story-bg bg-center bg-no-repeat font-wagner font-bold text-black text-center">
                <h3 class="mb-[60px]">
                    <span class="font-wagner font-bold text-2xl md:text-4xl">Our</span>
                    <br>
                    <span class="font-wagner font-bold text-4xl md:text-8xl">Story</span>
                </h3>

                <p class="mb-12 text-base md:text-2xl lg:text-[32px] md:leading-10">Trugrains Began With Our Pioneer Product “Nuttygrains” Originated From An Old Family Pap Recipe For Weaning Babies. Our Founder Was A New Mum Trying To Wean Her Baby, When Her Mum Advised Her To Try “Pap With A Twist”, An Old Family Recipe. The Pap Contained Seven Star Ingredients; Yellow Corn, Millet, Guinea Corn, Soya Beans, Peanuts, Crayfish And Dried Shadfish. This Piqued Her Interest And Led Her On A Journey To Research The Health Benefits Of These Ingredients, She Was Astounded At Her Discovery.</p>

                <p class="mb-12 text-base md:text-2xl lg:text-[32px] md:leading-10">This Pap Was A Nutrient Powerhouse In One Meal, With Essential Nutrients Such As Carbohydrates, Proteins, Potassium, Zinc To Vitamins A,C,E And Much More. She Tried It Out For Her Baby Who Loved It And Soon, Orders Began To Pour In From Friends And Family. At That Moment The “7Stars Baby Pap” Was Born.</p>

                <p class="text-base md:text-2xl lg:text-[32px] md:leading-10">The Company Rebranded In 2021, And Changed Its Name From “7Stars Baby Pap” To Trugrains. The Trugrains Cereals Range Has Grown From Other Family Recipes Into Four Variants; Nuttygrains, Multigrains, Sweet Potatoes Cereal And Rice Cereal.</p>
            </div>
        </section>

        @include('layouts.partials.testimonial')
    </main>
@endsection
