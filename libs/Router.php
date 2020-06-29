<?php
class Router 
{
    private $ctrl;

          function route(){
                try {
                    spl_autoload_register(function($class){
                        $pathModels="./modeles/".$class.".php";
                        $pathDao="./dao/".$class.".php";
                        $pathLibs="./libs/".$class.".php";
                        if(file_exists($pathModels)){
                            require_once "$pathModels";
                        }elseif(file_exists($pathDao)){
                            require_once "$pathDao";
                        }elseif(file_exists($pathLibs)){
                            require_once "$pathLibs";
                        }
                    });
               
 

if(isset($_GET['url'])){
    $url= explode("/", $_GET['url']);
    $controller =ucfirst(strtolower($url[0]))."Controller";
    $path="./controllers/".$controller.".php";

    if (file_exists($path)) {
        require_once "$path";

        //Instanciation d'un objet controller
        $this->ctrl = new $controller();
        $action =$url[1];
        if (method_exists($this->ctrl,$action)) {
            $this->ctrl->{$action}();
            # code...
        }else{
            $path= "./controllers/ErrorController.php";
            require_once "$path";
            $error=new ErrorController();
            $error->showError("Cette methode n'existe pas"); 
        }
    }else {
        $path= "./controllers/ErrorController.php";
        require_once "$path";
        $error= new ErrorController();
        $error->showError("le controller n'existe pas");
    }
}else {
    $path="./controllers/DefaultController.php";
    require_once "$path";
    $this->ctrl=new DefaultController();
    $this->ctrl->index();
}

} catch(Exception $ex){

}
  }
     
}