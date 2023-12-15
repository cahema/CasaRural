<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v18.0" nonce="zC9elMBq"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Facebook</title>
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
                <li class="nav-item"><a class="nav-link active" href="/facebook">Posts de Facebook</a></li>
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
<main style="height: 100%" class="page">
    <section style="height: 100%" class="clean-block features">
        <div style="height: 100%" class="container">
            <div style="height: 100%" class="block-heading">
                <h2 class="text-info">Posts de nuestro Facebook</h2>
                <div style="height: 100%" class="row">
                    <div style="height: 100%" class="col">
                        <p style="text-align: center; opacity: 1; height: 100%">
                            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FGoogle&width=500&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=800" scrolling="yes" style="border:none; overflow:hidden; width:500px; height: 100%; background: white; float:left; " allowtransparency="true" frameborder="0"></iframe>
                        </p>
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
