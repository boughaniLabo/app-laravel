@extends('layout.main')
@section('title', 'Tour')
@section('content')
<section class="showcase tour-showcase" style="background-image: linear-gradient(180deg, #41414196 0%, #41414196 100%),url('assets/img/landing2.jpg');">
    <div class="topbar">
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
                    <button type="button" id="menu-btn">
            <i class="fa-solid fa-bars" aria-hidden="true"></i>
        </button>
                </div>
                <nav class="topnav">
                    <div class="navbar" id="menu">
        
            <nav class="nav music-nav">
                <a href="/" class="active">Home</a>
                <a href="/bio">Bio</a>
                <a href="services">Services</a>
                <a href="music">Music</a>
                <a href="tour">Tour</a>
                <a href="blog">Blog</a>
                <a href="contact">Contact</a>
                
            </nav>
        
    </div>
</nav>
</div>

    </div>
    
    <section class="tour">
<div class="tour-page-wrapper">
<div class="row tour-page">
    <div class="col-lg-4">
        <div class="tour-deets">
            <div class="tour-location">
                <h2>“Les rendez-vous d’ailleurs”</h2>
                <p>June 2017 10:00pm</p>
            </div>
    
            <div class="tour-desc">
                <p>Lorem ipsum dolor sit amet consectetur. Et lorem egestas nec faucibus sed nullam.</p>

            </div>
            <div class="tour-img zero">

            </div>
        </div>
        <div class="tour-deets">
            <div class="tour-location">
                <h2>Espace Ararat</h2>
                <p>February, 2018 - 08:00pm</p>
            </div>
    
            <div class="tour-desc">
                <p>Lorem ipsum dolor sit amet consectetur. Et lorem egestas nec faucibus sed nullam.</p>

            </div>
            <div class="tour-img one">

            </div>
        </div>
        <div class="tour-deets">
            <div class="tour-location">
                <h2>Centre Culturel “Isadora Duncan”</h2>
                <p>November 2018 10:00pm</p>
            </div>
    
            <div class="tour-desc">
                <p>Lorem ipsum dolor sit amet consectetur. Et lorem egestas nec faucibus sed nullam.</p>

            </div>
            <div class="tour-img two">

            </div>
        </div>
        <div class="tour-deets">
            <div class="tour-location">
                <h2>“Les rendez-vous d’ailleurs”</h2>
                <p>december 2018 8:00pm</p>
            </div>
    
            <div class="tour-desc">
                <p>Lorem ipsum dolor sit amet consectetur. Et lorem egestas nec faucibus sed nullam.</p>

            </div>
            <div class="tour-img zero">

            </div>
        </div>
    </div>
    <div class="col-lg-8 ">

    
    <ul class="tourlist tour-page">
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
          <p><i class="fa-solid fa-location-dot" aria-hidden="true"></i> paris, france FR</p>
        </div>
        <a href="#" class="cta-video">stock epuisé</a>
      </li>
      <li>
        <div class="tour-date">
          <h1>09</h1>
          <div class="day-h">
            <p>february, 2018</p>
            <p>8:00 pm</p>
          </div>
        </div>
        <div class="tour-loc">
          <p>Espace ararat</p>
          <p><i class="fa-solid fa-location-dot" aria-hidden="true"></i> paris, france FR</p>
        </div>
        <a href="#" class="cta-video">stock epuisé</a>
      </li>
      <li>
        <div class="tour-date">
          <h1>17</h1>
          <div class="day-h">
            <p>november 2018</p>
            <p>8:00 pm</p>
          </div>
        </div>
        <div class="tour-loc">
          <p>Centre Culturel “Isadora Duncan”</p>
          <p><i class="fa-solid fa-location-dot" aria-hidden="true"></i> paris, france FR</p>
        </div>
        <a href="#" class="cta-video">stock epuisé</a>
      </li>
      <li>
        <div class="tour-date">
          <h1>14</h1>
          <div class="day-h">
            <p>december 2018</p>
            <p>8:00 pm</p>
          </div>
        </div>
        <div class="tour-loc">
          <p>les rendez vous d'ailleurs</p>
          <p><i class="fa-solid fa-location-dot" aria-hidden="true"></i> paris, france FR</p>
        </div>
        <a href="#" class="cta-video">stock epuisé</a>
      </li>

    </ul>
    </div>
</div>

</div></section>
<section class="mobile-tour-section">
<div class="wrapper">


<ul class="tourlist">
        <div class="tour-date-mobile mobile-tour-page">

        
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
        <a href="" class="cta-mobile-ticket">acheter ticket</a>
        </div>
        <div class="tour-date-mobile mobile-tour-page">

        
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
        <a href="" class="cta-mobile-ticket">acheter ticket</a>
        </div>
        <div class="tour-date-mobile mobile-tour-page">

        
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
        <a href="" class="cta-mobile-ticket">acheter ticket</a>
        </div>
        <div class="tour-date-mobile mobile-tour-page">

        
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
        <a href="" class="cta-mobile-ticket">acheter ticket</a>
        </div>

            
    </ul>
    
</div>
<div class="pages">
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
</div>
</section></div>
</section>
<script>
    let divs = document.querySelectorAll('.tour-deets')
    let select = document.querySelectorAll('.tour-page li')
    for (let i = 0; i < select.length; i++) {
        select[i].addEventListener('click', function(){
            if (i === 0) {
                divs[0].style.display = "flex";
                select[3].classList.remove("active")
                select[2].classList.remove("active")
                select[1].classList.remove("active")
                select[0].classList.add("active")
                divs[1].style.display = "none";
                divs[2].style.display = "none";
                divs[3].style.display = "none";
                console.log(i)

            }
            if (i === 1) {
                divs[0].style.display = "none";
                divs[1].style.display = "flex";
                divs[2].style.display = "none";
                divs[3].style.display = "none";
                select[2].classList.remove("active")
                select[3].classList.remove("active")
                select[0].classList.remove("active")
                select[1].classList.add("active")
                console.log(i)

            }
            if (i === 2) {
                divs[0].style.display = "none";
                divs[1].style.display = "none";
                divs[2].style.display = "flex";
                divs[3].style.display = "none";
                select[1].classList.remove("active")
                select[3].classList.remove("active")
                select[0].classList.remove("active")
                select[2].classList.add("active")
                console.log(i)

            }
            if (i === 3) {
                divs[0].style.display = "none";
                divs[1].style.display = "none";
                divs[2].style.display = "none";
                divs[3].style.display = "flex";
                select[2].classList.remove("active")
                select[0].classList.remove("active")
                select[1].classList.remove("active")
                select[3].classList.add("active")
                console.log(i)

            }
        })
    }
    
let navEl = document.querySelectorAll(".nav a")
    navEl[4].classList.add('active-white')
</script>
@endsection