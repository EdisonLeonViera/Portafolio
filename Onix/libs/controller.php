<?php
class Controller{
    function __construct()
    {
        $this->view = new View();    
    }

    function loadModel($model){
        $url = 'models/' . $model . 'model.php';
        error_log('CONTROLLER::loadModel->Este es la carga del modelo url ' . $url);

        if(file_exists($url)){
            require_once $url;

            $modelName = $model . 'Model';
            $this->model = new $modelName();
        }
    }

    function existPOST($params){
        foreach($params as $param){
            if(!isset($_POST[$param])){
                error_log('Controller::existsPost-> no exite el parametro ' . $param);
                return false;
            }
        }error_log('Controller::existsPost-> Existe parametro');

        return true;
    }

    function existGET($params){
        foreach($params as $param){
            if(!isset($_GET[$param])){
                error_log('Controller::existsGet-> no exite el parametro ' . $param);
                return false;
            }
        }

        return true;
    }
    
    function getGet($name){
        return $_GET[$name];
    }

    function getPost($name){
        return $_POST[$name];
    }
    
    function redirect($route, $mensajes){
        $data = [];
        $params = '';

        foreach($mensajes as $key => $mensaje){
            array_push($data, $key . '=' . $mensaje);
        }
        $params = join('&', $data);

        if($params != ''){
            $params = '?' . $params;
        }

        error_log('Controller::redirect-> header Location ' . constant('URL') . '/' . $route . $params);
        header('Location: ' . constant('URL') . '/' . $route . $params);
    }
}
?>