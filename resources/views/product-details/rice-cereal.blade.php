@extends('layouts.public')

@section('content')
    <main class="px-4 lg:px-[100px] py-[120px] bg-blue">
        {{-- products details --}}
        <section class="lg:flex lg:flex-row lg:gap-4">
            {{-- details --}}
            <div class="text-white">
                <div class="mb-20">
                    <h2 class="font-wagner font-bold text-4xl lg:text-[72px]">Rice Cereal</h2>
                    <p class="mt-6 font-sora text-[18px]">A healthy combo of Rice and Soya beans. The Rice cereal is the ideal starter meal for moms’ beginning the weaning journey.
                    </p>
                </div>

                <div class="mb-20">
                    <h2 class="font-wagner font-bold text-4xl lg:text-5xl">Age</h2>
                    <p class="mt-6 font-sora text-[16px]">Suitable for toddlers and babies from 6months
                    </p>
                </div>

                <div class="mb-20">
                    <h2 class="font-wagner font-bold text-4xl lg:text-5xl">Allergy Caution</h2>
                    <p class="mt-6 font-sora text-[16px]">Not suitable for babies with soy allergies.
                    </p>
                </div>

                <div class="mb-20">
                    <h2 class="font-wagner font-bold text-4xl lg:text-5xl">Description</h2>
                    <ul class="list-none divide-y divide-white">
                        <li class="py-4"></li>
                        <li class="py-4">Ideal as a weaning starter meal
                        </li>
                        <li class="py-4">Picky eaters’ choice</li>
                        <li class="py-4">Contains essential nutrient and fats for baby’s growth</li>
                        <li class="py-4">Nutritious weaning meal</li>
                        <li class="py-4">Excellent source of iron</li>
                        <li class="py-4">Contains Calcium, Magnesium, Vitamins A and C</li>
                        <li class="py-4">Boosts baby’s immune system and bone strength</li>
                        <li class="py-4">Cooks in 3 minutes</li>
                        <li></li>
                    </ul>
                </div>
            </div>

            {{-- image --}}
            <div>
                <img src="{{ asset('images/png/ricecereal_2x.png') }}" class="lg:max-w-md">
            </div>

            {{-- price --}}
            <div class="text-white">
                <h2 class="font-wagner font-bold text-5xl lg:text-[72px]">&#8358;1,500.00</h2>
                <h3 class="mt-[24px] font-sora text-2xl">350g
                </h3>
            </div>
        </section>
    </main>

    {{-- store --}}
    @include('layouts.partials.store')

    {{-- blog --}}
{{--    @include('layouts.partials.blog')--}}
@endsection
