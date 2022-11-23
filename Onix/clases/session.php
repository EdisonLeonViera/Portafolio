<?php

class Session{

    private $sessionName = 'user';
    
    public function __construct()
    {
        //validar si la session ya existe (iniciada)
        if(session_status() == PHP_SESSION_NONE){
            //la iniciamos
            session_start();

        }
    }

    //poner el usuario actual
    public function setCurrentUser($user){
        $_SESSION[$this->sessionName] = $user;
    }

    //optiene usuario actual
    public function getCurrentUser(){
        return $_SESSION[$this->sessionName];
    }

    //Para cerrar session
    public function closeSession(){
        session_unset();
        session_destroy();
    }

    //Existe o no la session
    public function exists(){
        return isset($_SESSION[$this->sessionName]);
    }
}

?>