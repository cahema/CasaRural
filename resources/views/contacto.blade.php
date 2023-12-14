<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contacto</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/Bootstrap-4-Calendar-No-Custom-Code.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/importants.css') }}">
</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top bg-body clean-navbar navbar-light">
    <div class="container"><a class="navbar-brand logo" href="#">Casa Rural</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/index">Página principal</a></li>
                <li class="nav-item"><a class="nav-link" href="/facebook">Posts de Facebook</a></li>
                <li class="nav-item"><a class="nav-link" href="/galeria">Galería</a></li>
                <li class="nav-item"><a class="nav-link active" href="/contacto">Contacto y reservas</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-5">
                    <div class="block-heading" style="padding-top: 40px;">
                        <h2 class="text-info">Contáctanos</h2>
                    </div>
                    <form>
                        <div class="mb-3"><label class="form-label" for="name">Nombre</label><input class="form-control" type="text" id="name" name="nombre" data-bs-theme="light"></div>
                        <div class="mb-3"><label class="form-label" for="subject">Asunto</label><input class="form-control" type="text" id="subject" name="asunto" data-bs-theme="light"></div>
                        <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control" type="email" id="email" name="email" data-bs-theme="light"></div>
                        <div class="mb-3"><label class="form-label" for="message">Mensaje</label><textarea class="form-control" id="message" name="mensaje" data-bs-theme="light"></textarea></div>
                        <div><label class="form-label">Tipo de consulta</label>
                            <div class="form-check">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check"><input class="form-check-input disabledInfoReserva" type="radio" id="radio1" value="informacion" name="tipoConsulta" data-bs-toggle="collapse" href="#fechas" onclick="deshabilitaHabilita(this)" checked="" disabled=""><label class="form-check-label disabledInfoReserva" for="formCheck-1">Información</label></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check"><input class="form-check-input disabledInfoReserva" type="radio" id="radio2" value="reserva" name="tipoConsulta" data-bs-toggle="collapse" href="#fechas" onclick="deshabilitaHabilita(this)"><label class="form-check-label disabledInfoReserva" for="formCheck-2">Reserva</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="fechas" class="collapse">
                            <div><label class="form-label">Fecha de entrada</label><input class="form-control" type="date" name="fechaEntrada"></div>
                            <div><label class="form-label">Fecha de salida</label><input class="form-control" type="date" name="fechaSalida"></div>
                        </div>
                        <div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="newsletter" checked="" name="suscribirse"><label class="form-check-label" for="formCheck-1">Suscribirse a nuestra newsletter</label></div>
                        </div>
                        <div class="mb-3" style="margin-top: 25px;"><button class="btn btn-primary" type="submit">Enviar</button></div>
                    </form>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div style="margin-top: 25px;"><iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23ffffff&ctz=Europe%2FMadrid&showTitle=0&showNav=1&showDate=1&showPrint=0&showTabs=1&showCalendars=0&showTz=1&hl=es&src=Y19kMmY1NzE3YTQ5MmMxZTYwM2RkOWUzNGU2ODFkMTNjYjY1NDI3ODg4YjViYjcwNTIwZDFlZTA5ZDJkYWU0ZTYzQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23795548" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe></div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/contacto.js') }}"></script>
</body>

</html>
