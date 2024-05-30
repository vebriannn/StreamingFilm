<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('streamfilm/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('streamfilm/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('streamfilm/css/users/dashboard.css') }}">
</head>

<body class="bg-dark">
    <header>
        <nav class="navbar navbar-expand-lg bg-rgb position-fixed w-100 pt-3 pb-3" style="z-index: 999;">
            <div class="container-fluid px-5">
                <a class="navbar-brand fw-bold text-white p-0" href="#">STREAM FILM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    {{-- <ul class="navbar-nav ms-auto">
                        <form action="">
                        <li class="nav-item d-flex justify-content-center align-items-center ps-2 ">
                            <div class="row d-flex justify-content-center align-items-center">
                                <label for="inputPassword" class="col-sm-1 col-form-label pe-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" style="fill: white;">
                                        <path
                                            d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                                        </path>
                                    </svg>
                                </label>
                                <div class="col-sm-7 ps-1 pe-0">
                                    <input type="text"
                                        class="form-control text-white w-100 pe-0 ps-3 placeholder-white"
                                        id="inputPassword" placeholder="Search">
                                </div>
                                <a href="{{ route('member.film.search') }}"
                                    class="btn col-sm-3 p-0 m-0 text-white rounded-5" type="submit">
                                    Cari
                                </a>
                            </div>
                        </li>
                        </form>
                    </ul> --}}
                    <ul class="navbar-nav ms-auto d-flex align-items-center ">
                        <li class="nav-item bg-transparent">
                            <div class="dropdown d-flex">
                                <p class="m-0 me-2" style="color: white;">Welcome,
                                </p>
                                <a class="dropdown-toggle pb-2" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                    style="border: none; background: transparent !important; text-decoration: none; color: white !important; font-size: 16px; padding:0;">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item " href="{{ route('member.logout') }}"
                                            style="border: none; background: white !important; color: #346089 !important; font-size: 16px;">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="content pt-5">

        <div class="container-fluid ps-5 ">
            <div class="row">
                <div class="col-md-4">
                    <div class="sidebar">
                        <ul class="navbar-item mt-5">
                            <li class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 24 24" style="fill: white;">
                                    <path
                                        d="M19 3H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM9 11V5h6v6H9zm6 2v6H9v-6h6zM5 5h2v2H5V5zm0 4h2v2H5V9zm0 4h2v2H5v-2zm0 4h2v2H5v-2zm14.002 2H17v-2h2.002v2zm-.001-4H17v-2h2.001v2zm0-4H17V9h2.001v2zM17 7V5h2v2h-2z">
                                    </path>
                                </svg>

                                <a href="" class="text-decoration-none fs-6 fw-bold active">Dashboard</a>
                            </li>
                            <li class="nav-link pt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 24 24" style="fill: white;">
                                    <circle cx="10.5" cy="19.5" r="1.5"></circle>
                                    <circle cx="17.5" cy="19.5" r="1.5"></circle>
                                    <path d="M13 13h2v-2.99h2.99v-2H15V5.03h-2v2.98h-2.99v2H13V13z"></path>
                                    <path
                                        d="M10 17h8a1 1 0 0 0 .93-.64L21.76 9h-2.14l-2.31 6h-6.64L6.18 4.23A2 2 0 0 0 4.33 3H2v2h2.33l4.75 11.38A1 1 0 0 0 10 17z">
                                    </path>
                                </svg>
                                <a href="{{ route('pricing') }}" class="text-decoration-none fs-6 fw-bold">Pricing</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 p-0">
                    <div class="content-film mt-5">
                        <div class="film-populer pt-4">
                            <h1 class="fs-4 fw-bold">Film Terpopuler</h1>
                            <div class="list-film pt-3">
                                <div class="owl-carousel">
                                    @foreach ($moviesP as $movieP)
                                        <div class="item">
                                            <div class="card"
                                                style="background: none !important; border: none !important;">
                                                <div class="card-header ps-0" style="border: none !important;">
                                                    <a href="#">
                                                        <img style="height: 150px !important;" src="{{ asset('storage/movies/' . $movieP->thumbnail) }}"
                                                            alt="" srcset="">
                                                    </a>
                                                </div>
                                                <div class="card-body ps-0">
                                                    <div
                                                        class="head-deskripsi d-flex justify-content-between align-items-center">
                                                        <h1 class="title text-white p-0 fw-bold text-start fs-6">
                                                            {{ $movieP->title }}
                                                        </h1>
                                                        <h2 class="text-white fw-bold text-end text-black fs-6">
                                                            {{ date('Y', strtotime($movieP->release_date)) }}
                                                        </h2>
                                                    </div>
                                                    <div
                                                        class="body-deskripsi d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <p class="text-white m-0 fs-6 fw-bold d-flex justify-content-center text-capitalize"
                                                                style="font-size: 12px !important;">
                                                                {{ $movieP->type_film }}
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="text-right d-flex justify-content-end align-items-center">
                                                            <p class="text-white m-0 fs-6 fw-bold d-flex justify-content-center"
                                                                style="font-size: 12px !important;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 24 24"
                                                                    style="fill: #FDD212;">
                                                                    <path
                                                                        d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                                    </path>
                                                                    <path
                                                                        d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z">
                                                                    </path>
                                                                </svg>
                                                                {{ $movieP->duration }}
                                                            </p>
                                                            <p class="text-white m-0 fw-bold ms-2 d-flex justify-content-center"
                                                                style="font-size: 12px !important;"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 24 24"
                                                                    style="fill: #FDD212;">
                                                                    <path
                                                                        d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z">
                                                                    </path>
                                                                </svg>
                                                                {{ $movieP->ranting }}
                                                            </p>
                                                        </div>

                                                    </div>
                                                    <div class="footer-deskripsi mt-4">
                                                        <a href="{{ route('member.film.view', $movieP->id) }}"
                                                            class="btn btn-primary text-center w-100 fw-bold"
                                                            style="background-color: #FDD212 !important; border: none; ">Tonton
                                                            Sekarang</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="film-lainnya mt-5">
                            <h1 class="fs-4 fw-bold">Film Lainnya</h1>
                            <div class="list-film pt-3">
                                <div class="owl-carousel">
                                    @foreach ($moviesL as $movies)
                                        <div class="item">
                                            <div class="card"
                                                style="background: none !important; border: none !important;">
                                                <div class="card-header ps-0" style="border: none !important;">
                                                    <a href="#">
                                                        <img style="height: 150px !important;" src="{{ asset('storage/movies/' . $movies->thumbnail) }}"
                                                            alt="" srcset="">
                                                    </a>
                                                </div>
                                                <div class="card-body ps-0">
                                                    <div
                                                        class="head-deskripsi d-flex justify-content-between align-items-center">
                                                        <h1 class="title text-white p-0 fw-bold text-start fs-6">
                                                            {{ $movies->title }}
                                                        </h1>
                                                        <h2 class="text-white fw-bold text-end text-black fs-6">
                                                            {{ date('Y', strtotime($movies->release_date)) }}
                                                        </h2>
                                                    </div>
                                                    <div
                                                        class="body-deskripsi d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <p class="text-white m-0 fs-6 fw-bold d-flex justify-content-center text-capitalize"
                                                                style="font-size: 12px !important;">
                                                                {{ $movies->type_film }}
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="text-right d-flex justify-content-end align-items-center">
                                                            <p class="text-white m-0 fs-6 fw-bold d-flex justify-content-center"
                                                                style="font-size: 12px !important;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 24 24"
                                                                    style="fill: #FDD212;">
                                                                    <path
                                                                        d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                                    </path>
                                                                    <path
                                                                        d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z">
                                                                    </path>
                                                                </svg>
                                                                {{ $movies->duration }}
                                                            </p>
                                                            <p class="text-white m-0 fw-bold ms-2 d-flex justify-content-center"
                                                                style="font-size: 12px !important;"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 24 24"
                                                                    style="fill: #FDD212;">
                                                                    <path
                                                                        d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z">
                                                                    </path>
                                                                </svg>
                                                                {{ $movies->ranting }}
                                                            </p>
                                                        </div>

                                                    </div>
                                                    <div class="footer-deskripsi mt-4">
                                                        <a href="{{ route('member.film.view', $movies->id) }}"
                                                            class="btn btn-primary text-center w-100 fw-bold"
                                                            style="background-color: #FDD212 !important; border: none; ">Tonton
                                                            Sekarang</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <footer>
                <div class="container-fluid px-5 bg-black pt-4 pb-4">
                    <p class="m-0 text-center">Copyright 2024 || StreamFilm</p>
                </div>
            </footer>  -->

    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('streamfilm/dist/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });

        $('.owl-carousel').owlCarousel({
            autoWidth:true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>
</body>

</html>
