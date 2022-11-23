<?php

class RecetasModel extends Model{
    private $idRec;
    private $fechaEmision;
    private $docNombre;
    private $docApellidoP;
    private $especialidad;
    private $fechaCaducidad;
    private $descripcion;

    function __construct()
    {
        parent::__construct();
    }

    public function setIdRec($idRec){                    $this->idRec = $idRec;}
    public function setFechaEmision($fechaEmision){              $this->fechaEmision = $fechaEmision;}
    public function setDocNombre($docNombre){            $this->docNombre = $docNombre;}
    public function setDocApellidoP($docApellidoP){            $this->docApellidoP = $docApellidoP;}
    public function setEspecialidad($especialidad){$this->especialidad = $especialidad;}
    public function setFechaCaducidad($fechaCaducidad){              $this->fechaCaducidad = $fechaCaducidad;}
    public function setDescripcion($descripcion){      $this->descripcion = $descripcion;}    
    public function getIdRec(){          return $this->idRec;}
    public function getFechaEmision(){       return $this->fechaEmision;}
    public function getDocNombre(){      return $this->docNombre;}
    public function getDocApellidoP(){      return $this->docApellidoP;}
    public function getEspecialidad(){return $this->especialidad;}
    public function getFechaCaducidad(){       return $this->fechaCaducidad;}
    public function getDescripcion(){   return $this->descripcion;}

    public function get($rut){
        $items = [];
        try{
            $query = $this->prepare('SELECT rc.idRec, rc.fechaEmision, paci.nombre, paci.apellidoP, doc.especialidad, rc.fechaCaducidad, rc.descripcion FROM receta rc INNER JOIN doctores doc ON rc.idDoc = doc.idDoc INNER JOIN paciente paci ON doc.rut=paci.rut WHERE rc.rut = :rut ORDER BY rc.fechaEmision DESC;');
            $query->execute([
                'rut' => $rut
            ]);

            while($p = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new RecetasModel();
                $item->from($p);
                array_push($items, $item);
                error_log('RecetasModel::fecth->success');
            }
            error_log('RecetasModel::Get->success');
            return $items;
        }catch(PDOException $e){
            error_log('RecetasModel::Get->error ' . $e);
            return false;
        }
    }

    public function from($array){
        $this->idRec    = $array['idRec'];     
        $this->fechaEmision        = $array['fechaEmision'];          
        $this->docNombre   = $array['nombre'];
        $this->docApellidoP    = $array['apellidoP'];
        $this->especialidad       = $array['especialidad'];
        $this->fechaCaducidad        = $array['fechaCaducidad'];        
        $this->descripcion         = $array['descripcion'];                 
        error_log('HistorialMedicoModel::From->success');
    }
    

}
?>