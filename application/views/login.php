<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('loginform/fonts/icomoon/style.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('loginform/css/owl.carousel.min.css')?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('loginform/css/bootstrap.min.css')?>">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url('loginform/css/style.css')?>">

    <title>Login</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <!-- <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div> -->
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                  <div class="mb-4">
                  <h3>Sign In to <strong>System</strong></h3>
                  <p class="mb-4">Selamat Datang !</p>
                </div>
                <form action="<?php echo site_url('') ?>" method="post">
                  <div class="form-group first">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username">

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                    
                  </div>

                  <input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">
                </form>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="<?php echo base_url('loginform/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?php echo base_url('loginform/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('loginform/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('loginform/js/main.js')?>"></script>
  </body>
</html>