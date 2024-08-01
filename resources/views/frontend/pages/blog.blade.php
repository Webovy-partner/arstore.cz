@extends('layouts.frontend.guest')

@section('title')
    <title>Blog | ARStore</title>
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

            <div class="blog-posts">
                @forelse ($posts as $post)
                    <a href="{{ route('frontend.blog-detail', $post->id) }}" class="blog__item">
                        <div class="blog__item-image">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="Thumbnail for {{ $post->title }}"
                                    style="max-width: 400px; margin-top: 10px;">
                            @else
                                <img src="{{ asset('frontend/images/image-1.jpg') }}" width="400"
                                    alt="{{ $post->title }}">
                            @endif
                        </div>
                        <div class="blog-content">
                            <div class="blog__item-name">{{ $post->title }}</div>
                            <div class="df jst-b">
                                <div class="blog__item-date">{{ $post->created_at->format('d.m.Y') }}</div>
                                <div class="blog__item-author">{{ $post->author->name }}</div>
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="cenik-info">Příspěvky nenalezeny.</p>
                @endforelse

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
