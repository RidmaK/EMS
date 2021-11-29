<?php
session_start();
include('conn.php');
if (!isset($_SESSION['admin_id'])) {
    header('location:/?noPermission=1');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="iw-edge">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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

    <!--Welcome-->
    <nav class="navbar navbar-expand-sm navbar-dark text-center" style="background-color: #000; height:100px;">
        <a class="navbar-brand" href="#">EMS</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><strong>Home</strong> <span class="sr-only">(current)</span></a>
                </li>

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><strong>Documentations</strong></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="received.php"><strong>Received Documentations</strong></a>
                        <a class="dropdown-item" href="applications.php"><strong>Received Applications</strong></a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="offers.php"><strong>Offers</strong> </a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><strong>Reports</strong></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="enquery-report-admin.php"><strong>Initial Enquiry Report</strong></a>
                        <a class="dropdown-item" href="Document-received-report-admin.php"><strong>Document Received
                                Report</strong></a>
                        <a class="dropdown-item" href="Application-report-admin.php"><strong>Application Report</strong></a>

                        <a class="dropdown-item" href="offer-received-report-admin.php"><strong>offer Received
                                Report</strong></a>
                        <a class="dropdown-item" href="summary-report-admin.php"><strong>Summary Report</strong></a> </div>
                </li>
            </ul>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown " style="margin-right:100px;">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><strong><i class="fa fa-power-off" aria-hidden="true"></i></strong></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#"><strong>User Profile</strong></a>
                            <a class="dropdown-item" href="logout.php"><strong>logout</strong></a>
                        </div>
                    </li>
                </ul>
            </form>

        </div>
    </nav>
    <div class="container">


        <div class="col-md-2"></div>
        <div class="col-md-8">

        </div>
        <div class="card mt-5" style="width: 100%;">
            <div class="card-body">
            <?php
               
              if (isset($_GET['sus'])) {
                echo ("<div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\" >");
                echo ("<strong>");
                echo ("Counselar registered Succesfully");
                echo ("</strong>");
                echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                echo ("<span aria-hidden=\"true\">");
                echo ("&times;");
                echo ("</span>");
                echo ("</button>");
                echo ("</div>");
              }
              if (isset($_GET['sup'])) {
                echo ("<div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\" >");
                echo ("<strong>");
                echo ("Administartor registered Succesfully");
                echo ("</strong>");
                echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                echo ("<span aria-hidden=\"true\">");
                echo ("&times;");
                echo ("</span>");
                echo ("</button>");
                echo ("</div>");
              }
              if (isset($_GET['nop'])) {
                echo ("<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\" >");
                echo ("<strong>");
                echo (" registration Unsuccesfully");
                echo ("</strong>");
                echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                echo ("<span aria-hidden=\"true\">");
                echo ("&times;");
                echo ("</span>");
                echo ("</button>");
                echo ("</div>");
              }
              if (isset($_GET['err'])) {
                echo ("<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\" >");
                echo ("<strong>");
                echo (" Passwords does't Matched");
                echo ("</strong>");
                echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                echo ("<span aria-hidden=\"true\">");
                echo ("&times;");
                echo ("</span>");
                echo ("</button>");
                echo ("</div>");
              }
              ?>
                <h5 class="card-title">USER REGESTRATION</h5>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">User Type</label>
                        <select class="custom-select" name="user_type" id="">
                            <option value="" selected>Select one</option>
                            <option value="administrator">Administrator</option>
                            <option value="counselar">Counselar</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Full Name:</label>
                        <input id="my-input" class="form-control" type="text" name="full_name">
                    </div>
                    <div class="form-group">
                        <label for="my-input">User Name:</label>
                        <input id="my-input" required class="form-control" type="text" name="user_name">
                    </div>
                    <div class="form-group">
                        <label for="password-field1">Password:</label>
                        <input id="password-field1" required class="form-control" type="password" name="password">
                        <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                    </div>
                    <div class="form-group">
                        <label for="password-field2">Re-Password:</label>
                        <input id="password-field2" required class="form-control" type="password" name="rpassword">
                        <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                    </div>



                    <input type="submit" name="submit" class="btn btn-primary" value="Register">



                </form>
            </div>
        </div>

    <?php
        include 'conn.php';
        if(isset($_POST['submit'])){
            extract($_POST);
           if($password==$rpassword){
                if($_POST['user_type']=="administrator"){
                
                 $query=mysqli_query($conn,"INSERT into user (user_type,full_name,user_name,password,role_id,role_name) values('$user_type','$full_name','$user_name','$password',1,'administrator')");
                echo "<script>window.location.assign('admin.php?sup=1')</script>";

                }
                elseif($_POST['user_type']=="counselar"){
                    $query=mysqli_query($conn,"INSERT into user (user_type,full_name,user_name,password,role_id,role_name) values('$user_type','$full_name','$user_name','$password',2,'counselar')");
                echo "<script>window.location.assign('admin.php?sus=1')</script>";
        
                }else{
                    echo "<script>window.location.assign('admin.php?nop=1')</script>";

                }
           }else{
           echo "<script>window.location.assign('admin.php?err=1')</script>"; 
           }
        }
    ?>


        <?php 
            $query1=mysqli_query($conn,"SELECT * FROM user where status='1'");
           ?>
         <table id="datatableid1" class="table mt-5 mb-5 " width="100%" cellspacing="0">
                        <thead class="bg-primary">
                            <tr>
                                <!--<th><input type="checkbox" id="select_all" /> Selecct All</th>-->
                                <th>User Type</th>

                                <th>Full Name</th>

                                <th>User Name</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody >
                            <?php
                            if ($query1) {
                                while ($row = mysqli_fetch_assoc($query1)) {


                            ?>

                                    <tr>
                                        <!-- <td><input class="checkbox" type="checkbox" name="check[]"></td>-->
                                        <td><?php echo $row['role_name']; ?></td>
                                        <td><?php echo $row['full_name']; ?></td>
                                        <td><?php echo $row['user_name']; ?></td>
                                        
                                        <td>
                                            <a href="#edituser<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || <a href="#deleteuser<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                            <?php include('modal.php'); ?>
                                        </td>
                                    </tr>

                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>

    </div>

    </script>

    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
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
    <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script> -->

    <!-- <script>
        $(document).ready(function () {

            // get default options in position select box
            //var defaultOption = $("#position").html();

            //console.log(defaultOption);

            $("#position").change(function (e) {
                e.preventDefault();
                loadSaleries($(this).val());

            });

            function loadSaleries(positionID) {

                var apiURL = 'api/getSaleryForPosition.php';
                //console.log(positionID);

                $.ajax({
                    url: apiURL,
                    method: "GET",
                    data: {
                        id: positionID
                    },
                }).done(function (data, status) {
                    if (status === "success") {
                        //addDisticts(JSON.parse(data));;
                        //var abc = JSON.parse(data);
                        //var pr = abc.id + ' - ' + abc.name;
                        $("#salery").val(data);
                        //console.log(abc.id)
                    } else {
                        console.error("API Failed");
                    }
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    console.error("API Failed");
                });

            }

            function addDisticts(districts) {

                var defaultDistrictOption = '<option value="" disabled selected>Select a District</option>';
                var emptyOption = "<option value='' disabled selected>No Districts Found</option>";
                var districtOption = "";

                $.each(districts, function (index, district) {

                    districtOption += '<option value="' + district.dist_name + '">' + district
                        .dist_name + '</option>';

                });

                if (districtOption === '') {
                    $("#dist_name").html(emptyOption);
                } else {
                    $("#dist_name").html(defaultDistrictOption + districtOption);
                }

            }

        });
    </script>
 -->

</body>

</html>