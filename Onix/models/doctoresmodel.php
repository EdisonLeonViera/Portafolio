<?php

class DoctoresModel extends Model{
    private $idDoc;
    private $rut;
    private $especialidad;
    function __construct()
    {
        parent::__construct();
    }

    public function setIdDoc($idDoc){               $this->idDoc = $idDoc;}
    public function setRut($rut){                  $this->rut = $rut;}
    public function setEspecialidad($especialidad){$this->especialidad = $especialidad;}
    public function getIdDoc(){          return $this->idDoc;}
    public function getRut(){          return $this->rut;}
    public function getEspecialidad(){          return $this->especialidad;}

    public function getAll(){
        $items = [];
        try{
            $query = $this->prepare('SELECT * FROM doctores;');

            while($doctores = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new DoctoresModel();
                $item->from($doctores);

                array_push($items, $item);
            }
            
            error_log('DoctoresModel::getAll->success');
            return $items;
        }catch(PDOException $e){
            error_log('DoctoresModel::getAll->error ' . $e);
            return false;
        }
    }

    public function getByEspecialidad($especialidad){
        $items = [];
        try{
            $query = $this->prepare('SELECT * FROM doctores WHERE especialidad = :especialidad');
            $query->execute([
                'especialidad' => $especialidad
            ]);

            while($doctores = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new DoctoresModel();
                $item->from($doctores);

                array_push($items, $item);
            }  

            return $items;

        }catch(PDOException $e){
            error_log('DoctoresModel::getrut->PDOException ' . $e);
        }
    }

    public function from($array){
        $this->idDoc    = $array['idDoc'];     
        $this->rut        = $array['rut'];          
        $this->especialidad   = $array['especialidad'];               
        error_log('DoctoresModel::From->success');
    }

}

?>