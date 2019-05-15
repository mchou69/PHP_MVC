<?php

class View
{
    private $file;
    private $controller;

    public function __construct($controller = "") {
        $path = "views/";
        $this->controller=$controller;

        if ($controller != "") {
            $path = $path . $controller . "/";
        }

        $this->file = $path . "index.php";
    }

    public function generate($data) {
        //$view = $this->generateContent($this->file, $data);
        //echo $view;
        $this->generateTemplate($this->file, $data);
    }

    private function generateTemplate($file, $data=array()) {
        $template='views/shared/template.php';
        extract($data);

        ob_start();

        $title =  ucfirst(strtolower($this->controller));
        $content = file_get_contents($file);

        require $template;
        return ob_get_contents();
    }

/*    private function generateContent($file, $data=array()) {

        if (file_exists($file)) {
            extract($data);

            ob_start();

            $title =  ucfirst(strtolower($this->controller));

            require $file;
            return ob_get_clean();
        }
        else {
           // throw new Exception("'$file' not found!");
            echo "'$file' not found!";
        }
    }*/
}