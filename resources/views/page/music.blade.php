@extends('layout.main')
@section('title', 'Home')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/2.0.4/wavesurfer.min.js" integrity="sha512-mhqErQ0f2UqnbsjgKpM96XfxVjVMnXpszEXKmnJk8467vR8h0MpiPauil8TKi5F5DldQGqNUO/XTyWbQku22LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    
    function playAudio(song) {
        console.log(song);
        const wavesurfer = WaveSurfer.create({
            container: '#waveform',
            waveColor: '#B5D9D9',
            progressColor: '#1E96A6',
            barWidth: 2,
            height: 50,
            cursorWidth: 0,
        });
        const audio = new Audio(song.url);
        audio.crossOrigin = "anonymous";
        console.log(audio);
        document.getElementById('song-name').innerText = song.title;
        // Load audio from the audio element
        wavesurfer.load(audio);

        // Play the audio
        wavesurfer.play();

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
    <div class="player top-player">

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
        <div class="title">
            <h1>our best songs</h1>
            <a class="cta-header music-cta" href="javascript:void(0)">see more</a>
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
                        <img src="{{$value['url']}}" alt="">
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
      <div class="title song-page-title">
        
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
    import WaveSurfer from 'https://unpkg.com/wavesurfer.js@7/dist/wavesurfer.esm.js'
    const wavesurfer = WaveSurfer.create({
      container: '#waveform',
      waveColor: '#B5D9D9',
      progressColor: '#1E96A6',
      url: 'assets/audio.mp3',
      barWidth: 2,
      height: 50,
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
    
    let btns = document.querySelectorAll('.control button')
    console.log("######",btns);
    let icon = document.querySelectorAll('.control button i')
    let btns2 = document.querySelectorAll('.control-two button')
    let icon2 = document.querySelectorAll('.control-two button i')
    let closePlayer = document.querySelector('.close-player');
        closePlayer.addEventListener('click', function () {
            if (window.getComputedStyle(document.querySelector('.big-player')).display === 'block') {
                document.querySelector('.big-player').style.display = 'none';
                icon2[1].className = 'fa-solid fa-play'
                wavesurfer2.stop()
                }})
    for (let i = 0; i < btns.length; i++) {
        btns[i].addEventListener('click', function() {
        console.log("############",i);
            switch(i) {
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
                    }else{
                        wavesurfer.setMuted(true);
                        icon[3].className = 'fa-solid fa-volume-xmark'
                    }
                    
                    break;
                
            }
        })
            btns2[i].addEventListener('click', function() {
            switch(i) {
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
                    }else{
                        wavesurfer2.setMuted(true);
                        icon2[3].className = 'fa-solid fa-volume-xmark'
                    }
                    
                    break;
                
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
        let songPage = document.querySelector('.song-page');
        let clsPage = document.querySelector('.close-cta');
        let clsPan = document.querySelector('.cls-pan');
        let musCta = document.querySelectorAll('.music-cta')
        let playSng = document.querySelector('.play-song-mobile')
        let iframe = document.getElementsByTagName('iframe')[0]
        console.log("##################################",musCta)
        for (let i = 0; i < startBigPlayer.length; i++) {
            
            startBigPlayer[i].addEventListener('click', function(e) {
                console.log(i)
                if (window.getComputedStyle(document.querySelector('.big-player')).display === 'none') {
                    document.querySelector('.big-player').style.display = 'none';
                    document.querySelector('.big-player').style.display = 'block';}
                if (i === 1){
                songName.textContent = "01. So What's next ?";
                wavesurfer2.load('assets/album/audio08.mp3')
                icon2[1].className = 'fa-solid fa-play'
                } else if (i === 2){
                songName.textContent = "02. Friendly Walk";
                wavesurfer2.load('assets/album/audio03.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 3){
                songName.textContent = "03. When you touch the sky";
                wavesurfer2.load('assets/album/audio09.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 4){
                songName.textContent = "04. One Step Away From Dark Shadow";
                wavesurfer2.load('assets/album/audio06.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 5){
                songName.textContent = "05. How Deep Is The Ocean";
                wavesurfer2.load('assets/album/audio04.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 6){
                songName.textContent = "06. Folk Waltz";
                wavesurfer2.load('assets/album/audio02.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 7){
                songName.textContent = "07. Pop Song";
                wavesurfer2.load('assets/album/audio07.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 8){
                songName.textContent = "08. Hymn To Heal The Earth";
                wavesurfer2.load('assets/album/audio05.mp3')
                icon2[1].className = 'fa-solid fa-play'
            }
            }
            )
        }
        playOverlay[0].addEventListener('click', function() {
            if (window.getComputedStyle(document.querySelector('.home-album')).display === 'flex') {
                playOverlay[0].style.display = "none"
                pauseOverlay[0].style.display = "block"
                document.querySelector('.youtube-frame').style.display = 'flex';
                document.querySelector('.home-album').style.display = 'none';
                iframe.setAttribute('src', "https://www.youtube.com/embed/UcWu4IhHb9Q?autoplay=1")
            }
            
        });
        
        pauseOverlay[0].addEventListener('click', function() {
            if (window.getComputedStyle(document.querySelector('.youtube-frame')).display === 'flex') {
                document.querySelector('.youtube-frame').style.display = 'none';
                document.querySelector('.home-album').style.display = 'flex';
                playOverlay[0].style.display = "block"
                pauseOverlay[0].style.display = "none"
                iframe.setAttribute('src', "https://www.youtube.com/embed/UcWu4IhHb9Q?autoplay=0")
            }
        });
        
    let navEl = document.querySelectorAll(".nav a")
        navEl[3].classList.add('active-white')
        
        clsPage.addEventListener('click', function() {
            if (window.getComputedStyle(songPage).getPropertyValue('display') === 'block') {
                songPage.classList.remove('appear')
                songPage.classList.add('fade')
                songPage.style.display = "none"
            }
        })
        musCta[0].addEventListener('click', function() {
            console.log("test");
            if (window.getComputedStyle(songPage).getPropertyValue('display') === 'none') {
                songPage.classList.add('appear')
                songPage.classList.remove('fade')
                songPage.style.display = "block"
            }
        })
        clsPan.addEventListener('click', function() {
            if (window.getComputedStyle(songPage).getPropertyValue('display') === 'block') {
                songPage.classList.remove('appear')
                songPage.classList.add('fade')
                songPage.style.display = "none"
            }
        })
        playSng.addEventListener('click', function() {
            if (window.getComputedStyle(songPage).getPropertyValue('display') === 'none') {
                songPage.classList.add('appear')
                songPage.classList.remove('fade')
                songPage.style.display = "block"
            }
        })
    
    let strtPlayMobile = document.querySelectorAll('.play-song-mobile');
    for (let i = 1; i < strtPlayMobile.length; i++) {
        
        strtPlayMobile[i].addEventListener('click', function(e) {
            console.log(i)
            if (window.getComputedStyle(document.querySelector('.big-player')).display === 'none') {
                document.querySelector('.big-player').style.display = 'none';
                document.querySelector('.big-player').style.display = 'block';}
                if (i === 1){
                songName.textContent = "01. So What's next ?";
                wavesurfer2.load('assets/album/audio08.mp3')
                icon2[1].className = 'fa-solid fa-play'
                } else if (i === 2){
                songName.textContent = "02. Friendly Walk";
                wavesurfer2.load('assets/album/audio03.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 3){
                songName.textContent = "03. When you touch the sky";
                wavesurfer2.load('assets/album/audio09.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 4){
                songName.textContent = "04. One Step Away From Dark Shadow";
                wavesurfer2.load('assets/album/audio06.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 5){
                songName.textContent = "05. How Deep Is The Ocean";
                wavesurfer2.load('assets/album/audio04.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 6){
                songName.textContent = "06. Folk Waltz";
                wavesurfer2.load('assets/album/audio02.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 7){
                songName.textContent = "07. Pop Song";
                wavesurfer2.load('assets/album/audio07.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 8){
                songName.textContent = "08. Hymn To Heal The Earth";
                wavesurfer2.load('assets/album/audio05.mp3')
                icon2[1].className = 'fa-solid fa-play'
            }else if (i === 9){
                songName.textContent = "01. So What's next ?";
                wavesurfer2.load('assets/album/audio08.mp3')
                icon2[1].className = 'fa-solid fa-play'
                } else if (i === 16){
                songName.textContent = "02. Friendly Walk";
                wavesurfer2.load('assets/album/audio03.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 12){
                songName.textContent = "03. When you touch the sky";
                wavesurfer2.load('assets/album/audio09.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 13){
                songName.textContent = "04. One Step Away From Dark Shadow";
                wavesurfer2.load('assets/album/audio06.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 10){
                songName.textContent = "05. How Deep Is The Ocean";
                wavesurfer2.load('assets/album/audion04.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 15){
                songName.textContent = "06. Folk Waltz";
                wavesurfer2.load('assets/album/audio02.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 11){
                songName.textContent = "07. Pop Song";
                wavesurfer2.load('assets/album/audio07.mp3')
                icon2[1].className = 'fa-solid fa-play'
                }else if (i === 17){
                songName.textContent = "08. Hymn To Heal The Earth";
                wavesurfer2.load('assets/album/audio05.mp3')
                icon2[1].className = 'fa-solid fa-play'
            }else if (i === 14){
                songName.textContent = "09. All The Things You Are";
                wavesurfer2.load('assets/album/audio01.mp3')
                icon2[1].className = 'fa-solid fa-play'
            }
        }
        )
    }
    
        
    </script>
  @endsection