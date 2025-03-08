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
                    <a href="/" class="text-graylight text-18 text-light">Přehled</a>
                    
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

                @foreach ($prices as $price)
                    <div class="cenik__item">
                        @if ($loop->first)
                            <div class="cenik__toggle" @click="monthly = !monthly">
                                <p :class="{ 'active': monthly }">Měsíčně</p>
                                <span class="cenik__toggle-btn" :class="{ 'monthly': monthly, 'yearly': !monthly }">
                                    <span></span>
                                </span>
                                <p :class="{ 'active': !monthly }">Ročně</p>
                            </div>
                        @endif

                        <p class="cenik__item-price">
                            <span x-show="monthly">{{ number_format($price->monthly_price, 0, ',', ' ') }} Kč</span>
                            <span x-show="!monthly">{{ number_format($price->yearly_price, 0, ',', ' ') }} Kč</span>
                        </p>
                        <p class="cenik__item-month">
                            <span x-show="monthly">/měsíc</span>
                            <span x-show="!monthly">/rok</span>
                        </p>
                        <div class="cenik__item-ok">
                            {!! $price->features !!}
                        </div>
                        <a x-show="monthly" href="/kontakt?cenik={{ $price->monthly_price }}" class="btn-green">Objednat</a>
                        <a x-show="!monthly" href="/kontakt?cenik={{ $price->yearly_price }}" class="btn-green">Objednat</a>
                    </div>
                @endforeach
            </div>
            <p class="cenik-info"><i>Minimální délka našich služeb je <strong>6 měsíců</strong>. Cena <strong>tvorby 3D modelů není součástí ceníku</strong> a je stanovena individuálně podle náročnosti.</i></p>

            <div class="reseninamiru">
                <h1 class="text-50 text-light text-underline">Řešení na míru</h1>
                <p>Nevybrali jste si z naší nabídky? Nevadí, rádi pro Vás vytvoříme řešení na míru. Nechte nám na sebe kontakt a obratem se Vám ozveme!</p>
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
