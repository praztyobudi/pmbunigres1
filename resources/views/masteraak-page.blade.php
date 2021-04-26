<!DOCTYPE html>
<html lang="en">

<head>
    <title>AAK - @section('title', 'Beranda') @yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Font Awesome Icon -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />

    <!-- bXSlider CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <!-- Custom Css -->
    <link href="{{ asset('aak/css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('aak/css/pengumuman.css') }}" rel="stylesheet" />
    <link href="{{ asset('aak/css/home.css') }}" rel="stylesheet" />
    <link href="{{ asset('aak/css/register.css') }}" rel="stylesheet" />
    <link href="{{ asset('aak/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('homepage') }}"><img src="{{ asset('aak/images/logo.png') }}" width="38px" alt="">
                <p class="wrap"> PMB <span>AAK Delima Husada</span></p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @section('nav-bar')
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('homepage') }}">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pengumuman') }}">Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login" href="{{ route('login') }}">Login <i class="fa fa-sign-in"></i></a>
                    </li>
                </ul>
            </div>
            @show
        </div>
    </nav>
    @section('content-aak')
    <div class="decor">
        <div class="container ct-t">
            <h5 class="title-1 lg-title">Penerimaan Mahasiswa Baru</h5>
        </div>
    </div>
    <div class="image-float">
        <img class="float img-1" src="{{ asset('aak/images/img1.jpg') }}" alt="">
        <img class="float img-2" src="{{ asset('aak/images/img4.jpg') }}" alt="">
    </div>
    <section class="content">
        <div class="container">
            <h5 class="title-1 sm-title">Penerimaan Mahasiswa Baru</h5>
            <h3 class="title-2 mb-3">Akademi Analisis Kesehatan Delima Husada</h3>
            <p class="title-desc mb-5">Untuk mendaftarakan diri pilih Menu Pendaftaran, dan untuk informasi lebih lanjut
                mengenai program perkuliahan, biaya administrasi dll kunjungi website resmi <a href="#"><br
                        class="d-md-none d-sm-block">klik disini.</a></p>
            <div class="wrapper-button">
                <a href="{{ route('register') }}" class="btn btn-light btn-home">Pendaftaran <i class="fa fa-copy ml-4"></i></a>
                <a href="#" class="btn btn-light btn-home">Website Resmi <i class="fa fa-globe ml-4"></i></a>
            </div>
        </div>
    </section>
    @show
    <footer class="bottom">
        <div class="container">
            <div class="wrapper-row">
                <p>Jl. Arif Rahman Hakim 2B, Gresik</p>
                <i class="fa fa-circle ml-3 mr-3"></i>
                <p>Telp.(031) 3981918, 3978628</p>
                <i class="fa fa-circle ml-3 mr-3"></i>
                <p class="copy-right mb-0">Copyright © 2019 Universitas Gresik</p>
            </div>

        </div>
    </footer>


    
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- bxSlider Plugin -->
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src='{{ asset('aak/js/app.js') }}' type="text/javascript"></script>

</body>

</html>