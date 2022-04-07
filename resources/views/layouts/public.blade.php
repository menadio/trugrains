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
<body class="bg-lime h-72">
    {{-- <header>
        <nav class="relative z-40 opacity-25">
            <div class="mx-32 py-2">
                <div class="">
    
                    <div class="flex items-center justify-between h-16">
                        <div>
                            <a href="#">Page</a>
                        </div>
                        <div>
                            <a href="#">Page</a>
                        </div>
                        <div>
                            <a href="#">Page</a>
                        </div>
                        <div class="mx-8">
                            <a href="#">
                                <img src="{{asset('images/Mask Group 3.png')}}" alt="" srcset="">
                            </a>
                        </div>
                        <div>
                            <a href="#">Page</a>
                        </div>
                        <div>
                            <a href="#">Page</a>
                        </div>
                        <div>
                            <a href="#">Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="absolute top-0 z-0 bg-lime">
            <svg class="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1440" height="1000" viewBox="0 0 1440 1000">
                <defs>
                <clipPath id="clip-path">
                    <rect id="Rectangle_1251" data-name="Rectangle 1251" width="1440" height="1000" fill="#fff"/>
                </clipPath>
                </defs>
                <g id="Mask_Group_33" data-name="Mask Group 33" clip-path="url(#clip-path)">
                <g id="Group_13898" data-name="Group 13898">
                    <path id="Path_32535" data-name="Path 32535" d="M714.5,0C1109.107,0,1429,319.893,1429,714.5S1109.107,1429,714.5,1429,0,1109.107,0,714.5,319.893,0,714.5,0Z" transform="translate(-359 100)" fill="rgba(48,119,60,0.15)"/>
                    <path id="Path_32534" data-name="Path 32534" d="M391,0C606.943,0,782,175.057,782,391S606.943,782,391,782,0,606.943,0,391,175.057,0,391,0Z" transform="translate(-563 257)" fill="#30773c"/>
                    <path id="Path_32533" data-name="Path 32533" d="M391,0C606.943,0,782,175.057,782,391S606.943,782,391,782,0,606.943,0,391,175.057,0,391,0Z" transform="translate(-172 -505)" fill="#71bbe2"/>
                    <path id="Path_32484" data-name="Path 32484" d="M179.664,28.148c166.9,0,424.721,71.34,424.721,238.237s-219.314,94.788-302.612,227.96S0,433.281,0,266.385,12.768,28.148,179.664,28.148Z" transform="translate(962.78 330.837)" fill="#9d2883"/>
                    <path id="Path_32531" data-name="Path 32531" d="M179.664,28.148c166.9,0,424.721,71.34,424.721,238.237s-219.314,94.788-302.612,227.96S0,433.281,0,266.385,12.768,28.148,179.664,28.148Z" transform="translate(1941.977 102.83) rotate(140)" fill="#e28333"/>
                </g>
                </g>
            </svg>
        </div>
    </header> --}}
    <header class="">
        <nav class="mb-24">
            <div class="mx-32 py-2">
                <div class="">
    
                    <div class="flex items-center justify-between h-16">
                        <div>
                            <a href="#">Page</a>
                        </div>
                        <div>
                            <a href="#">Page</a>
                        </div>
                        <div>
                            <a href="#">Page</a>
                        </div>
                        <div class="mx-8">
                            <a href="#">
                                <img src="{{asset('images/Mask Group 3.png')}}" alt="" srcset="">
                            </a>
                        </div>
                        <div>
                            <a href="#">Page</a>
                        </div>
                        <div>
                            <a href="#">Page</a>
                        </div>
                        <div>
                            <a href="#">Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <h1 class="text-white text-6xl text-center font-bold">1 Little Spoon, Seven Star Nutrients</h1>
    </header>

    <main class="mt-32">
        {{-- products --}}
        <div class="">
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
                        <img src="{{ asset('images/Group 13789.png')}}" alt="" class="object-cover">
                    </div>

                    <div class="pl-20 text-white">
                        <h2 class="font-wagner font-bold text-[72px]">Nutty grains</h2>
                        <h3 class="mb-[24px] font-sora font-bold text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-[18px]">A rich blend of Millet, Guinea corn, Yellow corn, <br>White corn, Soya beans, Crawfish, Dried Shad <br>fish and Peanuts.</p>
                        <button class="px-[42px] py-[21px] uppercase rounded-full border border-2">see details</button>
                    </div>
                </div>
            </div>
    
            <div class="py-[120px] bg-lemon">
                <div class="mx-[100px] grid grid-cols-2 items-center gap-x-18">
                    <div class="">
                        <img src="{{ asset('images/Group 13788.png') }}" alt="" class="object-cover">
                    </div>
    
                    <div class="pl-20 text-white">
                        <h2 class="font-wagner font-bold text-[72px]">Multigrain</h2>
                        <h3 class="mb-[24px] font-sora font-bold text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-[18px]">A healthy mix of Millet, Guinea corn, Yellow <br>corn, White corn, Soya beans, Crawfish, Dried <br>Shad fish.</p>
    
                        <button class="px-[42px] py-[21px] uppercase rounded-full border border-2">see details</button>
                    </div>
                </div>
            </div>
    
            <div class="py-[120px] bg-purple">
                <div class="mx-[100px] grid grid-cols-2 items-center gap-x-18">
                    <div class="">
                        <img src="{{ asset('images/Group 13852.png') }}" alt="" class="object-cover">
                    </div>
    
                    <div class="pl-20 text-white">
                        <h2 class="font-wagner font-bold text-[72px] tracking-normal">Sweet Potato <br>cereal</h2>
                        <h3 class="mb-[24px] font-sora font-bold text-[48px]">350g</h3>
                        <p class="mb-[60px] font-sora text-[18px]">A rich blend of Millet, Guinea corn, Yellow corn, <br>White corn, Soya beans, Crawfish, Dried Shad <br>fish and Peanuts.</p>
                        <button class="px-[42px] py-[21px] uppercase rounded-full border border-2">see details</button>
                    </div>
                </div>
            </div>
    
            <div class="py-[120px] bg-blue">
                <div class="mx-[100px] grid grid-cols-2 items-center gap-x-18">
                    <div class="">
                        <img src="{{ asset('images/Group 13786.png') }}" alt="" class="object-cover">
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
        </div>

        {{-- recipes --}}
        <section class="px-[100px] py-[120px] bg-green">
            <div class="flex flex-col justify-center">
                <svg class="align-center" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="399.414" height="357.69" viewBox="0 0 399.414 357.69">
                    <defs>
                      <clipPath id="clip-path">
                        <rect id="Rectangle_1199" data-name="Rectangle 1199" width="399.414" height="338.144" fill="#30773c"/>
                      </clipPath>
                    </defs>
                    <g id="Group_13725" data-name="Group 13725" transform="translate(0 19.546)">
                      <g id="Group_13724" data-name="Group 13724" clip-path="url(#clip-path)">
                        <path id="Path_32512" data-name="Path 32512" d="M339.163,118.672a40.121,40.121,0,0,0-6.374-9.4c-11.1-12.245-24.781-13.182-37.549-8.322a128.516,128.516,0,0,0-30.7-46.327C231.844,22.825,181.618,3.82,136.2,3.642c-30.4-.117-59.807,11.072-79.742,31.472a60.575,60.575,0,0,0-8.446,6.452c-8.128-4.607-17.917-5.608-26.941-.764C8.949,47.308,3.675,60.188,2.379,73.669A54.39,54.39,0,0,0,.168,93.747c1.455,17.946,10.1,35.079,24.572,45.858a253.919,253.919,0,0,0,12.1,44.365c11.7,31.966,30.982,57.354,59.587,76,12.975,8.458,27.017,14.928,41.288,20.855,15.32,6.362,30.807,11.484,47.464,12.711C215.914,295.8,239.4,278.3,255.449,254.38a73.044,73.044,0,0,0,9.9-8.121c9.142-8.958,15.56-20.227,20.486-32.2a45.766,45.766,0,0,0,15.671-2.984c16.894-4.93,32.32-18.178,40.907-32.5,10.644-17.755,10.369-44.767-3.255-59.9" transform="translate(24.738 27.414)" fill="rgba(255,255,255,0.15)"/>
                        <path id="Path_32513" data-name="Path 32513" d="M259.411,138.767c-25.193,2.883-50.37,12.279-75.151,19.064q-39.755,10.884-79.48,22c-2.931.821-1.68,7.011,1.233,6.249q38.563-10.1,77.1-20.364c25.438-6.8,52.036-11.258,76.78-21.992,1.858-.806,1.634-5.2-.481-4.96" transform="translate(112.906 76.086) rotate(9)" fill="#fff"/>
                      </g>
                      <g id="Group_13874" data-name="Group 13874" transform="translate(35.178 -19.546)">
                        <path id="Path_32514" data-name="Path 32514" d="M52.8,8.426c-2.245-2.594-5.527.715-4.373,3.375,8.484,19.589,22.522,37.987,34.222,55.79,2.446,3.717,8.339.363,6.014-3.513C77.527,45.518,67,24.827,52.8,8.426" transform="translate(44.998 18.369)" fill="#fff"/>
                        <path id="Path_32515" data-name="Path 32515" d="M61.19,6.252C66.9,29.185,73.342,51.037,75.871,74.688c.342,3.188,5.309,3.309,5.085,0-1.606-23.752-5.2-48.581-14.885-70.495-1.254-2.843-5.589-.777-4.881,2.059" transform="translate(76.724 6.953)" fill="#fff"/>
                        <path id="Path_32516" data-name="Path 32516" d="M74.6,2.9c-.867,26.163,1.592,52.522,1.057,78.761-.073,3.668,5.465,3.62,5.668,0C82.8,55.569,84.5,28.031,80.393,2.117c-.539-3.389-5.682-2.4-5.789.784" transform="translate(109.376 0)" fill="#fff"/>
                      </g>
                    </g>
                  </svg>
                  <p class="font-sora text-center text-white text-[21px]">Take a look at the keyhole of our Tru kitchen! Get <br>ideas on how to turn your baby food into a Tru <br>experience.</p>
            </div>

            <div class="mx-[200px] bg-tru-recipes-2 bg-center bg-no-repeat">
                <div class="pt-[120px] grid grid-cols-2 gap-[200px]">
                    <div class="font-wagner font-bold text-white text-[36px]">
                        <img src="{{ asset('images/apple_carrot_puree@2x.png') }}" alt="" class="mb-12">
                        <h2>Apple, Carrot Puree</h2>
                    </div>

                    <div class="mt-[120px] font-wagner font-bold text-white text-[36px]">
                        <img src="{{ asset('images/tru_fruity@2x.png') }}" alt="" class="mb-12">
                        <h2>Tru Fruity <br>Smoothie Splash</h2>
                    </div>

                    <div class="-mt-[240px] font-wagner font-bold text-white text-[36px]">
                        <img src="{{ asset('images/tru_blend@2x.png') }}" alt="" class="mb-12">
                        <h2>Tru Blend Banana, <br>Nuts And Whole <br>Baby Milk</h2>
                    </div>

                    <div class="-mt-[60px] font-wagner font-bold text-white text-[36px]">
                        <img src="{{ asset('images/carrot_puree@2x.png') }}" alt="" class="mb-12">
                        <h2>Apple, Carrot Puree</h2>
                    </div>
                </div>
            </div>

        </section>
    </main>
</body>
</html>