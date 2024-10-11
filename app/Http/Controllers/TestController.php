<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Client;

class TestController extends Controller
{
    //
    function test() {
        /// Conectar con el modelo que conecta co la BD

        $client= Client::find(1);
        var_dump($client);///imprimi todos los datos de paso

        /// Retronar una vista con la informacion del modelo
        return view('testdb',['client' => $client]);
    }
}
