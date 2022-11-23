<?php
class HorarioModel extends Model{
    private $idHr;
    private $hora;

    public function __construct()
    {
        parent::__construct();
    }

    public function setIdHr($idHr){ $this->idHr = $idHr;}
    public function setHora($hora){ $this->hora = $hora;}
    public function getIdHr(){  return $this->idHr;}
    public function getHora(){  return $this->hora;}

    public function getAll(){
        $items = [];
        try{
            $query = $this->query('SELECT * FROM horario;');

            while($horario = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new HorarioModel();
                $item->from($horario);

                array_push($items, $item);
            }
            
            error_log('HorarioModel::getAll->success');
            return $items;
        }catch(PDOException $e){
            error_log('HorarioModel::getAll->error ' . $e);
            return false;
        }
    }

    public function getForDoc(){
        $items = [];
        try{
            $query = $this->query('SELECT * FROM horario WHERE hora NOT LIKE "%:15:%" AND hora NOT LIKE "%:45:%";');

            while($horario = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new HorarioModel();
                $item->from($horario);

                array_push($items, $item);
            }
            
            error_log('HorarioModel::getForDoc->success');
            return $items;
        }catch(PDOException $e){
            error_log('HorarioModel::getForDoc->error ' . $e);
            return false;
        }
    }

    public function from($array){
        $this->idHr    = $array['idHr'];     
        $this->hora        = $array['hora'];          
        error_log('HorarioModel::From->success');
    }
}
?>