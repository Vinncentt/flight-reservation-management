 <?php

// require_once 'models/Flights.php';

class FlightsController{
    public function getAllFlights(){
        $flights = Flight::getAll(); //static methode
        return $flights ;
    }

    public function addFlight(){  //add function
        if(isset($_POST['submit'])){
            $data = array(
                'fro_m' => $_POST['from'],
                'to' => $_POST['to'],
                'date_time' => $_POST['date'],
                'arrive_time' => $_POST['arrive_time'],
                'price' => $_POST['price'],
                'seats_number' => $_POST['seats'],
                'status' => $_POST['status']
            );
            $result = Flight::add($data);
            if($result === 'ok'){
                Session::set('success','The flight has been added');
                Redirect::to('home');
            }else{
                echo $result;
            }
        }
    }

    public static function getOneFlight(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );
            $flight = Flight::getFlight($data);
            return $flight;
        }
    }

     public function UpdateFlight(){  //update function
        if(isset($_POST['submit'])){
            $data = array(
                'id' => $_POST['id'],
                'fro_m' => $_POST['from'],
                'to' => $_POST['to'],
                'date_time' => $_POST['date'],
                'arrive_time' => $_POST['arrive_time'],
                'price' => $_POST['price'],
                'seats_number' => $_POST['seats'],
                'status' => $_POST['status']
            );
            $result = Flight::update($data);
            if($result === 'ok'){
                Session::set('success','The flight has been edited');
               Redirect::to('home');
            }else{
                echo $result;
            }
        }
    }

    public function deleteFlight(){ //delete function
        if(isset($_POST['id'])){
            $data['id'] = $_POST['id'];
            $result = Flight::delete($data);
            if($result === 'ok'){
                Session::set('success','The flight has been delited');
                Redirect::to('home');
            }else{
                echo $result;
            }
        }
    }

    public function findFlight(){
        if(isset($_POST['search'])){
            $data = array('search' => $_POST['search']);
        }
        $flight = Flight::searchFlight($data);
        return $flight;
    }
    public function addBook()
    {
        $data = array(
                'id' => $_POST['id']);
        Book::add($data);
    }
    public function getBook()
    {
       $data = Book::getAll();
        return $data;


    }

    public function getAllBook()
    {
       $data = Book::getAllflights();
        return $data;


    }
}


?>