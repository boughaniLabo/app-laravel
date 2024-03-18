<div class="bg"></div>
<section class="showcase" style="background-image: url('/assets/img/home1.jpg');">
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
                            <a href="?lng=en&amp;p=Home" class="active">Home</a>
                            <a href="?lng=en&amp;p=Bio">Bio</a>
                            <a href="?lng=en&amp;p=Services">Services</a>
                            <a href="?lng=en&amp;p=Music">Music</a>
                            <a href="?lng=en&amp;p=Tour">Tour</a>
                            <a href="?lng=en&amp;p=Blog">Blog</a>
                            <a href="?lng=en&amp;p=Contact">Contact</a>

                        </nav>


                    </div>
                </nav>


            </div>

        </div>
       
       <div class="row head-row">
        @if($currentRoute == "home")
        @component('components.home')
        @endcomponent
        @endif
   
    </div>
      
  
    </div>
</section>
