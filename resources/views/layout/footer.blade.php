<section class="footer">
    <div class="footer-nav">
        <div class="footer-bottom">
            <div class="footer-logo">
                <img src="assets/img/logow.svg" alt="Logo">
            </div>
            <div class="footer-menu">
                <h3 class="menu-title">menu</h3>
                <ul>
                    <li>
                        <a href="?lng=en&amp;p=Home">accueil</a>
                        <a href="?lng=en&amp;p=Bio">Bio</a>
                        <a href="?lng=en&amp;p=Services">prestation</a>
                        <a href="?lng=en&amp;p=Music">Musique</a>
                        <a href="?lng=en&amp;p=Tour">Tour</a>
                        <a href="?lng=en&amp;p=Blog" class="hidden">Blog</a>
                        <a href="?lng=en&amp;p=Contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <h3 class="menu-title">best music</h3>
                <ul>
                    <li>
                        <a href="#">so what's next</a>
                        <a href="#">Friendly Walk</a>
                        <a href="#">How deep is the ocean</a>
                        <a href="#">Folk waltz</a>
                        <a href="#">Pop song</a>

                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <h3 class="menu-title">last blog</h3>
                <ul>
                    <li>
                        <a href="#">so what's next</a>
                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <h3 class="menu-title">contact me</h3>
                <ul>
                    <li>

                    </li>
                </ul>
            </div>
            <div class="social-lang">
                <div class="footer-social">
                    <a href="https://www.facebook.com/RafaelDatoPiano/" target="_blank"><i class="fa-brands fa-facebook"
                            aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/rafael_dato/" target="_blank"><i class="fa-brands fa-instagram"
                            aria-hidden="true"></i></a>
                    <a href="https://fr.linkedin.com/in/rafa%C3%ABl-dato-6292a51a9" target="_blank"><i
                            class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
                </div>
                <div class="lang">
                    <form id="translationForm" class="w-full" method="GET">
                        <select class="w-full" id="languageSelect" value="{{ App::currentLocale() }}" name="lang">
                            <option value="fr" class="language" {{App::isLocale('fr') ? 'selected' : ''}}>
                                Français
                            </option>
                            <option value="en" class="language" {{App::isLocale('en') ? 'selected' : ''}}>
                                English
                            </option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var languageSelect = document.getElementById('languageSelect');

            languageSelect.addEventListener('change', function() {
                document.getElementById('translationForm').submit();
            });
        });
    </script>

    <script>
        var btn = document.getElementById('menu-btn');
        var menu = document.getElementById('menu');
        var icon = document.querySelector('#menu-btn i');
        let navEl1 = document.querySelectorAll(".nav a")
        var pos = 0;
        btn.addEventListener('click', function() {
            if (pos == 0) {

                menu.classList.add('menu');
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
                if (window.location.href.split('=')[2] === "Artibiography" || window.location.href.split('=')[2] ===
                    "Artibiographie") {
                    biOverlay.style.display = 'none'
                }
                pos = 1;
            } else {
                menu.classList.remove('menu');
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
                if (window.location.href.split('=')[2] === "Artibiography" || window.location.href.split('=')[2] ===
                    "Artibiographie") {
                    biOverlay.style.display = 'block'
                }
                pos = 0;
            }
        })
    </script>

    <div class="copyright">
        <p>copyright orbin © 2023. all rights reserved</p>
    </div>

</section>
