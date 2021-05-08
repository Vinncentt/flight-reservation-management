<?php 

class App{

    protected $Controller = "home";
    protected $method = "index";
    protected $param = [];


    public function __construct()
    {
        $url = $this->get__url();

        if(file_exists('../app/controllers/'.$url[0].'.php'))
        {
    
        $this->Controller = $url[0];
        unset($url[0]);
        }
        
        require_once '../app/controllers/'.$this->Controller.'.php';
        $this->Controller = new $this->Controller; 
        
        if(isset($url[1])){
            if(method_exists($this->Controller,$url[1]))
            {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->param = $url?array_values($url):[];
        var_dump($this->param);
        call_user_func_array([$this->Controller,$this->method],$this->param);
    }
    public function get__url()
    {
        if(isset($_GET['url'])){
        return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
        }
    }
}

?>