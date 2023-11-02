<?php

namespace App\Controllers;
use App\Models\usuarios_Model;
use CodeIgniter\Controller;

class usuario_Controller extends Controller{

    public function __construct() {
        helper(['form', 'url']);
    }


    public function create()
    {
        $data['title']='Registro';

        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('back/usuario/registro');
        echo view('front/footer');
    }

    public function formValidation(){
        $input = $this-> validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[50]',
            'correo' => 'required|min_length[3]|max_length[100]|valid_email|is_unique[usuarios.correo]',
            'usuario' => 'required|min_length[3]|is_unique[usuarios.usuario]',
            'pass' => 'required|min_length[3]|max_length[100]',

        ],
    );

    $formModel = new usuarios_Model();

    if(!$input){
        $data['title']= 'Registro';
        echo view('front/header', $data);
        echo view('front/navbar');
        echo view('back/usuario/registro', ['validation' => $this->validator]);
        echo view('front/footer');
    }else{
        $formModel->save([
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'correo' => $this->request->getVar('correo'),
            'usuario' => $this->request->getVar('usuario'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_BCRYPT),
        ]);

        session()->setFlashdata('msg', 'Usuario registrado con exito');
        return $this->response->redirect('login');

    }


    
}

//listar usuarios
public function listar_usuarios(){
    $usuario_model = new usuarios_Model();
    $data ['usuarios']=$usuario_model->findAll();
    $data['title']= 'Listar usuarios';

   echo view('front/header', $data);
   echo view('front/navbar');
   echo view('back/usuario/listarUsuarios');
   echo view('front/footer');
}

//inicio de sesion

public function auth()
{
    $session = session();
    $model = new usuarios_Model();

    //traemos los datos del formulario
    $usuario = $this->request->getVar('usuario');
    $password = $this->request->getVar('pass');

    //se verifica si el usuario ingresado en el formulario coincide con el de la tabla en la bd
    $data = $model->where('usuario', $usuario)->first();
    if($data){
        $pass = $data['pass'];
        $ba = $data['estado'];

        if($ba == 'SI'){
            $session->setFlashdata('msg', 'Usuario dado de baja');
            return redirect()->to('/admin');
        }
        
        //se verifican los datos ingresados para iniciar
        $verify_pass = password_verify($password, $pass);

        if(!$verify_pass){

            $session->setFlashdata('msg', 'Ups! contraseña incorrecta. Intentalo de nuevo');
            return redirect()->to('admin');
            

        }else{


            $ses_data = [
                'id_usuario' => $data['id'],
                'nombre' => $data['nombre'],
                'apellido' => $data['apellido'],
                'correo' => $data['correo'],
                'usuario' => $data['usuario'],
                'logged_in' => TRUE
            ];

            $session->set($ses_data);

            session()->setFlashdata('msg', 'Bienvenido!!');
            return redirect()->to('inicio_admin');

    } 
}else { 
        $session->setFlashdata('msg', 'Ha ocurrido un error. No existe el usuario');
        return redirect()->to('/admin');
    }

}


//salir de sesion
public function logout()
{
    $session = session();
    $session->destroy();
    return redirect()->to('admin');
}

//cambiar estado a baja
public function eliminar_usuario($id=null) {
    $usuarios_model = new usuarios_Model();
    $data['usuario']=$usuarios_model->where ('estado', 1)->findAll();

    $data['usuario']=$usuarios_model->where('id', $id)->first();

    $data = array ('estado'=>'0');
    var_dump($data);
    $usuario = new usuarios_Model();
    $usuario->update($id, $data);

    return redirect()->route('usuarios'); 
    } 

//activar usuario
public function activar_usuario($id=null) {
    $usuarios_model = new usuarios_Model();
    $data['usuario']=$usuarios_model->where ('estado', 0)->findAll();

    $data['usuario']=$usuarios_model->where('id', $id)->first();

    $data = array ('estado'=>'1');
    var_dump($data);
    $usuario = new usuarios_Model();
    $usuario->update($id, $data);

    return redirect()->route('usuarios'); 
    }

//editar usuario
public function editar_usuario($id=null) {
    $usuarios_model = new usuarios_Model();
    $data['usuario']=$usuarios_model->where ('estado', 1)->findAll();

    $data['usuario']=$usuarios_model->where('id', $id)->first();

    $data['title']= 'Editar usuario';

   echo view('front/header', $data);
   echo view('front/navbar');
   echo view('back/usuario/editar_usuario');
   echo view('front/footer');
    }

    public function update($id=null){
        $usuarios_model = new usuarios_Model();

        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $id = $this->request->getPost('id');

        $usuario = $usuarios_model->where('id', $id)->first();
        $pass = $usuario['pass'];

        $validation->setRules([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[50]',
            'correo' => 'required|min_length[3]|max_length[100]|valid_email',
            'usuario' => 'required|min_length[3]',
        ], [
            'nombre' => [
            'required' => 'El campo nombre es obligatorio', 
            'min_length' => 'El campo nombre debe tener al menos 3 caracteres',
        ],
        'apellido' => [
            'required' => 'El campo apellido es obligatorio',
            'min_length' => 'El campo apellido debe tener al menos 3 caracteres',
            'max_length' => 'El campo apellido debe tener como maximo 50 caracteres',
        ],
            'correo' => [
                'required' => 'El campo correo es obligatorio',
                'min_length' => 'El campo correo debe tener al menos 3 caracteres',
                'max_length' => 'El campo correo debe tener como maximo 100 caracteres',
                'valid_email' => 'El campo correo debe ser un email valido',
            ],
            'usuario' => [
                'required' => 'El campo usuario es obligatorio',
                'min_length' => 'El campo usuario debe tener al menos 3 caracteres',
            ],
  
            
            ]);

            if (!$validation->withRequest($request)->run()) {
                return redirect()->back()->withInput()->with('errors',$validation->getErrors());
            }else{
                $data = [
                    'nombre' => $request->getPost('nombre'),
                    'apellido' => $request->getPost('apellido'),
                    'correo' => $request->getPost('correo'),
                    'usuario' => $request->getPost('usuario'),
                    'estado' => 1 
                    ];
    
                    $usuario = new usuarios_Model();
                    $usuario->update($id,$data);

                    session()->set('nombre', $data['nombre']);
    
                    return redirect()->route('usuarios')->with('mensaje_editado', 'Editado correctamente');
            }
    }



}




  