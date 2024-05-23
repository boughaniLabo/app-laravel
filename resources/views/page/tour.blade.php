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
                        <button type="button"  class="z-[999999999999]" id="menu-btn">
                            <i class="fa-solid fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>
                    <nav class="topnav">
                        <div class="navbar" id="menu">
                            <nav class="nav music-nav">
                                <a href="/" class="active">{{ __('general.home') }}</a>
                                <a href="/bio">{{ __('general.bio') }}</a>
                                <a href="services">{{ __('general.services') }}</a>
                                <a href="music">{{ __('general.music') }}</a>
                                <a href="tour">{{ __('general.tour') }}</a>
                                <a href="blog" class="hidden">{{ __('general.blog') }}</a>
                                <a href="contact">{{ __('general.contact') }}</a>
                            </nav>
                        </div>
                    </nav>
                </div>

            </div>

            <section class="tour w-full">
                <div class="tour-page-wrapper w-full m-0 p-5 max-w-[unset]">
                    <div class="row tour-page flex-wrap w-full justify-around">
                        <div class="w-[35%]">
                            @foreach ($tours as $item)
                                <div class="tour-deets" style="display: {{ $loop->index === 0 ? 'flex' : 'none' }};">
                                    <div class="tour-location">
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
                        <div class="w-[60%] min-w-[unset]">
                            <ul class="tourlist tour-page min-w-[unset] w-fit">
                                @foreach ($tours as $item)
                                    <li
                                        class="flex flex-row min-w-[unset] items-center hover:cursor-pointer hover:bg-black/30 transition-all justify-around">
                                        <div class="tour-date flex-1 w-auto min-w-[unset]">
                                            <h1>{{ Carbon\Carbon::createFromTimestamp($item['date'])->format('j') }}</h1>
                                            <div class="day-h">
                                                <p>{{ Carbon\Carbon::createFromTimestamp($item['date'])->format('F Y') }}
                                                </p>
                                                <p>{{ $item['time'] }}</p>
                                            </div>
                                        </div>
                                        <div class="tour-loc flex-1 w-auto min-w-[unset]">
                                            <p>{{ $item['title'] }}</p>
                                            <p><i class="fa-solid fa-location-dot"
                                                    aria-hidden="true"></i>{{ $item['location'] }}
                                            </p>
                                        </div>
                                        <a href="@isset($item['link']) {{ $item['link'] }} @else # @endisset"
                                            class="cta-video py-1 text-center uppercase">{!!__('general.buy')!!}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="pages max-w-72 mx-auto">
                    <ul class="page-numbers">
                        <!-- Previous page link -->
                        @if ($tours->currentPage() > 1)
                            <li>
                                <a href="{{ $tours->previousPageUrl() }}" class="page-active">&laquo;</a>
                            </li>
                        @endif

                        <!-- Pagination links -->
                        @for ($i = max(1, $tours->currentPage() - 2); $i <= min($tours->currentPage() + 2, $tours->lastPage()); $i++)
                            <li>
                                <a href="{{ $tours->url($i) }}"
                                    class="{{ $tours->currentPage() == $i ? 'page-active' : '' }}">{{ $i }}</a>
                            </li>
                        @endfor

                        <!-- Next page link -->
                        @if ($tours->hasMorePages())
                            <li>
                                <a href="{{ $tours->nextPageUrl() }}" class="page-active">&raquo;</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </section>

            <section class="mobile-tour-section">
                <div class="wrapper">
                    <ul class="tourlist">
                        @foreach ($tours as $item)
                            <div class="tour-date-mobile mobile-tour-page">
                                <li>
                                    <div class="day">
                                        <span>{{ Carbon\Carbon::createFromTimestamp($item['date'])->format('j') }}</span>
                                    </div>
                                    <div class="monthy">
                                        <p>{{ Carbon\Carbon::createFromTimestamp($item['date'])->format('F Y') }}</p>
                                        <div class="place">
                                            <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                                            <span class="place">{{ $item['location'] }}</span>
                                        </div>
                                    </div>
                                    <div class="hour">
                                        <p>{{ $item['time'] }}</p>
                                    </div>
                                </li>
                                <a href="@isset($item['link']) {{ $item['link'] }} @else # @endisset" class="cta-mobile-ticket">{!!__('general.buy')!!}</a>
                            </div>
                        @endforeach



                    </ul>

                </div>
                <div class="pages">
                    <ul class="page-numbers">
                        <!-- Previous page link -->
                        @if ($tours->currentPage() > 1)
                            <li>
                                <a href="{{ $tours->previousPageUrl() }}" class="page-active">&laquo;</a>
                            </li>
                        @endif

                        <!-- Pagination links -->
                        @for ($i = max(1, $tours->currentPage() - 2); $i <= min($tours->currentPage() + 2, $tours->lastPage()); $i++)
                            <li>
                                <a href="{{ $tours->url($i) }}"
                                    class="{{ $tours->currentPage() == $i ? 'page-active' : '' }}">{{ $i }}</a>
                            </li>
                        @endfor

                        <!-- Next page link -->
                        @if ($tours->hasMorePages())
                            <li>
                                <a href="{{ $tours->nextPageUrl() }}" class="page-active">&raquo;</a>
                            </li>
                        @endif
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
                for (let i = 0; i < select.length; i++) {
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
