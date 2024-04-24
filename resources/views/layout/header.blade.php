<div class="bg"></div>
@if ($currentRoute == 'bio' || $currentRoute == 'home')
    <section class="showcase" style="background-image: url('{{ $image }}');">
        @if ($currentRoute == 'home')
            <div class="topbar">
                <div class="wrapper">
                    <div class="content">
                        <div class="logo">
                            <a href="/?lng=en">
                                <img src="assets/img/logo.svg" alt="Logo">
                            </a>
                        </div>
                        <div class="mobile-logo">
                            <a href="/?lng=en">

                                <img src="assets/img/mobile.svg" alt="">
                            </a>
                            <button type="button" id="menu-btn">
                                <i class="fa-solid fa-bars" aria-hidden="true"></i>
                            </button>
                        </div>
                        <nav class="topnav">
                            <div class="navbar" id="menu">

                                <nav class="nav nav-home">
                                    <!-- <div id="marker"></div> -->
                                    <a href="/">Home</a>
                                    <a href="/bio">Bio</a>
                                    <a href="/services">Services</a>
                                    <a href="/music">Music</a>
                                    <a href="/tour">Tour</a>
                                    <a href="/blog">Blog</a>
                                    <a href="/contact">Contact</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row head-row">


                    <div class="header-title-wrapper">

                        <div class="hero-title">

                            <p class="artist-name">rafael dato</p>
                            <h2 class="artist-instru">pianist</h2>
                            <h2 class="artist-comp">composer &amp; arranger</h2>
                            <a class="cta-header" href="#album">new album</a>
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
                            <button type="button" id="menu-btn">
                                <i class="fa-solid fa-bars" aria-hidden="true"></i>
                            </button>
                        </div>
                        <nav class="topnav">
                            <div class="navbar" id="menu">
                                <nav class="nav arti-nav">
                                    <a href="/">Home</a>
                                    <a href="/bio">Bio</a>
                                    <a href="/services">Services</a>
                                    <a href="/music">Music</a>
                                    <a href="/tour">Tour</a>
                                    <a href="/blog">Blog</a>
                                    <a href="/contact">Contact</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="col-md-5 blank"></div>
                <div class="col-md-5 hero-title arti-header">
                    <p class="artist-name arti-name">rafaël dato</p>
                    <p class="arti-intro">À la recherche d’une utopique synthèse de toutes les musiques, Rafaël Dato
                        explore, depuis
                        sa petite enfance, les sons, les rythmes et les mélodies qui composent le paysage sonore de
                        l’humanité. Son
                        répertoire, à la fois éclectique et cohérent, s’inspire de Bach et de Gogo Penguin, de Mozart et
                        de Brad
                        Mehldau, mais aussi de John Williams et de Radiohead, de Gabriel Fauré, et même de Nirvana…
                        Autant dire
                        qu’il n’a pas fini de chercher, pour le plus grand bonheur des mélomanes.</p>
                    <div>
                        <a class="cta-header" href="#see-more">En savoir plus</a>
                        <a class="cta-header" href="#see-article">Articles</a>
                    </div>
                </div>
                <div class="row mobile-bio-title">


                    <div class="col-md-6">

                    </div>
                    <div class="mobile-link">
                        <a href="#" class="cta-arti mobile-cta">En savoir plus</a>
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
                    <button type="button" id="menu-btn">
                        <i class="fa-solid fa-bars" aria-hidden="true"></i>
                    </button>
                </div>


                <nav class="topnav ">
                    <div class="navbar" id="menu">
                        <nav class="nav arti-nav">
                            <a href="/">Home</a>
                            <a href="/bio">Bio</a>
                            <a href="/services" class="active">Services</a>
                            <a href="/music">Music</a>
                            <a href="/tour">Tour</a>
                            <a href="/blog">Blog</a>
                            <a href="/contact">Contact</a>
                            <!--<a href="?lng=fr&p=Contact">Contact</a>  -->
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
                    <button type="button" id="menu-btn">
                        <i class="fa-solid fa-bars" aria-hidden="true"></i>
                    </button>
                </div>
                <nav class="topnav ">
                    <div class="navbar" id="menu">
                        <nav class="nav music-nav">
                            <a href="/">Home</a>
                            <a href="/bio">Bio</a>
                            <a href="/services">Services</a>
                            <a href="/music">Music</a>
                            <a href="/tour">Tour</a>
                            <a href="/blog">Blog</a>
                            <a href="/contact">Contact</a>
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
                    <button type="button" id="menu-btn">
                        <i class="fa-solid fa-bars" aria-hidden="true"></i>
                    </button>
                </div>
                <nav class="topnav ">
                    <div class="navbar" id="menu">

                        <nav class="nav arti-nav">
                            <a href="/">Home</a>
                            <a href="/bio">Bio</a>
                            <a href="/services">Services</a>
                            <a href="/music">Music</a>
                            <a href="/tour">Tour</a>
                            <a href="/blog" class="active">Blog</a>
                            <a href="/contact">Contact</a>
                        </nav>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endif
