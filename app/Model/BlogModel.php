<?php
require 'Model.php';

class BlogModel extends Model
{


    public function all(){
        $items = $this->execute('SELECT * FROM posts')->fetchAll();
        return $items;
    }
}