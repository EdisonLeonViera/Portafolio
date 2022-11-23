<?php
class Privacy extends Controller{
    function __construct()
    {
        parent::__construct();
        error_log("Errores::construct-> inicio de Errores");
    }

    public function render(){
        $this->view->render('privacy/condiciones');
        error_log("Errores::render-> carga de Errores");
    }
}
?>