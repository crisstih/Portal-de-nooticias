<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\noticias_Model;

class Home extends BaseController
{

    public function index()
    {
        $noticias_model = new noticias_Model();
        $data ['noticias']=$noticias_model->where ('noticia_estado', 1)->findAll();
        $data['title']='Noticias';

        echo view('front/header', $data);
        echo view('front/noticias');
        echo view('front/footer');
    }

    public function inicio_admin()
    {
        $data['title']='Inicio';

        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('back/inicioadmin');
        echo view('front/footer');
    }

    public function registro()
    {
        $data['title']='Registro';

        echo view('front/header', $data);
        echo view('back/usuario/registro');

    }

    public function login()
    {
        $data['title']='Iniciar sesión';

        echo view('front/header', $data);
        echo view('back/usuario/login');

    }
    
    
}
