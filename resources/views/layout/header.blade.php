<div class="bg"></div>
@if (($currentRoute =='bio') || ($currentRoute =='home'))
<section class="showcase" style="background-image: url('{{$image}}');">    
    @if($currentRoute == "home")
    <div class="topbar">
        <div class="wrapper">
            <div class="content">
                <div class="logo">
                    <a href="/?lng=en">
                        <img src="assets/img/logo.svg" alt="Logo">
                    </a>
                </div>
                <div class="mobile-logo">
                    <a href="/?lng=en">

                        <img src="assets/img/mobile.svg" alt="">
                    </a>
                    <button type="button" id="menu-btn">
                        <i class="fa-solid fa-bars" aria-hidden="true"></i>
                    </button>
                </div>
                <!-- <div class="mobile-logo">
                        <a href="/?lng=en">
                            <img src="assets/img/mobile.svg" alt="Logo">
                        </a>
                        <div class="menu-btn-cont nav-home">
            <button type="button" id="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </button>
                </div> -->




                <nav class="topnav">
                    <div class="navbar" id="menu">

                        <nav class="nav nav-home">
                            <!-- <div id="marker"></div> -->
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
       
       <div class="row head-row">
 
        @component('components.home')
        @endcomponent
        @endif
   
   
    </div>
    @if($currentRoute == "bio")
    <div class="topbar">
        <div class="wrapper ">
            <div class="content">
                <div class="logo">
                    <a href="/?lng=fr">
                        <img src="assets/img/logo.svg" alt="Logo">
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
                        <nav class="nav arti-nav">
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
    </div>

    @component('components.bio')
    @endcomponent
    @endif 
 
    </div>
</section>
@elseif ($currentRoute =='services')
<div class="topbar">
    <div class="wrapper">
        <div class="content">
            <div class="logo">
                <a href="/?lng=fr">
                    <img src="assets/img/logo.svg" alt="Logo">
                </a>
            </div>
            <div class="mobile-logo press-header">
                <a href="/?lng=fr">
                    <img src="assets/img/mobile.svg" alt="">
                </a>
                <button type="button" id="menu-btn">
                    <i class="fa-solid fa-bars" aria-hidden="true"></i>
                </button>
            </div>
        

            <nav class="topnav ">
                <div class="navbar" id="menu">
                    <nav class="nav arti-nav">
                        <a href="/" class="active">Home</a>
                        <a href="/bio">Bio</a>
                        <a href="services">Services</a>
                        <a href="music">Music</a>
                        <a href="tour">Tour</a>
                        <a href="blog">Blog</a>
                        <a href="contact">Contact</a>
                        <!--<a href="?lng=fr&p=Contact">Contact</a>  -->
                    </nav>
                </div>
            </nav>
        </div>
    </div>
</div>
@elseif ($currentRoute =='music')
<div class="topbar music-header">
    <div class="wrapper">
        <div class="content">
            <div class="logo">
                <a href="/?lng=en">
                    <img src="assets/img/logow.svg" alt="Logo">
                </a>
            </div>
            <div class="mobile-logo">
                <a href="/?lng=en">
                    <img src="assets/img/mobile.svg" alt="">
                </a>
                <button type="button" id="menu-btn">
                    <i class="fa-solid fa-bars" aria-hidden="true"></i>
                </button>
            </div>
            <nav class="topnav ">
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
</div>
@elseif ($currentRoute =='contact')
@elseif($currentRoute =='tour')
@elseif($currentRoute =='blog')
<div class="topbar">
    <div class="wrapper ">
        <div class="content">
            <div class="logo">
                <a href="/?lng=fr">
                    <img src="assets/img/logo.svg" alt="Logo">
                </a>
            </div>
            <div class="mobile-logo press-header">
                <a href="/?lng=fr">
                    <img src="assets/img/mobile.svg" alt="">
                </a>
                <button type="button" id="menu-btn">
                    <i class="fa-solid fa-bars" aria-hidden="true"></i>
                </button>
            </div>
            <nav class="topnav ">
                <div class="navbar" id="menu">
    
                    <nav class="nav arti-nav">
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
</div>
@endif


