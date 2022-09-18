@extends('layouts.public')

@section('content')
    <main class="px-[100px] py-[120px] bg-purple">
        {{-- products details --}}
        <section class="flex flex-row gap-4">
            {{-- details --}}
            <div class="text-white col-span-3">
                <div class="mb-20">
                    <h2 class="font-wagner font-bold text-[72px]">Sweet Potatoe cereal</h2>
                    <p class="mt-6 font-sora text-[18px]">A sweet combo of Sweet Potatoes and Guinea corn.
                    </p>
                </div>

                <div class="mb-20">
                    <h2 class="font-wagner font-bold text-5xl">Age</h2>
                    <p class="mt-6 font-sora text-[16px]">Suitable for babies 6 months+
                    </p>
                </div>

                <div class="mb-20">
                    <h2 class="font-wagner font-bold text-5xl">Allergy Caution</h2>
                    <p class="mt-6 font-sora text-[16px]">Not suitable for babies with soy and nut allergies.
                    </p>
                </div>

                <div class="mb-20">
                    <h2 class="font-wagner font-bold text-5xl">Description</h2>
                    <ul class="list-none divide-y divide-white">
                        <li class="py-4"></li>
                        <li class="py-4">An excellent choice for Picky eaters and suitable for weight gain
                        </li>
                        <li class="py-4">Contains essential nutrients and fats for baby’s growth</li>
                        <li class="py-4">Nutritious weaning meal</li>
                        <li class="py-4">Excellent source of iron</li>
                        <li class="py-4">Cooks in 3 minutes</li>
                        <li></li>
                    </ul>
                </div>
            </div>

            {{-- image --}}
            <div>
                <h2 class="font-wagner font-bold text-[72px]">Nutty grains</h2>
                <p class="mt-[24px] font-sora text-[18px]">A rich blend of Millet, Guinea corn, Yellow corn,
                    White corn, Soya beans, Crawfish, Dried Shad fish and Peanuts.
                </p>
            </div>

            {{-- price --}}
            <div class="text-white">
                <h2 class="font-wagner font-bold text-[72px]">&#8358;1,500.00</h2>
                <h3 class="mt-[24px] font-sora text-2xl">350g
                </h3>
            </div>
        </section>

        {{-- testimonials --}}
        <section class="mt-[60px] text-white">
            <h2 class="mb-[120px] font-wagner text-5xl">Reviews</h2>

            <div class="grid grid-cols-2 gap-6">
                <div class="w-5/6">
                    <div class="mb-[30px]">
                        <svg class="fill-orange-500" xmlns="http://www.w3.org/2000/svg" width="96" height="65.842"
                            viewBox="0 0 96 65.842">
                            <path id="Path_32518" data-name="Path 32518"
                                d="M54.119-25.744c0,11.255,5.517,23.393,22.731,23.393,13.462,0,22.51-8.828,22.51-20.083,0-10.372-5.738-18.759-20.745-19.862a3.177,3.177,0,0,1-2.428-4.193c2.207-5.738,6.621-10.814,11.7-15.448a3.99,3.99,0,0,0,.441-4.634A3.5,3.5,0,0,0,83.912-67.9C67.139-60.834,54.119-46.047,54.119-25.744Zm-50.759,0c0,11.255,5.517,23.393,22.731,23.393,13.462,0,22.51-8.828,22.51-20.083,0-10.372-5.738-18.759-20.524-19.862a3.173,3.173,0,0,1-2.648-4.193c2.428-5.738,6.841-10.814,11.7-15.448a3.421,3.421,0,0,0,.441-4.634A3.431,3.431,0,0,0,33.153-67.9C16.381-60.834,3.36-46.047,3.36-25.744Z"
                                transform="translate(-3.36 68.193)" opacity="0.2" />
                        </svg>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="mb-[30px] font-wagner text-3xl">My son was having a hard time adjusting to
                                solids,
                                but he’s really loving the Trugrains cereal.</p>
                            <p class="font-sora font-medium  text-lg">— Sandra, Surulere</p>
                        </div>

                        <div>
                            <img src="{{ asset('/images/png/kristaps.png') }}" alt="" class="object-cover">
                        </div>
                    </div>
                </div>

                <div class="w-5/6">
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
                            <p class="font-sora font-medium  text-lg">— Mercy, Abuja</p>
                        </div>

                        <div>
                            <img src="{{ asset('/images/png/siora-photography.png') }}" alt="" class="object-cover">
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
