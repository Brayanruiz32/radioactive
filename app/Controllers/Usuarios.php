<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuariosModel; 
class Usuarios extends BaseController
{
    public function index()
    {
        $model = new UsuariosModel();
        $db = \Config\Database::connect();
        $builder = $db->table('usuarios');
        $builder->select('*');
        $builder->join('perfiles', 'usuarios.IdPerfil = perfiles.IdPerfil', 'inner');  
        $builder->where('usuarios.estado', 1);  
        $resultado = $builder->get();
        /*
        $model = new UsuariosModel(); 
        $usuarios['usuarios'] = $model->asObject()->paginate(5); 
        */
        $usuarios['usuarios'] = $resultado->getResult('object');
        $usuarios['paginador'] = $model->pager; 
        $session = session(); 
        $session->get(); 
        return view('contenido/usuarios', $usuarios); 
    }

    public function show(){
        
    }

    public function registro(){
        $request = \Config\Services::request(); 
        $correo = $request->getPostGet('correo'); 
        $contra = $request->getPostGet('contrasena'); 
        $apellido = $request->getPostGet('apellido'); 
        $nombre = $request->getPostGet('nombre'); 
        $datos = [
            'NombreU' => $nombre, 
            'ApellidoU' => $apellido, 
            'Correo' => $correo,
            'Contrasena' => $contra
        ];
        $model = new UsuariosModel(); 
        $model->insert($datos); 
        return view('contenido/iniciar'); 
    }

    public function validar(){
        $request = \Config\Services::request(); 
        $correo = $request->getPostGet('correo'); 
        $contra = $request->getPostGet('contrasena'); 
        $model = new UsuariosModel(); 
        $datos['datos'] = $model->where(
            ['Correo'=>$correo,
              'Contrasena' => $contra  
            ]
        )->find();  
        $session = session(); 
        $session->set($datos); 
        return redirect()->to(base_url('/inicio'));
    }

    public function registrarse(){
        return view('contenido/registrarse'); 
    }

    public function eliminar($id){
        $model = new UsuariosModel(); 
       $datos = [
           'Estado' => 0
       ];
        $model->update($id, $datos); 
        return redirect()->to(base_url('/usuarios'));
    }

}
