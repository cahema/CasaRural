<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Config</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
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
                <li class="nav-item"><a class="nav-link" href="/contacto">Contacto y reservas</a></li>
                @auth
                    <li class="nav-item"><a class="nav-link active" href="/config">Config</a></li>
                    <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<main class="page blog-post-list">
    <section class="clean-block clean-blog-list dark">
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">Configuración RRSS y Calendario</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">Suscritos a newsletter</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-3">Enviar newsletter</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="tab-1" style="margin-top: 10px;">
                    <h4 style="margin-left: 25px;">Pares de clave-valor de configuración</h4>
                    <div style="margin-right: 50px;margin-left: 50px;">
                        <form method="post" action="/guardarConfiguracion">
                            <button class="btn btn-primary" type="submit" style="margin-bottom: 10px;">Guardar</button>
                            {{ csrf_field() }}
                            <div class="row">
                                @foreach($configs as $config)
                                <div class="col-md-6">
                                    <div class="card" style="margin-bottom: 25px;">
                                        <div class="card-body p-4">
                                            <h4 class="card-title">{{ ucfirst($config->name) }}</h4>
                                            <input class="form-control" type="text" name="{{ $config->id }}" value="{{ $config->value }}">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-2" style="margin-top: 10px;">
                    <h4 style="margin-left: 25px;">Direcciones suscritas a la newsletter</h4>
                    <div>
                        <div class="container position-relative">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <input type="text" id="emailBuscar" onkeyup="filtrarEmails()" placeholder="Buscar emails">
                                        <button class="btn btn-primary bg-success me-0 pe-2" type="button" data-bs-target="#modal-nuevo" data-bs-toggle="modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#ffffff" d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                                            Nuevo Usuario
                                        </button>
                                        <table id="tablaEmails" class="table">
                                            <thead>
                                            <tr>
                                                <th class="col-8 col-md-10">Email</th>
                                                <th class="col-4 col-md-2">Acciones</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $user)

                                                <tr>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        <button onclick="editarEmail({{ $user->id }}, '{{ $user->email }}')" class="btn btn-primary me-0 pe-2" type="button" style="background: var(--bs-warning);" data-bs-target="#modal-editar" data-bs-toggle="modal">
                                                            <i class="far fa-edit me-lg-0"></i>
                                                        </button>
                                                        <button onclick="borrarEmail({{ $user->id }})" class="btn btn-primary me-lg-0" type="button" style="margin-left: 5px;background: var(--bs-danger);" data-bs-target="#modal-borrar" data-bs-toggle="modal">
                                                            <i class="far fa-trash-alt me-lg-0"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="modal-editar">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Modificar Email</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                                </div>
                                <form action="/modificarEmail" method="post">
                                    {{ csrf_field() }}
                                    <div class="modal-body">
                                        <input id="idEmailModificar" name="idEmailModificar" type="hidden" value="">
                                        <input id="emailModificar" name="emailModificar" type="text" class="col-12">
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancelar</button>
                                        <button class="btn btn-primary" type="submit" style="background: var(--bs-warning);">Modificar</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="modal-borrar">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Borrar email</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Esto borrará este email, ¿estás seguro?</p>
                                </div>
                                <form action="/borrarEmail" method="post">
                                    {{ csrf_field() }}
                                    <input id="idEmailBorrar" name="idEmailBorrar" type="hidden" value="">
                                    <div class="modal-footer">
                                        <button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancelar</button>
                                        <button class="btn btn-primary" type="submit" style="background: var(--bs-danger);">Borrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="modal-nuevo">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Nuevo Usuario</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                                </div>
                                <form method="post" action="/nuevoUsuario">
                                    <div class="modal-body">
                                        {{ csrf_field() }}
                                        <div class="mb-3"><label class="form-label" for="name">Nombre</label><input class="form-control" type="text" id="name" name="name" data-bs-theme="light"></div>
                                        <div class="mb-3"><label class="form-label" for="surname">Apellidos</label><input class="form-control" type="text" id="surname" name="surname" data-bs-theme="light"></div>
                                        <div class="mb-3"><label class="form-label" for="telephone">Teléfono</label><input class="form-control" type="text" id="telephone" name="telephone" data-bs-theme="light"></div>
                                        <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control" type="email" id="email" name="email" data-bs-theme="light"></div>
                                        <div class="mb-3"><label class="form-label" for="password">Contraseña</label><input class="form-control" type="password" id="password" name="password" data-bs-theme="light"></div>
                                        <div>
                                            <div class="form-check"><input value="2" class="form-check-input" type="checkbox" id="admin" name="role"><label class="form-check-label" for="formCheck-1">¿Es administrador?</label></div>
                                        </div>
                                        <div>
                                            <div class="form-check"><input value="1" class="form-check-input" type="checkbox" id="newsletter" checked name="newsletter"><label class="form-check-label" for="formCheck-1">¿Suscrito a la Newsletter?</label></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancelar</button>
                                        <button class="btn btn-primary" type="submit" style="background: var(--bs-success);">Crear</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-3" style="margin-top: 10px;">
                    <h4 style="margin-left: 25px;">Enviar correo a los escritos a la newsletter</h4>
                    <div>
                        <section class="position-relative py-4 py-xl-5">
                            <div class="container position-relative">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-body p-sm-5">
                                                <h2 class="text-center mb-4">Enviar Newsletter</h2>
                                                <form method="post" action="/enviarNewsletter">
                                                    {{ csrf_field() }}
                                                    <div class="mb-3"><input class="form-control" type="text" id="asunto" name="subject" placeholder="Asunto"></div>
                                                    <div class="mb-3"><textarea class="form-control" id="mensaje" name="message" rows="6" placeholder="Mensaje"></textarea><script src="https://htmeditor.com/js/htmeditor.min.js" htmeditor_textarea="mensaje" full_screen="no" editor_height="480" run_local="no"> </script> </div>
                                                    <div><button class="btn btn-primary d-block w-100" type="submit">Enviar</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/config.js') }}"></script>
@if (!empty($success))
    <div class="modal" tabindex="-1" id="modalSuccess">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Exito</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="alert alert-success">
                    <p>{{ $success['mensaje'] }}</p>
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
            let elemento = $('a[href="{{ $success['tab'] }}"]')[0]
            elemento.click()
        });
    </script>
@endif
</body>

</html>
