<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member | Pricing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('streamfilm/css/users/pricing.css') }}">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container-fluid px-5">
                <a class="navbar-brand pt-3" href="{{ Auth::user() ? route('member.dashboard') : route('home') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                        style="fill: white;">
                        <path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z">
                        </path>
                    </svg>
                </a>
            </div>
        </nav>
    </header>
    <div class="content">
        <div class="pricing mt-3">
            <div class="container-fluid px-5">
                <div class="title-section">
                    <h1 class="title fw-bold">STREAMING FILM</h1>
                    <p class="subtitle fw-bold fs-5">Choose the plan that’s right for you</p>
                </div>
                <div class="card-price">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-start">
                            <div class="card">
                                <div class="card-header p-3 rounded-3">
                                    <h1 class="fs-3 m-0 text-white">Paket Premium</h1>
                                    <p class="fs-5 m-0 text-white">4K + HDR</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 p-0 mt-3">
                                            <p class="m-0 title-price">Price - Permanent</p>
                                            <p class="subtitle-price fw-bold m-0">IDR 800,000</p>
                                            <hr class="w-100 m-0 mt-2">
                                        </div>

                                        <div class="col-md-12 p-0 mt-3">
                                            <p class="m-0 title-price">Video and sound quality</p>
                                            <p class="subtitle-price fw-bold m-0">Best</p>
                                            <hr class="w-100 m-0 mt-2">
                                        </div>

                                        <div class="col-md-12 p-0 mt-3">
                                            <p class="m-0 title-price">Resolution</p>
                                            <p class="subtitle-price fw-bold m-0">4k (Ultra HD + HDR)</p>
                                            <hr class="w-100 m-0 mt-2">
                                        </div>

                                        <div class="col-md-12 p-0 mt-3">
                                            <p class="m-0 title-price">Spatial audio</p>
                                            <p class="subtitle-price fw-bold m-0">Included</p>
                                            <hr class="w-100 m-0 mt-2">
                                        </div>

                                        <div class="col-md-12 p-0 mt-3">
                                            <p class="m-0 title-price">Suppoerted Devices</p>
                                            <p class="subtitle-price fw-bold m-0">Tv, computer, mobile phone, tablet</p>
                                            <hr class="w-100 m-0 mt-2">
                                        </div>
                                    </div>
                                </div>
                                @if (Auth::check())
                                    @php
                                        $userRole = Auth::user()->role;
                                    @endphp
                                    <div class="card-footer p-0 pt-0">
                                        <div class="btn-buy text-center">
                                            <a href="{{ route('member.pricing.buy', 'premium') }}"
                                                class="{{ $userRole == 'free' ? '' : 'disabled-link' }}">Beli
                                                Sekarang</a>
                                        </div>
                                    </div>
                                @else
                                    <div class="card-footer p-0">
                                        <div class="btn-buy text-center">
                                            <a href="{{ route('member.pricing.buy', 'premium') }}"> Beli
                                                Sekarang</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center">
                            <div class="card">
                                <div class="card-header p-3 rounded-3">
                                    <h1 class="fs-3 m-0 text-white">Paket Standard</h1>
                                    <p class="fs-5 m-0 text-white">4K + HDR</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 p-0 mt-3">
                                            <p class="m-0 title-price">Price - Trial 1 Month</p>
                                            <p class="subtitle-price fw-bold m-0">IDR 120,000</p>
                                            <hr class="w-100 m-0 mt-2">
                                        </div>

                                        <div class="col-md-12 p-0 mt-3">
                                            <p class="m-0 title-price">Video and sound quality</p>
                                            <p class="subtitle-price fw-bold m-0">Best</p>
                                            <hr class="w-100 m-0 mt-2">
                                        </div>

                                        <div class="col-md-12 p-0 mt-3">
                                            <p class="m-0 title-price">Resolution</p>
                                            <p class="subtitle-price fw-bold m-0">4k (Ultra HD + HDR)</p>
                                            <hr class="w-100 m-0 mt-2">
                                        </div>

                                        <div class="col-md-12 p-0 mt-3">
                                            <p class="m-0 title-price">Spatial audio</p>
                                            <p class="subtitle-price fw-bold m-0">Included</p>
                                            <hr class="w-100 m-0 mt-2">
                                        </div>

                                        <div class="col-md-12 p-0 mt-3">
                                            <p class="m-0 title-price">Suppoerted Devices</p>
                                            <p class="subtitle-price fw-bold m-0">Tv, computer, mobile phone, tablet</p>
                                            <hr class="w-100 m-0 mt-2">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 ">
                                    @if (Auth::check())
                                        @php
                                            $userRole = Auth::user()->role;
                                        @endphp
                                        <div class="card-footer p-0">
                                            <div class="btn-buy text-center">
                                                <a href="{{ route('member.pricing.buy', 'premium') }}"
                                                    class="{{ $userRole == 'free' ? '' : 'disabled-link' }}">
                                                    Beli Sekarang </a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="card-footer p-0">
                                            <div class="btn-buy text-center">
                                                <a href="{{ route('member.pricing.buy', 'premium') }}">
                                                    Beli Sekarang
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('sweetalert::alert')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>
