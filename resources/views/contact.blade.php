@extends('layouts.app')

@section('title', 'Kapcsolat')

@section('content')

<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-lg-3 d-none d-lg-block"></div>
        <main class="col-lg-6">
            <h4 class="display-4">Kapcsolat</h4>
            <p>Problémád akadt az oldallal? Ne habozz írj!</p>
            <form action="#" method="get"><!--forward to sikeres küldés oldal-->
                <div class="mb-3">
                    <label for="email" class="form-label">Írd ide az email címed <span style="color:red">*</span></label>
                    <input type="email" class="form-control" id="email" placeholder="teszt@pelda.hu" required>
                </div>
                <div class="mb-3">
                    <label for="problemfield" class="form-label">Írd ide a mondanivalód <span style="color:red">*</span></label>
                    <textarea class="form-control" id="problemfield" rows="5" placeholder="Írd meg, miben segíthetünk..." required></textarea>
                </div>
                <div class="d-grid">
                    <input type="submit" class="btn btn-primary" value="Küldés">
                </div>
            </form>
        </main>
        <div class="col-lg-3 d-none d-lg-block"></div>
    </div>
</div>


@endsection

@section('footer')

@vite(['resources/js/app.js'])