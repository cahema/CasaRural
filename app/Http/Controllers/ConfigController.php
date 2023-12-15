<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\User;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request, string $success = "") {
        $configs = Config::all();
        $users = User::where('email','!=','')->where('newsletter', 1)->get();

        return view('config', ['success' => $success,'configs' => $configs, 'users' => $users]);
    }

    public function update(Request $request)
    {
        $configs = Config::all();
        $recibidos = $request->all();
        foreach ($configs as $config) {
            $config->value = $recibidos[$config->id];
            $config->save();
        }

        return $this->index($request, "Configuración guardada con éxito");
    }
}
