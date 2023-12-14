<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valido = $request->validate([
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

        return view('contacto', ['success' => true]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
