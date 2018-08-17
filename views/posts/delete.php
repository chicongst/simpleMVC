<?php
    ini_set('display_errors', 'On');
    $id = '';
    if ( isset($_GET['id']) ){
        $id = $_GET['id'];
    }
    require_once $_SERVER['DOCUMENT_ROOT'] . '/app/autoload.php';
    $post = new Posts;
    echo $post->delete($id);
