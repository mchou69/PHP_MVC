<?php
require 'Controller.php';

class MainController extends Controller
{

    public function index()
    {
        echo '<hr/>MainController - action.. ';
        print_r($this->request);
    }

    public function data()
    {
        $data = [];
        return $data;
    }
}