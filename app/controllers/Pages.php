<?php
namespace app\controllers;
use app\libraries\Controller;

class Pages extends Controller {
    public function __construct() {
       
    }


    public function index() {

        $data = [
            'title' => 'KanmirMVC'            
        ];

        $this->view('pages/index', $data);
    }

    public function about() {
        $data = ['title' => 'About Us'];
        $this->view('pages/about', $data);
    }
}