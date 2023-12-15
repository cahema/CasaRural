<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Casa Rural</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/importants.css') }}">
</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top bg-body clean-navbar navbar-light">
    <div class="container"><a class="navbar-brand logo" href="#">Casa Rural</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/index">Página principal</a></li>
                <li class="nav-item"><a class="nav-link" href="/facebook">Posts de Facebook</a></li>
                <li class="nav-item"><a class="nav-link active" href="/galeria">Galería</a></li>
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
    <section class="clean-block features">
        <div class="container">
            <div class="form-group" style="margin-top: 50px;"><label class="form-label" for="carouselSelector" style="font-size: 25px;">Selecciona una galería</label><select id="carouselSelector" class="form-control">
                    <option value="carousel1" selected="">Exterior</option>
                    <option value="carousel2">Interior</option>
                    <option value="carousel3">Instalaciones</option>
                </select></div>
        </div>
        <div class="container">
            <div class="carousel slide" data-bs-ride="carousel" id="carousel1">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="w-100 d-block w-100" alt="Slide Image" src="https://picsum.photos/id/237/700/300"></div>
                    <div class="carousel-item"><img class="w-100 d-block w-100" alt="Slide Image" src="https://picsum.photos/id/238/700/300"></div>
                    <div class="carousel-item"><img class="w-100 d-block w-100" alt="Slide Image" src="https://picsum.photos/id/239/700/300"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel1" role="button" data-bs-slide="prev"><span aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel1" role="button" data-bs-slide="next"><span aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
                <div class="carousel-indicators"><button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active"></button> <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1"></button> <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2"></button></div>
            </div>
            <div class="carousel slide" data-bs-ride="carousel" id="carousel2" style="display: none">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="w-100 d-block w-100" alt="Slide Image" src="https://picsum.photos/id/240/700/300"></div>
                    <div class="carousel-item"><img class="w-100 d-block w-100" alt="Slide Image" src="https://picsum.photos/id/241/700/300"></div>
                    <div class="carousel-item"><img class="w-100 d-block w-100" alt="Slide Image" src="https://picsum.photos/id/242/700/300"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel2" role="button" data-bs-slide="prev"><span aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel2" role="button" data-bs-slide="next"><span aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
                <div class="carousel-indicators"><button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active"></button> <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1"></button> <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2"></button></div>
            </div>
            <div class="carousel slide" data-bs-ride="carousel" id="carousel3" style="display: none">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="w-100 d-block w-100" alt="Slide Image" src="https://picsum.photos/id/243/700/300"></div>
                    <div class="carousel-item"><img class="w-100 d-block w-100" alt="Slide Image" src="https://picsum.photos/id/244/700/300"></div>
                    <div class="carousel-item"><img class="w-100 d-block w-100" alt="Slide Image" src="https://picsum.photos/id/236/700/300"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel3" role="button" data-bs-slide="prev"><span aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel3" role="button" data-bs-slide="next"><span aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
                <div class="carousel-indicators"><button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active"></button> <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1"></button> <button type="button" data-bs-target="#carousel3" data-bs-slide-to="2"></button></div>
            </div>
        </div>
    </section>
</main>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/galeria.js') }}"></script>
</body>

</html>
