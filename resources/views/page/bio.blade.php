@extends('layout.main')

@section('title', 'Home')

@section('content')
    <section class="bio" id="see-more">
        <div class="container desktop-cont">
            <div class="row arti-bio-row">
                <div class="col-lg-6 order-lg-2">
                    <p>{{ __('bio.bio') }}</p>
                </div>
                <div class="col-lg-6 order-lg-1 bio-right-img">
                    <div class="bio-img">
                        <img src="/assets/img/arti2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row" id="see-article">
                <div class="title title-wrapper bio-title">
                    <h1>Articles</h1>

                </div>
            </div>
            <div class="wrapper article-wrapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="art-card">
                            <p class="art-date">22 Février 2022</p>
                            <a href="https://actu.fr/ile-de-france/igny_91312/essonne-le-jeune-pianiste-rafael-dato-sort-son-premier-album_48878238.htmle"
                                class="art-link">news esson</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="art-card card-2">
                            <p class="art-date">24 Mars 2022</p>
                            <a href="https://www.bambisklangperlen.de/blog-2/rafael-dato-so-whats-next" class="art-link">so
                                what's next</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="art-card card-3">
                            <div></div>
                            <p class="art-date">13 Mars 2022</p>
                            <a href="https://tinnitist.com/2022/03/13/groover-playlist-149-springing-forward-part-1/"
                                class="art-link">so what's next</a>
                        </div>
                    </div>
                </div>
                <div class="row second-art-row">
                    <div class="col-md-4">
                        <div class="art-card card-5">
                            <p class="art-date">31 DÉC. 2021</p>
                            <a href="http://jazznicknames.over-blog.com/2021/01/les-news-2022-janvier.html"
                                class="art-link">LES NEWS 2022 - JANVIER</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="art-card card-6">
                            <p class="art-date">15 Décembre 2021</p>
                            <a href="http://jazzaseizheur.over-blog.com/2021/12/rafael-dato-trio-so-what-s-next-autoproduction.html"
                                class="art-link">
                                RAFAEL DATO TRIO: SO WHAT'S NEXT ? (AUTOPRODUCTION)
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="art-card card-4">
                            <div></div>
                            <p class="art-date">Mar 22, 2022</p>
                            <a href="https://onradioup.medium.com/music-diamonds-3-9548fc2c069b" class="art-link">Music
                                Diamonds #3
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title title-wrapper arti-more">
                <a href="javascript:void(0)" class="cta-video cta-arti">{{ __('general.know_more_about_me') }}</a>
            </div>
        </div>
        <div class="mobile-bio">
            <div class="wrapper">
                <div class="col-md-6  bio-mobile-text">
                    <h1 class="mobile-art-name">rafaël dato</h1>
                    <p class="small-text">{{ __('bio.bio') }}</p>
                </div>
                <div class="row mobile-art-row">
                    <div class="col-xs-8">
                        <div class="art-card">
                            <p class="art-date">march 11, 2023</p>
                            <a href="https://actu.fr/ile-de-france/igny_91312/essonne-le-jeune-pianiste-rafael-dato-sort-son-premier-album_48878238.html"
                                class="art-link">news esson</a>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="art-card card-2">
                            <p class="art-date">march 11, 2023</p>
                            <a href="https://www.bambisklangperlen.de/blog-2/rafael-dato-so-whats-next" class="art-link">so
                                what's next</a>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="art-card card-3">
                            <div></div>
                            <p class="art-date">march 11, 2023</p>
                            <a href="" class="art-link">so what's next</a>
                        </div>
                    </div>

                    {{-- new articles  --}}
                    <div class="col-xs-8">
                        <div class="art-card card-4">
                            <div></div>
                            <p class="art-date">Mar 22, 2022</p>
                            <a href="" class="art-link">Music Diamonds #3</a>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="art-card card-5">
                            <div></div>
                            <p class="art-date">31 DÉC. 2021</p>
                            <a href="" class="art-link">LES NEWS 2022 - JANVIER
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div class="art-card card-6">
                            <div></div>
                            <p class="art-date">15 Décembre 2021</p>
                            <a href="" class="art-link">RAFAEL DATO TRIO: SO WHAT'S NEXT ? (AUTOPRODUCTION)
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <script>
        let navEl = document.querySelectorAll(".nav a")
        navEl[1].classList.add('active')
        let artBtn = document.querySelectorAll(".cta-arti")
        let artRow = document.querySelector(".second-art-row")

        console.log(artBtn, artRow)
        artBtn[2].addEventListener('click', function() {
            artRow.style.display = "flex";
        })

        let artBtns = document.querySelectorAll('.mobile-cta')
        console.log(artBtns);
        let artShowcase = document.querySelector('.art-showcase')
        let bioShowcase = document.querySelector('.bio-showcase')
        let artName = document.querySelector('.mobile-art-name')
        let smTxt = document.querySelector('.small-text')
        let ovTxt = document.querySelector('.overlay-text p')
        let pos2 = 0;
        let pos3 = 0;
        let mobArt = document.querySelector('.mobile-art-row')
        let mobTxt = document.querySelector('.bio-mobile-text')
        let biOverlay = document.querySelector('.bio-overlay')
        artBtns[0].addEventListener('click', function() {
            if (pos2 === 0) {
                pos2 = 1
                ovTxt.textContent = `{{ __('bio.hero') }}`
                artShowcase.setAttribute('style', 'background-image :url("assets/img/artimob2.jpg") !important');
                mobArt.style.display = 'none'
                mobTxt.style.display = 'block'
                artBtns[0].textContent = 'Artibiography'
                smTxt.textContent = `{{ __('bio.bio') }}`;
            } else {
                ovTxt.textContent = `{{ __('bio.bio') }}`
                artShowcase.setAttribute('style', 'background-image :url("assets/img/artimob.jpg") !important');
                pos2 = 0
                mobArt.style.display = 'none'
                mobTxt.style.display = 'block'
                artBtns[0].textContent = 'More about me'
                smTxt.textContent = `{{ __('bio.hero') }}`;
            }

        })
        artBtns[0].addEventListener('click', function() {
            if (pos2 === 0) {
                ovTxt.textContent = `{{ __('bio.hero') }}`
                bioShowcase.setAttribute('style',
                    'background-image:  url("assets/img/mobile-arti2.jpg")   !important');
                artShowcase.setAttribute('style', 'background-image: url("assets/img/artimob2.jpg")  !important');
                pos2 = 1
                artName.style.color = "#414141"
                mobArt.style.display = 'none'
                mobTxt.style.display = 'block'
                artBtns[0].textContent = 'Artibiography'
                smTxt.textContent = `{{ __('bio.bio') }}`;
            } else {
                ovTxt.textContent = `{{ __('bio.bio') }}`;
                bioShowcase.setAttribute('style',
                    'background-image:url("assets/img/mobile-arti.jpg") no-repeat cover !important');
                artShowcase.setAttribute('style', 'background-image:url("assets/img/artimob.jpg") !important');
                pos2 = 0
                artName.style.color = "#d8d8d8"
                mobArt.style.display = 'none'
                mobTxt.style.display = 'block'
                artBtns[0].textContent = 'More about me'
                smTxt.textContent =
                    `{{ __('bio.hero') }}`

            }

        })
        artBtns[1].addEventListener('click', function() {
            if (window.getComputedStyle(mobArt).getPropertyValue('display') === 'none') {
                mobArt.style.display = 'flex'
                mobTxt.style.display = 'none'
                biOverlay.style.display = 'none'
            } else {
                mobArt.style.display = 'none'
                mobTxt.style.display = 'block'
            }
        })
        artBtns[0].addEventListener('click', function() {

            if (window.getComputedStyle(mobArt).getPropertyValue('display') === 'none') {
                mobArt.style.display = 'flex'
                mobTxt.style.display = 'none'
                biOverlay.style.display = 'none'
            } else {
                mobArt.style.display = 'none'
                mobTxt.style.display = 'block'
            }

        })
    </script>
@endsection
