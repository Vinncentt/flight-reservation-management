<?php
    if(isset($_POST['find'])){
        $data = new FlightsController(); //creat object from the class FlightsController
        $flights = $data->findFlight();
    }else{
        $data = new FlightsController(); //creat object from the class FlightsController
        $flights = $data->getAllFlights();
    }
    
    if(isset($_SESSION['role']) && $_SESSION['role'] != 'admin'){
        Redirect::to('homeuser');
    }

    
    
?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-10 mx-auto">
            <?php include('./views/includes/alerts.php');?>
            <div class="card">
                <div class="card-body bg-light">
                   
                    <form method="POST" action="" class="float-right d-flex flex-row justify-content-between">
                         <div>
                         <a title="Add flight" href="<?php echo BASE_URL?>add" class="btn btn-primary mr-2 btn-sm mb-2"> <!--url de base plus la page add -->
                        <i class="fas fa-plus"></i>
                        </a>
                        <a href="<?php echo BASE_URL?>" class="btn btn-secondary btn-sm mb-2 mr-2 "> <!--url de base plus la page add -->
                        <i class="fas fa-home "></i>
                        </a>
                        <a href="<?php echo BASE_URL?>showflights" class="btn btn-warning btn-sm mb-2 mr-2 "> <!--url de base plus la page add -->
                        <i class="fas fa-business-time"></i>
                        </a>
                        <a href="<?php echo BASE_URL?>logout" title="Logout" class="btn link btn-sm mb-2 mr-2 "> <!--url de base plus la page add -->
                        <i class="fas fa-user "><span class="p-2"><?php echo $_SESSION['username'];?></span></i>
                        </a>
                         </div>
                        <div class="ml-auto">
                             <input type="text" name="search" placeholder="Search">
                        <button class="btn btn-info btn-sm " name="find" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        </div>
                       
                    </form>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">From / To</th>
                            <th scope="col">Date & time</th>
                            <th scope="col">Arrive time</th>
                            <th scope="col">Price</th>
                            <th scope="col">Seats number</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($flights as $flight):?>
                                <tr>
                                <th scope="row"><?php echo $flight['fro_m'].' '.$flight['city_to'] ?></th>
                                <td><?php echo $flight['date_time']?></td>
                                <td><?php echo $flight['arrive_time']?></td>
                                <td><?php echo $flight['price']?></td>
                                <td><?php echo $flight['seats_number']?></td>
                                <td>
                                    <?php echo $flight['status']
                                        ?'<span class="badge bg-success">active</span>'
                                        :
                                        '<span class="badge bg-danger">terminate</span>';
                                ;?></td>
                                <td class="d-flex flex-row">
                                    <form method="POST" class="me-2" action="update">
                                        <input type="hidden" name="id" value="<?php echo $flight['id']?>">
                                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                    </form>
                                    <form method="POST" class="me-3" action="delete">
                                        <input type="hidden" name="id" value="<?php echo $flight['id']?>">
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                    
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