<?php
// Version
define('VERSION', '3.6.0.1');
define('OCTYPE', 'FREE');
define('BUILD', '20190715');

// Configuration
if (is_file('config.php')) {
    require_once('config.php');
}
function mydump($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    exit(0);
}
// Install
if (!defined('DIR_APPLICATION')) {
    header('Location: install/index.php');
    exit;
}

// VirtualQMOD
require_once('./vqmod/vqmod.php');
VQMod::bootup();

// VQMODDED Startup
require_once(VQMod::modCheck(DIR_SYSTEM . 'startup.php'));

start('catalog');