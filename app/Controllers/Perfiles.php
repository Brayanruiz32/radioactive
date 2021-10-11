<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PerfilesModel;
class Perfiles extends BaseController
{
    public function index()
    {
        $model = new PerfilesModel(); 
        $perfiles['perfiles'] = $model->asObject()->findAll(); 
        $session = session();
        $session->get();
        return view('contenido/perfiles', $perfiles); 
    }
    public function show(){
        
    }
}
