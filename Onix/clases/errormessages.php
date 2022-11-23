<?php

class ErrorMessages{
    // nomenclatura: ERROR_CONTROLLER_METODO_OPERACION
    // igual a una clave de error
    const PRUEBA = "101";
    const ERROR_SIGNUP_NEWUSER = '102';
    const ERROR_SIGNUP_NEWUSER_EMPTY = '103';
    const ERROR_SIGNUP_NEWUSER_EXISTS = '104';
    const ERROR_LOGIN_AUTHENTICATE_EMPTY = '105';
    const ERROR_LOGIN_AUTHENTICATE_DATA = '106';
    const ERROR_LOGIN_AUTHENTICATE = '107';
    const ERROR_GENERIC_EXIST = '108';
    const ERROR_GENERIC_FAIL = '109';
    const ERROR_GENERIC_TIME = '110';
    const ERROR_GENERIC = '111'; 
    const ERROR_GENERIC_EMPTY = '112';
    const ERROR_PASS_TIME = '113';
    const ERROR_FUTURE_TIME = '114';
    const ERROR_SIGNUP_NEWUSER_UNDERAGE = '115';


    private $errorList = [];
    public function __construct()
    {
        $this->errorList = [
            ErrorMessages::PRUEBA => 'Mesaje de Error',
            ErrorMessages::ERROR_SIGNUP_NEWUSER => 'Hubo un error al intentar procesar la solicitud',
            ErrorMessages::ERROR_SIGNUP_NEWUSER_EMPTY => 'Llena los campos de usuario y password',
            ErrorMessages::ERROR_SIGNUP_NEWUSER_EXISTS => 'El usuario ya existe',
            ErrorMessages::ERROR_LOGIN_AUTHENTICATE_EMPTY => 'Llena los campos de usuario y password',
            ErrorMessages::ERROR_LOGIN_AUTHENTICATE_DATA => 'Nombre de usurio y/o password incorrecto',
            ErrorMessages::ERROR_LOGIN_AUTHENTICATE => 'No se puede procesar la solicitud. Ingresa usuario y password',
            ErrorMessages::ERROR_GENERIC_EXIST => 'Su solicitud ya existe',
            ErrorMessages::ERROR_GENERIC_FAIL => 'No se puede procesar su solicitud',
            ErrorMessages::ERROR_GENERIC_TIME => 'Hora y fecha no disponible',
            ErrorMessages::ERROR_GENERIC => 'Hubo un error inesperado',
            ErrorMessages::ERROR_GENERIC_EMPTY => 'Debe rellenar todos los campos',
            ErrorMessages::ERROR_PASS_TIME => 'La fecha ingresada ya ah pasado',
            ErrorMessages::ERROR_FUTURE_TIME => 'El minimo de Edad es de 18 años actualmente',
            ErrorMessages::ERROR_SIGNUP_NEWUSER_UNDERAGE => 'El minimo de Edad es de 18 años a la fecha'
        ];
    }

    public function get($hash){
        return $this->errorList[$hash];
    }

    public function existsKey($key){
        if(array_key_exists($key, $this->errorList)){
            return true;
        }else{
            return false;
        }
    }
}

?>