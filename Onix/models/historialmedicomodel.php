<?php
class HistorialMedicoModel extends Model{
    private $idHm;
    private $fecha;
    private $docNombre;
    private $docApellidoP;
    private $especialidad;
    private $descripcion;

    public function __construct()
    {
        parent::__construct();
    }

    public function setIdHm($idHm){                    $this->idHm = $idHm;}
    public function setFecha($fecha){              $this->fecha = $fecha;}
    public function setDocNombre($docNombre){            $this->docNombre = $docNombre;}
    public function setDocApellidoP($docApellidoP){            $this->docApellidoP = $docApellidoP;}
    public function setEspecialidad($especialidad){$this->especialidad = $especialidad;}
    public function setDescripcion($descripcion){      $this->descripcion = $descripcion;}    
    public function getIdHm(){          return $this->idHm;}
    public function getFecha(){       return $this->fecha;}
    public function getDocNombre(){      return $this->docNombre;}
    public function getDocApellidoP(){      return $this->docApellidoP;}
    public function getEspecialidad(){return $this->especialidad;}
    public function getDescripcion(){   return $this->descripcion;}

    public function get($rut){
        $items = [];
        try{
            $query = $this->prepare('SELECT hm.idHm, hm.fecha, paci.nombre, paci.apellidoP, doc.especialidad, hm.descripcion FROM historialmedico hm INNER JOIN doctores doc ON hm.idDoc = doc.idDoc INNER JOIN paciente paci ON doc.rut=paci.rut WHERE hm.rut =:rut ORDER BY hm.fecha DESC;');
            $query->execute([
                'rut' => $rut
            ]);

            while($hm = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new HistorialMedicoModel();
                $item->from($hm);
                array_push($items, $item);
                error_log('HistorialMedicoModel::fecth->success');
            }
            error_log('HistorialMedicoModel::Get->success');
            return $items;
        }catch(PDOException $e){
            error_log('HistorialMedicoModel::Get->error ' . $e);
            return false;
        }
    }

    public function from($array){
        $this->idHm    = $array['idHm'];     
        $this->fecha        = $array['fecha'];          
        $this->docNombre   = $array['nombre'];
        $this->docApellidoP    = $array['apellidoP'];
        $this->especialidad       = $array['especialidad'];              
        $this->descripcion         = $array['descripcion'];                 
        error_log('HistorialMedicoModel::From->success');
    }
}
?>