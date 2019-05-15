<?php
require 'Controller.php';
require 'app/Model/BlogModel.php';

class BlogController extends Controller
{

    public function index()
    {
        echo '<hr/>BlogController - action.. ';
        print_r($this->request);
        //$this->action();
    }

    public function data()
    {
       $model = new BlogModel;
       $data = $model->all();

       return $data;
    }
}