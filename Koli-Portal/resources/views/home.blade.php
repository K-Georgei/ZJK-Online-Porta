<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Főoldal</title>
<style>
   body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Az oldal magassága legalább 100% */
            justify-content: space-between;
        }

        main {
            flex: 1; /* A main rész kitölti a rendelkezésre álló helyet */
           
        }
        
        
</style>

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Zirzen Janka Kollégiumi Portál</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <hr class="d-block d-md-none">
                    <a class="nav-link" href="{{ route('home') }}">Főoldal<span class="sr-only">(jelenlegi)</span></a>
                </li>
                <li class="nav-item">
                    <hr class="d-block d-md-none">
                    <a class="nav-link" href="{{ route('login') }}">Bejelentkezés</a>
                </li>
                <li class="nav-item">
                    <hr class="d-block d-md-none">
                    <a class="nav-link" href="{{ route('register') }}">Regisztráció</a>
                </li>
                <li class="nav-item">
                    <hr class="d-block d-md-none">
                    <a class="nav-link" href="{{ route('contact') }}">Kapcsolat</a>
                    <hr class="d-block d-md-none">
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-3 col-sm-12 d-none d-md-block"></div>
            <main class="col-md-6 col-sm-12">
                <!--Galériát ide-->
                <h2 class="display-3">Helló! 👋</h2>
                <h4>Üdvözöllek az Online Portán!</h4>
                <h5>Miben segíthetek?</h5>
                <div class="mt-3 justify-content-around text-center">
                    <button type="button" class="btn btn-primary">Kolis akarok lenni!</button>
                    <button type="button" class="btn btn-outline-secondary">Informálódni szeretnék!</button> <!--ez csak lentebb görget-->
                </div>
              
                <div class="py-5 justify-content-between">
                    <h4 class="display-4">Információs pult</h4>
                    <p>Itt talász meg minden olyan informácót ami a jelentkezéshez szükséges</p>
                    <h5>Jelentkezés menete</h5>
                    <ol>
                        <li>Regisztrálj az oldalra!</li>
                        <li>Töltsd ki a <u>Nyilvántartó lapot</u> és a <u>Bentlakási szerőzdést</u></li>
                        <li>Válaszd ki hogy melyik szobában szeretnél lakni!</li>
                        <li>Majd nyomj a "Jelentkezés elküldésre" gombra!</li>
                    </ol>
                </div>
            </main>
            <div class="col-md-3 col-sm-12 d-none d-md-block"></div>
        </div>
    </div>

    <footer class="footer bg-dark text-white text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="text-uppercase">Zirzen Janka Kollégiumi Portál</h5>
                    <p>
                        Itt találhatók a kollégiumi információk, szobák és egyéb hasznos tudnivalók.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 mb-4">
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

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1);">
            © 2024 Zirzen Janka Kollégiumi Portál. Minden jog fenntartva.
            <br>
            <a href="#" class="text-light">Adatvédelmi irányelvek</a>
            <span> | </span>
            <a href="#" class="text-light">Felhasználási feltételek</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>