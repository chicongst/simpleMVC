<?php

class Core
{
    protected $currentController = 'IndexPage';
    protected $currentMethod     = 'index';
    protected $params            = [];

    public function __construct()
    {
        $url = $this->getUrl();
        if (count($url) <= 2 ) {
            $path_class = 'index';
        } else {
            $path_class = $url[2];
            $url = array(
                $url[2]
            );
        }

        if (file_exists(APP_ROOT.'/app/controllers/' . ucwords($path_class) . '.php')) {
            $this->currentController = ucwords( $path_class );
            unset($path_class);
        }

        require_once APP_ROOT.'/app/controllers/' . $this->currentController . '.php';

        $this->currentController =  new $this->currentController;

        if (isset($url[3])) {
            $m_url = $this->getUrlMethod($url[3]);
            $url = array(
                $url[2],
                $m_url
            );
            if (method_exists($this->currentController, $m_url)) {
                $this->currentMethod = $m_url;
                unset($url[3]);
            }
        }

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

    }

    public function getUrl()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = rtrim($url,'/');
        $url = filter_var($url,FILTER_SANITIZE_URL);
        $url = explode('/',$url);
        return $url;
    }

    public function getUrlMethod($url)
    {
        $m_url = explode('.',$url);
        return $m_url[0];
    }
}
