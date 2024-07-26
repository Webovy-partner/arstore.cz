@extends('layouts.frontend.guest')

@section('title')
    <title>Kontakt | ARStore</title>
@endsection

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

            <form action="{{ route('frontend.contact.submit') }}" method="POST" class="form">
                @csrf
                <input type="text" name="name" placeholder="Jméno*" required />
                <input type="text" name="surname" placeholder="Příjmení*" required />
                <!-- Skrýváme vstupní pole pro cenu -->
                <input type="hidden" name="price" value="{{ $priceId ?? '' }}" hidden />
                <input type="text" name="phone" placeholder="Telefon" />
                <input type="email" name="mail" placeholder="E-mail" />
                <textarea name="message" cols="30" rows="10" placeholder="Zpráva*" required></textarea>
                <button type="submit" class="btn-green">Odeslat</button>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </form>

            <div class="reseninamiru">
                <h1 class="text-50 text-light text-underline">Řešení na míru</h1>
                <p>Nevybrali jste si z naší nabídky? Nevadí, rádi pro Vás vytvoříme
                    řešení na míru. Nechcte nám na sebe kontakt a obratem se Vám
                    ozveme!</p>
                <a href="tel:+420739454497" class="btn-green">Rádi voláte? <br />+420 739 454 497 >></a>
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
