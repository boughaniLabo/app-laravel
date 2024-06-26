<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/2.0.4/wavesurfer.min.js"
    integrity="sha512-mhqErQ0f2UqnbsjgKpM96XfxVjVMnXpszEXKmnJk8467vR8h0MpiPauil8TKi5F5DldQGqNUO/XTyWbQku22LQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="row album-row min-[880px]:flex flex-row w-full flex-nowrap">
    <div class="col-md-6">
        <div class="home-album">
            <img src="{{ $mainSong->cover }}" alt="" class="alb-img h-[300px] w-auto">

            <div class="social album-home-cover-link">
                <a href="{{ $mainSong->links[4]['url'] }}" target="_blank" class="social-link"> <i
                        class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                <a href="{{ $mainSong->links[3]['url'] }}" target="_blank" class="social-link"> <i
                        class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                <a href="{{ $mainSong->links[2]['url'] }}" target="_blank"> <i class="fa-brands fa-deezer"
                        aria-hidden="true"></i> </a>
                <a href="{{ $mainSong->links[1]['url'] }}" target="_blank" class="social-link"> <i
                        class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
                <a href="{{ $mainSong->links[0]['url'] }}" target="_blank" class="social-link"> <i
                        class="fa-brands fa-youtube" aria-hidden="true"></i> </a>

            </div>
            <div class="overlay flex flex-col justify-center gap-[20px] h-full">
                <div class="h-[300px]">
                    <button class="play-overlay"><i class="fa-solid fa-play" aria-hidden="true"></i></button>
                </div>
                <div class="social album-home-cover-link items-center">
                    <a href="{{ $mainSong->links[4]['url'] }}" target="_blank" class="social-link mb-0"> <i
                            class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                    <a href="{{ $mainSong->links[3]['url'] }}" target="_blank" class="social-link mb-0"> <i
                            class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                    <a href="{{ $mainSong->links[2]['url'] }}" target="_blank" class="social-link mb-0"> <i
                            class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                    <a href="{{ $mainSong->links[1]['url'] }}" target="_blank" class="social-link mb-0"> <i
                            class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
                    <a href="{{ $mainSong->links[0]['url'] }}" target="_blank" class="social-link mb-0"> <i
                            class="fa-brands fa-youtube" aria-hidden="true"></i> </a>
                </div>
            </div>

        </div>
        <div class="home-album youtube-frame">

            <iframe width="500" height="350" frameborder="0" allowfullscreen="" id="wnframe" allow="autoplay">
            </iframe>
            <div class="social album-home-cover-link">
                <a href="{{ $mainSong->links[4]['url'] }}" target="_blank" class="social-link"> <i
                        class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                <a href="{{ $mainSong->links[3]['url'] }}" target="_blank" class="social-link"> <i
                        class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                <a href="{{ $mainSong->links[2]['url'] }}" target="_blank"> <i class="fa-brands fa-deezer"
                        aria-hidden="true"></i> </a>
                <a href="{{ $mainSong->links[1]['url'] }}" target="_blank" class="social-link"> <i
                        class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
                <a href="{{ $mainSong->links[0]['url'] }}" target="_blank" class="social-link"> <i
                        class="fa-brands fa-youtube" aria-hidden="true"></i> </a>

            </div>
            <div class="overlay">
                <div></div>
                <div>
                    <button class="pause-overlay"><i class="fa-solid fa-pause" aria-hidden="true"></i></button>
                </div>
                <div class="social album-home-cover-link">
                    <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"
                        class="social-link"> <i class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                    <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"
                        class="social-link"> <i class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                    <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i
                            class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                    <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank"
                        class="social-link"> <i class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
                    <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"
                        class="social-link"> <i class="fa-brands fa-youtube" aria-hidden="true"></i> </a>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <h2 class="nw-albm">{{__('general.new_album')}}</h2>
        <div class="album-tit">
            <h1 class="alb-title w-1/2">
                {{ $mainSong->title }}
            </h1>
        </div>
        <p>
            {{ $mainSong->description }}
        </p>
        <div class="audio-player-mini">
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

                    <button id="play-stop-button2"><i class="fa-solid fa-play" id="wave-play-two2"
                            aria-hidden="true"></i></button>

                </div>
                <div id="waveform">
                    <div></div>
                </div>
                <div class="control"><button><i class="fa-solid fa-volume-high" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row album-row-mobile">
    <div class="col-xs-12 home-album">

        <div class="play-song">
            <img src="{{ $mainSong->cover }}" alt="">
        </div>
        <div class="social album-home-cover-link">
            <a href="{{ $mainSong->links[4]['url'] }}" target="_blank" class="social-link"> <i
                    class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
            <a href="{{ $mainSong->links[3]['url'] }}" target="_blank" class="social-link"> <i
                    class="fa-brands fa-apple" aria-hidden="true"></i> </a>
            <a href="{{ $mainSong->links[2]['url'] }}" target="_blank"> <i class="fa-brands fa-deezer"
                    aria-hidden="true"></i> </a>
            <a href="{{ $mainSong->links[1]['url'] }}" target="_blank" class="social-link"> <i
                    class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
            <a href="{{ $mainSong->links[0]['url'] }}" target="_blank" class="social-link"> <i
                    class="fa-brands fa-youtube" aria-hidden="true"></i> </a>
        </div>
    </div>
    <div class="col-xs-8">
        <div class="title mobile-titles">
            <h1 class="alb-title">
                {{ $mainSong->title }}
            </h1>
            <p>{{ Str::limit($mainSong->description, 100, '...') }}</p>
        </div>
    </div>
</div>


<script>
    let playOverlay = document.querySelectorAll('.play-overlay');
    let pauseOverlay = document.querySelectorAll('.pause-overlay');
    let startBigPlayer = document.querySelectorAll('.play-big');
    let songName = document.querySelector('.song-name');
    let closePlayer = document.querySelector('.close-player');
    let iframe = document.querySelector('#wnframe');


    playOverlay[0].addEventListener('click', () => {
        if (window.getComputedStyle(document.querySelector('.home-album')).display === 'flex') {
            playOverlay[0].style.display = "none"
            pauseOverlay[0].style.display = "block"
            document.querySelector('.youtube-frame').style.display = 'flex';
            document.querySelector('.home-album').style.display = 'none';
            iframe.setAttribute('src', "{{ $mainSong->video }}");
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

<script>
    console.log("test 12 12 ", document.getElementById("waveform-main-song"));
    const wavesurfer5 = WaveSurfer.create({
        container: '#waveform',
        waveColor: '#B5D9D9',
        progressColor: '#1E96A6',
        barWidth: 2,
        height: 50,
        cursorWidth: 0,

    });
    const mainMusic = '{{ $mainSong->audio }}';
    console.log(mainMusic);
    wavesurfer5.load(mainMusic)
    wavesurfer5.on('ready', () => {
        var totalDuration = wavesurfer5.getDuration();
        var minutes = Math.floor((totalDuration % 3600) / 60);
        var secondes = ('00' + Math.floor(totalDuration % 60)).slice(-2);
        let totalTime = `${minutes}:${secondes}`;
        var currentTime = wavesurfer5.getCurrentTime();
        const totaTime = document.getElementById('time-total').innerText = totalTime;
    })
    wavesurfer5.on('audioprocess', function() {
        var currentTime = wavesurfer5.getCurrentTime();
        updateTimeDisplay2(currentTime);
    });

    function updateTimeDisplay2(currentTime) {
        var minutes = Math.floor(currentTime / 60);
        var seconds = Math.floor(currentTime % 60);
        var formattedTime = padZero(minutes) + ':' + padZero(seconds);
        document.getElementById('time-current').textContent = formattedTime;
    }
    const playStopAction = document.getElementById('play-stop-button2');
    console.log("what is this ", playStopAction);
    playStopAction.addEventListener('click', function(event) {
        // Your event handling code here
        const playButton = document.getElementById('wave-play-two2');
        console.log('Play button clicked!');
        if (play == true) {
            playButton.classList.remove('fa-pause');
            playButton.classList.add('fa-play');
            play = false;
            wavesurfer5.pause();


        } else {
            playButton.classList.remove('fa-play');
            playButton.classList.add('fa-pause');
            play = true;
            wavesurfer5.play();

        }
    });
</script>
