<?php

namespace app\controllers;

use app\libraries\Controller;

class Pages extends Controller
{
    public function __construct()
    {

    }


    public function index()
    {

        $data = [
            'title' => 'SharePosts',
            'description' => 'Simple social network built on KanmirMVC PHP framework'
        ];

        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
            'description' => 'App to share posts with other users'
        ];
        $this->view('pages/about', $data);
    }
}