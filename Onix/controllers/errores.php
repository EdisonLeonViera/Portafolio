<?php
class Errores extends Controller{
    function __construct()
    {
        parent::__construct();
        error_log("Errores::construct-> inicio de Errores");
        $this->view->render('errores/index');
        error_log("Errores::render-> carga de Errores");
    }
}
?>