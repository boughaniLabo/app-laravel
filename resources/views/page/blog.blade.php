@extends('layout.main')
@section('title', 'BLog')
@section('content')
    <section class="blog">
        <div class="wrapper">
            {{-- RECOMANDED POSTS  --}}
            <div class="title blog-title">
                <h1>recommandé</h1>
            </div>
            <div class="blog-grid">
                <div>
                    <div class="art-card blog-card-1">
                        <p class="art-date">march 11, 2023</p>
                        <a href="?lng=fr&amp;p=blog page" class="art-link">news esson</a>
                    </div>
                </div>
                <div class="blog-gap">
                    <div class="art-card card-2 blog-card-2">
                        <p class="art-date">march 11, 2023</p>
                        <a href="" class="art-link">so what's next</a>
                    </div>
                    <div class="art-card card-3 blog-card-2">
                        <div></div>
                        <p class="art-date">march 11, 2023</p>
                        <a href="" class="art-link">so what's next</a>
                    </div>
                </div>
            </div>
            {{-- RECOMANDED POSTS END --}}
            <div class="row blog-sub-art-mobile">
                <div class="title arti-title">
                    <div class="wrapper">
                        <h1>articles recents</h1>
                    </div>
                </div>
                {{-- <div class="mobile-row">
                    <div class="col-md-3 card">
                        <div class="rel-card article-card blog-card">
                            <div class="image" style="">
                            </div>
                            <div class="article-date">

                                <p class="article-date-label">march 11, 2023</p>
                                <p>rafael dato - so what's next? </p>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="rel-card article-card blog-card">
                            <div class="image" style="">
                            </div>
                            <div class="article-date">

                                <p class="article-date-label">march 11, 2023</p>
                                <p>rafael dato - so what's next? </p>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-row">
                    <div class="col-md-3 card">
                        <div class="rel-card article-card blog-card">
                            <div class="image" style="">
                            </div>
                            <div class="article-date">

                                <p class="article-date-label">march 11, 2023</p>
                                <p>rafael dato - so what's next? </p>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="rel-card article-card blog-card">
                            <div class="image" style="">
                            </div>
                            <div class="article-date">

                                <p class="article-date-label">march 11, 2023</p>
                                <p>rafael dato - so what's next? </p>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-row">
                    <div class="col-md-3 card">
                        <div class="rel-card article-card blog-card">
                            <div class="image" style="">
                            </div>
                            <div class="article-date">

                                <p class="article-date-label">march 11, 2023</p>
                                <p>rafael dato - so what's next? </p>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="rel-card article-card blog-card">
                            <div class="image" style="">
                            </div>
                            <div class="article-date">

                                <p class="article-date-label">march 11, 2023</p>
                                <p>rafael dato - so what's next? </p>


                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- PAGINATION FOR LATER  --}}
                {{-- <div class="pages">
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
                </div> --}}
            </div>
            <div class="row blog-sub-art desktop-row">
                <div class="title arti-title">

                    <h1>articles recents</h1>
                </div>
                @php
                       echo App::currentLocale();
                @endphp
                @foreach ($posts as $post)
                    <a href="#" class="col-md-4">
                        <div class="rel-card article-card blog-card">
                            <div class="image" style="">
                            </div>
                            <div class="article-date">

                                <p class="article-date-label">{{Date::now()->format('l j F Y H:i:s')}}</p>
                                <p>{{ $post->title['fr'] }}</p>


                            </div>
                        </div>
                    </a>
                @endforeach

            </div>

        </div>

    </section>
@endsection
