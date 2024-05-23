<div class="bg"></div>
@if ($currentRoute == 'bio' || $currentRoute == 'home')
    <section class="showcase h-fit" style="background-image: url('{{ $image }}');background-size: cover;">
        @if ($currentRoute == 'home')
            <div class="topbar w-full">
                <div class="wrapper w-full">
                    <div class="content w-full">
                        <div class="logo" style="transform: translate(-36px, 0px);">
                            <a href="/?lng=en">
                                <img src="assets/img/logo.svg" alt="Logo">
                            </a>
                        </div>
                        <div class="mobile-logo">
                            <a href="/?lng=en">

                                <img src="assets/img/mobile.svg" alt="">
                            </a>
                            <button type="button" class="z-[999999999999]" id="menu-btn">
                                <i class="fa-solid fa-bars" aria-hidden="true"></i>
                            </button>
                        </div>
                        <nav class="topnav">
                            <div class="navbar" id="menu">
                                <nav class="nav nav-home">
                                    <a href="/">{{ __('general.home') }}</a>
                                    <a href="/bio">{{ __('general.bio') }}</a>
                                    <a href="/services">{{ __('general.services') }}</a>
                                    <a href="/music">{{ __('general.music') }}</a>
                                    <a href="/tour">{{ __('general.tour') }}</a>
                                    <a class="hidden" hidden href="/blog">{{ __('general.blog') }}</a>
                                    <a href="/contact">{{ __('general.contact') }}</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                </div>
                <div style="transform: translate(-36px, 20px);"
                    class="row head-row flex flex-row items-center justify-center w-full">
                    <div class="flex-1"></div>
                    <div class="header-title-wrapper w-fit sm:pb-40 pb-5 pl-6">
                        <div class="hero-title" style="font-size: 44px !important;">
                            <p class="artist-name">rafaËl dato</p>
                            <h2 class="artist-instru">pianiste</h2>
                            <h2 class="artist-comp">compositeur &amp; arrangeur</h2>
                            <a class="cta-header" href="#album">Nouvel album</a>
                        </div>
                        <div class="social-header">
                            <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i
                                    class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                            <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank">
                                <i class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                            <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i
                                    class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                            <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato"
                                target="_blank">
                                <i class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
                            <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i
                                    class="fa-brands fa-youtube" aria-hidden="true"></i> </a>
                        </div>
                    </div>
                    <div class="flex-1"></div>
                    <div class="flex-1"></div>
                    <div class="flex-1"></div>
                    <div class="flex-1"></div>
                    <div class="flex-1"></div>
                </div>
            </div>
        @endif

        @if ($currentRoute == 'bio')
            <div class="topbar">
                <div class="wrapper ">
                    <div class="content">
                        <div class="logo">
                            <a href="/?lng=fr">
                                <img src="assets/img/logo.svg" alt="Logo">
                            </a>
                        </div>
                        <div class="mobile-logo">
                            <a href="/?lng=fr">
                                <img src="assets/img/mobile.svg" alt="">
                            </a>
                            <button type="button" class="z-[999999999999]" id="menu-btn">
                                <i class="fa-solid fa-bars" aria-hidden="true"></i>
                            </button>
                        </div>
                        <nav class="topnav">
                            <div class="navbar" id="menu">
                                <nav class="nav arti-nav">
                                    <a href="/">{{ __('general.home') }}</a>
                                    <a href="/bio">{{ __('general.bio') }}</a>
                                    <a href="/services">{{ __('general.services') }}</a>
                                    <a href="/music">{{ __('general.music') }}</a>
                                    <a href="/tour">{{ __('general.tour') }}</a>
                                    <a href="/blog" class="hidden" hidden >{{ __('general.blog') }}</a>
                                    <a href="/contact">{{ __('general.contact') }}</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="col-md-5 blank"></div>
                <div class="col-md-5 hero-title arti-header">
                    <p class="artist-name arti-name text-5xl">rafaël dato</p>
                    <p class="arti-intro">{{ __('bio.hero') }}</p>
                    <div>
                        <a class="cta-header normal-case" download="bio-fr.pdf" href="/assets/docs/bio-fr.pdf">{{__('general.know_more_about_me')}}</a>
                        <a class="cta-header normal-case" href="#see-article">articles</a>
                    </div>
                </div>
                <div class="row mobile-bio-title">
                    <div class="col-md-6">
                    </div>
                    <div class="mobile-link">
                        <a href="#" class="cta-arti mobile-cta">{{ __('general.know_more_about_me') }}</a>
                        <a href="#" class="cta-arti mobile-cta">Articles</a>
                    </div>
                </div>
            </div>
        @endif

        </div>
    </section>
@elseif ($currentRoute == 'services')
    <div class="topbar">
        <div class="wrapper">
            <div class="content">
                <div class="logo">
                    <a href="/?lng=fr">
                        <img src="assets/img/logo.svg" alt="Logo">
                    </a>
                </div>
                <div class="mobile-logo press-header">
                    <a href="/?lng=fr">
                        <img src="assets/img/mobile.svg" alt="">
                    </a>
                    <button type="button" class="z-[999999999999]" id="menu-btn">
                        <i class="fa-solid fa-bars" aria-hidden="true"></i>
                    </button>
                </div>


                <nav class="topnav ">
                    <div class="navbar" id="menu">
                        <nav class="nav arti-nav">
                            <a href="/">{{ __('general.home') }}</a>
                            <a href="/bio">{{ __('general.bio') }}</a>
                            <a href="/services" class="active">{{ __('general.services') }}</a>
                            <a href="/music">{{ __('general.music') }}</a>
                            <a href="/tour">{{ __('general.tour') }}</a>
                            <a class="hidden" hidden href="/blog">{{ __('general.blog') }}</a>
                            <a href="/contact">{{ __('general.contact') }}</a>
                            <!--<a href="?lng=fr&p={{ __('general.contact') }}">{{ __('general.contact') }}</a>  -->
                        </nav>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@elseif ($currentRoute == 'music')
    <div class="topbar music-header">
        <div class="wrapper">
            <div class="content">
                <div class="logo">
                    <a href="/?lng=en">
                        <img src="assets/img/logow.svg" alt="Logo">
                    </a>
                </div>
                <div class="mobile-logo">
                    <a href="/?lng=en">
                        <img src="assets/img/mobile.svg" alt="">
                    </a>
                    <button type="button" class="z-[999999999999]" id="menu-btn">
                        <i class="fa-solid fa-bars" aria-hidden="true"></i>
                    </button>
                </div>
                <nav class="topnav ">
                    <div class="navbar" id="menu">
                        <nav class="nav music-nav">
                            <a href="/">{{ __('general.home') }}</a>
                            <a href="/bio">{{ __('general.bio') }}</a>
                            <a href="/services">{{ __('general.services') }}</a>
                            <a href="/music">{{ __('general.music') }}</a>
                            <a href="/tour">{{ __('general.tour') }}</a>
                            <a class="hidden" hidden href="/blog">{{ __('general.blog') }}</a>
                            <a href="/contact">{{ __('general.contact') }}</a>
                        </nav>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@elseif ($currentRoute == 'contact')

@elseif($currentRoute == 'tour')

@elseif($currentRoute == 'blog')
    <div class="topbar">
        <div class="wrapper ">
            <div class="content">
                <div class="logo">
                    <a href="/?lng=fr">
                        <img src="assets/img/logo.svg" alt="Logo">
                    </a>
                </div>
                <div class="mobile-logo press-header">
                    <a href="/?lng=fr">
                        <img src="assets/img/mobile.svg" alt="">
                    </a>
                    <button type="button" class="z-[999999999999]" id="menu-btn">
                        <i class="fa-solid fa-bars" aria-hidden="true"></i>
                    </button>
                </div>
                <nav class="topnav ">
                    <div class="navbar" id="menu">

                        <nav class="nav arti-nav">
                            <a href="/">{{ __('general.home') }}</a>
                            <a href="/bio">{{ __('general.bio') }}</a>
                            <a href="/services">{{ __('general.services') }}</a>
                            <a href="/music">{{ __('general.music') }}</a>
                            <a href="/tour">{{ __('general.tour') }}</a>
                            <a href="/blog" hidden class="active hidden">{{ __('general.blog') }}</a>
                            <a href="/contact">{{ __('general.contact') }}</a>
                        </nav>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endif
