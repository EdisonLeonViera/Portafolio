<?php
class ReservaModel extends Model implements IModel{
    private $idReserva;
    private $rut;
    private $idDoc;
    private $fecha;
    private $idHr;
    private $confirma;

    public function __construct()
    {
        parent::__construct();
    }

    public function setIdReserva($idReserva){ $this->idReserva = $idReserva;}
    public function setRut($rut){ $this->rut = $rut;}
    public function setIdDoc($idDoc){ $this->idDoc = $idDoc;}
    public function setFecha($fecha){ $this->fecha = $fecha;}
    public function setIdHr($idHr){ $this->idHr = $idHr;}
    public function setConfirma($confirma){ $this->confirma = $confirma;}
    public function getIdReserva(){  return $this->idReserva;}
    public function getRut(){  return $this->rut;}
    public function getIdDoc(){  return $this->idDoc;}
    public function getFecha(){  return $this->fecha;}
    public function getIdHr(){  return $this->idHr;}
    public function getConfirma(){  return $this->confirma;}

    public function save(){
        try{
            //placeholder
            $query = $this->prepare('INSERT INTO reserva(idReserva, rut, idDoc, fecha, idHr, confirma) VALUES (NULL, :rut, :idDoc, :fecha, :idHr, "0");');
            //referencia
            $query->execute([
                'rut' => $this->rut,
                'idDoc' => $this->idDoc,
                'fecha' => $this->fecha,
                'idHr' => $this->idHr
            ]);

            return true;
        }catch(PDOException $e){
            error_log('ReservaModel::save->PDOException ' . $e);
            return false;
        }
    }

    public function getAll(){
        $items = [];
        try{
            $query = $this->query('SELECT * FROM reserva');
            //FETCH_ASSOC = devuelve un objeto transformado como clave valor
            while($reserva = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new ReservaModel();
                //uso mi variable p descomponruta y el campo a elegir
                $item->setIdReserva($reserva['idReserva']);
                $item->setRut($reserva['rut']);
                $item->setIdDoc($reserva['idDoc']);
                $item->setFecha($reserva['fecha']);
                $item->setIdHr($reserva['idHr']);
                $item->setConfirma($reserva['confirma']);
                //Meto mis objetos a la lista
                array_push($items, $item);
            }

            return $items;

        }catch(PDOException $e){
            error_log('ReservaModel::getAll->PDOException ' . $e);
        }
    }


    public function get($rut){
        try{
            $query = $this->prepare('SELECT * FROM reserva WHERE rut = :rut');
            $query->execute([
                'rut' => $rut
            ]);

            $reserva = $query->fetch(PDO::FETCH_ASSOC);

            //uso mi variable p descomponruta y el campo a elegir
            $this->setIdReserva($reserva['idReserva']);
            $this->setRut($reserva['rut']);
            $this->setIdDoc($reserva['idDoc']);
            $this->setFecha($reserva['fecha']);
            $this->setIdHr($reserva['idHr']);
            $this->setConfirma($reserva['confirma']);

            return $this;

        }catch(PDOException $e){
            error_log('ReservaModel::getrut->PDOException ' . $e);
        }
    }
    public function delete($idReserva){
        try{
            $query = $this->prepare('DELETE FROM reserva WHERE idReserva = :idReserva');
            $query->execute([
                'idReserva' => $idReserva
            ]);
            
            return true;
        }catch(PDOException $e){
            error_log('ReservaModel::delete->PDOException ' . $e);
            return false;
        }
    }

    public function update(){
        try{
            $query = $this->prepare('UPDATE reserva SET idDoc = :idDoc, fecha = :fecha, idHr = :idHr, confirma = :confirma WHERE idReserva = :idReserva');
            $query->execute([
                'idReserva' => $this->idReserva,
                'rut' => $this->rut,
                'idDoc' => $this->idDoc,
                'fecha' => $this->fecha,
                'idHr' => $this->idHr,
                'confirma' => $this->confirma
            ]);

            return true;

        }catch(PDOException $e){
            error_log('ReservaModel::update->PDOException ' . $e);
            return false;
        }
    }
    public function from($array){
        //metodo para pasarle un arreglo para asignar los campos del arreglo
        //a los atributos (hacerlos miembros)
        $this->idReserva = $array['idReserva'];
        $this->rut = $array['rut'];
        $this->idDoc = $array['idDoc'];
        $this->fecha = $array['fecha'];
        $this->idHr = $array['idHr'];
        $this->confirma = $array['confirma'];
        error_log('ReservaModel::from->succes ');
    }

    public function exists($fecha, $idHr, $idDoc){
        try{
            $query = $this->prepare('SELECT * FROM reserva WHERE fecha = :fecha AND idHr = :idHr AND idDoc = :idDoc;');
            $query->execute([
                'fecha' => $fecha,
                'idHr' => $idHr,
                'idDoc' => $idDoc
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