<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\CategoriasModel;
class Categorias extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model = new CategoriasModel(); 

        $categorias['categorias'] = $model->asObject()->where('Estado', 1)->findAll();
        $session = session();
        $session->get();
        return view('contenido/categorias', $categorias); 
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $session = session();
        $session->get();
        return view('nuevo/categorias'); 
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $request = \Config\Services::request(); 
        $nombre = $request->getPostGet('nombre'); 
        $datos = array(
            'NombreCa' => $nombre
        ); 
        $model = new CategoriasModel();
        $model->insert($datos);  
        return redirect()->to(base_url('/categorias'));//Se vuelve a cargar el controlador
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $model = new CategoriasModel(); 
        $categoria['categoria'] = $model->find($id);
        $session = session();
        $session->get();
        return view('editar/categorias',$categoria);  
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $model = new CategoriasModel(); 
        $request = \Config\Services::request(); 
        $nombre = $request->getPostGet('nombre'); 
        $datos = array(
            'NombreCa' => $nombre
        ); 
        $model->update($id, $datos);
        return redirect()->to(base_url('/categorias')) ;
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new CategoriasModel();
        $datos = array(
            'Estado' => 0
        );
        $curso = $model->update($id, $datos);
        return redirect()->to(base_url('/categorias'));
    }
}
