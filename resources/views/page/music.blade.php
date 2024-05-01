@extends('layout.main')
@section('title', 'Home')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/2.0.4/wavesurfer.min.js" integrity="sha512-mhqErQ0f2UqnbsjgKpM96XfxVjVMnXpszEXKmnJk8467vR8h0MpiPauil8TKi5F5DldQGqNUO/XTyWbQku22LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
 var play= false ; 

 function playAudio(song) {
    var playButton = document.getElementById('wave-play-two') ; 
    
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
        let elementToshow = document.getElementById('costumeWave') ; 
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
        wavesurfer.on('audioprocess', function () {
                    var currentTime = wavesurfer.getCurrentTime();
                    updateTimeDisplay(currentTime);
        });
        playButton.classList.remove('fa-play');
        playButton.classList.add('fa-pause');
        play = true ; 

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
                            <button id="play-stop-button"><i class="fa-solid fa-play" aria-hidden="true" id="wave-play-two"></i></button>
                            <button><i class="fa-solid fa-forward-step" aria-hidden="true"></i></button>
                        </div>
                        <div id="waveform-two"><div></div></div>
                        <div class="control-two"><button><i class="fa-solid fa-volume-high" aria-hidden="true"></i></button></div>
                    </div>
    </div>
    <div class="wrapper">   
        <div class="row album-row">
                <div class="col-md-6">
                    <div class="home-album">
                        
                        <div></div>
                        <img src="assets/img/album-cover.jpg" alt="" class="alb-img">

                        <div class="social album-home-cover-link">
                                <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank" class="social-link"> <i class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                                <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank" class="social-link"> <i class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                                <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                                <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank" class="social-link"> <i class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
                                <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank" class="social-link"> <i class="fa-brands fa-youtube" aria-hidden="true"></i> </a>
                                            
                        </div>
                        <div class="overlay">
                            <div></div>
                            <div>
                                <button class="play-overlay"><i class="fa-solid fa-play" aria-hidden="true"></i></button>
                            </div>
                            <div class="social album-home-cover-link">
                                    <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank" class="social-link"> <i class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                                    <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank" class="social-link"> <i class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                                    <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                                    <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank" class="social-link"> <i class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
                                    <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank" class="social-link"> <i class="fa-brands fa-youtube" aria-hidden="true"></i> </a>
                                            
                            </div>
                        </div>
            
                    </div>
                    <div class=" home-album youtube-frame">

                            <iframe width="500" height="350" src="https://www.youtube.com/embed/UcWu4IhHb9Q?enablejsapi=1" frameborder="0" allowfullscreen=""></iframe>
                                <div class="social album-home-cover-link">
                                <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank" class="social-link"> <i class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                                <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank" class="social-link"> <i class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                                <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                                <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank" class="social-link"> <i class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
                                <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank" class="social-link"> <i class="fa-brands fa-youtube" aria-hidden="true"></i> </a>
                                            
                        </div>
                        <div class="overlay">
                            <div></div>
                            <div>
                                <button class="pause-overlay"><i class="fa-solid fa-pause" aria-hidden="true"></i></button>
                            </div>
                            <div class="social album-home-cover-link">
                                    <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank" class="social-link"> <i class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                                    <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank" class="social-link"> <i class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                                    <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                                    <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank" class="social-link"> <i class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
                                    <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank" class="social-link"> <i class="fa-brands fa-youtube" aria-hidden="true"></i> </a>
                                            
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                <h2 class="nw-albm">new album</h2>
                <div class="album-tit">
                    <h1 class="alb-title">
                    so, what’s next?

                    </h1>
                </div>
                <p class="music-tit">
                Composed by Rafaël Dato during his health crisis and the constraints that beset him, the album "So What's Next?" frees itself from the boundaries between musical genres, to offer a sonic synthesis with jazz accents, capable of seducing an audience of profane and discerning music lovers alike.                    </p>
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
                            <button><i class="fa-solid fa-backward-step " aria-hidden="true"></i></button>
                            <button><i class="fa-solid fa-play" aria-hidden="true"></i></button>
                            <button><i class="fa-solid fa-forward-step" aria-hidden="true"></i></button>
                        </div>
                        <div id="waveform"><div></div></div>
                        <div class="control"><button><i class="fa-solid fa-volume-high" aria-hidden="true"></i></button></div>
                    </div>
                </div>
            </div>
        </div>
        <p class="nw-albm-mob">new album</p>
        <div class="row album-row-mobile">
            
            <div class="col-xs-12 home-album">
              <div class="play-song">
                <button class="play-song-mobile play-music-page"><i class="fa-solid fa-play" aria-hidden="true"></i></button>
                <img src="assets/img/album-cover.jpg" alt="">
              </div>                
                
                <div class="social album-home-cover-link">
                            
                            <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i class="fa-brands fa-spotify" aria-hidden="true"></i> </a>
                            <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i class="fa-brands fa-apple" aria-hidden="true"></i> </a>
                            <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i class="fa-brands fa-deezer" aria-hidden="true"></i> </a>
                            <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank"> <i class="fa-brands fa-amazon" aria-hidden="true"></i> </a>
                            <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i class="fa-brands fa-youtube" aria-hidden="true"></i> </a>
                                            
                </div>
            
            </div>
            <div class="col-xs-8">

                <div class="title mobile-titles">
                    <h1 class="alb-title">
                        so, what’s next?

                    </h1>
                    <p>
                    Composed by Rafaël Dato during the health crisis and the constraints that plag ued him, the album “So What's Next?.”                        </p>
                </div>
            </div>
                
            
        </div>
        <div class="row mobile">
            <p class="mobile-p">
            split the boundaries between musical genres, in order to offer a sound synthesis with jazz accents, able to attract an audience of both profane and knowledgeable music lovers                        </p>
        </div>
        
    </div>
</section>
<section class="releases music-page">
    <div class="wrapper">
        <div class="title">
            <h1>Latest releases</h1>
        </div>
        
        
        
        <div class="row desktop-row rl-desk">
            @foreach($albums as $album)
                <div class="col-md-3 albumDetails" id="album-{{$album->id}}">
                    <div class="rel-card">
                        <div class="image">
                            <img src="{{$album->cover}}" alt="">
                        </div>
                        
                            <div class="social rel-card-link">
                                @foreach($album->links as $link)
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
                            <h3>{{$album->title}}</h3>
                            <h4>{{$album->description}}</h4>
                    </div>
                 
                        
                
            @endforeach
        </div>
        </div>
    </div>
</section>
<section class="releases">
    <div class="wrapper desktop-row">
        <div class="title"  >
            <h1>our best songs</h1>
            <a class="cta-header music-cta" href="javascript:void(0)" id="seeMoreSection">see more</a>
        </div>
        <div class="row best-songs">
            @foreach($values as $value)
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
        <div class="row best-songs">
        @foreach($values2 as $value)
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
    <div class="mobile-row music-page-row">
    @foreach($values as $value)
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
</section>
<section class="song-page">
    <div class="wrapper">
          <div class="title">
              <h1>Nos pistes</h1>
              <a class="cta-header music-cta close-cta" href="javascript:void(0)">close</a>
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
                                <button class="play-big"><i class="fa-solid fa-play" aria-hidden="true"></i></button>
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
      <div class="title song-page-title" id="specialPupUp">
        
          <h1>Nos pistes</h1>
          <button type="button" class="cls-pan">
              <i class="fa-solid fa-xmark" aria-hidden="true"></i>
          </button>
      </div>
      </div>
</section>
@foreach($albums as $album)
<section class="song-page" id="popup-{{$album->id}}">
    <div class="wrapper">
          <div class="title">
              <h1>{{$album->title}}</h1>
              <a class="cta-header music-cta close-cta" href="javascript:void(0)" onclick="closeElement(this)">close</a>
            </div>
          <div class="row best-songs dispaly-flex">
          @foreach($album->songs as $value)
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
  
        let albumDetail = document.querySelectorAll('.albumDetails') ;
        console.log("#####album",albumDetail);
        albumDetail.forEach(element => {
                element.addEventListener('click', function(e) {
                    console.log(element.id);
                    const list = element.id.split('-') ; 
                    const  id = list[list.length- 1] ;  
                    const popupId = 'popup-'+id
                    console.log(popupId);
                    const disppalyElement = document.getElementById(popupId) ; 
                    disppalyElement.style.display = "block";
                })
        });
        console.log("######",albumDetail); 
        let playOverlay = document.querySelectorAll('.play-overlay');
        let pauseOverlay = document.querySelectorAll('.pause-overlay');
        let startBigPlayer = document.querySelectorAll('.play-big');
        let songName = document.querySelector('.song-name');
        let songTitle = document.querySelectorAll('.song-title')
      
        let clsPage = document.querySelector('.close-cta');
        let clsPan = document.querySelector('.cls-pan');
      
        
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
  
        
    </script>
  @endsection