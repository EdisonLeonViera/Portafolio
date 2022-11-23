<?php

class JoinResDocModel extends Model{
    private $idReserva;
    private $fecha;
    private $hora;
    private $docNombre;
    private $docApellidoP;
    private $especialidad;
    private $confirma;

    public function __construct()
    {
        parent::__construct();
    }

    public function setIdReserva($idReserva){ $this->idReserva = $idReserva;}
    public function setFecha($fecha){ $this->fecha = $fecha;}
    public function setHora($hora){ $this->hora = $hora;}
    public function setDocNombre($docNombre){ $this->docNombre = $docNombre;}
    public function setDocApellidoP($docApellidoP){ $this->docApellidoP = $docApellidoP;}
    public function setEspecialidad($especialidad){ $this->especialidad = $especialidad;}
    public function setConfirma($confirma){ $this->confirma = $confirma;}
    public function getIdReserva(){  return $this->idReserva;}
    public function getFecha(){  return $this->fecha;}
    public function getHora(){ return $this->hora;}
    public function getDocNombre(){  return $this->docNombre;}
    public function getDocApellidoP(){  return $this->docApellidoP;}
    public function getEspecialidad(){  return $this->especialidad;}
    public function getConfirma(){  return $this->confirma;}

    public function get($rut){
        $items = [];
        try{
            $query = $this->prepare('SELECT rs.idReserva, rs.fecha, hr.hora, paci.nombre, paci.apellidoP, doc.especialidad, rs.confirma FROM reserva rs INNER JOIN doctores doc ON rs.idDoc = doc.idDoc INNER JOIN paciente paci ON doc.rut=paci.rut INNER JOIN horario hr ON rs.idHr = hr.idHr WHERE rs.rut = :rut ORDER BY rs.fecha DESC;');
            $query->execute([
                'rut' => $rut
            ]);

            while($resDocModel = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new JoinResDocModel();
                $item->from($resDocModel);
                array_push($items, $item);
                error_log('JoinResDocModel::fecth->success');
            }
            error_log('JoinResDocModel::Get->success');
            return $items;
        }catch(PDOException $e){
            error_log('JoinResDocModel::Get->error ' . $e);
            return false;
        }
    }

    public function from($array){
        $this->idReserva    = $array['idReserva'];     
        $this->fecha        = $array['fecha'];          
        $this->hora   = $array['hora'];
        $this->docNombre    = $array['nombre'];
        $this->docApellidoP       = $array['apellidoP'];              
        $this->especialidad         = $array['especialidad'];    
        $this->confirma       = $array['confirma'];                  
        error_log('JoinResDocModel::From->success');
    }

    public function confirmar($idReserva){
        try{

            $confirma = 1;
            $query = $this->prepare('UPDATE reserva SET confirma = :confirma WHERE idReserva = :idReserva');
            $query->execute([
                'confirma' => $confirma,
                'idReserva' => $idReserva
            ]);

            return true;

        }catch(PDOException $e){
            error_log('JoinResDocModel::update->PDOException ' . $e);
            return false;
        }
    }

    public function cancelar($idReserva){
        try{
            $query = $this->prepare('DELETE FROM reserva WHERE idReserva = :idReserva');
            $query->execute([
                'idReserva' => $idReserva
            ]);
            
            return true;
        }catch(PDOException $e){
            error_log('ExamenesModel::delete->PDOException ' . $e);
            return false;
        }
    }

}