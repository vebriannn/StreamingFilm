<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member | View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('streamfilm/css/users/view.css') }}">
</head>

<body>
    <header>
        <nav class="navbar bg-rgb">
            <div class="container-fluid px-5">
                <a class="navbar-brand" href="{{route('member.dashboard')}}">
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
        <div class="container-fluid px-5" style="height: max-content; padding-bottom: 40px;">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center mt-5">
                    <div class="view" style="width: 80%; height: 500px;">
                        <iframe style="border-radius: 10px;" width="100%" height="100%"
                            src="{{$movies->movie}}" title="{{$movies->title}}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="deskripsi " style="width: 80%; height: max-content;">
                        <h1 class="title fw-bold fs-1 text-upper m-0 mt-3">{{$movies->title}}</h1>
                        <div class="subtitle d-flex justify-content-between mb-4">
                            <p class="fs-5" style="color: #FDD212;">{{$movies->categories}} - Release {{date('Y', strtotime($movies->release_date))}}</p>
                            <p style="color: #FDD212;">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        style="fill: #FDD212;">
                                        <path
                                            d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z">
                                        </path>
                                    </svg>
                                </span>
                                {{$movies->ranting}}
                            </p>
                        </div>
                        <div class="casts mb-3">
                            <h4 class="fs-4 fw-bold">Casts</h4>
                            <p class="">{{$movies->casts}}</p>
                        </div>
                        <div class="about mt-4">
                            <h4 class="fs-4 fw-bold">About</h4>
                            <p class="">{{$movies->about}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
