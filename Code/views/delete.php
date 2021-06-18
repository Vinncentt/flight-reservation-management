<?php
    if(isset($_POST['id'])){
    $oldFlight = new FlightsController(); //creat object from the class FlightsController
    $oldFlight->deleteFlight();
    }
?>