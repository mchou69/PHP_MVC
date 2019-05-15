<?php
require 'app/classes/View.php';

abstract class Controller {
    protected $action;
    protected $request;

    public function setRequest($request){
        $this->request = $request;
    }


    public function action($action=''){
        $data=$this->data();

       /* echo '<br/>';
        print_r($data);
        echo '<br/>';*/

        //$data=['post 1','post 2'];
        $this->generateView($data);
    }

    public abstract function index();
    public abstract function data();

    protected function generateView($data = array()){
        $controllerClass = get_class($this);
        $view = new View(str_replace('Controller','',$controllerClass));

        $view->generate($data);
    }

}