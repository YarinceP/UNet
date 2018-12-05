<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class seguridad extends Controller
{

    public static function entrar(Request $request)
    {

        $credentials = $request->only('alias', 'password');
//    dd(\Auth::attempt($credentials));
        if (\Auth::attempt($credentials)) {

            return redirect()->intended('menu');
        } else {
            return back()->with('status', 'Error: No se ha podido entrar')->withInput();
        }

    }

    public static function menu()
    {
        return \View::make('menu');

    }

    public static function logout()
    {
        \Auth::logout();
        return redirect('welcome');
    }


    public static function perfil(){



        return \View::make('perfil');
    }







}
