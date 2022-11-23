<?php

require_once 'clases/session.php';
require_once 'models/usermodel.php';
class SessionController extends Controller{
    private $userSession;
    private $userName;
    private $userid;

    private $session;
    private $sites;
    private $user;

    function __construct()
    {
        parent::__construct();
        //Leer los permisos que permite dar autorixacion a los usuarios (access.json)
        $this->init();
    }

    function init(){
        $this->session = new Session();

        $json = $this->getJsonFileConfig();

        $this->sites = $json['sites'];
        $this->defaultSites = $json['default-sites'];

        $this->validateSession();
    }

    private function getJsonFileConfig(){
        $string = file_get_contents('config/access.json');
        $json = json_decode($string, true);

        return $json;
    }

    public function validateSession(){
        error_log('SESSIONCONTROLLER::validateSession');

        //si existe la sesion
        if($this->existsSession()){
            $role = $this->getUserSessionData()->getRole();
            error_log('SESSIONCONTROLLER::validateSession -> si existe y tomamos el rol: ' . $role);
            //si la pagina a entrar es publica
            if($this->isPublic()){
                //si existe sesion nos redirige a nuestro pagina principal del rol
                $this->redirectDefaultSiteByRole($role);
                error_log('SESSIONCONTROLLER::validateSession -> redirigimos por rol');
                
            }else{
                //si no es publica y si esta autorizado por role
                if($this->isAuthorized($role)){
                    error_log('SESSIONCONTROLLER::validateSession -> Esta autorizado a entrar');
                    // lo dejamos entrar
                }else{
                    //sino esta autorizado
                    $this->redirectDefaultSiteByRole($role);
                    error_log('SESSIONCONTROLLER::validateSession ->No esta autorizado a entrar');
                }
            }
        }else{
            //no existe la sesion
            if($this->isPublic()){
                //si la pagina es publica lo deja entrar
                error_log('SESSIONCONTROLLER::validateSession ->Si la pagina es publica lo dejamos entrar');
            }else{
                error_log('SESSIONCONTROLLER::validateSession ->Redirecciona al index de la pagina');
                error_log('SESSIONCONTROLLER::validateSession ->Redirecciona al index de la pagina Location: ' . constant('URL'));
                //lo dirigimos al index de la pagina
                header('Location: ' . constant('URL') . '');
            }
        }
    }

    //validar una session abierta
    function existsSession(){
        if(!$this->session->exists()) return false;
        //session sin informacion
        if($this->session->getCurrentUser() == NULL) return false;

        $userid = $this->session->getCurrentUser();

        if($userid) return true;
        error_log('SESSIONCONTROLLER::existsSession -> ' . $userid);
        return false;
    }

    function getUserSessionData(){
        //me retorna el id de la session
        $rut = $this->session->getCurrentUser();
        $this->user = new UserModel();
        //retonra la informacion del usuario basado en su id
        $this->user->get($rut);

        error_log('SESSIONCONTROLLER::getUserSessionData -> ' .$this->user->getRut());
        return $this->user;
    }

    //revisa si la pagina es publica
    function isPublic(){
        $currentURL = $this->getCurrentPage();
        //extraemos los caracteres que no se necesitan
        $currentURL = preg_replace("/\?.*/", "", $currentURL);

        //validamos que la url q sea publica
        for($i = 0; $i < sizeof($this->sites); $i++){
            if($currentURL == $this->sites[$i]['site'] && $this->sites[$i]['access'] == "public"){
                return true;
            }
        }

        return false;
    }

    //para saber la pagina en la que estoy
    function getCurrentPage(){
        $actualLink = trim("$_SERVER[REQUEST_URI]");
        $url = explode('/', $actualLink);
        error_log('SESSIONCONTROLLER::getCurrentPage ->actualLink ' . $actualLink);
        error_log('SESSIONCONTROLLER::getCurrentPage ->url ' . $url[1]);
        return $url[1];
    }

    //redirige por rol a su pagina por defecto
    private function redirectDefaultSiteByRole($role){
        $url = '';
        error_log('SESSIONCONTROLLER::redirectDefaultSiteByRole -> ' . $role);
        for($i = 0; $i < sizeof($this->sites); $i++){
            if($this->sites[$i]['role'] == $role){
                //nombre del sitio en mi caso en el nombre del host le puse pruebas (tutorial expenses)
                $url = '/' . $this->sites[$i]['site'];
                error_log('SESSIONCONTROLLER::redirectDefaultSiteByRole -> ' . $url);
                break;
            }
        }

        error_log('SESSIONCONTROLLER::redirectDefaultSiteByRole ->Location :' . constant(('URL')) . $url);
        header('Location: ' . constant('URL') . $url);
    }

    //ver si el usuario esta autorizado
    private function isAuthorized($role){
        error_log('SESSIONCONTROLLER::isAuthorized -> ' . $role);
        $currentURL = $this->getCurrentPage();
        //extraemos los caracteres que no se necesitan
        $currentURL = preg_replace("/\?.*/", "", $currentURL);

        //validamos que la url q sea publica
        for($i = 0; $i < sizeof($this->sites); $i++){
            if($currentURL == $this->sites[$i]['site'] && $this->sites[$i]['role'] == $role){
                error_log('SESSIONCONTROLLER::isAuthorized ->Retornamos true ' . $role);
                return true;
            }
        }

        return false;
    }

    function initialize($user){
        error_log('SessionController::initialize-> Comprobamos el user ');
        $this->session->setCurrentUser($user->getRut());
        $this->authorizeAccess($user->getRole());
    }

    function authorizeAccess($role){
        switch($role){
            case 'user':
                //mensaje
                error_log('SessionController::authorizeAccess-> Comprobamos el rol ' . $role);
                error_log('SessionController::authorizeAccess-> Comprobamos el rol ' . $this->redirect($this->defaultSites['user'], []));
                $this->redirect($this->defaultSites['user'], []);
                break;
            case 'admin':
                error_log('SessionController::authorizeAccess-> Comprobamos el rol ' . $role);
                $this->redirect($this->defaultSites['admin'], []);
                break;

        }
    }

    //para salir de la session
    function logout(){
        $this->session->closeSession();
    }
}
?>