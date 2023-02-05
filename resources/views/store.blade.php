@extends('layouts.public')

@section('content')
    <header class="py-4 md:py-20">
        <h2 class="font-wagner font-bold text-4xl md:text-8xl text-black text-center">
            List of Stockist
        </h2>
    </header>

    <main class="mx-12 md:mx-[100px] my-[100px]">
        {{-- stockist list --}}
        <section class="mb-[120px]">
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-x-16">
                <div class="py-[30px] border-t-black border-t-2">
                    <div>
                    <h2 class="mb-[30px] font-wagner font-bold text-4xl text-black">
                        Lagos
                    </h2>
                    <ul class="list-none">
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">NEW CRUSE SUPERMARKET</p>
                            <p class="font-sora font-light text-black">271a Corporation Drive, Dolphin Estate. Ikoyi.</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">PAYLESS SUPERMARKET</p>
                            <p class="font-sora font-light text-black">Petrocam by Elf bus stop Lekki</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">BLENCO SUPERMARKET</p>
                            <p class="font-sora font-light text-black">Lekki Epe Expressway</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">ALIBA SUPERMARKET</p>
                            <p class="font-sora font-light text-black">Abraham Adesanya</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">TARGET SUPERMARKET</p>
                            <p class="font-sora font-light text-black">Thomas Estate</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">PAYLESS SUPERMARKET</p>
                            <p class="font-sora font-light text-black">Addo road, Ajah</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">TARGET SUPERMARKET</p>
                            <p class="font-sora font-light text-black">Sangotedo, Lekki Epe Expressway</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">PAYLESS SUPERMARKET</p>
                            <p class="font-sora font-light text-black">Magodo GRA, Shangisha</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">SUPERSAVER SUPERMARKET</p>
                            <p class="font-sora font-light text-black">4 Adeyemi Odukomaya Shangisha, Magodo</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">SUPERSAVER SUPERMARKET</p>
                            <p class="font-sora font-light text-black">8, Asa-Afariogun Street, Ajao Estate</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">SUPERSAVER SUPERMARKET</p>
                            <p class="font-sora font-light text-black">66 Ikosi Road, Ketu</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">SUPERSAVER SUPERMARKET</p>
                            <p class="font-sora font-light text-black">8 Ajiboye street, Alapere. Agboyi road, Ketu</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">ADDAS MALL</p>
                            <p class="font-sora font-light text-black">8/10  Hakeem Balogun Street, Agidingbi .Ikeja</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">JENDOL SUPERMARKET </p>
                            <p class="font-sora font-light text-black">790 Lagos- Abeokuta Expressway besides Alakuko police station, Catholic Church Alakuko</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">JENDOL SUPERMARKET </p>
                            <p class="font-sora font-light text-black">Kilometer 5, Lasu – Igando Express, besides MOJ filing station, Igando</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">JENDOL SUPERMARKET </p>
                            <p class="font-sora font-light text-black">KM1, opp Akasolori Estate Ikorodu, Itokin road, Aksaolori Ikorodu</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">JENDOL SUPERMARKET </p>
                            <p class="font-sora font-light text-black">10, Egbe road, opp Jakande Estate gate, Oke Afa, Isolo</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">JENDOL SUPERMARKET </p>
                            <p class="font-sora font-light text-black">LASU road, opp Diamond Estate</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">JENDOL SUPERMARKET </p>
                            <p class="font-sora font-light text-black">241 Lagos/Abeokuta Expressway Abule Egba</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">JENDOL SUPERMARKET </p>
                            <p class="font-sora font-light text-black">60 Egbeda-Idimu road, by Oja Bus stop, Egbeda</p>
                        </li>
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">EDICHART SHOPPING MALL </p>
                            <p class="font-sora font-light text-black">54 Olorunlogbon street, Anthony Village</p>
                        </li>
                    </ul>
                    </div>
                </div>

                <div class="py-[30px] border-t-black border-t-2">
                    <div>
                    <h2 class="mb-[30px] font-wagner font-bold text-4xl text-black">
                        Ibadan
                    </h2>
                    <ul class="list-none">
                        <li class="mb-6">
                            <p class="font-sora font-medium text-black">STARKE SUPERMARKET</p>
                            <p class="font-sora font-light text-black">Shop 15 Angel Castle Plaza opp DSTV Akala Express Ibadan</p>
                        </li>
                    </ul>
                    </div>
                </div>

                <div class="py-[30px] border-t-black border-t-2">
                    <div>
                    <h2 class="mb-[30px] font-wagner font-bold text-4xl text-black">
                        Port-Harcourt
                    </h2>
                    <ul class="list-none">
                        <li class="mb-4">
                            <p class="font-sora font-medium  text-black">TAMDOR SUPERMARKET</p>
                            <p class="font-sora font-medium  text-black">Plot 2D Old GRA Eastern Bypass, Port Harcourt</p>
                        </li>
                        <li class="mb-4">
                            <p class="font-sora font-medium  text-black">WELLDONE SUPERMARKET</p>
                            <p class="font-sora font-medium  text-black">NO 7 Peter Odili road, Port Harcourt</p>
                        </li>
                    </ul>
                    </div>

                    <div>
                    <h2 class="mb-[30px] font-wagner font-bold text-4xl text-black">
                        Asaba
                    </h2>
                    <ul class="list-none">
                        <li class="mb-4">
                            <p class="font-sora font-medium  text-black">M7ELEVEN SUPERMARKET</p>
                            <p class="font-sora font-medium  text-black">Okpanam Road, by Marble Hill Junction Asaba</p>
                        </li>
                        <li class="mb-4">
                            <p class="font-sora font-medium  text-black">GABBS SUPERMARKET</p>
                            <p class="font-sora font-medium  text-black">Okpanam road, Asaba</p>
                        </li>
                    </ul>
                    </div>
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
                5A Little Road, Sabo,
                <br>Yaba, Lagos
            </p>
            <p class="font-sora font-medium">+234 803 379 7112, +234 803 379 7112</p>
        </section>

        {{-- map --}}
        <section>
            <div class="overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.109208454777!2d3.375559014770644!3d6.507858295292565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c5f3711d92d%3A0x8ce7a27b2b91d05!2s5a%20Little%20Rd%2C%20Sabo%20yaba%20101245%2C%20Lagos!5e0!3m2!1sen!2sng!4v1649497937018!5m2!1sen!2sng" width="1682" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>
@endsection
