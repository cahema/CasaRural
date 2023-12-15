@php
    use App\Models\Config;
@endphp

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Página principal</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/importants.css') }}">
</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top bg-body clean-navbar navbar-light">
    <div class="container"><a class="navbar-brand logo" href="#">Casa Rural</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="/index">Página principal</a></li>
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
<main class="page landing-page">
    <section class="clean-block clean-info dark" style="padding: 0;">
        <div class="container">
            <div>
                <h2 class="text-info" style="text-align: center;margin-top: 50px;">Casa rural Cahema</h2>
                <div class="carousel slide" data-bs-ride="carousel" id="carousel" style="text-align: left;height: auto;">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img class="w-100 d-block" src="https://picsum.photos/id/237/700/300" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="https://picsum.photos/id/238/700/300" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="https://picsum.photos/id/239/700/300" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="https://picsum.photos/id/240/700/300" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="https://picsum.photos/id/241/700/300" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                    <div class="carousel-indicators"><button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button> <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"></button> <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"></button> <button type="button" data-bs-target="#carousel" data-bs-slide-to="3"></button> <button type="button" data-bs-target="#carousel" data-bs-slide-to="4"></button></div>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block clean-info dark" style="padding: 0;">
        <div class="container" style="padding: 0 0 50px;">
            <div class="block-heading" style="padding: 20px 0 0;">
                <h2 class="text-info">Información</h2>
                <p class="parrafoAncho">Nuestra casa rural tiene 30 camas en 15 habitaciones, además nuestras instalaciones incluyen:</p>
            </div>
            <ul style="max-width: 500px;margin: auto;">
                <li>Piscina 500m2</li>
                <li>Jardines</li>
                <li>Curso golf</li>
                <li>Aparcamiento</li>
            </ul>
        </div>
    </section>
    <section class="clean-block features" style="padding: 0;">
        <div class="container">
            <div class="block-heading" style="padding: 0;">
                <h2 class="text-info">Localización</h2><iframe allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?key={{ Config::where('name', 'Api Key Maps')->first()->value }}&amp;q=Sevilla&amp;zoom=11" width="100%" height="800"></iframe>
            </div>
        </div>
    </section>
</main>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
