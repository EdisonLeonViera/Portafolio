<?php

class LoginModel extends Model{
    function __construct()
    {
        parent::__construct();
    }

    //Implementamos la funcion de login
    function login($rut, $password){
        //accedemos a base de datos
        try{

            $query = $this->prepare('SELECT * FROM paciente WHERE rut = :rut');
            $query->execute(['rut' => $rut]);

            //valido si existe
            if($query->rowCount() == 1){
                $item = $query->fetch(PDO::FETCH_ASSOC);

                $user = new UserModel();
                //cargamos los datos con from para crear un nuevo objeto
                $user->from($item);

                //validamos password
                if(password_verify($password, $user->getClave())){
                    error_log('LoginModel::login->success');
                    return $user;
                }else{
                    error_log('LoginModel::login-> password no es igual');
                    return NULL;
                }
            }
        }catch(PDOException $e){
            error_log('LoginModel::login-> exception ' . $e);
            return NULL;
        }

    }

}


?>