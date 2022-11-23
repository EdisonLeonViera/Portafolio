<?php
class ExamenesModel extends Model implements IModel{
    private $idExa;
    private $rut;
    private $tipoExamen;
    private $fecha;
    private $idHr;
    private $descripcion;

    public function __construct()
    {
        parent::__construct();
    }

    public function setIdExa($idExa){ $this->idExa = $idExa;}
    public function setRut($rut){ $this->rut = $rut;}
    public function setTipoExamen($tipoExamen){ $this->tipoExamen = $tipoExamen;}
    public function setFecha($fecha){ $this->fecha = $fecha;}
    public function setIdHr($idHr){ $this->idHr = $idHr;}
    public function setDescripcion($descripcion){ $this->descripcion = $descripcion;}
    public function getIdExa(){  return $this->idExa;}
    public function getRut(){  return $this->rut;}
    public function getTipoExamen(){  return $this->tipoExamen;}
    public function getFecha(){  return $this->fecha;}
    public function getIdHr(){  return $this->idHr;}
    public function getDescripcion(){  return $this->descripcion;}

    public function save(){
        try{
            //placeholder
            $query = $this->prepare('INSERT INTO examenes(idExa, rut, tipoExamen, fecha, idHr, descripcion) VALUES (NULL , :rut, :tipoExamen, :fecha, :idHr, NULL);');
            //referencia
            $query->execute([
                'rut' => $this->rut,
                'tipoExamen' => $this->tipoExamen,
                'fecha' => $this->fecha,
                'idHr' => $this->idHr,
            ]);

            return true;
        }catch(PDOException $e){
            error_log('ExamenesModel::save->PDOException ' . $e);
            return false;
        }
    }

    public function getAll(){
        $items = [];
        try{
            $query = $this->query('SELECT * FROM examenes');
            //FETCH_ASSOC = devuelve un objeto transformado como clave valor
            while($examenes = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new ExamenesModel();
                //uso mi variable p descomponruta y el campo a elegir
                $item->setIdExa($examenes['idExa']);
                $item->setRut($examenes['rut']);
                $item->setTipoExamen($examenes['tipoExamen']);
                $item->setFecha($examenes['fecha']);
                $item->setIdHr($examenes['idHr']);
                $item->setDescripcion($examenes['descripcion']);
                //Meto mis objetos a la lista
                array_push($items, $item);
            }

            return $items;

        }catch(PDOException $e){
            error_log('ExamenesModel::getAll->PDOException ' . $e);
        }
    }


    public function get($rut){
        try{
            $query = $this->prepare('SELECT * FROM examenes WHERE rut = :rut');
            $query->execute([
                'rut' => $rut
            ]);

            $examen = $query->fetch(PDO::FETCH_ASSOC);

                //uso mi variable p descomponruta y el campo a elegir
            $this->setIdExa($examen['idExa']);
            $this->setRut($examen['rut']);
            $this->setTipoExamen($examen['tipoExamen']);
            $this->setFecha($examen['fecha']);
            $this->setIdHr($examen['idHr']);
            $this->setDescripcion($examen['descripcion']);

            return $this;

        }catch(PDOException $e){
            error_log('ExamenesModel::getrut->PDOException ' . $e);
        }
    }
    public function delete($idExa){
        try{
            $query = $this->prepare('DELETE FROM examenes WHERE idExa = :idExa');
            $query->execute([
                'idExa' => $idExa
            ]);
            
            return true;
        }catch(PDOException $e){
            error_log('ExamenesModel::delete->PDOException ' . $e);
            return false;
        }
    }

    public function update(){
        try{
            $query = $this->prepare('UPDATE examenes SET tipoExamen = :tipoExamen, fecha = :fecha, idHr = :idHr, descripcion = :descripcion WHERE idExa = :idExa');
            $query->execute([
                'idExa' =>$this->idExa,
                'tipoExamen' => $this->tipoExamen,
                'fecha' => $this->fecha,
                'idHr' => $this->idHr,
                'descripcion' => $this->descripcion
            ]);

            return true;

        }catch(PDOException $e){
            error_log('ExamenesModel::update->PDOException ' . $e);
            return false;
        }
    }
    public function from($array){
        //metodo para pasarle un arreglo para asignar los campos del arreglo
        //a los atributos (hacerlos miembros)
        $this->idExa = $array['idExa'];
        $this->rut = $array['rut'];
        $this->tipoExamen = $array['tipoExamen'];
        $this->fecha = $array['fecha'];
        $this->idHr = $array['idHr'];
        $this->descripcion = $array['descripcion'];
        error_log('ExamenesModel::from->succes ');
    }

    public function exists($fecha, $idHr){
        try{
            $query = $this->prepare('SELECT * FROM examenes WHERE fecha = :fecha AND idHr = :idHr;');
            $query->execute([
                'fecha' => $fecha,
                'idHr' => $idHr
            ]);
            if($query->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            error_log('ExamenesModel::exists->PDOException ' . $e);
            return false;
        }
    }
}
?>