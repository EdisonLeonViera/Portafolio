<?php

class SuccessMessages{
    const PRUEBA = "101";
    const SUCCESS_SIGNUP_NEWUSER = "102";
    const SUCCESS_ADDRESERVA_CONSULTA = "103";
    const SUCCESS_ADDRESERVA_EXAMEN = "104";
    const SUCCESS_GENERETEQR_RECETA = "105";
    const SUCCESS_LOGOUT_CLOSESESSION = "106";
    const SUCCESS_CONFIRM_CONSULTA = "107";
    const SUCCESS_CONFIRM_EXAMEN = "108";
    const SUCCESS_CANCEL_CONSULTA = "109";
    const SUCCESS_CANCEL_EXAMEN = "110";

    private $successList = [];
    public function __construct()
    {
        $this->successList = [
            SuccessMessages::PRUEBA => 'Mesaje de exito',
            SuccessMessages::SUCCESS_SIGNUP_NEWUSER => 'Usuario creado',
            SuccessMessages::SUCCESS_ADDRESERVA_CONSULTA => 'Consulta reservada',
            SuccessMessages::SUCCESS_ADDRESERVA_EXAMEN => 'Examen reservado',
            SuccessMessages::SUCCESS_GENERETEQR_RECETA => 'Codigo Qr creado',
            SuccessMessages::SUCCESS_LOGOUT_CLOSESESSION => 'Sesion cerrada',
            SuccessMessages::SUCCESS_CONFIRM_CONSULTA => 'Consulta confirmada',
            SuccessMessages::SUCCESS_CONFIRM_EXAMEN => 'Examen confirmado',
            SuccessMessages::SUCCESS_CANCEL_CONSULTA => 'Consulta cancelada',
            SuccessMessages::SUCCESS_CANCEL_EXAMEN => 'Examen cancelado'
        ];
    }

    public function get($hash){
        return $this->successList[$hash];
    }

    public function existsKey($key){
        if(array_key_exists($key, $this->successList)){
            return true;
        }else{
            return false;
        }
    }
}

?>