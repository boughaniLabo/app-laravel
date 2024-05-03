<div class="row album-row min-[880px]:flex flex-row w-full flex-nowrap">
    <div class="col-md-6">
        <div class="home-album">
            <div></div>
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
            <div class="overlay">
                <div></div>
                <div>
                    <button class="play-overlay"><i class="fa-solid fa-play" aria-hidden="true"></i></button>
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
        <h2 class="nw-albm">new album</h2>
        <div class="album-tit">
            <h1 class="alb-title w-1/2">
                {{ $mainSong->title }}
            </h1>
        </div>
        <p>
            {{ $mainSong->description }}
        </p>
        <div class="audio-player-mini h-fit">
            <div class="player top-player">
                <div class="song-name">{{ $mainSong->title }}</div>
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
                <div id="waveform-main-song">
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
            <p >{{ Str::limit($mainSong->description,100,'...') }}</p>
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

<script type="module">
     import WaveSurfer from 'https://unpkg.com/wavesurfer5.js@7/dist/wavesurfer5.esm.js'
        const wavesurfer5 = wavesurfer5.create({
            container: '#waveform-main-song',
            waveColor: '#B5D9D9',
            progressColor: '#1E96A6',
            barWidth: 2,
            barRadius: 10,
            height: 40,
            cursorWidth: 0,
            url: '{{ $mainSong->audio }}',
        });
</script>
