@extends('layout.main')
@section('title', 'Tour')
@section('content')
    <section class="showcase tour-showcase min-h-[600px] h-fit pb-10"
        style="background-image: linear-gradient(180deg, #41414196 0%, #41414196 100%),url('assets/img/landing2.jpg');">
        <div class="topbar">
            <div class="wrapper">
                <div class="content">
                    <div class="logo">
                        <a href="/?lng=fr">
                            <img src="assets/img/logow.svg" alt="Logo">
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

                            <nav class="nav music-nav">
                                <a href="/" class="active">Home</a>
                                <a href="/bio">Bio</a>
                                <a href="services">Services</a>
                                <a href="music">Music</a>
                                <a href="tour">Tour</a>
                                <a href="blog">Blog</a>
                                <a href="contact">Contact</a>

                            </nav>

                        </div>
                    </nav>
                </div>

            </div>

            <section class="tour">
                <div class="tour-page-wrapper">
                    <div class="row tour-page">
                        <div class="col-lg-4">
                            @foreach ($tours as $index => $item)
                                <div class="tour-deets" style="display: {{$index === 0 ? 'flex' : 'none'}};">
                                    <div class="tour-location" >
                                        <h2>“{{ $item['title'] }}”</h2>
                                        <p>{{ Carbon\Carbon::createFromTimestamp($item['date'])->format('F Y') }}
                                            {{ $item['time'] }}</p>
                                    </div>

                                    <div class="tour-desc">
                                        <p>
                                            {{ $item['description'] }}
                                        </p>

                                    </div>
                                    <div style="background: url('{{ $item['photo'] }}')no-repeat !important;background-size: cover !important;"
                                        class="tour-img zero">

                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="col-lg-8 ">


                            <ul class="tourlist tour-page">
                                @foreach ($tours as $item)
                                    <li>
                                        <div class="tour-date">
                                            <h1>{{ Carbon\Carbon::createFromTimestamp($item['date'])->format('j') }}</h1>
                                            <div class="day-h">
                                                <p>{{ Carbon\Carbon::createFromTimestamp($item['date'])->format('F Y') }}
                                                </p>
                                                <p>{{ $item['time'] }}</p>
                                            </div>
                                        </div>
                                        <div class="tour-loc">
                                            <p>{{ $item['title'] }}</p>
                                            <p><i class="fa-solid fa-location-dot"
                                                    aria-hidden="true"></i>{{ $item['location'] }}
                                            </p>
                                        </div>
                                        <a href="#" class="cta-video">stock epuisé</a>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>

                </div>
            </section>
            <section class="mobile-tour-section">
                <div class="wrapper">
                    <ul class="tourlist">
                        <div class="tour-date-mobile mobile-tour-page">
                            <li>
                                <div class="day">
                                    <span>29</span>
                                </div>
                                <div class="monthy">
                                    <p>june 2017</p>
                                    <div class="place">
                                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                                        <span class="place"> Paris, France</span>
                                    </div>
                                </div>
                                <div class="hour">
                                    <p>8:00 p.m.</p>
                                </div>
                            </li>
                            <a href="" class="cta-mobile-ticket">acheter ticket</a>
                        </div>
                        <div class="tour-date-mobile mobile-tour-page">


                            <li>
                                <div class="day">
                                    <span>29</span>

                                </div>
                                <div class="monthy">



                                    <p>june 2017</p>
                                    <div class="place">
                                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                                        <span class="place"> Paris, France</span>
                                    </div>
                                </div>
                                <div class="hour">
                                    <p>8:00 p.m.</p>
                                </div>
                            </li>
                            <a href="" class="cta-mobile-ticket">acheter ticket</a>
                        </div>
                        <div class="tour-date-mobile mobile-tour-page">


                            <li>
                                <div class="day">
                                    <span>29</span>

                                </div>
                                <div class="monthy">



                                    <p>june 2017</p>
                                    <div class="place">
                                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                                        <span class="place"> Paris, France</span>
                                    </div>
                                </div>
                                <div class="hour">
                                    <p>8:00 p.m.</p>
                                </div>
                            </li>
                            <a href="" class="cta-mobile-ticket">acheter ticket</a>
                        </div>
                        <div class="tour-date-mobile mobile-tour-page">


                            <li>
                                <div class="day">
                                    <span>29</span>

                                </div>
                                <div class="monthy">



                                    <p>june 2017</p>
                                    <div class="place">
                                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                                        <span class="place"> Paris, France</span>
                                    </div>
                                </div>
                                <div class="hour">
                                    <p>8:00 p.m.</p>
                                </div>
                            </li>
                            <a href="" class="cta-mobile-ticket">acheter ticket</a>
                        </div>


                    </ul>

                </div>
                <div class="pages">
                    <ul class="page-numbers">
                        <li>
                            <a href="" class="page-active">1</a>
                        </li>
                        <li>
                            <a href="">2</a>
                        </li>
                        <li>
                            <a href="">3</a>
                        </li>
                        <li>
                            <a href="">...</a>
                        </li>
                        <li>
                            <a href="">8</a>
                        </li>
                        <li>
                            <a href="">9</a>
                        </li>
                        <li>
                            <a href="">10</a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </section>
    <script>
        let divs = document.querySelectorAll('.tour-deets')
        let select = document.querySelectorAll('.tour-page li')
        for (let i = 0; i < select.length; i++) {
            select[i].addEventListener('click', function() {
                for (let i = 0; i < divs.length; i++) {
                    divs[i].style.display = "none";
                }
                for (let i = 0; i < divs.select; i++) {
                    select[i].classList.remove("active");
                }
                divs[i].style.display = "flex";
                select[i].classList.add("active")
            })
        }

        let navEl = document.querySelectorAll(".nav a")
        navEl[4].classList.add('active-white')
    </script>
@endsection
