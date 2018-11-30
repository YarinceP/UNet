<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;use Illuminate\Support\Facades\App;

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






}
