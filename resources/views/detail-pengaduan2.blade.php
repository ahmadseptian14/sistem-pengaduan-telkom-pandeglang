<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        /* rating */
        .rating-css div {
            color: #ffe400;
            font-size: 30px;
            font-family: sans-serif;
            font-weight: 800;
            text-align: center;
            text-transform: uppercase;
            padding: 20px 0;
        }

        .rating-css input {
            display: none;
        }

        .rating-css input+label {
            font-size: 60px;
            text-shadow: 1px 1px 0 #8f8420;
            cursor: pointer;
        }

        .rating-css input:checked+label~label {
            color: #b4afaf;
        }

        .rating-css label:active {
            transform: scale(0.8);
            transition: 0.3s ease;
        }

        /* End of Star Rating */
    </style>
    <title>Sistem Pengaduan Telkom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" > --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}
    {{-- <link href="{{asset('/assets/css/custom.css')}}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> --}}
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box; ">
        <style scoped>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .header-2-1 .modal-item.modal {
                top: 2rem;
            }

            .header-2-1 .navbar,
            .header-2-1 .hero {
                padding: 3rem 2rem;
            }

            .header-2-1 .navbar-light .navbar-nav .nav-link {
                font: 300 18px/1.5rem Poppins, sans-serif;
                color: #1d1e3c;
                transition: 0.3s;
            }

            .header-2-1 .navbar-light .navbar-nav .nav-link:hover {
                font: 600 18px/1.5rem Poppins, sans-serif;
                color: #1d1e3c;
                transition: 0.3s;
            }

            .header-2-1 .navbar-light .navbar-nav .active>.nav-link,
            .header-2-1 .navbar-light .navbar-nav .nav-link.active,
            .header-2-1 .navbar-light .navbar-nav .nav-link.show,
            .header-2-1 .navbar-light .navbar-nav .show>.nav-link {
                font-weight: 600;
                transition: 0.3s;
            }

            .header-2-1 .navbar-light .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            }

            .header-2-1 .btn:focus,
            .header-2-1 .btn:active {
                outline: none !important;
            }

            .header-2-1 .btn-fill {
                font: 600 18px/normal Poppins, sans-serif;
                background-color: #ff7c57;
                border-radius: 12px;
                padding: 12px 32px;
                transition: 0.3s;
            }

            .header-2-1 .btn-fill:hover {
                --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                    0 4px 6px -2px rgba(0, 0, 0, 0.05);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                transition: 0.3s;
            }

            .header-2-1 .btn-no-fill {
                font: 300 18px/1.75rem Poppins, sans-serif;
                color: #1d1e3c;
                padding: 12px 32px;
                transition: 0.3s;
            }

            .header-2-1 .modal-item .modal-dialog .modal-content {
                border-radius: 8px;
            }

            .header-2-1 .responsive li a {
                padding: 1rem;
            }

            .header-2-1 .text-caption {
                font: 600 0.875rem/1.625 Poppins, sans-serif;
                margin-bottom: 2rem;
                color: #ff7c57;
            }

            .header-2-1 .left-column {
                margin-bottom: 2.75rem;
                width: 100%;
            }

            .header-2-1 .right-column {
                width: 100%;
            }

            .header-2-1 .title-text-big {
                font: 600 2.25rem/2.5rem Poppins, sans-serif;
                margin-bottom: 2rem;
                color: #272e35;
            }

            .header-2-1 .btn-try {
                font: 600 1rem/1.5rem Poppins, sans-serif;
                padding: 1rem 1.5rem;
                border-radius: 0.75rem;
                background-color: #ff7c57;
                transition: 0.3s;
            }

            .header-2-1 .btn-try:hover {
                --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                    0 4px 6px -2px rgba(0, 0, 0, 0.05);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                transition: 0.3s;
            }

            .header-2-1 .btn-outline {
                font: 400 1rem/1.5rem Poppins, sans-serif;
                border: 1px solid #555b61;
                color: #555b61;
                padding: 1rem 1.5rem;
                border-radius: 0.75rem;
                background-color: transparent;
                transition: 0.3s;
            }

            .header-2-1 .btn-outline:hover {
                border: 1px solid #ff7c57;
                color: #ff7c57;
                transition: 0.3s;
            }

            .header-2-1 .btn-outline:hover div path {
                fill: #ff7c57;
                transition: 0.3s;
            }

            @media (min-width: 576px) {
                .header-2-1 .modal-item .modal-dialog {
                    max-width: 95%;
                    border-radius: 12px;
                }

                .header-2-1 .navbar {
                    padding: 3rem 2rem;
                }

                .header-2-1 .hero {
                    padding: 3rem 2rem 5rem;
                }

                .header-2-1 .title-text-big {
                    font-size: 3rem;
                    line-height: 1.2;
                }
            }

            @media (min-width: 768px) {
                .header-2-1 .navbar {
                    padding: 3rem 4rem;
                }

                .header-2-1 .hero {
                    padding: 3rem 4rem 5rem;
                }

                .header-2-1 .left-column {
                    margin-bottom: 3rem;
                }
            }

            @media (min-width: 992px) {
                .header-2-1 .navbar-expand-lg .navbar-nav .nav-link {
                    padding-right: 1.25rem;
                    padding-left: 1.25rem;
                }

                .header-2-1 .navbar {
                    padding: 3rem 6rem;
                }

                .header-2-1 .hero {
                    padding: 3rem 6rem 5rem;
                }

                .header-2-1 .left-column {
                    width: 50%;
                    margin-bottom: 0;
                }

                .header-2-1 .right-column {
                    width: 50%;
                }

                .header-2-1 .title-text-big {
                    font-size: 3.75rem;
                    line-height: 1.2;
                }

            }
        </style>
        <div class="container-xxl mx-auto p-0  position-relative header-2-1" style="font-family: 'Poppins', sans-serif">
            <nav class="navbar navbar-expand-lg navbar-light">
                {{-- <a href="#">
                    <img style="margin-right: 0.75rem"
                        src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-2.png"
                        alt="" />
                </a> --}}
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal"
                    data-bs-target="#targetModal-item">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
                    aria-labelledby="targetModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg-white border-0">
                            <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                                {{-- <a class="modal-title" id="targetModalLabel">
                                    <img style="margin-top: 0.5rem"
                                        src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-2.png"
                                        alt="" />
                                </a> --}}
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Tata Cara</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Lihat Hasil Pengaduan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Beri Penilaian</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                                <button class="btn btn-default btn-no-fill">
                                    Log In
                                </button>
                                <button class="btn btn-fill text-white">Try Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tata Cara</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pengaduan.pelanggan') }}">Lihat Hasil Pengaduan</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('penilaian.create') }}">Beri Penilaian</a>
                        </li> --}}
                    </ul>
                    @guest
                        <div class="gap-3">
                            <a href="{{ route('login') }}" class="btn btn-default btn-no-fill">
                                Log In
                            </a>
                        </div>
                        <div class="gap-3">
                            <a href="{{ route('register') }}" class="btn btn-default btn-no-fill">
                                Register
                            </a>
                        </div>
                    @endguest

                    @auth
                        <div class="dropdown">
                            <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                        Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endauth
                </div>
            </nav>

            <div class="section-content section-dashboard-home" data-aos="fade-up">
                <div class="container-fluid">
                    <div class="dashboard-heading">
                        <h2 class="dashboard-title" style="color: white">Pengaduan</h2>
                    </div>
                    <div class="section-content section-dashboard-home" data-aos="fade-up">
                        <div class="container-fluid">
                            <div class="dashboard-heading">
                                <h2 class="dashboard-title text-dark">Detail Pengaduan</h2>
                            </div>
                            <div class="dashboard-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        @forelse ($pengaduans->details as $pengaduan)
                                            <div class="card mb-3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h4>Nama : {{ $pengaduan->nama }}</h4>
                                                            <h4>No.Telepon : {{ $pengaduan->user->phone }}</h4>
                                                            <h4>Tanggal :
                                                                {{ $pengaduan->created_at->format('d-m-Y - H:i:s') }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div>
                                                    <h3 class="text-center">Keterangan</h3>
                                                    <p>{{ $pengaduan->keterangan }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div>
                                                    <h3 class="text-center">Status Pengaduan</h3>
                                                    <div class="list-group">
                                                        @forelse ($tanggapans as $tanggapan)
                                                            <div class="list-group-item list-group-item-action">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <h5 class="mb-1">
                                                                        {{ $tanggapan->status_pengaduan }}</h5>
                                                                    <small>{{ $tanggapan->created_at }}</small>
                                                                </div>
                                                                <p class="mb-1">{{ $tanggapan->tanggapan }}</p>
                                                            </div>
                                                        @empty
                                                            <p>Belum di proses dan belum ada tanggapan</p>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            @empty
                                                <h2>Tidak Ada Pengaduan</h2>
                                            </div>
                                        </div>
                                    </div>

                                    @endforelse
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h3 class="text-center">Penilaian</h3>
                                    @forelse ($penilaians as $penilaian)
                                        <div>
                                            <p>Komentar : {{ $penilaian->keterangan }}</p>
                                            <p>Rating : {{ $penilaian->rating }}</p>
                                        </div>
                                    @empty
                                        <h5>Belum ada Penilaian</h5>
                                    @endforelse

                                </div>
                            </div>
                        </div>
                        @foreach ($tanggapans as $tanggapan)
                            @if ($tanggapan->status_pengaduan == 'Selesai')
                                <div class="col-md-12">
                                    <a href="{{route('penilaian.create', $pengaduan->id)}}" class="btn btn-danger btn-lg active mb-5" >
                                        Berikan Penilaian
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->

    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <style scoped>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .content-2-1 .btn:focus,
            .content-2-1 .btn:active {
                outline: none !important;
            }

            .content-2-1 .title-text {
                padding-top: 5rem;
                margin-bottom: 3rem;
            }

            .content-2-1 .text-title {
                font: 600 2.25rem/2.5rem Poppins, sans-serif;
                color: #121212;
                margin-bottom: 0.625rem;
            }

            .content-2-1 .text-caption {
                color: #121212;
                font-weight: 300;
            }

            .content-2-1 .column {
                padding: 2rem 2.25rem;
            }

            .content-2-1 .icon {
                margin-bottom: 1.5rem;
            }

            .content-2-1 .icon-title {
                font: 500 1.5rem/2rem Poppins, sans-serif;
                margin-bottom: 0.625rem;
                color: #121212;
            }

            .content-2-1 .icon-caption {
                font: 400 1rem/1.625 Poppins, sans-serif;
                letter-spacing: 0.025em;
                color: #565656;
            }

            .content-2-1 .card-block {
                padding: 1rem 1rem 5rem;
            }

            .content-2-1 .card {
                padding: 1.75rem;
                background-color: #fff7f4;
                border-radius: 0.75rem;
                border: 1px solid #ff7c57;
            }

            .content-2-1 .card-title {
                font: 600 1.5rem/2rem Poppins, sans-serif;
                margin-bottom: 0.625rem;
                color: #000000;
            }

            .content-2-1 .card-caption {
                font: 300 1rem/1.5rem Poppins, sans-serif;
                color: #565656;
                letter-spacing: 0.025em;
                margin-bottom: 0;
            }

            .content-2-1 .btn-card {
                font: 700 1rem/1.5rem Poppins, sans-serif;
                background-color: #ff7c57;
                padding-top: 1rem;
                padding-bottom: 1rem;
                width: 100%;
                border-radius: 0.75rem;
                margin-bottom: 1.25rem;
            }

            .content-2-1 .btn-card:hover {
                --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                    0 4px 6px -2px rgba(0, 0, 0, 0.05);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .content-2-1 .btn-outline {
                font: 400 1rem/1.5rem Poppins, sans-serif;
                color: #979797;
                border: 1px solid #979797;
                padding-top: 1rem;
                padding-bottom: 1rem;
                width: 100%;
                border-radius: 0.75rem;
            }

            .content-2-1 .btn-outline:hover {
                border: 1px solid #ff7c57;
                color: #ff7c57;
            }

            .content-2-1 .card-text {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            .content-2-1 .grid-padding {
                padding: 0rem 1rem 3rem;
            }

            @media (min-width: 576px) {
                .content-2-1 .grid-padding {
                    padding: 0rem 2rem 3rem;
                }

                .content-2-1 .card-block {
                    padding: 3rem 2rem 5rem;
                }
            }

            @media (min-width: 768px) {
                .content-2-1 .grid-padding {
                    padding: 0rem 4rem 3rem;
                }

                .content-2-1 .card-block {
                    padding: 3rem 4rem 5rem;
                }
            }

            @media (min-width: 992px) {
                .content-2-1 .grid-padding {
                    padding: 1rem 6rem 3rem;
                }

                .content-2-1 .card-block {
                    padding: 3rem 6rem 5rem;
                }

                .content-2-1 .column {
                    padding: 0rem 2.25rem;
                }
            }

            @media (min-width: 1200px) {
                .content-2-1 .grid-padding {
                    padding: 1rem 10rem 3rem;
                }

                .content-2-1 .card-block {
                    padding: 3rem 6rem 5rem;
                }

                .content-2-1 .card-btn-space {
                    margin-top: 15px;
                    margin-bottom: 15px;
                }

                .content-2-1 .btn-outline,
                .content-2-1 .btn-card {
                    width: 95%;
                    float: right;
                }
            }

            @media (max-width: 980px) {
                .content-2-1 .card-btn-space {
                    width: 100%;
                }
            }
        </style>
        <div class="content-2-1 container-xxl mx-auto p-0  position-relative"
            style="font-family: 'Poppins', sans-serif">
            <div class="text-center title-text">
                <h1 class="text-title">Tata Cara</h1>
            </div>

            <div class="grid-padding text-center">
                <div class="row">
                    <div class="col-lg-4 column">
                        <h3 class="icon-title">Tulis Laporan</h3>
                        <p class="icon-caption">
                            Tulis laporan keluhan anda dengan jelas
                        </p>
                    </div>
                    <div class="col-lg-4 column">
                        <h3 class="icon-title">Proses Verifikasi</h3>
                        <p class="icon-caption">
                            Tunggu sampai laporan anda diverifikasi
                        </p>
                    </div>
                    <div class="col-lg-4 column">
                        <h3 class="icon-title">Tindak Lanjut & Laporan Selesai</h3>
                        <p class="icon-caption">
                            Laporan anda sedang dalam tindak lanjut dan akan selesai setelah di tindak lanjut
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="page-footer font-small blue">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
            crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
        </script>

        <style>
            @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");
            @import url("https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;600;700;800;900&display=swap");

            * {
                font-family: 'Inter', sans-serif !important;
            }

            body .font-red-hat-display {
                font-family: 'Red Hat Display', sans-serif !important;
            }

            body footer {
                background: #313E60;
                padding-top: 50px;
                padding-bottom: 70px;
            }

            body footer {
                background: #0F0F0F;
                padding-top: 50px;
                padding-bottom: 70px;
            }

            body footer .logo {
                font-family: 'Red Hat Display', sans-serif;
                font-weight: 700;
                font-size: 26px;
                line-height: 38px;
                color: #FAFAFD;
            }

            body footer .social-media {
                margin-top: 55px;
            }

            body footer .copyright {
                font-family: 'Red Hat Display', sans-serif !important;
                font-weight: 400;
                font-size: 16px;
                line-height: 135%;
                color: #FAFAFD;
                margin-top: 20px;
            }

            body footer .nav-footer p {
                font-weight: 700 !important;
                font-family: 'Red Hat Display', sans-serif !important;
                font-size: 20px;
                line-height: 135%;
                color: #FAFAFD;
            }

            body footer .nav-footer a {
                font-weight: 400 !important;
                font-family: 'Red Hat Display', sans-serif !important;
                font-size: 20px;
                line-height: 135%;
                color: #FAFAFD;
            }

            body footer li {
                margin-bottom: 16px;
            }
        </style>
        <div class="container text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3 address">
                    <div class="logo font-red-hat-display">
                        Telkom Indonesia
                    </div>
                    <div class="social-media">
                        <a href="#">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dark/bi_linkedin.svg"
                                alt="linkedin" class="img-fluid mr-4">
                        </a>
                        <a href="#">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dark/bi_facebook.svg"
                                alt="facebook" class="img-fluid mr-4">
                        </a>
                        <a href="#">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dark/bi_twitter.svg"
                                alt="twitter" class="img-fluid mr-4">
                        </a>
                        <a href="#">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dark/bi_instagram.svg"
                                alt="twitch" class="img-fluid mr-4">
                        </a>
                    </div>
                    <div class="copyright font-red-hat-display">
                        2021 All rights reserved.
                    </div>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="row col-md-6 nav-footer">
                    <div class="col-md-4 mb-md-0 mb-3">
                        <p>
                            Features
                        </p>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Payments</a>
                            </li>
                            <li>
                                <a href="#!">Collections</a>
                            </li>
                            <li>
                                <a href="#!">Conversions</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-3">
                        <p>
                            Resources
                        </p>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Blog</a>
                            </li>
                            <li>
                                <a href="#!">FAQ</a>
                            </li>
                            <li>
                                <a href="#!">Partnerships</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-3">
                        <p>
                            Our Company
                        </p>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">About Us</a>
                            </li>
                            <li>
                                <a href="#!">Careers</a>
                            </li>
                            <li>
                                <a href="#!">News & Media</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

</body>

</html>
