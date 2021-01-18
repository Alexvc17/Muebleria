<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Informacion extends Controller
{
    public function index(){

        return view('welcome');

    }

    public function somos(){


        return view('informacion.somos');

    }

    public function contacto(){


        return view('informacion.contacto');

    }
}
