<?php
namespace app\libraries;
/*
 * App Core Class
 * Creates url and loads core controller
 * URL FORMAT - /controller/method/params
 */
class Core {
    protected $controllersNamespace = 'app\\controllers\\';
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct() {
        
        $url = $this->getUrl();

        //look in controllers for first value in $url array
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            
            //if exists, set as controller
            $this->currentController = ucwords($url[0]);

            //Unset 0 index
            unset($url[0]);
        }

        //Require the controller
        require_once('../app/controllers/' . $this->currentController . '.php');

        //Instantiate controller class
        $controller = $this->controllersNamespace . $this->currentController;
        $this->currentController = new $controller;


        //Check for second part of url
        if (isset($url[1])) {
            //check to see if method exists in controller
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                //unset 1 undex
                unset($url[1]);

            }
        }

        //Get params
        $this->params = $url ? array_values($url) : [];

        // Call a callback with array of params
        call_user_func_array(
            [
                $this->currentController,
                $this->currentMethod
            ],
            $this->params
            );
    }

    public function getUrl() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');   
            $url = filter_var($url, FILTER_SANITIZE_URL);  
            $url = explode('/', $url);
            return $url;
        }
    }


}