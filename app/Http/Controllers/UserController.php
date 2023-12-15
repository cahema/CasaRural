<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if($user === null) {
            User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'name' => $request->name,
                'surname' => $request->surname,
                'telephone' => $request->telephone,
                'newsletter' => empty($request->newsletter) ? 0 : 1,
                'role_id' => empty($request->role) ? 1 : 2,
            ]);

            return redirect('/config');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = User::find($request->idEmailModificar);
        $user->email = $request->emailModificar;
        $user->save();

        return redirect('/config');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $user = User::find($request->idEmailBorrar);
        $user->email = "";
        $user->newsletter = false;
        $user->save();

        return redirect('/config');
    }
}
