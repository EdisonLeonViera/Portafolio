<?php
    //Registro de Errores
    error_reporting(E_ALL);

    ini_set('ignore_repeated_errors',TRUE);

    ini_set('display_errors',FALSE);

    ini_set('log_errors', TRUE);

    //Archivo de Registro de Errores
    ini_set("error_log","php-error4.log");

    error_log("Inicio de Aplicion");

    //Archivos Base
    require_once 'libs/database.php';
    require_once 'libs/controller.php';
    require_once 'libs/model.php';
    require_once 'libs/view.php';
    require_once 'libs/app.php';

    //Cargamos clases
    require_once 'clases/successmesssages.php';
    require_once 'clases/errormessages.php';
    require_once 'clases/sessionController.php';

    //Cargamos el config
    require_once 'config/config.php';

    $app = new App();

?>