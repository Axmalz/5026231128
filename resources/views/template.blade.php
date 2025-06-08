<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fadhiil Akmal Hamizan : 5026231128</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome (optional) -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        .jumbotron {
            background-color: #9de2e2;
            height: 100px;
        }
    </style>
</head>

<body>
    <div class="jumbotron text-center mx-auto mb-0">
        <h1>5026231128 : Fadhiil Akmal Hamizan</h1>
    </div>

    <nav class="navbar navbar-expand-sm navbar-light bg-light shadow-sm">
        <!-- Toggler untuk tampilan mobile -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar"
            aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Daftar menu yang dapat di-collapse -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item {{ request()->is('frontend') ? 'active' : '' }}">
                    <a class="nav-link" href="/frontend">All Front End</a>
                </li>
                <li class="nav-item {{ request()->is('pegawai') ? 'active' : '' }}">
                    <a class="nav-link" href="/pegawai">Pegawai</a>
                </li>
                <li class="nav-item {{ request()->is('tugas-crud') ? 'active' : '' }}">
                    <a class="nav-link" href="#">Tugas CRUD</a>
                </li>
                <li class="nav-item {{ request()->is('eas') ? 'active' : '' }}">
                    <a class="nav-link" href="#">EAS</a>
                </li>
                <li class="nav-item {{ request()->is('latihan-1') ? 'active' : '' }}">
                    <a class="nav-link" href="#">Latihan 1</a>
                </li>
                <li class="nav-item {{ request()->is('latihan-2') ? 'active' : '' }}">
                    <a class="nav-link" href="#">Latihan 2</a>
                </li>
                <li class="nav-item {{ request()->is('latihan-3') ? 'active' : '' }}">
                    <a class="nav-link" href="#">Latihan 3</a>
                </li>
            </ul>
        </div>
    </nav>

    <br>
    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap 4 JS (jQuery & Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
