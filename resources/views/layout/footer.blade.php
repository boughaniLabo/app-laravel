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
                        <a href="?lng=en&amp;p=Home">Home</a>
                        <a href="?lng=en&amp;p=Bio">Bio</a>
                        <a href="?lng=en&amp;p=Services">Services</a>
                        <a href="?lng=en&amp;p=Music">Music</a>
                        <a href="?lng=en&amp;p=Tour">Tour</a>
                        <a href="?lng=en&amp;p=Blog">Blog</a>
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
                    <form id="translationForm" method="POST" action="{{ route('lang') }}">
                        @csrf
                        <select id="languageSelect" name="lang">
                            <option value="placeholder" class="language" disabled="" selected="">select lang</option>
                            <option value="fr" class="language">
                                français 1
                            </option>
                            <option value="en" class="language">
                                english 2
                            </option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var languageSelect = document.getElementById('languageSelect');
            
            languageSelect.addEventListener('change', function () {
                document.getElementById('translationForm').submit();
            });
        });
    </script>

    <div class="copyright">
        <p>copyright orbin © 2023. all rights reserved</p>
    </div>

</section>
