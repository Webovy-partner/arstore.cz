@extends('layouts.frontend.guest')

@section('title')
    <title>Rozšířená realita | ARStore</title>
@endsection

@section('body-with-class')

    <body class="type-index">
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
            <h1 class="text-100 text-light">
                Objevte <span class="text-green">Budoucnost</span> Prodeje s AR Store
                >>></h1>
            <div class="image-main-container">
                <img src="{{ asset('frontend/images/image-1.jpg') }}" alt="" class="image-main" />
                <img src="{{ asset('frontend/images/mainscreen-logo.png') }}" alt="" class="image-main-logo" />
            </div>
            <img src="{{ asset('frontend/images/mobile-mainscreen.jpg') }}" alt="" class="image-main-mobile" />

            <br /><br /><br />
            <p class="partners text-80 text-light">Naši partneři</p>
            <div class="loga">
                <img src="{{ asset('frontend/images/loga-klientu/logo-3.jpg') }}" height="100" alt="" />
                <img src="{{ asset('frontend/images/loga-klientu/logo-4.jpg') }}" height="100" alt="" />
                <img src="{{ asset('frontend/images/loga-klientu/logo-5.jpg') }}" height="100" alt="" />
                <img src="{{ asset('frontend/images/loga-klientu/logo-6.jpg') }}" height="100" alt="" />
                <img src="{{ asset('frontend/images/loga-klientu/logo-7.jpg') }}" height="100" alt="" />
            </div>

            <div class="dg-2 secondbox">
                <div class="secondbox__left">
                    <div class="bg-green br-bottom mb-30">
                        <p>Proč AR store?</p>
                        <p>Naše revoluční webová aplikace vám umožní prezentovat vaše
                            produkty jako nikdy předtím. Díky rozšířené realitě mohou vaši
                            zákazníci vidět, jak se váše produkty budou vyjímat přímo ve svých
                            domovech. To znamená rychlejší prodeje a vyšší zisky pro vás, a
                            lepší představu o podobě produktu a větší spokojenost s procesem
                            nákupu pro vaše zákazníky. To je AR Store!</p>
                    </div>
                    <img src="{{ asset('frontend/images/image-2.jpg') }}" class="desktop-hidden mb-30" alt="" />
                    <div class="bg-black br-top mb-30 text-white">
                        <p>Jak to funguje?</p>
                        <p>Máme pro vás připravený webový modul, který umožní zobrazit Váš
                            produkt v rozšířené realitě přímo z Vašeho e-shopu nebo webové
                            stránky. Vzhled modulu přizpůsobíme vzhledu vašeho e-shopu. 3D
                            modely produktů pro vás vytvoříme v ceně služby.</p>
                        <br /><br />
                        <a href="/cenik" class="btn-black">Ceník >></a>
                    </div>
                    <div class="desktop-hidden df alg-fe secondbox__bottom">
                        <div class="row">
                            <a href="#ukazky"><span>Ukázky</span> <img src="{{ asset('frontend/images/arrow.png') }}"
                                    alt="" /></a>
                            <img src="{{ asset('frontend/images/image-7.jpg') }}" alt="" />
                        </div>
                        <img src="{{ asset('frontend/images/image-8.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="secondbox__right">
                    <div>
                        <a href="#ukazky"><span>Ukázky</span> <img src="{{ asset('frontend/images/arrow.png') }}"
                                alt="" /></a>
                        <img src="{{ asset('frontend/images/image-2.jpg') }}" alt="" />
                        <img src="{{ asset('frontend/images/image-4.jpg') }}" alt="" />
                    </div>
                    <img src="{{ asset('frontend/images/image-3.jpg') }}" alt="" />
                </div>
            </div>

            <div class="usecase">
                <span id="ukazky"></span>
                <h2 class="text-100 text-light">Ukázky <span class="text-green">Z Praxe</span>>>></h2>
                <div class="dg-2">
                    <div class="usecase-item">
                        <div>
                            <a href="" class="usecase-title">Kancelářské moduly Flourisc</a>
                            <p>S AR Store získáte vy i vaši klienti:</p>
                            <ul>
                                <li>
                                    <p>Možnost prohlížet váš produkt přímo v prostorách klienta
                                        Zobrazení produktu ve skutečné velikosti</p>
                                </li>
                                <li>
                                    <p>Možnost vyzkoušet všechny barevné varianty produktu přímo v
                                        interiéru klienta</p>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <img src="{{ asset('frontend/images/image-5.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="usecase-item">
                        <div>
                            <a href="" class="usecase-title">Nábytek PROFIL</a>
                            <p>Mají vaši klienti pochybnosti o rozměrech vašich nábytkových
                                produktů? <br />
                                Nebo si nejsou jisti, jestli jim bude váš produkt barevně sedět
                                v interiéru?<br />
                                Tak s tím je díky AR Store konec! <br />Nyní můžete produkty
                                prezentovat v životní velikost a všech barevných variantách
                                přímo v obýváku klienta.</p>
                        </div>
                        <div>
                            <img src="{{ asset('frontend/images/image-5.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="usecase-item">
                        <div>
                            <img src="{{ asset('frontend/images/image-5.png') }}" alt="" />
                        </div>
                        <div>
                            <a href="" class="usecase-title">Domy Goopan</a>
                            <p>Vítejte v budoucnosti architektury a designu! Díky AR Store
                                můžete klientům představit svůj dům na klíč přímo na jejich
                                pozemku, a to v životě velikosti. Zapomeňte na klasické
                                vizualizace a drahé vzorové domy - teď můžete prezentovat vaše
                                stavby moderním způsobem.</p>
                        </div>
                    </div>
                    <div class="usecase-item">
                        <div>
                            <img src="{{ asset('frontend/images/image-5.png') }}" alt="" />
                        </div>
                        <div>
                            <a href="" class="usecase-title">Qhouse dřevostavby na klíč</a>
                            <p>Díky AR Store získáte vy i vaši klienti:</p>
                            <ul>
                                <li>
                                    <p>Možnost prohlédnout si stavbu v měřítku 1:1</p>
                                </li>
                                <li>
                                    <p>Možnost vidět stavbu v kontextu pozemku</p>
                                </li>
                                <li>
                                    <p>Možnost podívat se do interiéru</p>
                                </li>
                                <li>
                                    <p>Možnost prohlédnout si výhled, krerý nemovitost skutečně
                                        nabídne.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="df alg-c jst-c flex-c tryus">
                <h3 class="text-80 text-light">Chcete si rozšířenou realitu vyzkoušet v praxi? Podívejte se na
                    ukázku níže.</h3>
                <a href="https://likos-hub.glitch.me" target="_blank" class="btn-green">Ukázka AR >></a>
            </div>
        </div>

        <footer>
            <div class="container df jst-b">
                <a href="/"><img src="{{ asset('frontend/images/logo.svg') }}" alt=""
                        height="50" /></a>
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

            <div class="container">
                <p class="copyright">Copyright ©<span id="copyright"></span> Onixia solutions s.r.o.
                    Všechna práva vyhrazena</p>
            </div>
        </footer>
    @endsection
