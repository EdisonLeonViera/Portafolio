<?php

require_once 'models/reservamodel.php';
require_once 'models/examenesmodel.php';
require_once 'models/horariomodel.php';
require_once 'models/doctoresmodel.php';
require_once 'models/joinResDocmodel.php';
require_once 'models/joinDocPacimodel.php';
class Reservar extends SessionController{
    private $user;

    function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
    }

    public function render(){
        error_log("Reserva::render-> carga de reservar");
        $this->view->render('paciente/reservar', [
            'user' => $this->user
        ]);
    }

    public function consulta(){
        $this->view->render('reservas/consultaFE', [
            'user' => $this->user
        ]);
    }

    public function examen() {
        $hrModel = new HorarioModel();
        $horas = $hrModel->getAll();
        $this->view->render('reservas/examen', [
            'user' => $this->user,
            'horas' => $horas
        ]);
    }

    function newExamen(){
        if($this->existPOST(['tipoExamen', 'fechExa', 'horarioExa'])){
            $tipoExamen = $this->getPost('tipoExamen');
            $fechExa = $this->getPost('fechExa');
            $horarioExa = $this->getPost('horarioExa');
            if($tipoExamen == '' || empty($tipoExamen) || $fechExa == '' || empty($fechExa) || $horarioExa == '' || empty($horarioExa)){
                $this->redirect('reservar', ['error' => ErrorMessages::ERROR_GENERIC_EMPTY]);
            }

            $fechaValida = true;
            $fechaHoy = strtotime(date("Y-m-d", time()));
            $fechaIngresada = strtotime($fechExa);
            error_log('RESERVAR::comparando fechas hoy: ' . $fechaHoy . ' y fecha ingresada: ' . $fechaIngresada);
            if($fechaIngresada < $fechaHoy){
                $fechaValida = false;
            }

            $examen = new ExamenesModel();
            $examen->setRut($this->user->getRut());
            $examen->setTipoExamen($tipoExamen);
            $examen->setFecha($fechExa);
            $examen->setIdHr($horarioExa);

            if($examen->exists($fechExa, $horarioExa) || $fechaValida == false){
                $this->redirect('reservar', [
                    'error' => ErrorMessages::ERROR_GENERIC_TIME
                ]);
            }else if($examen->save()){
                $this->redirect('examenes', [
                    'success' => SuccessMessages::SUCCESS_ADDRESERVA_EXAMEN
                ]);
            }else{
                $this->redirect('reservar', [
                    'error' => ErrorMessages::ERROR_GENERIC_FAIL
                ]);
            }
        }else{
            $this->redirect('reservar', [
                'error' => ErrorMessages::ERROR_GENERIC
            ]);
        }
    }

    function newConsultaFE(){
        if($this->existPOST(['especialidad', 'fechaConsulta'])){
            $especialidad = $this->getPost('especialidad');
            $fechaConsulta = $this->getPost('fechaConsulta');
            if($especialidad == '' || empty($especialidad) || $fechaConsulta == '' || empty($fechaConsulta)){
                $this->redirect('reservar', [
                    'error' => ErrorMessages::ERROR_GENERIC_EMPTY
                ]);
            }

            $docModel = new JoinDocPaciModel();
            $doctores = $docModel->getDocByEspecialidad($especialidad);

            $hrModel = new HorarioModel();
            $horas = $hrModel->getForDoc();
            
            $fechaHoy = strtotime(date("Y-m-d", time()));
            $fechaIngresada = strtotime($fechaConsulta);
            error_log('RESERVAR::comparando fechas hoy: ' . $fechaHoy . ' y fecha ingresada: ' . $fechaIngresada);
            if($fechaIngresada <= $fechaHoy){
                $this->redirect('reservar', [
                    'error' => ErrorMessages::ERROR_GENERIC_TIME
                ]);
            }else{
                $this->view->render('reservas/consultaDH',[
                    'user' => $this->user,
                    'doctores' => $doctores,
                    'especialidad' => $especialidad,
                    'fechaConsulta' => $fechaConsulta,
                    'horas' => $horas
                ]);
            }
            
        }else{
            $this->redirect('reservar', [
                'error' => ErrorMessages::ERROR_GENERIC_FAIL
            ]);
        }
    }

    function agendarHora(){
        if($this->existPOST(['doctor', 'hora'])){
            $fecha = $this->getPost('fecha');
            $doctor = $this->getPost('doctor');
            $hora = $this->getPost('hora');
            if($doctor == '' || empty($doctor) || $hora == '' || empty($hora)){
                $this->redirect('reservar', ['error' => ErrorMessages::ERROR_GENERIC_EMPTY]);
            }

            

            $reserva = new ReservaModel();
            $reserva->setRut($this->user->getRut());
            $reserva->setIdDoc($doctor);
            $reserva->setFecha($fecha);
            $reserva->setIdHr($hora);

            if($reserva->exists($fecha, $hora, $doctor)){
                $this->redirect('reservar', [
                    'error' => ErrorMessages::ERROR_GENERIC_TIME
                ]);
            }else if($reserva->save()){
                $rsModel = new JoinResDocModel();
                $reservas = $rsModel->get($this->user->getRut());
                $this->redirect('reserva', [
                    'success' => SuccessMessages::SUCCESS_ADDRESERVA_CONSULTA
                ]);
            }else{
                $this->redirect('reservar', [
                    'error' => ErrorMessages::ERROR_GENERIC_FAIL
                ]);
            }
        }else{
            $this->redirect('reservar', [
                'error' => ErrorMessages::ERROR_GENERIC
            ]);
        }
    }
}

?>