@extends('layout.main')

@section('title', 'Serivces')
@section('content')
    <section class="al-intro">
        <div class="wrapper">
            <div class="pres-header">
                <div class="title pres-title">
                    <h1>{{ __('general.services') }}</h1>
                </div>
                <div class="pres-subtitle">
                    <h3>{{ __('services.t1') }}</h3>
                </div>
                <div class="al-text">
                    <p>
                        {{ __('services.p1') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="al-tracks">
        <div class="pres-image"></div>
        <div class="wrapper desktop-wrapper">
            <div class="row services-hotel">
                <div class="col-lg-6 desktop-hotel">
                    <h1> {{ __('services.t2') }}</h1>
                    <p> {{ __('services.p2') }}</p>
                    <h1> {{ __('services.t3') }}</h1>
                </div>

                <div class="col-lg-5">
                    <div class="al-cover">
                        <img src="photos/gallery/pic5.jpg" alt="Album Cover" width="100%">
                    </div>
                </div>
            </div>
            <div class="row desk-service">
                <div class="col-lg-12">

                    <p> {{ __('services.p3') }}</p>
                </div>
                <div class="col-lg-12">
                    <h1> {{ __('services.t4') }}</h1>
                    <p> {{ __('services.p4') }}</p>
                </div>
                <div class="col-lg-12">
                    <h1> {{ __('services.t5') }}</h1>
                    <p> {{ __('services.p5') }}</p>
                </div>
            </div>
            <div class="service-cta">
                <a class="cta-header article-cta" href="/contact">Contact</a>
            </div>

        </div>
        <div class="wrapper-mobile">
            <div class="row mobile-serv-row">
                <div class="col-xs-8">
                    <h1> {{ __('services.t2') }}</h1>
                    <p> {{ __('services.p2') }}</p>
                </div>
                <div class="col-xs-8 al-cover-mobile">
                    <img src="photos/gallery/pic5.jpg" alt="Album Cover" width="100%">

                </div>
            </div>
    
            <div class="row serv-row-list">
                <div class="col-xs-12">
                    <h1>{{ __('services.t3') }}</h1>
                    <p>
                        {{ __('services.p3') }}
                    </p>
                </div>
                <div class="col-xs-12">
                    <h1> {{ __('services.t4') }}</h1>
                    <p> {{ __('services.p4') }}
                    </p>
                </div>
                <div class="col-xs-12">
                    <h1> {{ __('services.t5') }}</h1>
                    <p> {{ __('services.p5') }}</p>
                </div>
            </div>
        </div>
        <div class="service-cta-mobile">
            <a class="cta-header article-cta" href="/contact">Contact</a>
        </div>
    </section>

@endsection
