@extends('layout.main')
@section('title', 'Home')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/2.0.4/wavesurfer.min.js"
        integrity="sha512-mhqErQ0f2UqnbsjgKpM96XfxVjVMnXpszEXKmnJk8467vR8h0MpiPauil8TKi5F5DldQGqNUO/XTyWbQku22LQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function playAudio(song) {
            if (typeof wavesurfer === 'undefined') {
                wavesurfer = WaveSurfer.create({
                    container: '#waveform-two',
                    waveColor: '#B5D9D9',
                    progressColor: '#1E96A6',
                    barWidth: 2,
                    height: 50,
                    cursorWidth: 0,
                });
            } else {
                // If wavesurfer is already initialized, destroy the existing instance
                wavesurfer.destroy();
                wavesurfer = WaveSurfer.create({
                    container: '#waveform-two',
                    waveColor: '#B5D9D9',
                    progressColor: '#1E96A6',
                    barWidth: 2,
                    height: 50,
                    cursorWidth: 0,
                });
            }
            let elementToshow = document.getElementById('costumeWave');
            console.log(elementToshow);
            elementToshow.style.display = "block"; // Corrected variable name
            document.getElementById('song-name').innerText = song.title;

            // Load audio from the audio element
            wavesurfer.load(song.url);
            wavesurfer.on('ready', () => {
                console.log("helo");
                // Play the audio
                wavesurfer.play();
                var totalDuration = wavesurfer.getDuration();
                var minutes = Math.floor((totalDuration % 3600) / 60);
                var secondes = ('00' + Math.floor(totalDuration % 60)).slice(-2);
                let totalTime = `${minutes}:${secondes}`;
                document.getElementById('time-total').innerText = totalTime;
            })



            // Set the song title
        }



        function closeElement(element) {
            console.log("Function called.");
            var parent = element.parentElement.parentElement.parentElement;
            console.log("Parent element:", parent);
            if (parent) {
                parent.style.display = 'none';
                console.log("Parent element hidden.");
            } else {
                console.log("Parent element not found.");
            }
        }
    </script>

    <section class="album">
        <div class="big-player" id="costumeWave">
            <div>
                <button class="close-player"><i class="fa-solid fa-x" aria-hidden="true"></i></button>
            </div>
            <div class="player top-player" id="soundPlayerBig">

                <div class="song-name" id="song-name">01. So What's next ?</div>
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
            {{-- main song  --}}
            @include('components.main-song')

            <p class="nw-albm-mob">new album</p>
            <div class="row album-row-mobile">

                <div class="col-xs-12 home-album">
                    <div class="play-song">
                        <button class="play-song-mobile play-music-page"><i class="fa-solid fa-play"
                                aria-hidden="true"></i></button>
                        <img src="assets/img/album-cover.jpg" alt="">
                    </div>

                    <div class="social album-home-cover-link">

                        <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i
                                class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                        <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i
                                class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                        <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i
                                class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                        <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank">
                            <i class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
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
            </div>

        </div>
    </section>
    <section class="releases music-page">
        <div class="wrapper">
            <div class="title">
                <h1>DERNIÈRES PUBLICATIONS</h1>
            </div>



            <div class="row desktop-row rl-desk">
                @foreach ($albums as $album)
                    <div class="col-md-3 albumDetails" id="album-{{ $album->id }}">
                        <div class="rel-card">
                            <div class="image">
                                <img src="{{ $album->cover }}" alt="">
                            </div>

                            <div class="social rel-card-link">
                                @foreach ($album->links as $link)
                                    @switch($link['link'])
                                        @case('youtube')
                                            <a href="{{ $link['link'] }}" target="_blank"> <i class="fa-brands fa-youtube"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('spotify')
                                            <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-spotify"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('itunes')
                                            <a href="{{ $link['url'] }}" target="_blank"><i class="fa-brands fa-apple"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('deezer')
                                            <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-deezer"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('amazon')
                                            <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-amazon"
                                                    aria-hidden="true"></i></a>
                                        @break
                                    @endswitch
                                @endforeach

                            </div>


                        </div>
                        <h3>{{ $album->title }}</h3>
                        <h4>{{ $album->description }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>
    <section class="releases">
        <div class="wrapper desktop-row">
            <div class="title">
                <h1>NOS MEILLEURES CHANSONS</h1>
                <a class="cta-header music-cta" href="javascript:void(0)">see more</a>
            </div>
            <div class="row best-songs">
                @foreach ($values as $value)
                    <div class="col-md-3">
                        <div class="rel-card">
                            <div class="image">
                                <img src="{{ $value['cover'] }}" alt="">
                            </div>
                            <div class="social rel-card-link">
                                @foreach ($value['links'] as $link)
                                    @switch($link['link'])
                                        @case('youtube')
                                            <a href="{{ $link['link'] }}" target="_blank"> <i class="fa-brands fa-youtube"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('spotify')
                                            <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-spotify"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('itunes')
                                            <a href="{{ $link['url'] }}" target="_blank"><i class="fa-brands fa-apple"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('deezer')
                                            <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-deezer"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('amazon')
                                            <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-amazon"
                                                    aria-hidden="true"></i></a>
                                        @break
                                    @endswitch
                                @endforeach
                            </div>
                            <div class="overlay rel-card">
                                <div></div>
                                <div>
                                    <button class="play-big" id="play-button-{{ $loop->index }}"
                                        onclick="playAudio({{ json_encode($value) }})"><i class="fa-solid fa-play"
                                            aria-hidden="true"></i></button>
                                </div>
                                <div class="social rel-card-link">
                                    @foreach ($value['links'] as $link)
                                        @switch($link['link'])
                                            @case('youtube')
                                                <a href="{{ $link['link'] }}" target="_blank"> <i class="fa-brands fa-youtube"
                                                        aria-hidden="true"></i> </a>
                                            @break

                                            @case('spotify')
                                                <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-spotify"
                                                        aria-hidden="true"></i> </a>
                                            @break

                                            @case('itunes')
                                                <a href="{{ $link['url'] }}" target="_blank"><i class="fa-brands fa-apple"
                                                        aria-hidden="true"></i> </a>
                                            @break

                                            @case('deezer')
                                                <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-deezer"
                                                        aria-hidden="true"></i> </a>
                                            @break

                                            @case('amazon')
                                                <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-amazon"
                                                        aria-hidden="true"></i></a>
                                            @break
                                        @endswitch
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <h3 class="song-title">{{ $value['title'] }}</h3>
                        <h4>{{ $value['description'] }}</h4>
                    </div>
                @endforeach

            </div>
            <div class="row best-songs">
                @foreach ($values2 as $value)
                    <div class="col-md-3">
                        <div class="rel-card">
                            <div class="image">
                                <img src="{{ $value['url'] }}" alt="">
                            </div>
                            <div class="social rel-card-link">

                                @foreach ($value['links'] as $link)
                                    @switch($link['link'])
                                        @case('youtube')
                                            <a href="{{ $link['link'] }}" target="_blank"> <i class="fa-brands fa-youtube"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('spotify')
                                            <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-spotify"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('itunes')
                                            <a href="{{ $link['url'] }}" target="_blank"><i class="fa-brands fa-apple"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('deezer')
                                            <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-deezer"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('amazon')
                                            <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-amazon"
                                                    aria-hidden="true"></i></a>
                                        @break
                                    @endswitch
                                @endforeach

                            </div>
                            <div class="overlay rel-card">
                                <div></div>
                                <div>
                                    <button class="play-big"><i class="fa-solid fa-play" aria-hidden="true"></i></button>
                                </div>
                                <div class="social rel-card-link">

                                    @foreach ($value['links'] as $link)
                                        @switch($link['link'])
                                            @case('youtube')
                                                <a href="{{ $link['link'] }}" target="_blank"> <i class="fa-brands fa-youtube"
                                                        aria-hidden="true"></i> </a>
                                            @break

                                            @case('spotify')
                                                <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-spotify"
                                                        aria-hidden="true"></i> </a>
                                            @break

                                            @case('itunes')
                                                <a href="{{ $link['url'] }}" target="_blank"><i class="fa-brands fa-apple"
                                                        aria-hidden="true"></i> </a>
                                            @break

                                            @case('deezer')
                                                <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-deezer"
                                                        aria-hidden="true"></i> </a>
                                            @break

                                            @case('amazon')
                                                <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-amazon"
                                                        aria-hidden="true"></i></a>
                                            @break
                                        @endswitch
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <h3 class="song-title">{{ $value['title'] }}</h3>
                        <h4>{{ $value['description'] }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mobile-row music-page-row">
            @foreach ($values as $value)
                <div class="col-md-3">
                    <div class="rel-card">
                        <div class="image">
                            <img src="{{ $value['cover'] }}" alt="">
                        </div>
                        <div class="social rel-card-link">

                            @foreach ($value['links'] as $link)
                                @switch($link['link'])
                                    @case('youtube')
                                        <a href="{{ $link['link'] }}" target="_blank"> <i class="fa-brands fa-youtube"
                                                aria-hidden="true"></i> </a>
                                    @break

                                    @case('spotify')
                                        <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-spotify"
                                                aria-hidden="true"></i> </a>
                                    @break

                                    @case('itunes')
                                        <a href="{{ $link['url'] }}" target="_blank"><i class="fa-brands fa-apple"
                                                aria-hidden="true"></i> </a>
                                    @break

                                    @case('deezer')
                                        <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-deezer"
                                                aria-hidden="true"></i> </a>
                                    @break

                                    @case('amazon')
                                        <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-amazon"
                                                aria-hidden="true"></i></a>
                                    @break
                                @endswitch
                            @endforeach

                        </div>
                        <div class="overlay rel-card">
                            <div></div>
                            <div>
                                <button class="play-big"><i class="fa-solid fa-play" aria-hidden="true"></i></button>
                            </div>
                            <div class="social rel-card-link">

                                @foreach ($value['links'] as $link)
                                    @switch($link['link'])
                                        @case('youtube')
                                            <a href="{{ $link['link'] }}" target="_blank"> <i class="fa-brands fa-youtube"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('spotify')
                                            <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-spotify"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('itunes')
                                            <a href="{{ $link['url'] }}" target="_blank"><i class="fa-brands fa-apple"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('deezer')
                                            <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-deezer"
                                                    aria-hidden="true"></i> </a>
                                        @break

                                        @case('amazon')
                                            <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-amazon"
                                                    aria-hidden="true"></i></a>
                                        @break
                                    @endswitch
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <h3 class="song-title">{{ $value['title'] }}</h3>
                    <h4>{{ $value['description'] }}</h4>
                </div>
             @endforeach
    </div>
</section>
<section class="song-page" id="specialPupUp">
    <div class="wrapper">
          <div class="title">
              <h1>Nos pistes</h1>
              <a class="cta-header music-cta close-cta" href="javascript:void(0)" id="main-popup">close</a>
          </div>
          <div class="row best-songs dispaly-flex">
          @foreach($songs as $value)
                <div class="col-md-3">
                    <div class="rel-card">
                        <div class="image">
                            <img src="{{$value['cover']}}" alt="">
                        </div>
                        <div class="social rel-card-link">
                            @foreach($value['links'] as $link)
                                @switch($link['link']) 
                                    @case('youtube')
                                        <a href="{{$link['link']}}" target="_blank"> <i class="fa-brands fa-youtube" aria-hidden="true"></i> </a>
                                        @break
                                    @case('spotify')
                                        <a href="{{$link['url']}}" target="_blank"> <i class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                                        @break
                                    @case('itunes')
                                        <a href="{{$link['url']}}" target="_blank"><i class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                                        @break
                                    @case('deezer')
                                        <a href="{{$link['url']}}" target="_blank">  <i class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                                        @break
                                    @case('amazon')
                                        <a href="{{$link['url']}}" target="_blank"> <i class="fa-brands fa-amazon" aria-hidden="true"></i></a>
                                        @break
                                @endswitch
                            @endforeach
                        </div>
                        <div class="overlay rel-card">
                            <div></div>
                            <div>
                                <button class="play-big" id="play-button-{{$loop->index}}" onclick="playAudio({{ json_encode($value) }})"><i class="fa-solid fa-play" aria-hidden="true"></i></button>
                            </div>
                            <div class="social rel-card-link">
                                @foreach($value['links'] as $link)
                                    @switch($link['link']) 
                                        @case('youtube')
                                            <a href="{{$link['link']}}" target="_blank"> <i class="fa-brands fa-youtube" aria-hidden="true"></i> </a>
                                            @break
                                        @case('spotify')
                                            <a href="{{$link['url']}}" target="_blank"> <i class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                                            @break
                                        @case('itunes')
                                            <a href="{{$link['url']}}" target="_blank"><i class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                                            @break
                                        @case('deezer')
                                            <a href="{{$link['url']}}" target="_blank">  <i class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                                            @break
                                        @case('amazon')
                                            <a href="{{$link['url']}}" target="_blank"> <i class="fa-brands fa-amazon" aria-hidden="true"></i></a>
                                            @break
                                    @endswitch
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <h3 class="song-title">{{$value['title']}}</h3>
                    <h4>{{$value['description']}}</h4>
                </div>
             @endforeach  
          </div>

        </div>
        <div class="wrapper">
            <div class="title song-page-title">

                <h1>Nos pistes</h1>
                <button type="button" class="cls-pan">
                    <i class="fa-solid fa-xmark" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </section>
    @foreach ($albums as $album)
        <section class="song-page" id="popup-{{ $album->id }}">
            <div class="wrapper">
                <div class="title">
                    <h1>{{ $album->title }}</h1>
                    <a class="cta-header music-cta close-cta" href="javascript:void(0)"
                        onclick="closeElement(this)">close</a>
                </div>
                <div class="row best-songs dispaly-flex">
                    @foreach ($album->songs as $value)
                        <div class="col-md-3">
                            <div class="rel-card">
                                <div class="image">
                                    <img src="{{ $value['cover'] }}" alt="">
                                </div>
                                <div class="social rel-card-link">

                                    @foreach ($value['links'] as $link)
                                        @switch($link['link'])
                                            @case('youtube')
                                                <a href="{{ $link['link'] }}" target="_blank"> <i class="fa-brands fa-youtube"
                                                        aria-hidden="true"></i> </a>
                                            @break

                                            @case('spotify')
                                                <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-spotify"
                                                        aria-hidden="true"></i> </a>
                                            @break

                                            @case('itunes')
                                                <a href="{{ $link['url'] }}" target="_blank"><i class="fa-brands fa-apple"
                                                        aria-hidden="true"></i> </a>
                                            @break

                                            @case('deezer')
                                                <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-deezer"
                                                        aria-hidden="true"></i> </a>
                                            @break

                                            @case('amazon')
                                                <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-amazon"
                                                        aria-hidden="true"></i></a>
                                            @break
                                        @endswitch
                                    @endforeach

                                </div>
                                <div class="overlay rel-card">
                                    <div></div>
                                    <div>
                                        <button class="play-big"><i class="fa-solid fa-play"
                                                aria-hidden="true"></i></button>
                                    </div>
                                    <div class="social rel-card-link">

                                        @foreach ($value['links'] as $link)
                                            @switch($link['link'])
                                                @case('youtube')
                                                    <a href="{{ $link['link'] }}" target="_blank"> <i
                                                            class="fa-brands fa-youtube" aria-hidden="true"></i> </a>
                                                @break

                                                @case('spotify')
                                                    <a href="{{ $link['url'] }}" target="_blank"> <i
                                                            class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                                                @break

                                                @case('itunes')
                                                    <a href="{{ $link['url'] }}" target="_blank"><i class="fa-brands fa-apple"
                                                            aria-hidden="true"></i> </a>
                                                @break

                                                @case('deezer')
                                                    <a href="{{ $link['url'] }}" target="_blank"> <i
                                                            class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                                                @break

                                                @case('amazon')
                                                    <a href="{{ $link['url'] }}" target="_blank"> <i
                                                            class="fa-brands fa-amazon" aria-hidden="true"></i></a>
                                                @break
                                            @endswitch
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <h3 class="song-title">{{ $value['title'] }}</h3>
                            <h4>{{ $value['description'] }}</h4>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="wrapper">
                <div class="title song-page-title">

                    <h1>Nos pistes</h1>
                    <button type="button" class="cls-pan">
                        <i class="fa-solid fa-xmark" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </section>
    @endforeach

<script type="module">
    var musCta = document.getElementById('seeMoreSection');
    console.log(musCta);
    console.log("#######edfdfsfds#####" , musCta)
    musCta.addEventListener('click', function() {
        let songPage = document.getElementById('specialPupUp');
        console.log(songPage);
        
            songPage.classList.add('appear')
            songPage.classList.remove('fade')
            songPage.style.display = "block"
        
    })
    let btns = document.querySelectorAll('.control button')
    console.log("######",btns);
    let icon = document.querySelectorAll('.control button i')
    let btns2 = document.querySelectorAll('.control-two button')
    let icon2 = document.querySelectorAll('.control-two button i')
    let closePlayer = document.querySelector('.close-player');
    let mainCLosePuP = document.getElementById('main-popup') ; 
        let albumDetail = document.querySelectorAll('.albumDetails') ;
        console.log("#####album",albumDetail);
        albumDetail.forEach(element => {
            element.addEventListener('click', function(e) {
                console.log(element.id);
                const list = element.id.split('-');
                const id = list[list.length - 1];
                const popupId = 'popup-' + id
                console.log(popupId);
                const disppalyElement = document.getElementById(popupId);
                disppalyElement.style.display = "block";
            })
        });
        console.log("######", albumDetail);
        let playOverlay = document.querySelectorAll('.play-overlay');
        let pauseOverlay = document.querySelectorAll('.pause-overlay');
        let startBigPlayer = document.querySelectorAll('.play-big');
        let songName = document.querySelector('.song-name');
        let songTitle = document.querySelectorAll('.song-title')
        let songPage = document.querySelector('.song-page');
        let clsPage = document.querySelector('.close-cta');
        let clsPan = document.querySelector('.cls-pan');
        let musCta = document.querySelectorAll('.music-cta')
        let playSng = document.querySelector('.play-song-mobile')
        let iframe = document.getElementsByTagName('iframe')[0]
        const playStopAction = document.getElementById('play-stop-button') ; 
       
        playStopAction.addEventListener('click', function(event) {
            // Your event handling code here
            const  playButton = document.getElementById('wave-play-two') ; 
            console.log('Play button clicked!');
            if(play == true ){
                playButton.classList.remove('fa-pause');
                playButton.classList.add('fa-play');
                play = false ; 
                wavesurfer.pause();
                

            }else {
                playButton.classList.remove('fa-play');
                playButton.classList.add('fa-pause');
                play = true ; 
                wavesurfer.play();
              
            }
        });
        
    closePlayer.addEventListener('click', function($event){
        let elementToshow = document.getElementById('costumeWave') ; 
        elementToshow.style.display = "none";
        wavesurfer.destroy();
    })
    mainCLosePuP.addEventListener('click',function($event){
        console.log("test test test ");
        let ele = document.getElementById('specialPupUp');
        console.log(ele);
        ele.style.display = "none";
    })
  
        
    </script>
  @endsection