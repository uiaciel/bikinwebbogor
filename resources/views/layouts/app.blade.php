<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>BIKINWEBBOGOR - JASA PEMBUATAN WEBSITE & UMKM DIGITAL</title>
    <meta name="title" content="https://bikinwebbogor.com/">
    <meta name="description"
        content="Pembuatan Website, Optimasi Google Bussiness, Pembuatan Content Digital
dengan harga terjangkau sesuai kebutuhan anda.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://bikinwebbogor.com/">
    <meta property="og:title" content="Jasa Pembuatan Website & UMKM Digital - Bikinwebbogor.com">
    <meta property="og:description"
        content="Pembuatan Website, Optimasi Google Bussiness, Pembuatan Content Digital
dengan harga terjangkau sesuai kebutuhan anda.">
    <meta property="og:image" content="{{ asset('img/header-SMGA.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://bikinwebbogor.com/">
    <meta property="twitter:title" content="PT. Sumber Mineral Global Abadi Tbk">
    <meta property="twitter:description"
        content="Pembuatan Website, Optimasi Google Bussiness, Pembuatan Content Digital
dengan harga terjangkau sesuai kebutuhan anda.">
    <meta property="twitter:image" content="{{ asset('img/header-SMGA.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    {{-- <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json"> --}}
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/bootstrap.min.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="/assets/plugins/themify-icons/themify-icons.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="/assets/plugins/slick/slick.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="/assets/plugins/Venobox/venobox.css">
    <!-- aos -->
    <link rel="stylesheet" href="/assets/plugins/aos/aos.css">

    <!-- Main Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

</head>

<body>
    <!-- navigation -->
    <section class="fixed-top navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html"><img src="/assets/images/logo.png" alt="logo"></a>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- navbar -->
                <div class="collapse navbar-collapse text-center" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#feature">Layanan</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="service.html">Paket</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="/paket-pembuatan-website">Paket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#pricing">Harga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                    </ul>
                    <a href="https://wa.me/6285693749533" class="btn btn-primary ml-lg-3 primary-shadow">Chat
                        Whatsapp</a>
                </div>
            </nav>
        </div>
    </section>

    @yield('content')


    <!-- footer -->
    <footer class="footer-section footer" style="background-image: url(/assets/images/backgrounds/footer-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
                    <!-- logo -->
                    <a href="/">
                        <img class="img-fluid" src="/assets/images/logo.png" alt="logo">
                    </a>
                </div>
                <!-- footer menu -->
                <nav class="col-lg-8 align-self-center mb-5">
                    <ul class="list-inline text-lg-right text-center footer-menu">
                        <li class="list-inline-item active"><a href="index.html">Beranda</a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="#feature">Layanan</a></li>
                        {{-- <li class="list-inline-item"><a href="about.html">About</a></li> --}}
                        <li class="list-inline-item"><a class="page-scroll" href="#team">Paket</a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="#pricing">Harga</a></li>
                        <li class="list-inline-item"><a href="contact.html">Kontak</a></li>
                    </ul>
                </nav>
                <!-- footer social icon -->
                <nav class="col-12">
                    <ul class="list-inline text-lg-right text-center social-icon">
                        <li class="list-inline-item">
                            <a class="facebook" href="#"><i class="ti-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="twitter" href="#"><i class="ti-twitter-alt"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="linkedin" href="#"><i class="ti-linkedin"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="black" href="#"><i class="ti-github"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <!-- jQuery -->
    <script src="/assets/plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/assets/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="/assets/plugins/slick/slick.min.js"></script>
    <!-- venobox -->
    <script src="/assets/plugins/Venobox/venobox.min.js"></script>
    <!-- aos -->
    <script src="/assets/plugins/aos/aos.js"></script>
    <!-- Main Script -->
    <script src="/assets/js/script.js"></script>


    <script>
        document.getElementById('date').valueAsDate = new Date();
    </script>

</body>

</html>
