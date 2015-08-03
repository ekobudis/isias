<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    /*** error reporting on ***/
    error_reporting (E_ALL ^ E_NOTICE);

    /*** define the site path ***/
    $site_path = realpath(dirname(dirname(__FILE__)));
    define ('ROOT', $site_path);

    /*** define the site path ***/
    $base_url = 'http://' . $_SERVER['HTTP_HOST'];
    define ('URL', $base_url);

    include ('/Applications/MAMP/htdocs/isias/configs/config.php');
    /*include 'Autoloader.php';
    include 'functions.php';
    
    Autoloader::setClassPaths(array(
        'models/',
        'controllers/',
        'views/'
    ));
    Autoloader::register();*/