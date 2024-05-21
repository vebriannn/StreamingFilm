<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Pages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('streamfilm/css/index.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>

                    </ul>
                    {{-- <ul class="navbar-nav mx-auto">
                        <li class="nav-item ">
                            <h1 class="btn ">Stream</h1>
                        </li>
                    </ul> --}}
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        @if (!is_null($users))
                        <li class="nav-item">
                            <div class="dropdown d-flex">
                                    <p class="m-0 me-2" style="color: white;">Welcome,
                                    </p>
                                    <a class="dropdown-toggle pb-2" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false" style="border: none; background: transparent !important; text-decoration: none; color: white !important; font-size: 16px; padding:0;">
                                        {{$users->name}}
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" style="border: none; background: transparent !important; color: #346089 !important; font-size: 16px;">Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="btn" href="{{ route('member.login') }}">Sign In</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="content">
        <div class="container w-50">
            <p>Welcome to STREAM</p>
            <h1 class="text-center">Watch lots of interesting
                films here</h1>
            <p class="text-center">"Lebih dari Sekadar Hiburan: Kami Mempersembahkan Kisah-kisah
                yang Menginspirasi dan Mengubah Hidup!"</p>
            <a href="" class="btn mt-5" aria-disabled="true">Get Started</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
