<?php

class Controller
{
    public function view($view,$data = [])
    {
        if ( file_exists(APP_ROOT.'/views/' . $view . '.php')){
            require_once (APP_ROOT.'/views/' . $view . '.php');
        } else {
            die ('View does not exists');
        }
    }
}
