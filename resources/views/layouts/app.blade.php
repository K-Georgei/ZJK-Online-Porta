@props(['css' => '', 'script' => ''])
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Zirzen Janka Kollégiumi Portál"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="shortcut icon" href="{{asset('images/tulip_ikon.png')}}" type="image/x-icon" /> --}}
    
    <title>@yield('title', 'Alapértelmezett Cím')</title>
    @if ($css == '')
        @vite(['resources/scss/app.scss','resources/css/app.css', 'resources/js/app.js'])
    @else     
        @vite(['resources/scss/app.scss','resources/css/app.css', $css, 'resources/js/app.js'])
    @endif


    {{new Illuminate\Support\HtmlString($script)}}


</head>
<body class="d-flex flex-column" style="min-height: 100dvh;">
    @include('partials.navbar') <!-- Navigációs sáv -->

    
    <div class="container my-4">
        @yield('content')
    </div>


    @include('partials.footer') 


</body>
</html>