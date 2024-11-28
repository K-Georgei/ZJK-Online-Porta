<nav class="navbar navbar-expand-md navbar-dark px-3">
    <a class="navbar-brand" href="#">Zirzen Janka Kollégiumi Portál</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarNav">
        <ul class="navbar-nav ms-auto"> 
            <li class="nav-item active">
                <hr class="d-block d-md-none">
                <a class="nav-link" href="{{ route('home') }}">Főoldal<span class="visually-hidden">(jelenlegi)</span></a> <!-- sr-only helyett visually-hidden -->
            </li>
            <li class="nav-item">
                <hr class="d-block d-md-none">
                <a class="nav-link" href="#">Bejelentkezés</a>
            </li>
            <li class="nav-item">
                <hr class="d-block d-md-none">
                <a class="nav-link" href="#">Regisztráció</a>
            </li>
            <li class="nav-item">
                <hr class="d-block d-md-none">
                <a class="nav-link" href="{{ route('contact') }}">Kapcsolat</a>
                <hr class="d-block d-md-none">
            </li>
        </ul>
    </div>
  </nav>  