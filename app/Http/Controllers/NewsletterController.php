<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class NewsletterController extends Controller
{
    public function send(Request $request): View
    {
        $users = User::where('newsletter', 1)->get();

        Mail::to($users)->send(new NewsletterMail($request->subject, $request->message));

        return view('/config', ['success' => 'Newsletter Enviada con éxito']);
    }
}
