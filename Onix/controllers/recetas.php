<?php

require_once 'models/recetasmodel.php';
class Recetas extends SessionController{
    private $user;

    function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
    }

    public function render(){
        $rcModel = new RecetasModel();
        $rc = $rcModel->get($this->user->getRut());
        error_log("Recetas::render-> carga de hm");
        $this->view->render('paciente/recetas', [
            'user' => $this->user,
            'rc' => $rc
        ]);
    }

    public function generarQR(){
        if($this->existPOST(['idRec', 'fechaEmison', 'docNombre', 'docApellidoP', 'especialidad', 'descripcion', 'fechaCaducidad'])){
            $idRec = $this->getPost('idRec');
            $fechaEmison = $this->getPost('fechaEmison');
            $docNombre = $this->getPost('docNombre');
            $docApellidoP = $this->getPost('docApellidoP');
            $especialidad = $this->getPost('especialidad');
            $descripcion = $this->getPost('descripcion');
            $fechaCaducidad = $this->getPost('fechaCaducidad');
        }
        if(file_exists("phpqrcode/qrlib.php")){
            require "phpqrcode/qrlib.php";
    
            $dir= 'public/img/recetas/';

            if(!file_exists($dir)){
                mkdir($dir);
        }
        
        error_log('CodigoQR::function-> idRec ' . $idRec);
        error_log('CodigoQR::function-> idRec ' . $fechaEmison);
        error_log('CodigoQR::function-> idRec ' . $docNombre);
        error_log('CodigoQR::function-> idRec ' . $docApellidoP);
        error_log('CodigoQR::function-> idRec ' . $especialidad);
        error_log('CodigoQR::function-> idRec ' . $descripcion);
        error_log('CodigoQR::function-> idRec ' . $fechaCaducidad);
        $filename = $dir. 'recetaQR' . $idRec . '.png';
        $contenido = "Id de Receta: $idRec \nFecha de Emision: $fechaEmison \nDoctor(a): $docNombre $docApellidoP \nEspecialidad: $especialidad \nDescripcion: $descripcion \nFecha de Caducidad: $fechaCaducidad";
        $tam = 3;
        $level = 'L';
        $framSize = 2;
    
        QRcode::png($contenido, $filename, $level, $tam, $framSize);
        }

        $this->redirect('recetas', [
            'success' => SuccessMessages::SUCCESS_GENERETEQR_RECETA
        ]);
    }
}
?>