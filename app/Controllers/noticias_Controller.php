<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\noticias_Model;


class noticias_Controller extends BaseController
{
    protected $helpers = ['form', 'form_validation'];

   

    //listar noticias
    public function listar_noticias() {
        $noticias_model = new noticias_Model();

        $data['noticias'] = $noticias_model->findAll();
    
        $data['title'] = 'Listar noticias';
        
        return view('front/header', $data)
             . view('front/navbar')
             . view('back/noticia/listar_noticias', $data)
             . view('front/footer');
    }
    
    public function ver_noticia($id_noticia)
{
    $noticias_model = new noticias_Model();
    $noticia = $noticias_model->find($id_noticia);

    if ($noticia) {
        $data['noticia'] = $noticia;

        $data['title'] = $noticia['titulo'];

        echo view('front/header', $data);
        echo view('front/detalle_noticia', $data);
    }
}


    //nueva noticia
    public function nueva_noticia(){
        $data['title']= 'Nueva noticia';

        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('back/noticia/nueva_noticia');
        echo view('front/footer');
    }


    public function agregar_noticia(){

        if (! $this->request->is('post')) {
            $data['title']= 'Agregar noticia';

            return view('header', $data).view('front/navbar').view('back/nueva_noticia').view('footer');
        }

        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $validation->setRules([
            'titulo' => 'required',
            'autor' => 'required',
            'copete' => 'required',
            'cuerpo' => 'required',
            'imagen' => 'uploaded[imagen]|max_size[imagen,4095]|is_image[imagen]'
        ], [
            'titulo' => [
            'required' => 'El campo titulo es obligatorio',
        ],
        'autor' => [
            'required' => 'El campo autor es obligatorio',
        ],
            'copete' => [
                'required' => 'El campo copete es obligatorio',
            ],
            'cuerpo' => [
                'required' => 'El campo cuerpo es obligatorio',
            ],
            'imagen' => [
                'uploaded' => 'Debe subir una imagen',
                'max_size' => 'El tamaño de la imagen debe ser menor a 4 MB',
                'is_image' => 'El archivo seleccionado no es una imagen válida'
            ]
            
            ]);



        if (!$validation->withRequest($request)->run()) {
            return redirect()->back()->withInput()->with('errors',$validation->getErrors());
        }else{
            $img = $this-> request->getFile('imagen');
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH.'assets/img', $nombre_aleatorio);

            $data = [
            'titulo' => $request->getPost('titulo'),
            'autor' => $request->getPost('autor'),
            'fecha' => date('Y-m-d'),
            'copete' => $request->getPost('copete'),
            'cuerpo' => $request->getPost('cuerpo'),
            'imagen' => $nombre_aleatorio,
            'noticia_estado' => 1 
            ];

            $noticia = new noticias_Model();
            $noticia->insert($data);

            return redirect()->route('listar_noticias')->with('mensaje_registro', 'Agregado correctamente');

        }
    }



        //editar noticia
        public function editar_noticia($id=null){
            $noticias_model = new noticias_Model();
            $data['noticia']=$noticias_model->where ('noticia_estado', 1)->findAll();

            $data['noticia']=$noticias_model->where('id_noticia', $id)->first();
            $data['title']= 'Editar noticias';

            return view('front/header', $data).view('front/navbar').view('back/noticia/editar_noticia').view('front/footer');
        }

        //editar noticia validacion
        public function editar_noticia_validacion(){
            $noticias_model = new noticias_Model();

            $validation = \Config\Services::validation();
            $request = \Config\Services::request();

            $id = $this->request->getPost('id_noticia');

            $noticia = $noticias_model->where('id_noticia', $id)->first();
            $imagen_noticia = $noticia['imagen'];
            $nueva_imagen = $this->request->getFile('imagen');

            $validation->setRules([
                'imagen' => 'is_image[imagen]|mime_in[imagen,image/jpg,image/jpeg,image/png,image]'
            ],
            [
                "imagen"=>[
                 "is_image"=>'Solo se aceptan archivos .jpg o .png',
                 "mime_in "=>'Solo se aceptan archivos .jpg, .jpeg o .png',
     
                ],
            ] );

            if (!$validation->withRequest($this->request)->run()) {
                return redirect()->back()->withInput()->with('errors',$validation->getErrors());
            }else if($nueva_imagen->isValid()){
                $imagen_noticia = $nueva_imagen->getRandomName();
                $nueva_imagen->move(ROOTPATH.'assets/img',$imagen_noticia);
            }

            $validation->setRules([
                'titulo' => 'required',
                'autor' => 'required',
                'copete' => 'required',
                'cuerpo' => 'required',
            ], [
                'titulo' => [
                'required' => 'El campo titulo es obligatorio',
            ],
            'autor' => [
                'required' => 'El campo autor es obligatorio',
            ],
                'copete' => [
                    'required' => 'El campo copete es obligatorio',
                ],
                'cuerpo' => [
                    'required' => 'El campo cuerpo es obligatorio',
                ],
                
                ]);

                if (!$validation->withRequest($request)->run()) {
                    return redirect()->back()->withInput()->with('errors',$validation->getErrors());
                }else{

    
                    $data = [
                    'titulo' => $request->getPost('titulo'),
                    'autor' => $request->getPost('autor'),
                    'fecha' => date('Y-m-d'),
                    'copete' => $request->getPost('copete'),
                    'cuerpo' => $request->getPost('cuerpo'),
                    'imagen' => $imagen_noticia,
                    'noticia_estado' => 1 
                    ];
    
                    $noticia = new noticias_Model();
                    $noticia->update($id,$data);
    
                    return redirect()->route('listar_noticias')->with('mensaje_registro', 'Agregado correctamente');
    
                }
            }

            public function eliminar_noticia($id=null){
                $noticias_model = new noticias_Model();
                $data['noticia']=$noticias_model->where ('noticia_estado', 1)->findAll();

                $data['noticia']=$noticias_model->where('id_noticia', $id)->first();

                $data= array('noticia_estado'=>'0');
                $noticia = new noticias_Model();
                $noticia->update($id, $data);

                return redirect()-> route('listar_noticias');


            } 

            //activar noticia
            public function activar_noticia($id=null){
                $noticias_model = new noticias_Model();
                $data['noticia']=$noticias_model->where ('noticia_estado', 0)->findAll();

                $data['noticia']=$noticias_model->where('id_noticia', $id)->first();
                
                $data= array('noticia_estado'=>'1');
                $noticia = new noticias_Model();
                $noticia->update($id, $data);

                return redirect()-> route('listar_noticias');

            }

     

        
}