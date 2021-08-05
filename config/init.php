<?php
// Start Session
session_start();

// Config File
require_once 'config.php';

// Include Helpers
require_once 'helpers/systemHelper.php';

//Autoloader
spl_autoload_register(function ($class_name) {
    require_once 'lib/'.$class_name.'.php';
});
