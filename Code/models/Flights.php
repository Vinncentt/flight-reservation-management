<?php

class Flight{
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM flights');
        $stmt->execute();
        return $stmt->fetchAll();
       // $stmt->close(); //close conection
        $stmt = null; //pour evité l'ouverture de la connection with darabase
    }

    static public function add($data){
        $stmt = DB::connect()->prepare("INSERT INTO flights (fro_m,city_to,date_time,arrive_time,price,seats_number,status) VALUES (:from,:to,:date_tim,:arrive,:price,:seats,:status)") ;
        $stmt->bindParam(':from',$data['fro_m']);
        $stmt->bindParam(':to',$data['to']);
        $stmt->bindParam(':date_tim',$data['date_time']);
        $stmt->bindParam(':arrive',$data['arrive_time']);
        $stmt->bindParam(':price',$data['price']);
        $stmt->bindParam(':seats',$data['seats_number']);
        $stmt->bindParam(':status',$data['status']);

        if($stmt->execute()){
            return'ok';
        }else{
            return 'error';
        }
        $stmt = null;
 
    }

    static public function getFlight($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM flights WHERE id=:id';
            $stmt = DB::connect()->prepare($query) ;
            $stmt->execute(array(":id" => $id));
            $flight = $stmt->fetch(PDO::FETCH_OBJ);
            return $flight;
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }

     static public function update($data){
        $stmt = DB::connect()->prepare("UPDATE flights SET fro_m = :from,city_to 
        = :to,date_time = :date_tim,arrive_time = :arrive,price = :price ,seats_number = :seats,status = :status WHERE id = :id") ;
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':from',$data['fro_m']);
        $stmt->bindParam(':to',$data['to']);
        $stmt->bindParam(':date_tim',$data['date_time']);
        $stmt->bindParam(':arrive',$data['arrive_time']);
        $stmt->bindParam(':price',$data['price']);
        $stmt->bindParam(':seats',$data['seats_number']);
        $stmt->bindParam(':status',$data['status']);

        if($stmt->execute()){
            return'ok';
        }else{
            return 'error';
        }
        $stmt = null;
 
    } 
    
    static public function delete($data){
        $id = $data['id'];
            try{
                $query = 'DELETE FROM flights WHERE id=:id';
                $stmt = DB::connect()->prepare($query) ;
                $stmt->execute(array(":id" => $id));
                if($stmt->execute()){
                    return'ok';
                }
            }catch(PDOException $ex){
                echo 'erreur' . $ex->getMessage();
            }
        }

    static public function searchFlight($data){
         $search = $data['search'];
            try{
                $query = "SELECT * FROM flights WHERE fro_m LIKE '%$search%' OR city_to LIKE '%$search%'";
                $stmt = DB::connect()->prepare($query) ;
                $stmt->execute();
                return $flights = $stmt->fetchAll();
            }catch(PDOException $ex){
                echo 'erreur' . $ex->getMessage();
            }
    }

    
}




    


