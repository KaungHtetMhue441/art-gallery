@props([
    'header' => '',
    'script' => '',
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link href="{{asset('assets/libs/google-font/google-font.min.css')}}" rel="stylesheet" />
    
    <!-- MDB -->
    <link href="{{asset('assets/libs/mdb/mdb.min.css')}}" rel="stylesheet" />

    <link href="{{asset('css/main.css')}}" rel="stylesheet" />
    
    {{-- swiper --}}
    <link href="{{asset('assets/libs/swiper/swiper.css')}}" rel="stylesheet" />

    <!-- Fotorama from CDNJS -->
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">

    {{ $header }}
</head>
<body>
    <x-client.navbar.nav />

    <div class="container-fluid">
        {{ $slot }}
    </div>
    
    <x-client.footer.footer />

    {{-- jquery --}}
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>

    <!-- MDB -->
    <script type="text/javascript" src="{{asset('assets/libs/mdb/mdb.min.js')}}"></script>

    {{-- scrollreveal --}}
    <script type="text/javascript" src="{{asset('assets/libs/scroll.js')}}"></script>
    
    <!-- Fotorama from CDNJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    
    {{-- swiper --}}
    <script type="text/javascript" src="{{asset('assets/libs/swiper/swiper.js')}}"></script>
    
    {{-- scrollreveal option --}}
    <script type="text/javascript" src="{{asset('js/scroll-reveal.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

    {{ $script }}
</body>
</html>