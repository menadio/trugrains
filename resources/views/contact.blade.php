@extends('layouts.public')

@section('content')
    <header class="py-20">
        <h2 class="mb-[30px] font-wagner font-bold text-8xl text-black text-center">
            Contact us
        </h2>
    </header>

    <main class="mx-[100px] my-[100px]">
        {{-- contact --}}
        <section class="mb-[120px]">
            <div class="grid grid-cols-3 gap-x-16">
                <div class="py-[30px] border-t-black border-t-2">
                    <h2 class="mb-[30px] font-wagner font-bold text-4xl text-black">
                        General Enquiry
                    </h2>
                    <p class="font-sora font-medium text-black">info@trugrains.com</p>
                    <p class="font-sora font-medium text-black">(+234) 8181022210</p>
                </div>

                <div class="py-[30px] border-t-black border-t-2">
                    <h2 class="mb-[30px] font-wagner font-bold text-4xl text-black">
                        Partnerships
                    </h2>
                    <p class="font-sora font-medium text-black">brand@trugrains.com</p>
                    <p class="font-sora font-medium text-black">(+234) 8181022210</p>
                </div>

                <div class="py-[30px] border-t-black border-t-2">
                    <h2 class="mb-[30px] font-wagner font-bold text-4xl text-black">
                        Press
                    </h2>
                    <p class="font-sora font-medium  text-black">press@trugrains.com</p>
                    <p class="font-sora font-medium  text-black">(+234) 8181022210</p>
                </div>
            </div>
        </section>

        {{-- questions --}}
        <section class="mb-[120px]">
            <h3 class="mb-[30px] font-wagner font-bold text-4xl text-black">Have A Question? We Would Love To Help!</h3>
            <p class="mb-[30px] font-sora text-black">
                If you have any queries about an order, want to know more about our products, or our brand, please get
                <br>in touch. Have you had a look at our FAQ? We are constantly updating it, so your answer might be there
                <br>already!
            </p>
            <p class="font-sora text-black">
                You can also type your question in our Help Chat (at the bottom right corner of the home page) or email
                <br>us at support@trugrains.com.
            </p>
        </section>

        {{-- address --}}
        <section class="mb-[60px]">
            <h3 class="mb-[30px] font-wagner font-bold text-4xl text-black">Address</h3>
            <p class="font-sora font-medium">Trugrains</p>
            <p class="font-sora font-medium">
                270a Corporation Drive, Dolphin Estate.
                <br>Ikoyi, Lagos.
            </p>
            <p class="font-sora font-medium">(+234) 8181022210</p>
        </section>

        {{-- map --}}
        <section>
            <div class="overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.109208454777!2d3.375559014770644!3d6.507858295292565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c5f3711d92d%3A0x8ce7a27b2b91d05!2s5a%20Little%20Rd%2C%20Sabo%20yaba%20101245%2C%20Lagos!5e0!3m2!1sen!2sng!4v1649497937018!5m2!1sen!2sng" width="1682" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>
@endsection
