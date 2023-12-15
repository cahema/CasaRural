<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ConfigController extends Controller
{
    public function index() {
        $configs = Config::all();
        $users = User::where('email','!=','')->where('newsletter', 1)->get();
        try {
            $success = session()->get('success');
        } catch (Exception $e) {
            $success = null;
        }

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

        return redirect('/config')->with('success', ['mensaje' => 'Configuración guardada con éxito', 'tab' => '#tab-1']);
    }
}
