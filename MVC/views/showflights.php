<?php


if(isset($_SESSION['role']) && $_SESSION['role'] != 'admin'){
        
    
        $data = new FlightsController(); //creat object from the class FlightsController
        $flights = $data->getBook();

        $title = 'My reservations';

        $cancel = false;
    
    }else{
        $data = new FlightsController(); //creat object from the class FlightsController
        $flights = $data->getAllBook();

        $title = 'All reservations';

        $cancel = true;

      
    }

               




    
?>

 


<div class="container">
    <div class="row my-4">
        <div class="col-md-10 mx-auto">
            <?php include('./views/includes/alerts.php');?>
            <div class="card">
                <div class="card-body bg-light">
                   <h1 class="col-md-12 text-center mb-5"> <?php echo $title?> </h1>
                    <form method="POST" action="" class="float-right d-flex flex-row justify-content-between">
                         
                         
                        <a href="<?php echo BASE_URL?>" class="btn btn-secondary btn-sm mb-2 mr-2 "> <!--url de base plus la page add -->
                        <i class="fas fa-home "></i>
                        
                        
                        </a>
                        
                        
                       
                    </form>
                    <table class=" col-md-12 table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">full name</th>
                            <th scope="col">From / To</th>
                            <th scope="col">Date & time</th>
                            <th scope="col">Arrive time</th>
                            <th scope="col">Price</th>
                            
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($flights as $flight):?>
                                <tr>
                                <td><?php echo $flight['fullname']?></td>
                                <th scope="row"><?php echo $flight['fro_m'].' '.$flight['city_to'] ?></th>
                                <td><?php echo $flight['date_time']?></td>
                                <td><?php echo $flight['arrive_time']?></td>
                                <td><?php echo $flight['price']?></td>
                                
                                
                                
                                <td class="d-flex flex-row">
                                    <?php if($cancel) : ?>
                                            
                                        <?php else : ?>
                                            <form method="POST"  action="" class="mr-3">
                                        <input type="hidden" name="id" value="<?php echo $flight['id']?>">
                                        <button class="btn btn-sm btn-warning " type="submit" name="book_add" >Cancel</button>
                                    </form>
                                    <?php endif; ?>
                                    
                                </td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

