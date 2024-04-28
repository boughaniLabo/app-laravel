@extends('layout.main')

@section('title', 'Home')

@section('content')
    <section class="album" id="album">
        <div class="big-player">
            <div>
                <button class="close-player"><i class="fa-solid fa-x" aria-hidden="true"></i></button>
            </div>
            <div class="player top-player">

                <div class="song-name">01. So What's next ?</div>
                <div class="timer">
                    <span class="start-two" id="time-current-two">00:00</span>
                    <span class="slash-two">/</span>
                    <span class="finish-two" id="time-total-two">4:03</span>
                </div>
            </div>
            <div class="player bottom-player">
                <div class="control-two">
                    <button><i class="fa-solid fa-backward-step " aria-hidden="true"></i></button>
                    <button><i class="fa-solid fa-play" aria-hidden="true"></i></button>
                    <button><i class="fa-solid fa-forward-step" aria-hidden="true"></i></button>
                </div>
                <div id="waveform-two">
                    <div></div>
                </div>
                <div class="control-two"><button><i class="fa-solid fa-volume-high" aria-hidden="true"></i></button></div>
            </div>
        </div>
        <div class="wrapper">
            <div class="row album-row min-[880px]:flex flex-row w-full flex-nowrap">
                <div class="col-md-6">
                    <div class="home-album">
                        <div></div>
                        <img src="assets/img/album-cover.jpg" alt="" class="alb-img">

                        <div class="social album-home-cover-link">
                            <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"
                                class="social-link"> <i class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                            <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"
                                class="social-link"> <i class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                            <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i
                                    class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                            <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato"
                                target="_blank" class="social-link"> <i class="fa-brands fa-amazon" aria-hidden="true"></i>
                            </a>
                            <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"
                                class="social-link"> <i class="fa-brands fa-youtube" aria-hidden="true"></i> </a>

                        </div>
                        <div class="overlay">
                            <div></div>
                            <div>
                                <button class="play-overlay"><i class="fa-solid fa-play" aria-hidden="true"></i></button>
                            </div>
                            <div class="social album-home-cover-link">
                                <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"
                                    class="social-link"> <i class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                                <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"
                                    class="social-link"> <i class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                                <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i
                                        class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                                <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato"
                                    target="_blank" class="social-link"> <i class="fa-brands fa-amazon"
                                        aria-hidden="true"></i> </a>
                                <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"
                                    class="social-link"> <i class="fa-brands fa-youtube" aria-hidden="true"></i> </a>

                            </div>
                        </div>

                    </div>
                    <div class=" home-album youtube-frame">

                        <iframe width="500" height="350" frameborder="0" allowfullscreen="" id="wnframe"
                            allow="autoplay"></iframe>
                        <div class="social album-home-cover-link">
                            <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"
                                class="social-link"> <i class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                            <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"
                                class="social-link"> <i class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                            <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i
                                    class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                            <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato"
                                target="_blank" class="social-link"> <i class="fa-brands fa-amazon"
                                    aria-hidden="true"></i> </a>
                            <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"
                                class="social-link"> <i class="fa-brands fa-youtube" aria-hidden="true"></i> </a>

                        </div>
                        <div class="overlay">
                            <div></div>
                            <div>
                                <button class="pause-overlay"><i class="fa-solid fa-pause"
                                        aria-hidden="true"></i></button>
                            </div>
                            <div class="social album-home-cover-link">
                                <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"
                                    class="social-link"> <i class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                                <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"
                                    class="social-link"> <i class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                                <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i
                                        class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                                <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato"
                                    target="_blank" class="social-link"> <i class="fa-brands fa-amazon"
                                        aria-hidden="true"></i> </a>
                                <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"
                                    class="social-link"> <i class="fa-brands fa-youtube" aria-hidden="true"></i> </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="nw-albm">new album</h2>
                    <div class="album-tit">
                        <h1 class="alb-title">
                            so, what’s <br> next?
                        </h1>
                    </div>
                    <p>
                        Composed by Rafaël Dato during his health crisis and the constraints that beset him, the album "So
                        What's Next?" frees itself from the boundaries between musical genres, to offer a sonic synthesis
                        with jazz accents, capable of seducing an audience of profane and discerning music lovers alike.
                    </p>
                    <div class="audio-player-mini h-fit">
                        <div class="player top-player">
                            <div class="song-name">01. So What's next ?</div>
                            <div class="timer">
                                <span class="start" id="time-current">00:00</span>
                                <span class="slash">/</span>
                                <span class="finish" id="time-total">4:03</span>
                            </div>
                        </div>
                        <div class="player bottom-player">
                            <div class="control">
                                <button><i class="fa-solid fa-backward-step " aria-hidden="true"></i></button>
                                <button><i class="fa-solid fa-play" aria-hidden="true"></i></button>
                                <button><i class="fa-solid fa-forward-step" aria-hidden="true"></i></button>
                            </div>
                            <div id="waveform">
                                <div></div>
                            </div>
                            <div class="control"><button><i class="fa-solid fa-volume-high"
                                        aria-hidden="true"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row album-row-mobile">
                <div class="col-xs-12 home-album">

                    <div class="play-song">
                        <!-- <button class="play-song-mobile"><i class="fa-solid fa-play"></i></button> -->
                        <img src="assets/img/album-cover.jpg" alt="">
                    </div>
                    <div class="social album-home-cover-link">

                        <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i
                                class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                        <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i
                                class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                        <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i
                                class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                        <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato"
                            target="_blank"> <i class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
                        <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i
                                class="fa-brands fa-youtube" aria-hidden="true"></i> </a>

                    </div>

                </div>
                <div class="col-xs-8">

                    <div class="title mobile-titles">
                        <h1 class="alb-title">
                            so, what’s next?

                        </h1>
                        <p>
                            Composed by Rafaël Dato during the health crisis and the constraints that plag ued him, the
                            album “So What's Next?.” </p>
                    </div>
                </div>


            </div>
            <div class="row mobile">
                <p class="mobile-p">
                    split the boundaries between musical genres, in order to offer a sound synthesis with jazz accents, able
                    to attract an audience of both profane and knowledgeable music lovers </p>
                <p></p>
            </div>
        </div>
    </section>
    <section class="releases">
        <div class="wrapper">
            <div class="title">
                <h1>Latest releases</h1>
            </div>
            <div class="mobile-row">
                <div class="col-md-3 card">
                    <div class="rel-card">
                        <div></div>
                        <div class="image">
                            <button class="play-song-mobile"><i class="fa-solid fa-play" aria-hidden="true"></i></button>
                            <img src="assets/img/album-cover.jpg" alt="">
                        </div>

                        <div class="social rel-card-link">

                            <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i
                                    class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                            <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i
                                    class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                            <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i
                                    class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                            <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato"
                                target="_blank"> <i class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
                            <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i
                                    class="fa-brands fa-youtube" aria-hidden="true"></i> </a>

                        </div>



                    </div>
                    <h3>So what's next?</h3>
                    <h4>So what's next?</h4>

                </div>
                <div class="col-md-3">

                    <div class="rel-card">
                        <div></div>
                        <div class="image">
                            <button class="play-song-mobile"><i class="fa-solid fa-play" aria-hidden="true"></i></button>
                            <img src="assets/img/album-cover.jpg" alt="">
                        </div>

                        <div class="social rel-card-link">

                            <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i
                                    class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                            <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i
                                    class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                            <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i
                                    class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                            <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato"
                                target="_blank"> <i class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
                            <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i
                                    class="fa-brands fa-youtube" aria-hidden="true"></i> </a>

                        </div>



                    </div>
                    <h3>Friendly Walk</h3>
                    <h4>So What's next?</h4>
                </div>
            </div>
            <div class="mobile-row">
                <div class="col-md-3 card">
                    <div class="rel-card">
                        <div></div>
                        <div class="image">
                            <button class="play-song-mobile"><i class="fa-solid fa-play" aria-hidden="true"></i></button>
                            <img src="assets/img/album-cover.jpg" alt="">
                        </div>

                        <div class="social rel-card-link">

                            <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i
                                    class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                            <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i
                                    class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                            <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i
                                    class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                            <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato"
                                target="_blank"> <i class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
                            <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i
                                    class="fa-brands fa-youtube" aria-hidden="true"></i> </a>

                        </div>



                    </div>
                    <h3>when you touch the sky</h3>
                    <h4>So what's next?</h4>

                </div>
                <div class="col-md-3 card">

                    <div class="rel-card">
                        <div></div>
                        <div class="image">
                            <button class="play-song-mobile"><i class="fa-solid fa-play" aria-hidden="true"></i></button>
                            <img src="assets/img/album-cover.jpg" alt="">
                        </div>

                        <div class="social rel-card-link">

                            <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i
                                    class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                            <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i
                                    class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                            <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i
                                    class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                            <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato"
                                target="_blank"> <i class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
                            <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i
                                    class="fa-brands fa-youtube" aria-hidden="true"></i> </a>

                        </div>



                    </div>
                    <h3>how deep is the ocean</h3>
                    <h4>So What's next?</h4>
                </div>
            </div>
            <div class="row desktop-row">
                <div class="col-md-3">
                    <div class="rel-card">
                        <div></div>
                        <div class="image">
                            <img src="assets/img/album-cover.jpg" alt="">
                        </div>
                        
                            <div class="social rel-card-link">
                                
                                <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i class="fa-brands fa-spotify"></i> </a>
                                <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i class="fa-brands fa-apple"></i> </a>
                                <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i class="fa-brands fa-deezer"></i> </a>
                                <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank"> <i class="fa-brands fa-amazon"></i> </a>
                                <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i class="fa-brands fa-youtube"></i> </a>
                                                
                            </div>
                            
                            <div class="overlay rel-card">
                                <div></div>
                                <div>
                                    <button class="play-big"><i class="fa-solid fa-play"></i></button>
                                </div>
                                <div class="social rel-card-link">
                                
                                <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i class="fa-brands fa-spotify"></i> </a>
                                <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i class="fa-brands fa-apple"></i> </a>
                                <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i class="fa-brands fa-deezer"></i> </a>
                                <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank"> <i class="fa-brands fa-amazon"></i> </a>
                                <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i class="fa-brands fa-youtube"></i> </a>
                                                
                            </div>
                            </div>
                    </div>
                    <h3>So what's next?</h3>
                    <h4>So what's next?</h4>
                        
                </div>
                <div class="col-md-3">
                    <div class="rel-card">
                    <div></div>
                    <div class="image">
                            <img src="assets/img/album-cover.jpg" alt="">
                        </div>
                        <div class="social rel-card-link">
                                
                                <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i class="fa-brands fa-spotify"></i> </a>
                                <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i class="fa-brands fa-apple"></i> </a>
                                <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i class="fa-brands fa-deezer"></i> </a>
                                <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank"> <i class="fa-brands fa-amazon"></i> </a>
                                <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i class="fa-brands fa-youtube"></i> </a>
                                                
                                            </div>
                                            <div class="overlay rel-card">
                                <div></div>
                                <div>
                                    <button class="play-big"><i class="fa-solid fa-play"></i></button>
                                </div>
                                <div class="social rel-card-link">
                                
                                <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i class="fa-brands fa-spotify"></i> </a>
                                <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i class="fa-brands fa-apple"></i> </a>
                                <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i class="fa-brands fa-deezer"></i> </a>
                                <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank"> <i class="fa-brands fa-amazon"></i> </a>
                                <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i class="fa-brands fa-youtube"></i> </a>
                                                
                            </div>
                            </div>
                                        </div>
                                        <h3>Friendly Walk</h3>
                                        <h4>So What's next?</h4>
                </div>
                <div class="col-md-3">
                    <div class="rel-card">
                    <div></div>
                    <div class="image">
                            <img src="assets/img/album-cover.jpg" alt="">
                        </div>
                        <div class="social rel-card-link">
                                
                                <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i class="fa-brands fa-spotify"></i> </a>
                                <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i class="fa-brands fa-apple"></i> </a>
                                <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i class="fa-brands fa-deezer"></i> </a>
                                <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank"> <i class="fa-brands fa-amazon"></i> </a>
                                <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i class="fa-brands fa-youtube"></i> </a>
                                                
                                            </div>
                                            <div class="overlay rel-card">
                                <div></div>
                                <div>
                                    <button class="play-big"><i class="fa-solid fa-play"></i></button>
                                </div>
                                <div class="social rel-card-link">
                                
                                <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i class="fa-brands fa-spotify"></i> </a>
                                <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i class="fa-brands fa-apple"></i> </a>
                                <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i class="fa-brands fa-deezer"></i> </a>
                                <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank"> <i class="fa-brands fa-amazon"></i> </a>
                                <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i class="fa-brands fa-youtube"></i> </a>
                                                
                            </div>
                            </div>
                                        </div>
                                        <h3>when you touch the sky</h3>
                                        <h4>So What's next ?</h4>
                </div>
                <div class="col-md-3">
                    <div class="rel-card">
                    <div></div>
                    <div class="image">
                            <img src="assets/img/album-cover.jpg" alt="">
                        </div>
                        <div class="social rel-card-link">
                                
                                <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i class="fa-brands fa-spotify"></i> </a>
                                <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i class="fa-brands fa-apple"></i> </a>
                                <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i class="fa-brands fa-deezer"></i> </a>
                                <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank"> <i class="fa-brands fa-amazon"></i> </a>
                                <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i class="fa-brands fa-youtube"></i> </a>
                                                
                                            </div>
                                            <div class="overlay rel-card">
                                <div></div>
                                <div>
                                    <button class="play-big"><i class="fa-solid fa-play"></i></button>
                                </div>
                                <div class="social rel-card-link">
                                
                                <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i class="fa-brands fa-spotify"></i> </a>
                                <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i class="fa-brands fa-apple"></i> </a>
                                <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i class="fa-brands fa-deezer"></i> </a>
                                <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank"> <i class="fa-brands fa-amazon"></i> </a>
                                <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i class="fa-brands fa-youtube"></i> </a>
                                                
                            </div>
                            </div>
                                        </div>
                                        <h3>One step away from dark shadow</h3>
                                        <h4>So What's next ?</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="videos">
        <div class="wrapper ">
            <div class="title title-wrapper">
                <h1>Videos</h1>
                <a href="https://www.youtube.com/@rafaeldato-pianistcomposer5130" target="_blank" class="cta-video">see
                    more</a>
            </div>
            <div class="row">

                <div class="col-md-6 frame-div">
                    <iframe class="youframe" width="683" height="383"
                        src="https://www.youtube.com/embed/UcWu4IhHb9Q?enablejsapi=1&amp;showinfo=0&amp;controls=0&amp;autohide=1; modestbranding"
                        frameborder="0" allowfullscreen="" id="youtube-select">
                    </iframe>
                    <h2 class="frame-title">so, what's next ?</h2>

                </div>

                <!-- <div class="overlay video-overlay">
                    <div></div>
                        <div>
                            <button class="play-overlay"><i class="fa-solid fa-play"></i></button>
                            <button class="pause-overlay"><i class="fa-solid fa-pause"></i></button>
                        </div>
                    <div></div>
                </div>
                     -->
                <div class="col-md-5 video-list">
                    <div class="video-select">
                        <div>
                            <img src="/assets/img/thumb1.jpg" alt="">
                        </div>
                        <div>
                            <h3 class="thumb-title">Rafaël Dato - So, What's Next?</h3>
                            <p>Piano, composition &amp; production: Rafaël Dato <br>
                                Fretless Bass: Antoine Leiser <br>
                                Drums &amp; percussions: Timothée Garson</p>
                        </div>

                    </div>
                    <div class="video-select">
                        <div>
                            <img src="/assets/img/thumb2.jpg" alt="">
                        </div>
                        <div>
                            <h3 class="thumb-title">Rafaël Dato - Friendly Walk</h3>
                            <p>Recorded live with my regular trio at Espace Bernard Mantiennes in Verrières-Le-Buisson...
                            </p>
                        </div>

                    </div>
                    <div class="video-select">
                        <div>
                            <img src="/assets/img/thumb3.jpg" alt="">
                        </div>
                        <div>
                            <h3 class="thumb-title">Rafaël Dato - Fake Plastic Trees live</h3>
                            <p>Recorded live with my regular trio at Espace Bernard Mantiennes in Verrières-Le-Buisson...
                            </p>
                        </div>

                    </div>
                    <div class="video-select">
                        <div>
                            <img src="/assets/img/thumb4.jpg" alt="">
                        </div>
                        <div>
                            <h3 class="thumb-title">Rafaël Dato - One Step Away From Dark Shadows</h3>
                            <p>Recorded live with my regular trio at Espace Bernard Mantiennes in Verrières-Le-Buisson...
                            </p>
                        </div>
                    </div>
                    <div class="video-select">
                        <div>
                            <img src="/assets/img/thumb5.jpg" alt="">
                        </div>
                        <div>
                            <h3 class="thumb-title">Rafaël Dato - All The Things You Are (live)</h3>
                            <p>I'm glad to share with you new video excerpt of the live I did with my trio last 14th
                                November.</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="gallery">
        <div class="wrapper">
            <div class="title title-wrapper">
                <h1>Gallery</h1>
                <a href="https://www.instagram.com/rafael_dato/" target="_blank" class="cta-video">see more</a>
            </div>
            <div class="gallery-grid">
                <div class="gallery-row-1">
                    <img src="/assets/img/rafael-trio.jpg" class="sm-img" alt="">
                    <img src="/assets/img/rafael-trio2.jpg" class="lg-img" alt="">
                </div>
                <div class="gallery-row-2">
                    <img src="/assets/img/rafael-trio-yong.jpg" class="lg-img" alt="">
                    <img src="/assets/img/rafael-yong.jpg" class="sm-img" alt="">
                </div>
            </div>
            <div class="mobile-gallery">
                <div class="row">
                    <div class="col-md-3 card-img">

                        <div class="gal-image">
                            <img src="/assets/img/rafael-trio.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-3 card-img">

                        <div class="gal-image">
                            <img src="/assets/img/rafael-bw.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="gal-image-big">
                        <img src="/assets/img/rafael-trio2.jpg" alt="">
                    </div>
                </div>
                <div class="row-grid">
                    <div class="gal-image gr-1">
                        <img src="/assets/img/pic1.jpg" alt="">
                    </div>
                    <div class="gal-image gr-2">
                        <img src="/assets/img/long-rafael.jpg" alt="">
                    </div>
                    <div class="gal-image gr-3">
                        <img src="/assets/img/rafael-yong.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="gal-image-big">
                        <img src="/assets/img/rafael-trio-yong.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mobile-tour">
        <div class="wrapper">
            <div class="title">
                <h1>Previous appearances</h1>
                <a href="?lng=en&amp;p=Tour" class="cta-video">see more</a>
            </div>
            <ul class="tourlist">
                <div class="tour-date-mobile">


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
                    <a href="" class="cta-mobile-ticket">out of stock</a>
                </div>
                <div class="tour-date-mobile">


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
                    <a href="" class="cta-mobile-ticket">out of stock</a>
                </div>
                <div class="tour-date-mobile">


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
                    <a href="" class="cta-mobile-ticket">out of stock</a>
                </div>



            </ul>

        </div>
    </section>
    <section class="tour">
        <div class="wrapper tour-section">
            <div class="title">
                <h1>Previous appearances</h1>
                <a href="?lng=en&amp;p=Tour" class="cta-video">see more</a>
            </div>




            <ul class="tourlist">
                <li>
                    <div class="tour-date">
                        <h1>29</h1>
                        <div class="day-h">
                            <p>june 2017</p>
                            <p>8:00 pm</p>
                        </div>
                    </div>
                    <div class="tour-loc">
                        <p>les rendez vous d'ailleurs</p>
                        <p><i class="fa-solid fa-location-dot" aria-hidden="true"></i> paris, france, FR</p>
                    </div>
                    <a href="#" class="cta-video">out of stock</a>
                </li>
                <li>
                    <div class="tour-date">
                        <h1>09</h1>
                        <div class="day-h">
                            <p>February 2017</p>
                            <p>10:00 pm</p>
                        </div>
                    </div>
                    <div class="tour-loc">
                        <p>espace ararat</p>
                        <p><i class="fa-solid fa-location-dot" aria-hidden="true"></i> paris, france, FR</p>
                    </div>
                    <a href="#" class="cta-video">out of stock</a>
                </li>
                <li>
                    <div class="tour-date">
                        <h1>17</h1>
                        <div class="day-h">
                            <p>novembre 2017</p>
                            <p>7:00 pm</p>
                        </div>
                    </div>
                    <div class="tour-loc">
                        <p>centre culturel "isadora duncan"</p>
                        <p><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Igny, france, FR</p>
                    </div>
                    <a href="#" class="cta-video">out of stock</a>
                </li>

            </ul>
        </div>


    </section>


    <script>
        let playOverlay = document.querySelectorAll('.play-overlay');
        let pauseOverlay = document.querySelectorAll('.pause-overlay');
        let startBigPlayer = document.querySelectorAll('.play-big');
        let songName = document.querySelector('.song-name');
        let closePlayer = document.querySelector('.close-player');
        let iframe = document.getElementsByTagName('iframe')[0]


        playOverlay[0].addEventListener('click', function() {
            if (window.getComputedStyle(document.querySelector('.home-album')).display === 'flex') {
                playOverlay[0].style.display = "none"
                pauseOverlay[0].style.display = "block"
                document.querySelector('.youtube-frame').style.display = 'flex';
                document.querySelector('.home-album').style.display = 'none';
                iframe.setAttribute('src', "https://www.youtube.com/embed/UcWu4IhHb9Q?autoplay=1")
                console.log(
                    'lol') // document.getElementsByTagName('iframe')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*')
            }

        });

        pauseOverlay[0].addEventListener('click', function() {
            if (window.getComputedStyle(document.querySelector('.youtube-frame')).display === 'flex') {
                document.querySelector('.youtube-frame').style.display = 'none';
                document.querySelector('.home-album').style.display = 'flex';
                playOverlay[0].style.display = "block"
                pauseOverlay[0].style.display = "none"
                iframe.setAttribute('src', "https://www.youtube.com/embed/UcWu4IhHb9Q?autoplay=0")
                // document.getElementsByTagName('iframe')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*')
            }
        });
    </script>
    <script type="module">
        import WaveSurfer from 'https://unpkg.com/wavesurfer.js@7/dist/wavesurfer.esm.js'

        const wavesurfer = WaveSurfer.create({
            container: '#waveform',
            waveColor: '#B5D9D9',
            progressColor: '#1E96A6',
            url: 'assets/audio.mp3',
            barWidth: 2,
            barRadius: 10,
            height: 40,
            cursorWidth: 0,
        })
        const wavesurfer2 = WaveSurfer.create({
            container: '#waveform-two',
            waveColor: '#B5D9D9',
            progressColor: '#1E96A6',
            url: 'assets/audio.mp3',
            barWidth: 2,
            height: 50,
            cursorWidth: 0,
        })
        wavesurfer.on('ready', () => {
            var totalDuration = wavesurfer.getDuration();
            var minutes = Math.floor((totalDuration % 3600) / 60);
            var secondes = ('00' + Math.floor(totalDuration % 60)).slice(-2);
            let totalTime = `${minutes}:${secondes}`;
            document.getElementById('time-total').innerText = totalTime;
        })
        wavesurfer2.on('ready', () => {
            var totalDuration = wavesurfer2.getDuration();
            var minutes = Math.floor((totalDuration % 3600) / 60);
            var secondes = ('00' + Math.floor(totalDuration % 60)).slice(-2);
            let totalTime = `${minutes}:${secondes}`;
            document.getElementById('time-total-two').innerText = totalTime;

        })
        closePlayer.addEventListener('click', function() {
            if (window.getComputedStyle(document.querySelector('.big-player')).display === 'block') {
                document.querySelector('.big-player').style.display = 'none';
                wavesurfer2.stop()
            }
        })
        let btns = document.querySelectorAll('.control button')
        let icon = document.querySelectorAll('.control button i')
        let btns2 = document.querySelectorAll('.control-two button')
        let icon2 = document.querySelectorAll('.control-two button i')
        for (let i = 0; i < btns.length; i++) {
            btns[i].addEventListener('click', function() {
                switch (i) {
                    case 0:
                        wavesurfer.seekTo(0);
                        break;
                    case 1:
                        wavesurfer.playPause();
                        if (icon[1].className === 'fa-solid fa-play') {
                            icon[1].className = 'fa-solid fa-pause'
                        } else {
                            icon[1].className = 'fa-solid fa-play'
                        }
                        break;
                    case 2:
                        wavesurfer.skip(2);
                        break;
                    case 3:
                        if (wavesurfer.getMuted() && icon[3].className === 'fa-solid fa-volume-xmark') {
                            icon[3].className = 'fa-solid fa-volume-high'
                            wavesurfer.setMuted(false);
                        } else {
                            wavesurfer.setMuted(true);
                            icon[3].className = 'fa-solid fa-volume-xmark'
                        }

                        break;

                }
            })
            btns2[i].addEventListener('click', function() {
                switch (i) {
                    case 0:
                        wavesurfer2.seekTo(0);
                        break;
                    case 1:
                        wavesurfer2.playPause();
                        if (icon2[1].className === 'fa-solid fa-play') {
                            icon2[1].className = 'fa-solid fa-pause'
                        } else {
                            icon2[1].className = 'fa-solid fa-play'
                        }
                        break;
                    case 2:
                        wavesurfer2.skip(2);
                        break;
                    case 3:
                        if (wavesurfer2.getMuted() && icon2[3].className === 'fa-solid fa-volume-xmark') {
                            icon2[3].className = 'fa-solid fa-volume-high'
                            wavesurfer2.setMuted(false);
                        } else {
                            wavesurfer2.setMuted(true);
                            icon2[3].className = 'fa-solid fa-volume-xmark'
                        }

                        break;

                }


            })
        }
        for (let i = 0; i < startBigPlayer.length; i++) {

            startBigPlayer[i].addEventListener('click', function(e) {
                console.log(i)
                if (window.getComputedStyle(document.querySelector('.big-player')).display === 'none') {
                    document.querySelector('.big-player').style.display = 'none';
                    document.querySelector('.big-player').style.display = 'block';
                }
                if (i === 0) {
                    songName.textContent = "01. So What's next ?";
                    wavesurfer2.load('assets/album/audio08.mp3')
                    icon2[1].className = 'fa-solid fa-play'
                } else if (i === 1) {
                    songName.textContent = "02. Friendly Walk";
                    wavesurfer2.load('assets/album/audio03.mp3')

                    icon2[1].className = 'fa-solid fa-play'
                } else if (i === 2) {
                    songName.textContent = "03. When you touch the sky";
                    wavesurfer2.load('assets/album/audio09.mp3')

                    icon2[1].className = 'fa-solid fa-play'
                } else if (i === 3) {
                    songName.textContent = "04. One Step Away From Dark Shadow";
                    wavesurfer2.load('assets/album/audio06.mp3')

                    icon2[1].className = 'fa-solid fa-play'
                }
            })
        }
        let strtPlayMobile = document.querySelectorAll('.play-song-mobile');
        for (let i = 0; i < startBigPlayer.length; i++) {

            strtPlayMobile[i].addEventListener('click', function(e) {
                console.log(i)
                if (window.getComputedStyle(document.querySelector('.big-player')).display === 'none') {
                    document.querySelector('.big-player').style.display = 'none';
                    document.querySelector('.big-player').style.display = 'block';
                }
                if (i === 0) {
                    songName.textContent = "01. So What's next ?";
                    wavesurfer2.load('assets/album/audio08.mp3')
                    wavesurfer2.playPause()
                    icon2[1].className = 'fa-solid fa-play'
                } else if (i === 1) {
                    songName.textContent = "02. Friendly Walk";
                    wavesurfer2.load('assets/album/audio03.mp3')
                    wavesurfer2.stop()
                    wavesurfer2.playPause()
                    icon2[1].className = 'fa-solid fa-play'
                } else if (i === 2) {
                    songName.textContent = "03. When you touch the sky";
                    wavesurfer2.load('assets/album/audio09.mp3')
                    icon2[1].className = 'fa-solid fa-play'
                } else if (i === 3) {
                    songName.textContent = "04. One Step Away From Dark Shadow";
                    wavesurfer2.load('assets/album/audio06.mp3')
                    icon2[1].className = 'fa-solid fa-play'
                }
            })
        }

        wavesurfer.on('audioprocess', function() {

            if (wavesurfer.isPlaying()) {
                var currentTime = wavesurfer.getCurrentTime();
                var minutes = Math.floor((currentTime % 3600) / 60);
                var secondes = ('00' + Math.floor(currentTime % 60)).slice(-2);
                let current = `${minutes}:${secondes}`;
                document.getElementById('time-current').innerText = current;

            }
        });
        wavesurfer2.on('audioprocess', function() {

            if (wavesurfer2.isPlaying()) {
                var currentTime = wavesurfer2.getCurrentTime();
                var minutes = Math.floor((currentTime % 3600) / 60);
                var secondes = ('00' + Math.floor(currentTime % 60)).slice(-2);
                let current = `${minutes}:${secondes}`;
                document.getElementById('time-current-two').innerText = current;
            }
        });

        let select = document.querySelectorAll('.video-select');
        let frameSelect = document.getElementById('youtube-select');
        let thumbTitle = document.querySelectorAll('.thumb-title');
        let frameTitle = document.querySelector('.frame-title');

        for (let i = 0; i < select.length; i++) {
            select[i].addEventListener('click', function() {
                if (i === 0) {
                    frameSelect.src =
                        'https://www.youtube.com/embed/UcWu4IhHb9Q?enablejsapi=1&showinfo=0&controls=0&autohide=1'
                    frameTitle.innerText = thumbTitle[0].innerText
                } else if (i === 1) {
                    frameSelect.src =
                        'https://www.youtube.com/embed/BQ9E8idV0Ps?enablejsapi=1&showinfo=0&controls=0&autohide=1'
                    frameTitle.innerText = thumbTitle[1].innerText
                } else if (i === 2) {
                    frameSelect.src =
                        'https://www.youtube.com/embed/WlltN3tWK-8?enablejsapi=1&showinfo=0&controls=0&autohide=1'
                    frameTitle.innerText = thumbTitle[2].innerText
                } else if (i === 3) {
                    frameSelect.src =
                        'https://www.youtube.com/embed/fS_XyRgpXgc?enablejsapi=1&showinfo=0&controls=0&autohide=1'
                    frameTitle.innerText = thumbTitle[3].innerText
                } else if (i === 4) {
                    frameSelect.src =
                        'https://www.youtube.com/embed/krIQbEGZBp0?enablejsapi=1&showinfo=0&controls=0&autohide=1'
                    frameTitle.innerText = thumbTitle[4].innerText
                } else {
                    console.log('no')
                }
            })
        }

        let navEl = document.querySelectorAll(".nav a")
        navEl[0].classList.add('active')

        let playSng = document.querySelector('.play-song-mobile')
        playSng.addEventListener('click', function() {
            console.log('hi')
        })
    </script>
@endsection
