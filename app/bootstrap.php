<?php
//Load helper functions
require_once('helpers/functions.php');
//Load session
require_once('helpers/session.php');

//Load config
require_once('config/config.php');


// Autoload Core Libraries
spl_autoload_register(function ($className) {
    require_once(BASEPATH . '\\' . $className . '.php');
});