<h5>Nueva comunicación recibida</h5>
<p>Detalles de contacto: </p>
<p>Nombre: {{ $user->name." ".$user->surname }}</p>
<p>Email: {{ $user->email }}</p>
<p>Teléfono: {{ $user->telephone }}</p>
<br>
<p>Asunto: {!! $booking->inquiry_header !!}</p>
<p>Mensaje: {!! $booking->inquiry_text !!}</p>
@if(!empty($booking->start_date))
    <p>Tipo de mensaje: Reserva</p>
    <p>Fecha de entrada: {{ $booking->start_date->format('d-m-Y') }}</p>
    <p>Fecha de entrada: {{ $booking->end_date->format('d-m-Y') }}</p>
@else
    <p>Tipo de mensaje: Información</p>
@endif

