@php
    use App\Models\Config;
@endphp

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
                @auth
                    <li class="nav-item"><a class="nav-link" href="/config">Config</a></li>
                    <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                @endauth
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
                    <form method="post" action="/contacto" onsubmit="cambiaRadios()">
                        {{ csrf_field() }}
                        <div class="mb-3"><label class="form-label" for="name">Nombre</label><input class="form-control" type="text" id="name" name="name" data-bs-theme="light"></div>
                        <div class="mb-3"><label class="form-label" for="surname">Apellidos</label><input class="form-control" type="text" id="surname" name="surname" data-bs-theme="light"></div>
                        <div class="mb-3"><label class="form-label" for="telephone">Teléfono</label><input class="form-control" type="text" id="telephone" name="telephone" data-bs-theme="light"></div>
                        <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control" type="email" id="email" name="email" data-bs-theme="light"></div>
                        <div class="mb-3"><label class="form-label" for="inquiry_header">Asunto</label><input class="form-control" type="text" id="inquiry_header" name="inquiry_header" data-bs-theme="light"></div>
                        <div class="mb-3"><label class="form-label" for="inquiry_text">Mensaje</label><textarea class="form-control" id="inquiry_text" name="inquiry_text" data-bs-theme="light"></textarea></div>
                        <div><label class="form-label">Tipo de consulta</label>
                            <div class="form-check">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check"><input class="form-check-input disabledInfoReserva" type="radio" id="radio1" value="informacion" name="inquiry_type" data-bs-toggle="collapse" href="#fechas" onclick="deshabilitaHabilita(this)" checked disabled><label class="form-check-label disabledInfoReserva" for="formCheck-1">Información</label></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check"><input class="form-check-input disabledInfoReserva" type="radio" id="radio2" value="reserva" name="inquiry_type" data-bs-toggle="collapse" href="#fechas" onclick="deshabilitaHabilita(this)"><label class="form-check-label disabledInfoReserva" for="formCheck-2">Reserva</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="fechas" class="collapse">
                            <div><label class="form-label">Fecha de entrada</label><input class="form-control" type="date" name="start_date"></div>
                            <div><label class="form-label">Fecha de salida</label><input class="form-control" type="date" name="end_date"></div>
                        </div>
                        <div>
                            <div class="form-check"><input value="1" class="form-check-input" type="checkbox" id="newsletter" checked name="newsletter"><label class="form-check-label" for="formCheck-1">Suscribirse a nuestra newsletter</label></div>
                        </div>
                        <div class="mb-3" style="margin-top: 25px;"><button class="btn btn-primary" type="submit">Enviar</button></div>
                    </form>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="block-heading" style="padding-top: 40px; margin-left: 170px;">
                        <h2 class="text-info">Calendario</h2>
                    </div>
                    <div style="margin-top: 25px;">
                        <iframe src="https://calendar.google.com/calendar/embed?src={{ Config::where('name', 'ID Google Calendar')->first()->value }}&ctz=Europe%2FMadrid" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/contacto.js') }}"></script>
@if ($errors->any())
    <div class="modal" tabindex="-1" id="modalError">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Errores</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(window).on('load', function() {
        $('#modalError').modal('show');
    });
    </script>
@endif
@if (!empty($success) && $success === true)
    <div class="modal" tabindex="-1" id="modalSuccess">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Enviado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="alert alert-success">
                    <p>Mensaje enviado con éxito</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#modalSuccess').modal('show');
        });
    </script>
@endif
</body>

</html>
