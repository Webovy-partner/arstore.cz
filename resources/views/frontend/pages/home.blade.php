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
        <div class="flex max-xl:flex-wrap max-xl:text-center">
            <h1 class="text-100 text-light ml-120 w-[65vw] my-auto max-xl:mx-auto max-xl:w-full mr-4">
                Objevte <span class="text-green">Budoucnost</span> Prodeje s AR Store
                >>></h1>
            <div class="image-main-container mx-auto xl:w-[30vw] max-md:w-full">
                <div class="phone">
                    <video width="800"
                        class="rounded-3xl md:max-h-[80vh] w-auto xl:max-w-[30vw] xl:w-[100%] mx-auto overflow-hidden"
                        autoplay loop muted playsinline poster="{{asset('frontend/images/video-1.jpg')}}">
                        <source src="{{ asset('frontend/videos/AR_promo_final_HQ_optimized.mp4') }}" type="video/mp4">
                        <source src="{{ asset('frontend/videos/AR_promo_final_HQ_optimized.webm') }}" type="video/webm">
                        Váš prohlížeč nepodporuje video.
                    </video>
                </div>
            </div>
        </div>

        <br /><br /><br />
        <p class="partners text-80 text-light">Naši partneři</p>
        <div class="loga">
            <img src="{{ asset('frontend/images/loga-klientu/logo-3.jpg') }}" height="100" alt="" />
            <img src="{{ asset('frontend/images/loga-klientu/logo-4.jpg') }}" height="100" alt="" />
            <img src="{{ asset('frontend/images/loga-klientu/logo-5.jpg') }}" height="100" alt="" />
            <img src="{{ asset('frontend/images/loga-klientu/logo-6.jpg') }}" height="100" alt="" />
            <img src="{{ asset('frontend/images/loga-klientu/logo-7.jpg') }}" height="100" alt="" />
        </div>

        <div class="dg-2 secondbox relative">
            <div class="secondbox__left">
                <div class="bg-green br-bottom mb-30">
                    <p>Proč AR store?</p>
                    <p>Naše revoluční webová aplikace Vám umožní prezentovat produkty způsobem, jaký tu ještě nebyl.
                        Díky rozšířené realitě mohou Vaši zákazníci vidět, jak budou vaše produkty vypadat přímo v
                        jejich domovech. To znamená rychlejší prodeje, vyšší zisky pro Vás a lepší představu o produktu,
                        což vede k větší spokojenosti vašich zákazníků. To je AR Store!</p>
                </div>
                <img src="{{ asset('frontend/images/image-02.jpg') }}"
                    class=" desktop-hidden mb-30 rounded-tl-[32px] rounded-bl-[32px] border-right-top-radius-0 rounded-br-[32px]"
                    alt="" />
                <div class="bg-black br-top mb-30 text-white">
                    <p>Jak to funguje?</p>
                    <p>Máme pro Vás připravený webový modul, který umožní zobrazit Vaše produkty v rozšířené realitě
                        přímo z vašeho e-shopu nebo webové stránky. Vzhled modulu přizpůsobíme designu Vašeho e-shopu.
                        3D modely produktů vytvoříme v ceně služby.</p>
                    <br /><br />
                    <a href="/cenik" class="btn-black">Ceník >></a>
                </div>
                <a href="#ukazky" class="ukazky-btn mobile"><span>Ukázky</span> <img
                        src="{{ asset('frontend/images/arrow.png') }}" alt="" /></a>

                <img src="{{asset('frontend/images/image-9.webp')}}" class="w-full xl:w-[50%] mx-auto" alt="">
                <img src="{{ asset('frontend/images/image-04.jpg') }}"
                    class="specificwidth2 mt-6 rounded-br-[32px] rounded-bl-[32px] rounded-tl-none rounded-tr-[32px]"
                    alt="" />
                <div class="desktop-hidden df alg-fe secondbox__bottom">
                    <div class="row wttf">
                        <a href="#ukazky" class="desktopu"><span>Ukázky</span> <img
                                src="{{ asset('frontend/images/arrow.png') }}" alt="" /></a>
                        <img src="{{ asset('frontend/images/image-01.jpg') }}"
                            class="desktop-hidden mb-30 rounded-tl-[32px] rounded-bl-[32px] border-right-top-radius-0 rounded-br-[32px]"
                            alt="" />
                    </div>
                    <img src="{{ asset('frontend/images/image-01.jpg') }}"
                        class="wtf-show mb-30 rounded-tl-[32px] rounded-bl-[32px] border-right-top-radius-0 rounded-br-[32px]"
                        alt="" />
                    <img src="{{ asset('frontend/images/image-03.jpg') }}"
                        class="desktop-hidden mb-30 rounded-tl-[32px] rounded-bl-[32px] border-right-top-radius-0 rounded-br-[32px]"
                        alt="" />
                    <img src="{{ asset('frontend/images/image-04.jpg') }}"
                        class="desktop-hidden mb-30 rounded-tl-[32px] rounded-bl-[32px] border-right-top-radius-0 rounded-br-[32px]"
                        alt="" />
                </div>
            </div>
            <div class="secondbox__right">
                <div>
                    <a href="#ukazky" class="ukazky-btn diss"><span>Ukázky</span> <img
                            src="{{ asset('frontend/images/arrow.png') }}" alt="" /></a>
                    <img src="{{ asset('frontend/images/image-01.jpg') }}"
                        class="rounded-tl-[32px] rounded-bl-[32px] border-right-bottom-radius-0 rounded-tr-[32px]"
                        alt="" />
                    <img src="{{ asset('frontend/images/image-03.jpg') }}"
                        class="rounded-tl-[32px] rounded-[32px] rounded-tr-none" alt="" />
                    <img src="{{ asset('frontend/images/image-05.webp') }}"
                        class="mt-6 rounded-tl-[32px] rounded-[32px] rounded-tr-none" alt="" />
                </div>
                <div>
                    <img src="{{ asset('frontend/images/image-02.jpg') }}"
                        class="cusotmimg rounded-t-[32px] rounded-br-[32px] rounded-bl-none" alt="" />
                    <img src="{{ asset('frontend/images/image-04.jpg') }}"
                        class="specificwidth rounded-br-[32px] rounded-bl-[32px] rounded-tl-none rounded-tr-[32px] secondifx"
                        alt="" />
                    <img src="{{ asset('frontend/images/image-06.webp') }}"
                        class=" mt-6 rounded-br-[32px] rounded-bl-[32px] rounded-tl-none rounded-tr-[32px]" alt="" />
                </div>
            </div>
        </div>

        <div class="usecase">
            <span id="ukazky"></span>
            <h2 class="text-100 text-light">Ukázky <span class="text-green">z Praxe</span>>>></h2>
            <div class="dg-2 max-2xl:flex max-2xl:flex-col">
                <div class="usecase-item max-2xl:flex-row-reverse p-10">
                    <div style="min-width: unset; margin-top: 0; width: 100%;     min-width: 50%;" class="mx-auto">
                        <div class="phone">
                            <video preload controls playsinline controlsList="nofullscreen"
                                class="rounded-3xl max-h-[80vh] w-auto min-w-[50%] min-h-[100%] overflow-hidden md:max-h-[705px]"
                                width="800" poster="{{asset('frontend/images/video-3.jpg')}}" onmouseover="this.play()"
                                onmouseout="this.pause();">
                                <source src="{{ asset('frontend/videos/AR_screen_Likos_HQ_optimized.mp4') }}"
                                    type="video/mp4">
                                <source src="{{ asset('frontend/videos/AR_screen_Likos_HQ_optimized.webm') }}"
                                    type="video/webm">
                                Váš prohlížeč nepodporuje video.
                            </video>
                        </div>
                    </div>
                    <span style="margin-left: 1em; margin-top: unset;">
                        <a href="" class="usecase-title mb-4">Živé stěny LIKO-S</a>
                        <p class="mt-8 max-md:mt-4 ">S AR Store získáte vy i vaši klienti:</p><br>
                        <ul>
                            <li>
                                <p>Možnost prohlížet váš produkt přímo v prostorách klienta</p>
                            </li><br>
                            <li>
                                <p>Zobrazení produktu ve skutečné velikosti</p>
                            </li><br>
                            <li>
                                <p>Možnost vyzkoušet všechny barevné varianty produktu přímo v
                                    interiéru klienta</p>
                            </li>
                        </ul>
                    </span>
                </div>
                <div class="usecase-item max-2xl:flex-row-reverse p-10">
                    <div style="min-width: unset; margin-top: 0; width: 100%;     min-width: 50%;" class="mx-auto">
                        <div class="phone">
                            <video preload controls playsinline controlsList="nofullscreen" width="800"
                                class="rounded-3xl overflow-hidden max-h-[80vh] w-auto min-w-[50%] md:max-h-[705px]"
                                onmouseover="this.play()" onmouseout="this.pause(); "
                                poster="{{asset('frontend/images/video-1.jpg')}}">
                                <source src="{{ asset('frontend/videos/AR_screen_plug_HQ_optimized.mp4') }}"
                                    type="video/mp4">
                                <source src="{{ asset('frontend/videos/AR_screen_plug_HQ_optimized.webm') }}"
                                    type="video/webm">
                                Váš prohlížeč nepodporuje video.
                            </video>
                        </div>
                    </div>
                    <div style="margin-left: 1em; margin-top: unset;">
                        <a href="" class="usecase-title">Modulární nábytek PLUG.DESIGN</a>
                        <p class="mt-8 max-md:mt-4 ">Mají Vaši klienti pochybnosti o rozměrech Vašich nábytkových
                            produktů?</p><br>
                        <p>Nebo si nejsou jisti, jestli jim bude Váš produkt barevně ladit s interiérem?</p> <br>
                        <p>Tak s tím je díky AR Store konec!</p> <br>
                        <p>Nyní můžete produkty prezentovat v životní velikosti a ve všech barevných variantách přímo v
                            obýváku klienta.</p>
                    </div>
                </div>
                <div class="usecase-item reverse p-10" style="grid-column: span 2; display: flex;">
                    <div class="max-md:order-1">
                        <div class="phone">
                            <video preload controls playsinline controlsList="nofullscreen" width="800"
                                class="overflow-hidden rounded-3xl max-h-[80vh] md:max-h-[705px] w-auto min-w-[50%]"
                                onmouseover="this.play()" onmouseout="this.pause(); "
                                poster="{{asset('frontend/images/video-4.jpg')}}">
                                <source src="{{ asset('frontend/videos/AR_screen_Pramos_optimized.mp4') }}"
                                    type="video/mp4">
                                <source src="{{ asset('frontend/videos/AR_screen_Pramos_optimized.webm') }}"
                                    type="video/webm">
                                Váš prohlížeč nepodporuje video.
                            </video>
                        </div>
                    </div>
                    <div class="max-md:order-1" style="margin-left: 1em; margin-top: unset;">
                        <a href="" class="usecase-title">Okna PRAMOS</a>
                        <p class="mt-8 max-md:mt-4">Díky AR Store získáte vy i vaši klienti:</p>
                        <br>
                        <ul>
                            <li>
                                <p>Možnost prohlédnout si detailní vizualizaci prvku v reálném měřítku 1:1</p>
                            </li><br>
                            <li>
                                <p>Možnost vidět, jak tento prvek zapadá do konkrétní části stavby a jak ovlivňuje
                                    celkový design</p>
                            </li><br>
                            <li>
                                <p>Možnost zkoumat různé varianty umístění a jejich vliv na interiér</p>
                            </li><br>
                            <li>
                                <p>Možnost si prohlédnout, jak prvek vypadá v různých prostředích a jak ovlivňuje
                                    estetiku prostoru.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="usecase-item" style="display: none;">
                    <div>
                        <img src="{{ asset('frontend/images/image-5.png') }}" alt="" />
                    </div>
                    <div>
                        <a href="" class="usecase-title">Qhouse dřevostavby na klíč</a>
                        <p>Díky AR Store získáte vy i vaši klienti:</p>
                        <ul>
                            <li>
                                <p>Možnost prohlédnout si stavbu v měřítku 1:1</p>
                            </li><br>
                            <li>
                                <p>Možnost vidět stavbu v kontextu pozemku</p>
                            </li><br>
                            <li>
                                <p>Možnost podívat se do interiéru</p>
                            </li><br>
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
            <h3 class="text-80 text-light">Chcete si vyzkoušet rozšířenou realitu v praxi? Podívejte se na ukázku níže.
            </h3>
            <a href="https://likos-hub.glitch.me" target="_blank" class="btn-green">Ukázka AR >></a>
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

        <div class="container">
            <p class="copyright">Copyright ©<span id="copyright">{{ now()->year }}</span> Onixia solutions s.r.o.
                Všechna práva vyhrazena</p>
        </div>
    </footer>
    @endsection