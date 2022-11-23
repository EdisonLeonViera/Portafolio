<?php

require_once 'models/joinResDocmodel.php';

class Reserva extends SessionController{
    private $user;

    function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
    }

    public function render(){
        $rsModel = new JoinResDocModel();
        $reservas = $rsModel->get($this->user->getRut());
        error_log("Reserva::render-> carga de hm");
        $this->view->render('paciente/reserva', [
            'user' => $this->user,
            'reservas' => $reservas
        ]);
    }

    public function confirmar($idReserva){
        $rsModel = new JoinResDocModel();
        $estado = $idReserva[0];       
        $logrado = $rsModel->confirmar($estado);
        if($logrado){
            error_log("Reserva::confirmar-> update ");
            $this->redirect('reserva', [
                'success' => SuccessMessages::SUCCESS_CONFIRM_CONSULTA
            ]);
        }else{
            error_log("Reserva::confirmar-> update error ");
            $this->redirect('reserva', [
                'error' => ErrorMessages::ERROR_GENERIC_FAIL
            ]);
        }
        
    }

    public function cancelar($idReserva) {
        $rsModel = new JoinResDocModel();
        $idcancelar = $idReserva[0];
        $logrado = $rsModel->cancelar($idcancelar);
        if($logrado){
            error_log("Reserva::confirmar-> update ");
            $this->redirect('reserva', [
                'success' => SuccessMessages::SUCCESS_CANCEL_CONSULTA
            ]);
        }else{
            error_log("Reserva::confirmar-> update error ");
            $this->redirect('reserva', [
                'error' => ErrorMessages::ERROR_GENERIC_FAIL
            ]);
        }
    }
}

?>