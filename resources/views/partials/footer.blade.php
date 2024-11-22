<footer class="footer bg-dark text-white text-center mt-auto text-lg-center">
    <div class="container p-4">
        <div class="row align-items-center">
            <div class="col-md">
                <h5 class="text-uppercase">Zirzen Janka Kollégiumi Portál</h5>
                <p>
                    Itt találhatók a kollégiumi információk, szobák és egyéb hasznos tudnivalók.
                </p>
            </div>
            <div class="col-md">
                <h5 class="text-uppercase">Linkek</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ route('home') }}" class="text-light">Főoldal</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="text-light">Bejelentkezés</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="text-light">Regisztráció</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-light">Kapcsolat</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Az alsó szöveg rész, amely a jogi információkat tartalmazza -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1);">
        © 2024 Zirzen Janka Kollégiumi Portál. Minden jog fenntartva.
        <br>
        <a href="#" class="text-light">Adatvédelmi irányelvek</a>
        <span> | </span>
        <a href="#" class="text-light">Felhasználási feltételek</a>
    </div>
</footer>