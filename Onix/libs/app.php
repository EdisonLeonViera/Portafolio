<?php

require_once 'controllers/errores.php';
class App{

    function __construct()
    {
        //Toma la url
        $url = isset($_GET['url']) ? $_GET['url']: null;
        error_log('APP::construct-> Url get ' . $url);
        //Toma la url y borra las divisiones al final
        $url = rtrim($url, '/');
        error_log('APP::archivoController->url rtrim ' . $url);
        //Une estas url y las une en un array
        $url = explode('/', $url);
        

        //Comprobar el controller
        if(empty($url[0])){
            error_log('APP::construct-> Url vacia ');
            //Sino existe redirige
            $archivoController = 'controllers/login.php';
            require_once $archivoController;
            //Controlador Base
            $controller = new Login();
            $controller->loadModel('login');
            $controller->render();

            return false;
        }
        //Si trae un controlador
        $archivoController = 'controllers/' . $url[0] . '.php';
        error_log('APP::archivoController->Este es el archivoController ' . $archivoController);

        if(file_exists($archivoController)){
            require_once $archivoController;
            error_log('APP::archivoController->Este es el archivoController(F.E) ' . $archivoController);
            error_log('APP::archivoController->Este es el archivoController(F.E) url[0] ' . $url[0]);
            $controller = new $url[0];

            $controller->loadModel($url[0]);

            //validar metodo
            if(isset($url[1])){
                error_log('APP::Isset($url[1])->isset ' . $url[0]);
                if(method_exists($controller, $url[1])){
                    error_log('APP::method_exists->El metodo si existe ');
                    if(isset($url[2])){
                        error_log('APP::Isset($url[2])->url ' . $url[2]);
                        //numero de parametros
                        $nparam = count($url) - 2;
                        error_log('APP::Isset($url[2])-> numero de parametros ' . $nparam);
                        //arreglo de parametros
                        $params = [];

                        for($i = 0; $i < $nparam; $i++){
                            array_push($params, $url[$i + 2]);
                            error_log('APP::array_push-> lo que devuelve url ' . $url[$i]);
                        }

                        

                        $controller->{$url[1]}($params);
                    }else{
                        //no tiene parametros, se manda a llamar el metodo tal cual
                        //metodo dinamico
                        $controller->{$url[1]}();
                    }
                }else{
                    //error,no existe el metodo
                    $controller = new Errores();
                    error_log('APP::method_exists->No existe un metodo');
                }
            }else{
                error_log('APP::Isset($url[1])->isset No hay url[1]');
                //no hay metodo a cargar, se carga uno por default
                $controller->render();
            }
        }else{
            //no existe el archivo
            $controller = new Errores();
            error_log('Hubo un error en el segundo else');
        }
    }
}
?>