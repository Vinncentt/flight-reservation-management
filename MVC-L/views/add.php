<?php
    if(isset($_POST['submit'])){
    $newFlight = new FlightsController(); //creat object from the class FlightsController
    $newFlight->addFlight();
    }
?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    Add a flight
                </div>
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL?>" class="btn btn-secondary btn-sm mb-2 mr-2"> <!--url de base plus la page add -->
                        <i class="fas fa-home"></i>
                    </a>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="from">From*</label>
                            <input type="text" name="from" class="form-control" placeholder="City">
                        </div>
                        <div class="form-group">
                            <label for="to">To*</label>
                            <input type="text" name="to" class="form-control" placeholder="City">
                        </div> 
                        <div class="form-group">
                            <label for="date">Date & time*</label>
                            <input type="datetime-local" name="date" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="arrive">Arrive time*</label>
                            <input type="datetime-local" name="arrive_time" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="price">Price*</label>
                            <input type="number" name="price" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="seats">Seats number*</label>
                            <input type="number" name="seats" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="status">status*</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">Active</option>
                                 <option value="0">Terminate</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btb btn-primary mt-2" name="submit">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>