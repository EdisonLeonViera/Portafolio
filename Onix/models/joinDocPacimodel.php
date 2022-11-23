<?php
class JoinDocPaciModel extends Model{
    private $idDoc;
    private $docNombre;
    private $docApellidoP;

    function __construct()
    {
        parent::__construct();
    }

    public function setIdDoc($idDoc){ $this->idDoc = $idDoc;}
    public function setDocNombre($docNombre){ $this->docNombre = $docNombre;}
    public function setDocApellidoP($docApellidoP){ $this->docApellidoP = $docApellidoP;}
    public function getIdDoc(){  return $this->idDoc;}
    public function getDocNombre(){  return $this->docNombre;}
    public function getDocApellidoP(){  return $this->docApellidoP;}

    public function getDocByEspecialidad($especialidad){
        $items = [];
        try{
            $query = $this->prepare('SELECT doc.idDoc ,paci.nombre, paci.apellidoP FROM doctores doc INNER JOIN paciente paci ON doc.rut = paci.rut WHERE especialidad = :especialidad;');
            $query->execute([
                'especialidad' => $especialidad
            ]);

            while($exaHoraModel = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new JoinDocPaciModel();
                $item->from($exaHoraModel);
                array_push($items, $item);
                error_log('JoinDocPaciModel::fecth->success');
            }
            error_log('JoinDocPaciModel::getDocByEspecialidad->success');
            return $items;
        }catch(PDOException $e){
            error_log('JoinDocPaciModel::getDocByEspecialidad->error ' . $e);
            return false;
        }
    }

    public function from($array){
        $this->idDoc    = $array['idDoc'];     
        $this->docNombre        = $array['nombre'];
        $this->docApellidoP    = $array['apellidoP'];                    
        error_log('JoinDocPaciModel::From->success');
    }
}
?>