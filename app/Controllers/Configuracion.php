<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Configuracion extends BaseController
{
    public function index()
    {
        $session = session();
        $session->get();
        return view('contenido/configuracion'); 
    }
    public function show(){
        
    }
}
