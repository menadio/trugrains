<nav class="py-5 font-sora font-medium">
    <div class="px-[100px]">
        <ul class="lg:flex lg:justify-between lg:place-items-center">
            <li class="lg:hidden xl:hidden hover:animate-bounce">
                <a href="{{ route('home') }}">
                    Home
                </a>
            </li>            <li class="hover:animate-bounce">
                <a href="{{ route('products') }}">
                    Products
                </a>
            </li>
            <li class="hover:animate-bounce">
                <a href="{{ route('about-us') }}">
                    About Us
                </a>
            </li>
            <li class="hover:animate-bounce">
                <a href="{{ route('recipes') }}">Tru Recipes</a>
            </li>
            <li class="xl:mx-[181px] animate-bounce hidden lg:block">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/png/trugrain-logo.png') }}" alt="Trugrains logo" class="">
                </a>
            </li>
            <li class="hover:animate-bounce">
                <a href="{{ route('store') }}">The Store</a>
            </li>
            <li class="hover:animate-bounce">
                <a href="{{ route('blog') }}">Blog</a>
            </li>
            <li class="hover:animate-bounce">
                <a href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
    </div>
</nav>
