<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UsuariosModel; 
class Home extends BaseController
{
    public function index()
    {

    }

    public function iniciar(){
        return view('contenido/iniciar'); 
    }

    public function inicio(){
        $session = session(); 
        $session->get();
        return view('contenido/dashboard'); 
    }

    public function salir(){
        $session = session(); 
        $session->destroy();
        return redirect()->to(base_url('/'));
    }


}
