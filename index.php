<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="iw-edge">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/png" href="img/hms.png">
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">


  <!--Chart.ja-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>

  <!-- calendar CSS
		============================================ -->
  <link rel="stylesheet" href="calender.css">
  <script src="calender.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script src="https://ajax.googleapics.com/ajax/libs//jquery/3.4.1/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <style>
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: #000;
      color: #fff;
      text-align: center;
    }
    .field-icon {
  float: right;
  margin-left: -25px;
  margin-right: 10px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
  </style>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12" style="height:80px;color:#fff;background:#000;">
        <center>
          <h3 class="mt-3">EMS SYSTEM</h3>
        </center>
      </div>
    </div>
    <div class="row">

      <div class="col-md-3"></div>
      <div class="col-md-6" style="margin-top:100px;">
        <div class="card " style="box-shadow: 0 0 25px 2px rgba(0, 0, 0, 0.3);">
          <div class="card-body">
            <center>
              <h4 class="card-title mt-2">User Login</h4>
            </center>
            <form action="login.php" method="post">
              <div class="md-form mt-4">
                <label>User Name</label>
                <input type="text" required name="user_id" id="form3" class="form-control">

              </div>
              <div class="md-form">
                <label>Password</label>
                <input type="password" required name="password" id="password-field"  class="form-control">
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

              </div>
              <div class="text-center my-3">
                <input type="submit" name="submit" class="btn btn-primary" value="Login" class="form-control">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   <div class="container">
   <div class="footer">
   <h6 class="mt-2 mb-2"> <i class="fa fa-copyright" aria-hidden="true"></i></h6>
    </div>
   </div>
  </div>

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script src="js/lightbox-plus-jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox-plus-jquery.min.js"></script>
  <script type="text/javascript"></script>

  <script>
    $(".toggle-password").click(function () {

      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
  </script>
</body>

</html>