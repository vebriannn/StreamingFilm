<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title> @yield('title') - Streaming Film</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('colorlib/admin/assets/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('colorlib/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
        media="all">
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Tempus Dominus CSS -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-5/5.1.2/css/tempusdominus-bootstrap-5.min.css"
        rel="stylesheet">
    <!-- Main CSS-->
    <link href="{{ asset('colorlib/admin/assets/css/theme.css') }}" rel="stylesheet" media="all">
</head>

<body class="">

    @include('admin.crud.users.layouts.navbar')

    @yield('content')

    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!-- jQuery (diperlukan oleh Tempus Dominus) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Tempus Dominus JavaScript -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-5/5.1.2/js/tempusdominus-bootstrap-5.min.js">
    </script>

    @yield('js')


</body>

</html>
<!-- end document-->
