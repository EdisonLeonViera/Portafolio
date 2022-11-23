<?php

class HistorialMedico extends SessionController{
    private $user;

    function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
    }

    public function render(){
        $hmModel = new HistorialMedicoModel();
        $hm = $hmModel->get($this->user->getRut());
        error_log("HistorialMedico::render-> carga de hm");
        $this->view->render('paciente/historialMedico', [
            'user' => $this->user,
            'hm' => $hm
        ]);
    }
}

?>