<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog - Brand</title>
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
                        <form method="post" action="/guardarConfiguracion"><button class="btn btn-primary" type="submit" style="margin-bottom: 10px;">Guardar</button>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card" style="margin-bottom: 25px;">
                                        <div class="card-body p-4">
                                            <h4 class="card-title">Clave</h4><input class="form-control" type="text" name="config1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card" style="margin-bottom: 25px;">
                                        <div class="card-body p-4">
                                            <h4 class="card-title">Clave</h4><input class="form-control" type="text" name="config2">
                                        </div>
                                    </div>
                                </div>
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
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="col-8 col-md-10">Email</th>
                                                <th class="col-4 col-md-2">Acciones</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Email</td>
                                                <td><button class="btn btn-primary me-0 pe-2" type="button" style="background: var(--bs-warning);" data-bs-target="#modal-editar" data-bs-toggle="modal"><i class="far fa-edit me-lg-0"></i></button><button class="btn btn-primary me-lg-0" type="button" style="margin-left: 5px;background: var(--bs-danger);" data-bs-target="#modal-borrar" data-bs-toggle="modal"><i class="far fa-trash-alt me-lg-0"></i></button></td>
                                            </tr>
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
                                <div class="modal-body"><input type="text" class="col-12"></div>
                                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancelar</button><button class="btn btn-primary" type="button" style="background: var(--bs-warning);">Modificar</button></div>
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
                                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancelar</button><button class="btn btn-primary" type="button" style="background: var(--bs-danger);">Borrar</button></div>
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
                                                <h2 class="text-center mb-4">Enviar correos</h2>
                                                <form method="post" action="/enviarNewsletter">
                                                    <div class="mb-3"><input class="form-control" type="text" id="asunto" name="asunto" placeholder="Asunto"></div>
                                                    <div class="mb-3"><textarea class="form-control" id="mensaje" name="mensaje" rows="6" placeholder="Mensaje"></textarea></div>
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
</body>

</html>
