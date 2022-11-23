<?php

require_once 'models/joinExaHoramodel.php';

class Examenes extends SessionController{
    private $user;

    function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
    }

    public function render(){
        $ehModel = new joinExaHoraModel();
        $examenes = $ehModel->get($this->user->getRut());
        error_log("Reserva::render-> carga de hm");
        $this->view->render('paciente/examenes', [
            'user' => $this->user,
            'examenes' => $examenes
        ]);
    }

    public function cancelar($idExamens) {
        $ehModel = new joinExaHoraModel();
        $idcancelar = $idExamens[0];
        $logrado = $ehModel->cancelar($idcancelar);
        if($logrado){
            error_log("Reserva::confirmar-> update ");
            $this->redirect('examenes', [
                'success' => SuccessMessages::SUCCESS_CANCEL_EXAMEN
            ]);
        }else{
            error_log("Reserva::confirmar-> update error ");
            $this->redirect('examenes', [
                'error' => ErrorMessages::ERROR_GENERIC_FAIL
            ]);
        }
    }
}

?>