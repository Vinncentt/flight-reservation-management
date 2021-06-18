<?php
 //include controller
 require_once './autoload.php'; 
 require_once './controllers/HomeController.php';
 require_once './controllers/FlightsController.php';
 require_once 'models/Flights.php';
 require_once 'database/DB.php';
 require_once './views/includes/header.php';
 require_once './views/includes/alerts.php';



//creation d'object out of class home

$home = new HomeController();

// $home->index($_GET['page']); 

$pages = ['login','homeuser','home','add','update','delete','logout','showflights'];
    if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){
        if(isset($_GET['page'])){
            if(in_array($_GET['page'],$pages)){
                $page= $_GET['page'];
                $home->index($page);
            }else{
                include('views/includes/404.php');
            }
        }else{
            $home->index('home');
        }
  require_once './views/includes/footer.php';



}else if(isset($_GET['page']) && $_GET['page'] === 'register'){
    $home->index('register');
}else{
    $home->index('login');
}

?>