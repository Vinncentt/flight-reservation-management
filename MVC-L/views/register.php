<?php
    if(isset($_POST['submit'])){
        $createUser = new UsersController(); 
        $createUser->register();
    }

    
?>

<div class="container ">
    <div class="row  ">
        <div class="col-md-8 mx-auto ">
            <div class="card ">
                <div class="card-headre">
                    <h3 class="text-center">Sign up</h3>
                </div>
                <div class="card-body bg-light ">   
                    <form method="POST" class="mr-1 " action="">
                        <div class="form-group mb-3">
                             <input type="text" name="fullname" placeholder="Full Name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                             <input type="text" name="username" placeholder="Usename" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                             <input type="password" name="password" placeholder="password" class="form-control">
                        </div>
                        <button name="submit" class="btn btn-sm btn-primary mb-2">sign up</button>
                        <div class="card-footer">
                            <a href="<?php echo BASE_URL;?>login" class="btn btn-link">sign in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>