<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
  </head>
  <body>
    <!-- <div class="global-container">
      <div class="card login-form">
        <div class="body-card">
          <h1 class="card-title text-center">LOGIN</h1>
          <div class="card-tex">
            <form action="">
              <div class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input
                  type="email"
                  class="form-control form-control-sm"
                  id="exampleInputEmail1"
                />
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <a href="#" style="float: right; font-size: 12px"
                  >Forgot Password?</a
                >
                <input
                  type="password"
                  class="form-control form-control-sm"
                  id="exampleInputPassword1"
                />
              </div>
              <button type="submit" class="btn btn-primary btn-block">
                Sign In
              </button>

              <div class="signup">
                Don't have an account? <a href="#">Creat One</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> -->
  <div class="form-signin">
        <h1 class="card-title text-center" id="login">LOGIN</h1>
        <div class="form-floating mb-2">
            <input type="email" class="form-control" id="floatingInput" placeholder="Email">
            <label for="floatingInput" style="color: #1a2226;">Email address</label>
        </div>
        <div class="form-floating mb-2">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword" style="color: #1a2226;">Password</label>
        </div>
        <h1 class="h5 mb-3 fw-light">don't have an account ?</h1>

        <button class="w-100 btn btn-lg btn-outline-dark" id="btn" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted" id="fpass">forgot your password?</p>
    </div>
  
  
  </body>
</html>
