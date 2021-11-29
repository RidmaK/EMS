<?php
session_start();
include('conn.php');
if (!isset($_SESSION['counselar_id'])) {
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
                    <a class="nav-link" href="#"><strong>Home</strong>  <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><strong>Documentations</strong></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#"><strong>Received Documentations</strong></a>
                        <a class="dropdown-item" href="#"><strong>Received Applications</strong></a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown mr-5">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><strong>User</strong></a>
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
                <h5 class="card-title">STUDENT REGESTRATION</h5>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="my-input">Student ID:</label>
                        <input id="my-input" class="form-control" type="text" name="student_id">
                    </div>
                    <div class="form-group">
                        <label for="">Course interested</label>
                        <select class="custom-select" name="cource" id="">
                            <option selected>Select Cource</option>
                            <option value="Physical Science">Physical Science</option>
                            <option value="Biological Science">Biological Science</option>
                            <option value="Engineering">Engineering</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Student Name</label>
                        <input id="my-input" class="form-control" type="text" name="student_name">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Student Surname:</label>
                        <input id="my-input" class="form-control" type="text" name="student_surname">
                    </div>
                    <div class="form-group">
                        <label for="my-input">NIC:</label>
                        <input id="my-input" class="form-control" type="text" name="NIC">
                    </div>
                    <div class="form-group">
                        <label for="my-input">E-mail:</label>
                        <input id="my-input" class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Telephone:</label>
                        <input id="my-input" class="form-control" type="text" name="telephone_no">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Moble:</label>
                        <input id="my-input" class="form-control" type="text" name="mobile_no">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Address:</label>
                        <input id="my-input" class="form-control" type="text" name="address">
                    </div>
                    <div class="form-group">
                        <label for="my-input">City:</label>
                        <input id="my-input" class="form-control" type="text" name="city">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Date Of Birth:</label>
                        <input id="my-input" class="form-control" type="date" name="dob">
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <select class="custom-select"  name="gender" id="">
                            <option selected>Select Gender</option>
                            <option value="male"></option>
                            <option value="female"></option>
                            
                        </select>
                    </div>
                   

                    <?php

              include 'conn.php';
              $query=mysqli_query($conn,"SELECT * from position");
              ?>

                    <div class="form-group">
                        <label for="position">Positon</label>
                        <select id="position" class="custom-select">
                            <option value="" selected>Select a Position</option>
                            <?php
              while($row=mysqli_fetch_assoc($query)){
              ?>
                            <option value="<?php echo $row['id']?>"><?php echo $row['position']?></option>
                            <?php
              }
              ?>
                        </select>
                    </div>
                    <div class="form-group" id="test">
                        <label for="salery">Salery</label>
                        <input id="salery" class="form-control" type="text" name="salery">
                    </div>
                    <input type="submit" name="submit" value="ADD">



                </form>
            </div>
        </div>

        </center>


    </div>
    

    </script>

    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script> -->

    <script>
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


</body>

</html>