<?php

ini_set('memory_limit', '8M');

class Controller 
{
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
    
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}