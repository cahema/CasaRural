<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/importants.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Login-Form-Basic-icons.css') }}">
</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top bg-body clean-navbar navbar-light">
    <div class="container"><a class="navbar-brand logo" href="#">Casa Rural</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/index">Página principal</a></li>
                <li class="nav-item"><a class="nav-link" href="/facebook">Posts de Facebook</a></li>
                <li class="nav-item"><a class="nav-link" href="/galeria">Galería</a></li>
                <li class="nav-item"><a class="nav-link" href="/contacto">Contacto y reservas</a></li>
                @auth
                    <li class="nav-item"><a class="nav-link" href="/config">Config</a></li>
                    <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<main class="page">
    <section class="clean-block about-us">
        <div class="container">
            <section class="position-relative py-4 py-xl-5" style="margin-bottom: -50px;">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">
                            <h2>Login</h2>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-5">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"></path>
                                        </svg></div>
                                    <form class="text-center" method="post" action="/login">
                                        {{ csrf_field() }}
                                        <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Contraseña"></div>
                                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Login</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</main>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
