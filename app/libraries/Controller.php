<?php

namespace app\libraries;

/*
* Base controller
* Loads the models and views
*/
class Controller
{

    private $modelNamespace = 'app\\models\\';

    //Load model
    public function model($model)
    {
        // Require model file
        require_once('../app/models/' . $model . '.php');

        $model = $this->modelNamespace . $model;
        //instantiate model
        return new $model;
    }

    //Load view
    public function view($view, $data = [])
    {
        //check for view file
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once(APPROOT . '/views/inc/header.php');
            require_once('../app/views/' . $view . '.php');
            require_once(APPROOT . '/views/inc/footer.php');
        } else {
            die('View does not exist');
        }

    }
}