<?php
class joinExaHoraModel extends Model{
    private $idExa;
    private $fecha;
    private $tipoExamen;
    private $hora;
    private $descripcion;
    function __construct()
    {
        parent::__construct();
    }

    public function setIdExa($idExa){ $this->idExa = $idExa;}
    public function setFecha($fecha){ $this->fecha = $fecha;}
    public function setTipoExamen($tipoExamen){ $this->tipoExamen = $tipoExamen;}
    public function setHora($hora){ $this->hora = $hora;}
    public function setDescripcion($descripcion){ $this->descripcion = $descripcion;}
    public function getIdExa(){  return $this->idExa;}
    public function getFecha(){  return $this->fecha;}
    public function getTipoExamen(){  return $this->tipoExamen;}
    public function getHora(){  return $this->hora;}
    public function getDescripcion(){  return $this->descripcion;}

    public function get($rut){
        $items = [];
        try{
            $query = $this->prepare('SELECT exa.idExa ,exa.fecha, exa.tipoExamen, hr.hora, exa.descripcion FROM examenes exa INNER JOIN horario hr ON exa.idHr = hr.idHr WHERE rut = :rut ORDER BY exa.fecha DESC;');
            $query->execute([
                'rut' => $rut
            ]);

            while($exaHoraModel = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new joinExaHoraModel();
                $item->from($exaHoraModel);
                array_push($items, $item);
                error_log('joinExaHoraModel::fecth->success');
            }
            error_log('joinExaHoraModel::Get->success');
            return $items;
        }catch(PDOException $e){
            error_log('joinExaHoraModel::Get->error ' . $e);
            return false;
        }
    }

    public function from($array){
        $this->idExa    = $array['idExa'];     
        $this->fecha        = $array['fecha'];
        $this->tipoExamen    = $array['tipoExamen'];          
        $this->hora   = $array['hora'];
        $this->descripcion       = $array['descripcion'];                
        error_log('joinExaHoraModel::From->success');
    }

    public function cancelar($idExa){
        try{
            $query = $this->prepare('DELETE FROM examenes WHERE idExa = :idExa');
            $query->execute([
                'idExa' => $idExa
            ]);
            
            return true;
        }catch(PDOException $e){
            error_log('joinExaHoraModel::delete->PDOException ' . $e);
            return false;
        }
    }
}
?>