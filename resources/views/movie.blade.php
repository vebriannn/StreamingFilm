@extends('member.components.layouts.base')

@section('title', 'Movies')

@section('css')
    <link rel="stylesheet" href="{{asset('streamfilm/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('streamfilm/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('streamfilm/css/users/movie.css')}}">
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid p-0">
            <div class="main-hero" style="background-image: url({{asset('streamfilm/images/bgspider.png')}});">
                <div class="col-md-6 d-flex justify-content-center flex-column px-5">
                    <h1 class="mb-0">StreamingFilm</h1>
                    <h2>Nonton Film, Bioskop, &
                        Lainnya.</h2>
                    <div class="subtitle d-flex align-items-center mt-4">
                        <p class="m-0 me-3 fs-6 fw-bold">SU 12+</p>
                        <p class="m-0 me-3 fs-6 fw-bold">HD</p>
                        <p class="m-0 me-3 fs-6 fw-bold">Action</p>
                        <p class="m-0 fs-6 fw-bold">Fiction.</p>
                    </div>
                    <div class="tanggal mt-5 d-flex ">
                        <p class="m-0 me-4 d-flex justify-content-center fw-bold align-items-center">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    style="fill: #FDD212;">
                                    <path
                                        d="M12.25 2c-5.514 0-10 4.486-10 10s4.486 10 10 10 10-4.486 10-10-4.486-10-10-10zM18 13h-6.75V6h2v5H18v2z">
                                    </path>
                                </svg>
                            </span>
                            2024
                        </p>
                        <p class="m-0 d-flex justify-content-center fw-bold align-items-center">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    style="fill: #FDD212;">
                                    <path
                                        d="M21 20V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2zM9 18H7v-2h2v2zm0-4H7v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm2-5H5V7h14v2z">
                                    </path>
                                </svg>
                            </span>
                            140min
                        </p>
                    </div>
                    <div class="btn d-flex justify-content-start mt-5">
                        <a href="#view-film">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill: white;">
                                    <path d="M7 6v12l10-6z"></path>
                                </svg>
                            </span>
                            Mulai Tonton
                        </a>
                    </div>
                </div>
            </div>
            <div class="view-film p-0" id="view-film">
                <div class="col-md-12 px-5">
                    <h1 class="fs-5 m-0">StreamingFilm</h1>
                    <p class="fw-bold fs-2">Pilih Film Terkini</p>

                    <div class="list-film">
                        <!-- Set up your HTML -->
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="card" style="background: none !important; border: none !important;">
                                    <div class="card-header">
                                        <a href="#">
                                            <img src="https://m.media-amazon.com/images/I/812ChIchw9L._SY425_.jpg"
                                                alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="head-deskripsi d-flex justify-content-between align-items-center">
                                            <h1 class="title text-white p-0 fw-bold text-start fs-5">Damsel</h1>
                                            <h2 class="text-white fw-bold text-end text-black fs-5">2024</h2>
                                        </div>
                                        <div class="body-deskripsi d-flex justify-content-end align-items-center">
                                            <p class="text-white m-0 fs-6 fw-bold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 24 24" style="fill: #FDD212;">
                                                    <path
                                                        d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                    </path>
                                                    <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path>
                                                </svg> 140Min
                                            </p>
                                            <p class="text-white m-0 fs-6 fw-bold ms-2"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 24 24" style="fill: #FDD212;">
                                                    <path
                                                        d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z">
                                                    </path>
                                                </svg> 8,8
                                            </p>
                                        </div>
                                        <div class="footer-deskripsi mt-4">
                                            <a href="{{route('member.dashboard')}}" class="btn btn-primary text-center w-100 fw-bold"
                                                style="background-color: #FDD212 !important; border: none; ">Tonton
                                                Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                            <div class="item">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid px-5 bg-black pt-4 pb-4">
            <p class="m-0 text-center">Copyright 2024 || StreamFilm</p>
        </div>
    </footer>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('streamfilm/dist/owl.carousel.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
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
@endsection
