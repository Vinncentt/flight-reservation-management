<?php 

class home extends Controller{
    public function index(){
        $User = $this->model('User');
    }

    public function test($name = "", $pren = ""){
        echo "hello " .$name." ".$pren;
    }
}

?>