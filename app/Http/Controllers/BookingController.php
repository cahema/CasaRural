<?php

namespace App\Http\Controllers;

use App\Mail\NotificationMail;
use App\Models\Booking;
use App\Models\Config;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Spatie\GoogleCalendar\Event;
use function PHPUnit\Framework\isEmpty;

class BookingController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|max:255|email|string',
            'name' => 'required|max:255|string',
            'surname' => 'required|max:255|string',
            'telephone' => 'required|max:255|string',
            'inquiry_header' => 'required|max:255|string',
            'inquiry_text' => 'required|string',
            'inquiry_type' => 'required|string|in:informacion,reserva',
            'start_date' => 'exclude_unless:inquiry_type,reserva|date|after:today',
            'end_date' => 'exclude_unless:inquiry_type,reserva|date|after:start_date',
            'newsletter' => 'boolean',
        ]);

        $fechaMaxDB = Booking::select('end_date')->where('accepted', 1)->orderBy('end_date', 'desc')->first();
        $fechaMaxPermitida = new DateTime('+1 month');
        $fechaMaxPermitida = $fechaMaxPermitida->format('Y-m-d');

        if(empty($fechaMaxDB)) {
            $fechaMaxDB = $fechaMaxPermitida;
        }

        if($request->start_date > $fechaMaxDB || $request->start_date > $request->end_date || $request->end_date > $fechaMaxPermitida) {
            return Redirect::back()->withErrors(['errors' => 'La fecha introducida no es válida']);
        }

        $user = User::where('email', $request->email)->first();
        if($user === null) {
            $user = User::create([
                'email' => $request->email,
                'name' => $request->name,
                'surname' => $request->surname,
                'telephone' => $request->telephone,
                'newsletter' => $request->newsletter,
            ]);
        }

        $booking = Booking::create([
            'user_id' => $user->id,
            'inquiry_header' => $request->inquiry_header,
            'inquiry_text' => $request->inquiry_text,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        $this->notificar($user, $booking);

        $evento = Event::create([
            'name' => 'Reserva '.$user->name.' '.$user->surname,
            'startDateTime' => $booking->start_date,
            'endDateTime' => $booking->end_date,
        ]);

        return view('contacto', ['success' => true]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function notificar(User $user, Booking $booking)
    {
        $email = Config::where('name', 'Correo de notificaciones')->first()->value;
        Mail::to($email)->send(new NotificationMail($user, $booking));
    }
}
