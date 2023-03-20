<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>MSP</title>
  <style>
    #intro {
        background-image: 
          url(https://images.pexels.com/photos/13374668/pexels-photo-13374668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
        height: 109.4vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .btn-wide
      {
        width:100%;
      }
  </style>  
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  </head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
  </script>
    <div>
      <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-xl-3 col-md-4">
                <div class="bg-white  rounded-2 shadow-5-strong p-5 mb-2 my-5" style="--bs-bg-opacity: .6";>
                <div class="text-center">
                  <img class="img-fluid my-auto mb-4" src="https://gcdnb.pbrd.co/images/skapFKTZGfTL.png?o=1" alt="logo" style="width: 100px; height: 100px;">
                </div>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	    <div class="form-outline input-group mb-2">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="username" type="text" class="form-control" placeholder="Username">
        </div>
  	    <div class="form-outline input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input name="password" type="password" class="form-control" placeholder="Password">
        </div>
        <div class="row mb-4">
        </div>
          <div class="text-center"><div>
            <button name="login_user" type="submit" class="btn btn-primary btn-block btn-wide" style="background-color: #5a5a5a; border: 0px;">
              Sign in
            </button>
          </div>
          <div class="divider align-items-center my-0">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
          </div>
          <div>
            <a href="register.php" class="btn btn-primary btn-block btn-wide" style="background-color: #989898; border: 0px;" role="button">Create an Account</a>
          </div>
  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>

</body>
</html>