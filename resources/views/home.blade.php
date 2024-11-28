@extends('layouts.app')

@section('title', 'Főoldal')

@section('content')

<div class="container-fluid mt-4">
    <div class="row">
        <!-- Bal oldali oszlop, ha szükséges -->
        <div class="col-md-3 d-none d-md-block"></div>

        <!-- Központi tartalom -->
        <main class="col-12 col-md-6 text-start">
            <h2 class="display-3">Helló! 👋</h2>
            <h4>Üdvözöllek az Online Portán!</h4>
            <h5>Miben segíthetek?</h5>

            <div class="mt-5 text-center">
                <!-- Két gomb, amelyek a funkciókhoz vezetnek -->
                <button type="button" class="btn btn-primary m-2">Kolis akarok lenni!</button>
                <a href="#informacio" class="btn btn-outline-secondary m-2" data-bs-target="#informacio" aria-expanded="false" aria-controls="informacio">
                    Informálódni szeretnék!
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    <!--gallériát ide csak 3 képet-->
                </div>
            </div>

            <!-- Információs rész a gombok alatt -->
            <div class="mt-5" id="informacio">
                    <h4 class="display-4">Információs pult</h4>
                    <p>Itt találsz meg minden olyan információt, ami a jelentkezéshez szükséges.</p>
                    <h5>Jelentkezés menete</h5>
                    <ol>
                        <li>Regisztrálj az oldalra!</li>
                        <li>Töltsd ki a <u>Nyilvántartó lapot</u> és a <u>Bentlakási szerződést</u></li>
                        <li>Válaszd ki, hogy melyik szobában szeretnél lakni!</li>
                        <li>Majd nyomj a "Jelentkezés elküldésre" gombra!</li>
                    </ol>
            </div>
        </main>

        <!-- Jobb oldali oszlop, ha szükséges -->
        <div class="col-md-3 d-none d-md-block"></div>
    </div>
</div>


@endsection

@section('footer')

@vite(['resources/js/app.js'])