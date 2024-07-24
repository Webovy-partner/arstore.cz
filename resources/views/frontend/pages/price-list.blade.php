@extends('layouts.frontend.guest')

@section('body-with-class')

    <body class="type-cenik">
    @endsection

    @section('content')
        <div class="mainscreen">
            <header class="container header" x-data="{ menuOpen: false }" @click.away="menuOpen = false">
                <a href="/" class="logo mobile"><img src="{{ asset('frontend/images/logo.svg') }}" alt="" /></a>
                <a href="/" class="logo pc"><img src="{{ asset('frontend/images/logo-pc.png') }}" alt="" /></a>
                <nav :class="menuOpen ? 'active' : ''">
                    <a href="/#ukazky" class="text-graylight text-18 text-light">Features</a>
                    <a class="text-graylight text-18 text-light" href="{{ route('frontend.blog') }}">Blog</a>
                    <a href="{{ route('frontend.price-list') }}" class="text-graylight text-18 text-light">Ceník</a>
                    <a href="{{ route('frontend.contact') }}" class="text-graylight text-18 text-light">Kontakt</a>
                </nav>
                <div class="hamburger" @click="menuOpen = ! menuOpen" :class="menuOpen ? 'change' : ''">
                    <div class="hamburger__item">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
                <span class="menu-shadow" :class="menuOpen ? 'active' : ''" @click="menuOpen = false"></span>
            </header>
        </div>

        <div class="container">
            <div class="cenik" x-data="{ monthly: true }">
                <div class="cenik__toggle mobile" @click="monthly = !monthly">
                    <p :class="{ 'active': monthly }">Měsíčně</p>
                    <span class="cenik__toggle-btn" :class="{ 'monthly': monthly, 'yearly': !monthly }">
                        <span></span>
                    </span>
                    <p :class="{ 'active': !monthly }">Ročně</p>
                </div>
                <div class="cenik__item">
                    <div class="cenik__toggle" @click="monthly = !monthly">
                        <p :class="{ 'active': monthly }">Měsíčně</p>
                        <span class="cenik__toggle-btn" :class="{ 'monthly': monthly, 'yearly': !monthly }">
                            <span></span>
                        </span>
                        <p :class="{ 'active': !monthly }">Ročně</p>
                    </div>

                    <p class="cenik__item-price">
                        <span x-show="monthly">990 Kč</span>
                        <span x-show="! monthly">10 990 Kč</span>
                    </p>
                    <p class="cenik__item-month">
                        <span x-show="monthly">/měsíc</span>
                        <span x-show="! monthly">/rok</span>
                    </p>
                    </p>
                    <div class="cenik__item-ok">
                        <p>Webová aplikace ve stylu vašeho e-shopu</p>
                        <p>Webhosting </p>
                        <p>4x 3D model produktu </p>
                        <p>Even more amazing feature </p>
                        <p class="free-two-months" x-show="!monthly">2 měsíce zdarma</p>
                    </div>
                    <a href="/cenik" class="btn-green">Objednat</a>
                </div>
                <div class="cenik__item">
                    <p class="cenik__item-price"><span x-show="monthly">3 490 Kč</span>
                        <span x-show="! monthly">39 990 Kč</span>
                    </p>
                    <p class="cenik__item-month">
                        <span x-show="monthly">/měsíc</span>
                        <span x-show="! monthly">/rok</span>
                    </p>
                    </p>
                    <div class="cenik__item-ok">
                        <p>Webová aplikace ve stylu vašeho e-shopu</p>
                        <p>Webhosting</p>
                        <p>Až 25x 3D modelů produktů</p>
                        <p>Až 3 barevné varianty každého 3D modelu </p>
                        <p>Možnost nasazení prohlížeče přímo na váš e-shop</p>
                        <p class="free-two-months" x-show="!monthly">2 měsíce zdarma</p>
                    </div>
                    <a href="/cenik" class="btn-green">Objednat</a>
                </div>
                <div class="cenik__item">
                    <p class="cenik__item-price">
                        <span x-show="monthly">7 990 Kč</span>
                        <span x-show="! monthly">89 990 Kč</span>
                    </p>
                    <p class="cenik__item-month">
                        <span x-show="monthly">/měsíc</span>
                        <span x-show="! monthly">/rok</span>
                    </p>
                    <div class="cenik__item-ok">
                        <p>Webhosting</p>
                        <p>Až 50x 3D model produktu </p>
                        <p>Možnost nasazení prohlížeče přímo na váš e-shop</p>
                        <p>white-lable expirience</p>
                        <p>Webová aplikace ve stylu vašeho e-shopu</p>
                        <p class="free-two-months" x-show="!monthly">2 měsíce zdarma</p>
                    </div>
                    <a href="/cenik" class="btn-green">Objednat</a>
                </div>

            </div>
            <p class="cenik-info"><i>Minmální délka naších služeb je 6 měsíců. Cena tvorby 3D modelů není zahrnuta v ceníku
                    a je
                    stanovena individuálně podle jejich náročnosti.</i></p>

            <div class="reseninamiru">
                <h1 class="text-50 text-light text-underline">Řešení na míru</h1>
                <p>Nevybrali jste si z naší nabídky? Nevadí, rádi pro Vás vytvoříme řešení na míru.
                    Nechcte nám na sebe kontakt a obratem se Vám ozveme!</p>
                <a href="{{ route('frontend.contact') }}" class="btn-green">Kontaktujte nás >></a>
            </div>
        </div>

        <footer>
            <div class="container df jst-b">
                <a href="/"><img src="{{ asset('frontend/images/logo.svg') }}" alt="" height="50" /></a>
                <div>
                    <div class="icons">

                        <a href="https://www.linkedin.com/company/atelier-onixia/mycompany/" target="_blank"><img
                                src="{{ asset('frontend/images/linkedin.png') }}" height="30" alt="linkedin" /></a>

                        <a href="https://www.instagram.com/atelier_onixia/" target="_blank"><img
                                src="{{ asset('frontend/images/instagram.png') }}" height="30" alt="Instagram" /></a>
                    </div>
                    <a href="tel:+420739454497">+420 739 454 497</a>
                    <a href="mailto:adam.bosak@arstore.cz">adam.bosak@arstore.cz</a>
                </div>
            </div>
            <p class="copyright">Copyright ©<span id="copyright"></span> Onixia solutions s.r.o. Všechna
                práva vyhrazena</p>
        </footer>
    @endsection
