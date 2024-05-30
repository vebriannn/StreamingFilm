<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In Member</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One:wght@400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('streamfilm/css/login.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    @error('credentials')
        <div class="text-white bg-danger pt-3 pb-3" style="display: flex; justify-content: center; align-items: center;">
            {{ $message }}</div>
    @enderror
    <form action="{{ route('member.login.auth') }}" method="POST">
        @csrf
        <div class="login">
            <div class="container-2">
                <a href="{{ route('home') }}">
                    <img class="arrow-back-ios" src="{{ asset('streamfilm/images/arrow_back_ios.png') }}" />
                </a>
            </div>
            <span class="lets-started">
                Let’s Started
            </span>
            <div class="lets-watch-an-interesting-film">
                let&#39;s watch an interesting film
            </div>
            <div class="container-1">
                <div class="email-addres">
                    Email Addres
                </div>
                <div class="frame-447">
                    <div class="frame-401">
                        <input type="email" name="email" id="" placeholder="Email Addres"
                            class="your-email-addres">
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="password">
                    Password
                </div>
                <div class="frame-448">
                    <div class="frame-4011">
                        <input type="password" name="password" id="" placeholder="Password"
                            class="your-password">
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="container">
                    <button class="continue">
                        Continue
                    </button>
                </div>
            </div>
        </div>
    </form>
</body>
@include('sweetalert::alert')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
