<?php

class Core
{
    protected $currentController = 'Index';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();
        if ( count($url) <= 2 ) {
            $path_class = 'index';
        } else {
            $path_class = $url[2];
        }

        if ( file_exists(APP_ROOT.'/app/controllers/' . ucwords($path_class) . '.php' )) {
            $this->currentController = ucwords( $path_class );
            unset($path_class);
        }

        require_once APP_ROOT.'/app/controllers/' . $this->currentController . '.php';

        $this->currentController =  new $this->currentController;

        // Check for second part of url
        if (isset($url[3])) {
            if(method_exists($this->currentController, $url[3]))
            {
                $this->currentMethod = $url[3];
                unset($url[3]);
            }
        }

        // Get params
        $this->params = $url ? array_values($url) : [];

        //Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function  getUrl()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = rtrim($url,'/');
        $url = filter_var($url,FILTER_SANITIZE_URL);
        $url = explode('/',$url);
        return $url;
    }
}