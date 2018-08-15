<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/config/url_helper.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/config/session.php';
    // Load Libraries
    require_once $_SERVER['DOCUMENT_ROOT'] . '/libraries/Controller.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/libraries/Core.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/libraries/Database.php';
    $init = new Core();
