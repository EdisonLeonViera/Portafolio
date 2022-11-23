<?php
class UserModel extends Model implements IModel{
    private $rut;
    private $nombre;
    private $apellidoP;
    private $apellidoM;
    private $telefono;
    private $correo;
    private $clave;
    private $fechaNacimiento;
    private $role;

    public function __construct()
    {
        parent::__construct();
        //inicializar variables por tipo de dato
        $this->rut = '';
        $this->nombre = '';
        $this->apellidoP = '';
        $this->apellidoM = '';
        $this->telefono = '';
        $this->correo = '';
        $this->clave = '';
        $this->fechaNacimiento = '';
        $this->role = '';
    }



    public function save(){
        try{
            //placeholder
            $query = $this->prepare('INSERT INTO paciente(rut, nombre, apellidoP, apellidoM, telefono, correo, clave, fechaNacimiento, role) VALUES(:rut, :nombre, :apellidoP, :apellidoM, :telefono, :correo, :clave, :fechaNacimiento, :role);');
            //referencia
            $query->execute([
                'rut' => $this->rut,
                'nombre' => $this->nombre,
                'apellidoP' => $this->apellidoP,
                'apellidoM' => $this->apellidoM,
                'telefono' => $this->telefono,
                'correo' => $this->correo,
                'clave' => $this->clave,
                'fechaNacimiento' => $this->fechaNacimiento,
                'role' => $this->role
            ]);

            return true;
        }catch(PDOException $e){
            error_log('USERMODEL::save->PDOException ' . $e);
            return false;
        }
    }

    public function getAll(){
        $items = [];
        try{
            $query = $this->query('SELECT * FROM paciente');
            //FETCH_ASSOC = devuelve un objeto transformado como clave valor
            while($pacientes = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new UserModel();
                //uso mi variable p descomponruta y el campo a elegir
                $item->setRut($pacientes['rut']);
                $item->setnombre($pacientes['nombre']);
                $item->setApellidoP($pacientes['apellidoP']);
                $item->setApellidoM($pacientes['apellidoM']);
                $item->setTelefono($pacientes['telefono']);
                $item->setCorreo($pacientes['correo']);
                $item->setClave($pacientes['clave'], false);
                $item->setFechaNacimiento($pacientes['fechaNacimiento']);
                $item->setRole($pacientes['role']);
                //Meto mis objetos a la lista
                array_push($items, $item);
            }

            return $items;

        }catch(PDOException $e){
            error_log('USERMODEL::getAll->PDOException ' . $e);
        }
    }


    public function get($rut){
        try{
            $query = $this->prepare('SELECT * FROM paciente WHERE rut = :rut;');
            $query->execute([
                'rut' => $rut
            ]);

            $paciente = $query->fetch(PDO::FETCH_ASSOC);

                //uso mi variable p descomponruta y el campo a elegir
            $this->setRut($paciente['rut']);
            $this->setNombre($paciente['nombre']);
            $this->setApellidoP($paciente['apellidoP']);
            $this->setApellidoM($paciente['apellidoM']);
            $this->setTelefono($paciente['telefono']);
            $this->setCorreo($paciente['correo']);
            $this->setClave($paciente['clave'], false);
            $this->setFechaNacimiento($paciente['fechaNacimiento']);
            $this->setRole($paciente['role']);

            return $this;

        }catch(PDOException $e){
            error_log('USERMODEL::getrut->PDOException ' . $e);
        }
    }
    public function delete($rut){
        try{
            $query = $this->prepare('DELETE FROM paciente WHERE rut = :rut');
            $query->execute([
                'rut' => $rut
            ]);
            
            return true;
        }catch(PDOException $e){
            error_log('USERMODEL::delete->PDOException ' . $e);
            return false;
        }
    }
    public function update(){
        try{
            $query = $this->prepare('UPDATE paciente SET nombre = :nombre, apellidoP = :apellidoP, apellidoM = :apellidoM, telefono = :telefono, correo = :correo, clave = :clave WHERE rut = :rut');
            $query->execute([
                'rut' => $this->rut,
                'nombre' => $this->nombre,
                'apellidoP' => $this->apellidoP,
                'apellidoM' => $this->apellidoM,
                'telefono' => $this->telefono,
                'correo' => $this->correo,
                'clave' => $this->clave,
                'fechaNacimiento' => $this->fechaNacimiento,
            ]);

            return true;

        }catch(PDOException $e){
            error_log('USERMODEL::update->PDOException ' . $e);
            return false;
        }
    }
    public function from($array){
        //metodo para pasarle un arreglo para asignar los campos del arreglo
        //a los atributos (hacerlos miembros)
        $this->rut = $array['rut'];
        $this->nombre = $array['nombre'];
        $this->apellidoP = $array['apellidoP'];
        $this->apellidoM = $array['apellidoM'];
        $this->telefono = $array['telefono'];
        $this->correo = $array['correo'];
        $this->clave = $array['clave'];
        $this->fechaNacimiento = $array['fechaNacimiento'];
        $this->role = $array['role'];
        
    }

    private function getHashedPassword($clave){
        //Encriptacion por PHP
        return password_hash($clave, PASSWORD_DEFAULT, ['cost' => 10]);
    }
    //setter
    public function setRut($rut){$this->rut = $rut;}
    public function setNombre($nombre){$this->nombre = $nombre;}
    public function setApellidoP($apellidoP){$this->apellidoP = $apellidoP;}
    public function setApellidoM($apellidoM){$this->apellidoM = $apellidoM;}
    public function setTelefono($telefono){$this->telefono = $telefono;}
    public function setCorreo($correo){$this->correo = $correo;}
    public function setFechaNacimiento($fechaNacimiento){$this->fechaNacimiento = $fechaNacimiento;}
    public function setRole($role){$this->role = $role;}
    //Protocolo de segurrutad para la clave
    public function setClave($clave, $hashed = true){ 
        if($hashed){
            $this->clave = $this->getHashedPassword($clave);
        }else{
            $this->clave = $clave;
        }
    }

    //metodos propios de la clase

    //comprobar si usuario existe
    public function exists($rut){
        try{
            $query = $this->prepare('SELECT rut FROM paciente WHERE rut = :rut');
            $query->execute(['rut' => $rut]);
            if($query->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            error_log('USERMODEL::exists->PDOException ' . $e);
            return false;
        }
    }

    //verificar password encriptada
    public function comparePasswords($clave, $rut){
        try{
            $persona = $this->get($rut);

            //valrutar
            return Password_verify($clave, $persona->getClave());
        }catch(PDOException $e){
            error_log('USERMODEL::comparePasswords->PDOException ' . $e);
            return false;
        }
    }

    //getter
    public function getRut(){              return $this->rut;}
    public function getNombre(){        return $this->nombre;}
    public function getapellidoP(){        return $this->apellidoP;}
    public function getApellidoM(){            return $this->apellidoM;}
    public function getTelefono(){          return $this->telefono;}
    public function getCorreo(){           return $this->correo;}
    public function getClave(){            return $this->clave;}
    public function getFechaNacimiento(){            return $this->fechaNacimiento;}
    public function getRole(){            return $this->role;}
}

?>