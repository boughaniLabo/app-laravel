@extends('layout.main')
@section('title', 'Contact us')
@section('content')
    <div class="topbar music-header">
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
                    <button type="button" class="z-[999999999999]" id="menu-btn">
                        <i class="fa-solid fa-bars" aria-hidden="true"></i>
                    </button>
                </div>

                <nav class="topnav">
                    <div class="navbar " id="menu">

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



            <section class="contact-page">
                <div class="contact-details">
                    <!-- Contactez-nous -->
                    <h1>{{__('contact.contact')}}</h1>
                    <div class="contact-form">
                        <div class="contact-details-container">
                            <div class="contact-details-text">
                                <h2 class="contact-details-title">
                                    {{__('contact.info')}} </h2>
                                <p class="contact-p">
                                    {{__('contact.info_desc')}}
                                </p>
                            </div>
                            <div class="contact-details-info">
                                <div class="contact-info">
                                    <img src="/assets/img/phone.svg" alt="">
                                    <a href="">(406) 555-0120</a>
                                </div>
                                <div class="contact-info">
                                    <img src="/assets/img/mail.svg" alt="">
                                    <a href="">contact@rafaeldato.com </a>
                                </div>

                            </div>
                            <div class="footer-social">
                                <a href="#"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <form action="post">
                            <div class="form-parts">
                                <div class="form-elemnt">
                                    <label for="name">{{__('contact.name')}}</label>
                                    <input type="text" name="name" id="name" placeholder="{{__('contact.name')}}">
                                </div>
                                <div class="form-elemnt">
                                    <label for="first-name">{{__('contact.firstName')}}</label>
                                    <input type="text" name="first-name" id="first-name" placeholder="{{__('contact.firstName')}}">
                                </div>
                            </div>
                            <div class="form-parts">
                                <div class="form-elemnt">

                                    <label for="email">email</label>
                                    <input type="email" name="email" id="email" placeholder="E-mail">
                                </div>
                                <div class="form-elemnt">
                                    <label for="phone">{{__('contact.number')}}</label>
                                    <input type="text" name="phone" id="phone" placeholder="+1 234 567 890">
                                </div>
                            </div>
                            <div class="form-parts">

                                <div class="subject">
                                    <p>{{__('contact.subject')}}?</p>
                                </div>
                            </div>
                            <div class="form-parts">

                                <div class="radio-choice">
                                    <div>
                                        <input type="radio" checked="" class="radio">
                                        <label for="benefit">{{__('contact.subject1')}}</label>
                                    </div>
                                    <div>

                                        <input type="radio" class="radio">
                                        <label for="benefit">{{__('contact.subject2')}}</label>
                                    </div>
                                    <div>

                                        <input type="radio" class="radio">
                                        <label for="benefit">{{__('contact.subject3')}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-parts">

                                <div class="form-elemnt msg-box">
                                    <label for="message">{{__('contact.message')}}</label>
                                    <input type="text" placeholder="{{__('contact.message_placeholder')}}" class="msg-box">
                                </div>
                            </div>
                            <div class="cta-div">
                                <a class="cta-header form-cta" href="#">{{__('contact.send')}}</a>
                            </div>
                        </form>

                    </div>
                    <div class="circles">
                        <div class="big-circle"></div>
                        <div class="little-circle"></div>
                    </div>
                </div>
            </section>
            <script>
                let navEl = document.querySelectorAll(".nav a")
                for (let i = 0; i < navEl.length; i++) {
                    navEl[i].addEventListener('click', function() {
                        console.log(this.innerText)
                    })
                }
            </script>
        @endsection
