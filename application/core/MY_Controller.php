<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{  
    public function __construct()
    {
        parent::__construct();  
        
        //$this->output->cache(1680);
        
        $this->layout->title('Hotel Plus | Site');
        
        $this->layout->meta(meta('Content-type','text/html; charset=UTF-8'));
        $this->layout->meta(meta('content-language','pt-BR'));
        $this->layout->meta(meta('robots','index,follow'));
        $this->layout->meta(meta('description',''));
        $this->layout->meta(meta('Cache-control','no-cache'));
        $this->layout->meta(meta('pragma','no-cache'));        
        
        $this->layout->js('bower_components/jquery/dist/jquery.min');
        $this->layout->js('bower_components/bootstrap/dist/js/bootstrap.min');
        $this->layout->css('js/bower_components/bootstrap/dist/css/bootstrap.min');
       
        
    }
}

class MY_ControllerAdmin extends CI_Controller
{  
    public function __construct()
    {
        parent::__construct();  
        
        //$this->output->cache(1680);
        $this->layout->debug['active'] = FALSE;
        
        $this->layout->title('Hotel Plus | Adminstração');
        
        $this->layout->meta(meta('Content-type','text/html; charset=UTF-8'));
        $this->layout->meta(meta('content-language','pt-BR'));
        $this->layout->meta(meta('robots','index,follow'));
        $this->layout->meta(meta('description',''));
        $this->layout->meta(meta('Cache-control','no-cache'));
        $this->layout->meta(meta('pragma','no-cache'));        
        
        $this->layout->js('bower_components/jquery/dist/jquery.min');
        $this->layout->js('bower_components/bootstrap/dist/js/bootstrap.min');
        $this->layout->css('js/bower_components/bootstrap/dist/css/bootstrap.min');
       
        
    }
}