<nav class="py-5 font-sora font-medium">
    <div class="px-[100px]">
        <ul class="flex justify-between place-items-center">
            <li class="hover:animate-bounce">
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
            <li class="mx-[181px] animate-bounce">
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
