<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterMail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function send(Request $request): RedirectResponse
    {
        $users = User::where('newsletter', 1)->get();

        foreach ($users as $user) {
            Mail::to($user)->send(new NewsletterMail($request->subject, $request->message));
        }

        return redirect('/config')->with('success', ['mensaje' => 'Newsletter enviada con éxito', 'tab' => '#tab-3']);
    }
}
