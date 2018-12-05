<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;use Illuminate\Support\Facades\App;
use App\usuarioss;

class usuarios extends Controller
{

    public static function welcome()
    {
        return \View::make('welcome');

    }

    public static function menu()
    {



        return \View::make('menu');

    }


    public static function registrousuario()
    {
        return \View::make('registro');

    }


    public static function crearusuario(Request $request)
    {

        \DB::beginTransaction();
        try {

            $usuario = new User();
            $usuario->name = $request->nombre;
            $usuario->apellido = $request->apellido;
            $usuario->alias = $request->alias;
            $usuario->fecha_nacimiento = $request->cumple;
            $usuario->email = $request->correo;
            $usuario->password = \Hash::make($request->contra);
            $usuario ->save();
            \DB::commit();

            return redirect('registro.usuario')->with('status', 'El usuario fue creado
            exitosamente');
        } catch (\Exception $e) {
            \DB::rollback();
            dd($e->getMessage());
            return redirect('registro.usuario')->with('status', 'Error:' . $e->getMessage());
        }

    }





}
