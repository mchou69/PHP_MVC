<?php

class Router
{
    private $request;

    public function request() {
        try {

            $this->request = array_merge($_GET, $_POST);

            //print_r($this->request);
            //echo '<hr/>';

            $controller = $this->getController();
            $action = $this->getAction();

            //print_r($controller);
            $controller->action($action);
        }
        catch (Exception $e) {
            //$this->gererErreur($e);
            echo 'Error :  '.$e;
        }
    }


    private function getAction(){
        $action='';
        return $action;
    }
    /**
     * @return mixed
     * @throws Exception
     */
    private function getController() {
        $controller = "Main";

        if (isset($this->request['c']) && $this->request['c'] != "") {
            $controller = $this->request['c'];
        }


        $controller = ucfirst(strtolower($controller));
        $controllerClass = $controller."Controller";

        $controllerFile = "app/controllers/" . $controllerClass . ".php";

        //echo '<hr/>';
        //echo '<hr/>Controller : '.$controllerFile;

        if (file_exists($controllerFile)) {
            require($controllerFile);

            $controller = new $controllerClass();
            $controller->setRequest( $this->request);
            return $controller;
        }
        else {
           // throw new Exception("'$controllerFile' not found!");
            echo "'$controllerFile' not found!!!";
        }
    }

    private function gererErreur(Exception $exception) {
        //-------
    }

}