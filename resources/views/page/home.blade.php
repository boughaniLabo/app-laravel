@extends('layout.main')

@section('title', 'Home')

@section('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/2.0.4/wavesurfer.min.js"
        integrity="sha512-mhqErQ0f2UqnbsjgKpM96XfxVjVMnXpszEXKmnJk8467vR8h0MpiPauil8TKi5F5DldQGqNUO/XTyWbQku22LQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var play = false;

        function playAudio(song) {
            var playButton = document.getElementById('wave-play-two');

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
                var currentTime = wavesurfer.getCurrentTime();
                const totaTime = document.getElementById('time-total').innerText = totalTime;
                wavesurfer.on('audioprocess', function() {
                    var currentTime = wavesurfer.getCurrentTime();
                    updateTimeDisplay(currentTime);
                });
                playButton.classList.remove('fa-play');
                playButton.classList.add('fa-pause');
                play = true;

            })

            // Set the song title
        }

        function updateTimeDisplay(currentTime) {
            var minutes = Math.floor(currentTime / 60);
            var seconds = Math.floor(currentTime % 60);
            var formattedTime = padZero(minutes) + ':' + padZero(seconds);
            document.getElementById('time-current-two').textContent = formattedTime;
        }

        function padZero(number) {
            return (number < 10 ? '0' : '') + number;
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
    <section class="album" id="album">
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
                    <button id="play-stop-button"><i class="fa-solid fa-play" aria-hidden="true"
                            id="wave-play-two"></i></button>
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
        </div>
    </section>
    <section class="releases">
        <div class="wrapper">
            <div class="title">
                <h1>DERNIÈRES PUBLICATIONS</h1>
            </div>
            <div class="mobile-row">
                @foreach ($latestMobile as $value)
                    <div class="col-md-3">
                        <div class="rel-card pb-3">
                            <div class="image">
                            <button class="play-song-mobile" id="play-button-{{ $loop->index }}"
                                        onclick="playAudio({{ json_encode($value) }})"><i class="fa-solid fa-play"
                                            aria-hidden="true"></i></button>
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
                         
                        </div>
                        <h3 class="song-title">{{ $value['title'] }}</h3>
                        <h4>{{ $value['description'] }}</h4>
                    </div>
                @endforeach
            </div>
            <div class="mobile-row">
                @foreach ($latestMobile2 as $value)
                    <div class="col-md-3">
                        <div class="rel-card pb-3">
                            <div class="image">
                            <button class="play-song-mobile" id="play-button-{{ $loop->index }}"
                                        onclick="playAudio({{ json_encode($value) }})"><i class="fa-solid fa-play"
                                            aria-hidden="true"></i></button>
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
                       
                        </div>
                        <h3 class="song-title">{{ $value['title'] }}</h3>
                        <h4>{{ $value['description'] }}</h4>
                    </div>
                @endforeach
            </div>
            <div class="row desktop-row">
                @foreach ($latests as $value)
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
                                <div class="h-[167px] max-[1366px]:h-[130px]">
                                    <button class="play-big" style="font-size: 105px;"  id="play-button-{{ $loop->index }}"
                                        onclick="playAudio({{ json_encode($value) }})"><i class="fa-solid fa-play"
                                            aria-hidden="true"></i></button>
                                </div>
                                <div class="social rel-card-link">
                                    @foreach ($value['links'] as $link)
                                        @switch($link['link'])
                                            @case('youtube')
                                                <a href="{{ $link['url'] }}" target="_blank"> <i class="fa-brands fa-youtube"
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
    </section>
    <section class="videos">
        <div class="wrapper ">
            <div class="title title-wrapper">
                <h1>Videos</h1>
                <a href="https://www.youtube.com/@rafaeldato-pianistcomposer5130" target="_blank" class="cta-video">see
                    more</a>
            </div>
            <div class="row">

                <div class="col-md-6 mr-5 frame-div">
                    <iframe class="youframe" width="600" height="383" src="{{ $videos[0]['url'] }}"
                        frameborder="0" allowfullscreen="" id="youtube-select">
                    </iframe>
                    <h2 class="frame-title">{{ $videos[0]['title'] }}</h2>

                </div>
                <div class="col-md-5 video-list">
                    @foreach ($videos as $video)
                        <div class="video-select hover:bg-slate-200 cursor-pointer">
                            <?php
                            //Extract video ID from URL
                            $videoId = '';
                            preg_match('/(?:embed\/|v=)([a-zA-Z0-9_-]{11})/', $video['url'], $matches);
                            if (isset($matches[1])) {
                                $videoId = $matches[1];
                            }
                            
                            // Construct thumbnail URL
                            $thumbnailUrl = "https://img.youtube.com/vi/{$videoId}/mqdefault.jpg";
                            ?>
                            <div class="w-32 h-32 bg-cover bg-center rounded overflow-hidden"
                                style="background: url('{{ $thumbnailUrl }}')">
                            </div>
                            <div class="flex-1">
                                <h3 class="thumb-title">{{ $video['title'] }}</h3>
                                <p>{{ $video['description'] }}</p>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <section class="gallery">
        <div class="wrapper">
            <div class="title title-wrapper">
                <h1>GALERIE</h1>
                <a href="https://www.instagram.com/rafael_dato/" target="_blank" class="cta-video">voir plus</a>
            </div>
            <div class="gallery-grid">
                <div class="gallery-row-1">
                    @if (isset($gallerie1[0]))
                        <img src="{{ $gallerie1[0] }}" class="sm-img" alt="">
                    @endif

                    @if (isset($gallerie1[1]))
                        <img src="{{ $gallerie1[1] }}" class="lg-img" alt="">
                    @endif
                </div>
                <div class="gallery-row-2">
                    @if (isset($gallerie2[0]))
                        <img src="{{ $gallerie2[0] }}" class="lg-img" alt="">
                    @endif

                    @if (isset($gallerie2[1]))
                        <img src="{{ $gallerie2[1] }}" class="sm-img" alt="">
                    @endif
                </div>
            </div>
            <div class="mobile-gallery">
                <div class="row">
                    @if (isset($gal[0]))
                        <div class="col-md-3 card-img">
                            <div class="gal-image">
                                <img src="{{ $gal[0] }}" alt="">
                            </div>

                        </div>
                    @endif
                    @if (isset($gal[1]))
                        <div class="col-md-3 card-img">
                            <div class="gal-image">
                                <img src="{{ $gal[1] }}" alt="">
                            </div>

                        </div>
                    @endif
                </div>
                <div class="row">
                    @if (isset($gal[2]))
                        <div class="gal-image-big">
                            <img src="{{ $gal[2] }}" alt="">
                        </div>
                    @endif
                </div>
                <div class="row-grid">
                    @if (isset($gal[3]))
                        <div class="gal-image gr-1">
                            <img src="{{ $gal[3] }}" alt="">
                        </div>
                    @endif

                    @if (isset($gal[4]))
                        <div class="gal-image gr-2">
                            <img src="{{ $gal[4] }}" alt="">
                        </div>
                    @endif

                    @if (isset($gal[5]))
                        <div class="gal-image gr-3">
                            <img src="{{ $gal[5] }}" alt="">
                        </div>
                    @endif
                </div>
                <div class="row">
                    @if (isset($gal[6]))
                        <div class="gal-image-big">
                            <img src="{{ $gal[6] }}" alt="">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="mobile-tour">
        <div class="wrapper">
            <div class="title">
                <h1>APPARITIONS PRÉCÉDENTES</h1>
                <a href="?lng=en&amp;p=Tour" class="cta-video py-0">see more</a>
            </div>
            <ul class="tourlist">
                @foreach ($tours as $tour)
                    :
                    <div class="tour-date-mobile">
                        <li>
                            <div class="day">
                                <span>{{ \Carbon\Carbon::parse($tour['date'])->format('d') }}</span>
                            </div>
                            <div class="monthy">
                                <p>{{ \Carbon\Carbon::parse($tour['date'])->locale('fr')->translatedFormat('F Y') }}</p>
                                <div class="place">
                                    <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                                    <span class="place"> {{ $tour['location'] }}</span>
                                </div>
                            </div>
                            <div class="hour">
                                <p>{{ $tour['time'] }}</p>
                            </div>
                        </li>
                        <a href="@isset($tour['link']) {{ $tour['link'] }} @else # @endisset"
                            class="cta-mobile-ticket">out of stock</a>
                    </div>
                @endforeach

            </ul>

        </div>
    </section>
    <section class="tour">
        <div class="wrapper tour-section">
            <div class="title">
                <h1>APPARITIONS PRÉCÉDENTES</h1>
                <a href="?lng=en&amp;p=Tour" class="cta-video">see more</a>
            </div>
            <ul class="tourlist">
                @foreach ($tours as $tour)
                    <li>
                        <div class="tour-date">
                            <h1>{{ \Carbon\Carbon::parse($tour['date'])->format('d') }}</h1>
                            <div class="day-h">
                                <p>{{ \Carbon\Carbon::parse($tour['date'])->locale('fr')->translatedFormat('F Y') }}</p>
                                <p>{{ $tour['time'] }}</p>
                            </div>
                        </div>
                        <div class="tour-loc">
                            <p>{{ $tour['title'] }}</p>
                            <p><i class="fa-solid fa-location-dot" aria-hidden="true"></i>{{ $tour['location'] }}</p>
                        </div>
                        <a href="@isset($tour['link']) {{ $tour['link'] }} @else # @endisset"
                            class="cta-video">out of stock</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <script type="module">
        let navEl = document.querySelectorAll(".nav a")
        navEl[0].classList.add('active')

        const wavesurfer2 = wavesurfer5.create({
            container: '#waveform-two',
            waveColor: '#B5D9D9',
            progressColor: '#1E96A6',
            url: 'assets/audio.mp3',
            barWidth: 2,
            height: 50,
            cursorWidth: 0,
        })
        wavesurfer5.on('ready', () => {
            var totalDuration = wavesurfer5.getDuration();
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
        let btns = document.querySelectorAll('.control button')
        let icon = document.querySelectorAll('.control button i')
        let btns2 = document.querySelectorAll('.control-two button')
        let icon2 = document.querySelectorAll('.control-two button i')
        for (let i = 0; i < btns.length; i++) {
            btns[i].addEventListener('click', function() {
                switch (i) {
                    case 0:
                        wavesurfer5.seekTo(0);
                        break;
                    case 1:
                        wavesurfer5.playPause();
                        if (icon[1].className === 'fa-solid fa-play') {
                            icon[1].className = 'fa-solid fa-pause'
                        } else {
                            icon[1].className = 'fa-solid fa-play'
                        }
                        break;
                    case 2:
                        wavesurfer5.skip(2);
                        break;
                    case 3:
                        if (wavesurfer5.getMuted() && icon[3].className === 'fa-solid fa-volume-xmark') {
                            icon[3].className = 'fa-solid fa-volume-high'
                            wavesurfer5.setMuted(false);
                        } else {
                            wavesurfer5.setMuted(true);
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

        wavesurfer5.on('audioprocess', function() {

            if (wavesurfer5.isPlaying()) {
                var currentTime = wavesurfer5.getCurrentTime();
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

        

        let playSng = document.querySelector('.play-song-mobile')
        playSng.addEventListener('click', function() {
            console.log('hi')
        })
    </script>

    <script>
        let select = document.querySelectorAll('.video-select');
        let frameSelect = document.getElementById('youtube-select');
        let thumbTitle = document.querySelectorAll('.thumb-title');
        let frameTitle = document.querySelector('.frame-title');

        for (let i = 0; i < select.length; i++) {
            select[i].addEventListener('click', () => {
                @foreach ($videos as $index => $video)
                    if (i === {{ $index }}) {
                        frameSelect.src =
                            "{{ $video['url'] }}"
                        frameTitle.innerText = thumbTitle[{{ $index }}].innerText
                    } else
                @endforeach {
                    console.log('no')
                }
            })
        }
    </script>
    <script type="module">
        var musCta = document.getElementById('seeMoreSection');
        console.log(musCta);
        console.log("#######edfdfsfds#####", musCta)
        musCta.addEventListener('click', function() {
            let songPage = document.getElementById('specialPupUp');
            console.log(songPage);

            songPage.classList.add('appear')
            songPage.classList.remove('fade')
            songPage.style.display = "block"

        })
        let btns = document.querySelectorAll('.control button')
        console.log("######", btns);
        let icon = document.querySelectorAll('.control button i')
        let btns2 = document.querySelectorAll('.control-two button')
        let icon2 = document.querySelectorAll('.control-two button i')
        let mainCLosePuP = document.getElementById('main-popup');
        let albumDetail = document.querySelectorAll('.albumDetails');
        console.log("#####album", albumDetail);
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
        const playStopAction = document.getElementById('play-stop-button');

        playStopAction.addEventListener('click', function(event) {
            // Your event handling code here
            const playButton = document.getElementById('wave-play-two');
            console.log('Play button clicked!');
            if (play == true) {
                playButton.classList.remove('fa-pause');
                playButton.classList.add('fa-play');
                play = false;
                wavesurfer.pause();


            } else {
                playButton.classList.remove('fa-play');
                playButton.classList.add('fa-pause');
                play = true;
                wavesurfer.play();

            }
        });
        mainCLosePuP.addEventListener('click', function($event) {
            console.log("test test test ");
            let ele = document.getElementById('specialPupUp');
            console.log(ele);
            ele.style.display = "none";
        })
    </script>
    <script type="module">
        let btns = document.querySelectorAll('.control button')
        console.log("######", btns);
        let icon = document.querySelectorAll('.control button i')
        let btns2 = document.querySelectorAll('.control-two button')
        let icon2 = document.querySelectorAll('.control-two button i')
        let closePlayer = document.querySelector('.close-player');
        let playOverlay = document.querySelectorAll('.play-overlay');
        let pauseOverlay = document.querySelectorAll('.pause-overlay');
        let startBigPlayer = document.querySelectorAll('.play-big');
        let songName = document.querySelector('.song-name');
        let songTitle = document.querySelectorAll('.song-title')

        let clsPage = document.querySelector('.close-cta');
        let clsPan = document.querySelector('.cls-pan');


        let playSng = document.querySelector('.play-song-mobile')
        let iframe = document.getElementsByTagName('iframe')[0]
        const playStopAction = document.getElementById('play-stop-button');

        playStopAction.addEventListener('click', function(event) {
            // Your event handling code here
            const playButton = document.getElementById('wave-play-two');
            console.log('Play button clicked!');
            if (play == true) {
                playButton.classList.remove('fa-pause');
                playButton.classList.add('fa-play');
                play = false;
                wavesurfer.pause();


            } else {
                playButton.classList.remove('fa-play');
                playButton.classList.add('fa-pause');
                play = true;
                wavesurfer.play();

            }
        });

        closePlayer.addEventListener('click', function($event) {
            console.log("testest");
            let elementToshow = document.getElementById('costumeWave');
            elementToshow.style.display = "none";
            wavesurfer.destroy();
        })
    </script>
@endsection
