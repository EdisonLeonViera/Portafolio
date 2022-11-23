<?php 

require_once 'models/loginmodel.php';
//Heredamos de SEssionController que a su vez hereda de Controller
class Login extends SessionController{
    //Inicializamos la clase
    function __construct()
    {
        parent::__construct();
        error_log("Login::construct-> inicio de Login");
    }

    //Carga su vista
    function render(){
        error_log("Login::render-> carga de Login");
        $this->view->render('login/index');
    }

    //Funciones de login

    //Valida si existe username y password para implementar login
    function authenticate(){
        if($this->existPOST(['rut' , 'password'])){
            $rut = $this->getPost('rut');
            $password = $this->getPost('password');

            if($rut == '' || empty($rut) || $password == '' || empty($password)){
                $this->redirect('', ['error' => ErrorMessages::ERROR_LOGIN_AUTHENTICATE_EMPTY]);
            }

            //model funcion login se encargar de autenticar

            //Nos regresa un usuario de tipo usermodel
            //$loginModel = new LoginModel();
            //$user = $this->model->login($username, $password);
            $user = $this->model->login($rut, $password);

            if($user != NULL){
                $this->initialize($user);
                error_log('Login::initialize-> devuelve user un objeto de tipo user ');
            }else{
                $this->redirect('', ['error' => ErrorMessages::ERROR_LOGIN_AUTHENTICATE_DATA]);
                error_log('Login::initialize-> no entran los datos ');
            }
        }else{
            $this->redirect('', ['error' => ErrorMessages::ERROR_LOGIN_AUTHENTICATE]);
        }    
    }
}


?>