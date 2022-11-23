<?php

require_once 'models/usermodel.php';
class Signup extends SessionController{
    function __construct()
    {
        parent::__construct();
    }

    function render(){
        $this->view->render('login/signup', []);
    }

    function newUser(){
        if($this->existPOST(['rut', 'nombre', 'apellidoP', 'apellidoM', 'telefono', 'correo', 'password', 'fechaNacimiento'])){
            $rut = $this->getPost('rut');
            $nombre = $this->getPost('nombre');
            $apellidoP = $this->getPost('apellidoP');
            $apellidoM = $this->getPost('apellidoM');
            $telefono = $this->getPost('telefono');
            $correo = $this->getPost('correo');
            $password = $this->getPost('password');
            $fechaNacimiento = $this->getPost('fechaNacimiento');

            if($rut == '' || empty($rut) || $nombre == '' || empty($nombre) || $apellidoP == '' || empty($apellidoP) || $apellidoM == '' || empty($apellidoM) || $telefono == '' || empty($telefono) || $correo == '' || empty($correo) || $password == '' || empty($password) || $fechaNacimiento == '' || empty($fechaNacimiento)){
                $this->redirect('signup', ['error' => ErrorMessages::ERROR_SIGNUP_NEWUSER_EMPTY]);
            }

            $difFechas = abs(strtotime(date("Y-m-d", time())) - strtotime($fechaNacimiento));
            $diferencia = floor($difFechas /(365 * 60 * 60 * 24));
            $valido = true;
            if($diferencia < 18){
                $valido = false;
            }
            $user = new UserModel();
            $user->setRut($rut);
            $user->setNombre($nombre);
            $user->setApellidoP($apellidoP);
            $user->setApellidoM($apellidoM);
            $user->setTelefono($telefono);
            $user->setCorreo($correo);
            $user->setClave($password);
            $user->setFechaNacimiento($fechaNacimiento);
            $user->setRole('user');

            if($valido == false){
                $this->redirect('signup', ['error' => ErrorMessages::ERROR_SIGNUP_NEWUSER_UNDERAGE]);
            }else if($user->exists($rut)){
                $this->redirect('signup', ['error' => ErrorMessages::ERROR_SIGNUP_NEWUSER_EXISTS]);
            }else if($user->save()){
                $this->redirect('', ['success' => SuccessMessages::SUCCESS_SIGNUP_NEWUSER]);
            }else{
                $this->redirect('signup', ['error' => ErrorMessages::ERROR_SIGNUP_NEWUSER]);
            }
        }else{
            $this->redirect('signup', ['error' => ErrorMessages::ERROR_SIGNUP_NEWUSER]);
        }
    }
}

?>