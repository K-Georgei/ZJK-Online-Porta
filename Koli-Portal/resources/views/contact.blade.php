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
                <li class="nav-item">
                    <hr class="d-block d-md-none">
                    <a class="nav-link" href="{{ route('home') }}">Főoldal</a>
                </li>
                <li class="nav-item">
                    <hr class="d-block d-md-none">
                    <a class="nav-link" href="{{ route('login') }}">Bejelentkezés</a>
                </li>
                <li class="nav-item">
                    <hr class="d-block d-md-none">
                    <a class="nav-link" href="{{ route('register') }}">Regisztráció</a>
                </li>
                <li class="nav-item active">
                    <hr class="d-block d-md-none">
                    <a class="nav-link" href="{{ route('contact') }}">Kapcsolat<span class="sr-only">(jelenlegi)</span></a>
                    <hr class="d-block d-md-none">
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-3 col-sm-12 d-none d-md-block"></div>
            <main class="col-md-6 col-sm-12">
                <h4 class="display-4">Kapcsolat</h4>
                <p>Problémád akadt az oldallal? Ne habozz írj!</p>
                <form action="#" method="get"><!--forward to sikeres küldés oldal-->
                    <div class="form-group my-5">
                        <label for="email">Írd ide az email címed <span style="color:red">*</span></label>
                        <input type="email" class="form-control mb-3" id="email" placeholder="teszt@pelda.hu" required>
                        <label for="problemfield">Írd ide a mondanivalód <span style="color:red">*</span></label>
                        <textarea class="form-control w-100" id="problemfield" rows="5" placeholder="Írd meg, miben segíthetünk..." required></textarea>
                        <input type="submit" class="w-100 btn btn-primary mt-3" value="Küldés">
                    </div>
                </form>
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