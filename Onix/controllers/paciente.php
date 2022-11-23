<?php

require_once 'models/usermodel.php';
class Paciente extends SessionController{

    private $user;
    function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
    }

    function render(){
        $this->view->render('paciente/index', [
            'user' => $this->user
        ]);
    }

    }

?>