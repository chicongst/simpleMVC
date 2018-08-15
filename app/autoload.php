<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/config/url_helper.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/config/session.php';

    // Autoload Core Libraries
    spl_autoload_register(function($className){
       require_once $_SERVER['DOCUMENT_ROOT'] . '/libraries/' . $className . '.php';
    });
