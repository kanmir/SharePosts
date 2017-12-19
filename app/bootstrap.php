<?php
//Load helpers
require_once('helpers/functions.php');

//Load config
require_once('config/config.php');

// Autoload Core Libraries
spl_autoload_register(function($className) {
    require_once( BASEPATH . '\\' . $className . '.php');
});