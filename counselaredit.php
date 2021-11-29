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
                    <a class="nav-link" href="counselar.php"><strong>Home</strong> <span
                            class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><strong>Documentations</strong></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="received.php"><strong>Received Documentations</strong></a>
                        <a class="dropdown-item" href="applications.php"><strong>Received Applications</strong></a>
                        <a class="dropdown-item" href="aaa.php"><strong>con</strong></a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="offers.php"><strong>Offers</strong> </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><strong>Reports</strong></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="enquery-report.php"><strong>Initial Enquiry Report</strong></a>
                        <a class="dropdown-item" href="Document-received-report.php"><strong>Document Received Report</strong></a>
                        <a class="dropdown-item" href="offer-received-report.php"><strong>offer Received Report</strong></a>
                        <a class="dropdown-item" href="Application-report.php"><strong>Application Report</strong></a>
                        <a class="dropdown-item" href="summary-report.php"><strong>Summary Report</strong></a>                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown" style="margin-right:100px;" >
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><strong><i class="glyphicon glyphicon-off"></i></strong></a>
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
        <div class="row">

            <div class="col-md-6">


                <div class="card mt-5" style="width: 100%;">
                    
                        <?php
               
              if (isset($_GET['sus'])) {
                echo ("<div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\" >");
                echo ("<strong>");
                echo ("Student registered Succesfully");
                echo ("</strong>");
                echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                echo ("<span aria-hidden=\"true\">");
                echo ("&times;");
                echo ("</span>");
                echo ("</button>");
                echo ("</div>");
              }
              
              ?>
              <div class="card-header bg-primary">
                        <h5 class="card-title ">STUDENT REGESTRATION</h5>
                        </div>
                    <div class="card-body mb-4">
                       
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="my-input">Student ID:</label>
                                <input id="my-input" required class="form-control" type="text" name="student_id">
                            </div>
                            <div class="form-group">
                                <label for="">Course interested</label>
                                <select class="custom-select" required name="cource" id="">
                                    <option selected>Select Cource</option>
                                    <option value="Physical Science">Physical Science</option>
                                    <option value="Biological Science">Biological Science</option>
                                    <option value="Engineering">Engineering</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="my-input">Student Name</label>
                                <input id="my-input" required class="form-control" type="text" name="student_name">
                            </div>
                            <div class="form-group">
                                <label for="my-input">Student Surname:</label>
                                <input id="my-input" required class="form-control" type="text" name="student_surname">
                            </div>
                            <div class="form-group">
                                <label for="my-input">NIC:</label>
                                <input id="my-input" required class="form-control" type="text" name="NIC">
                            </div>
                            <div class="form-group">
                                <label for="my-input">E-mail:</label>
                                <input id="my-input" required class="form-control" type="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="my-input">Telephone:</label>
                                <input id="my-input" required class="form-control" type="text" name="telephone_no">
                            </div>
                            <div class="form-group">
                                <label for="my-input">Mobile:</label>
                                <input id="my-input" required class="form-control" type="text" name="mobile_no">
                            </div>
                            <div class="form-group">
                                <label for="my-input">Address:</label>
                                <input id="my-input" class="form-control" type="text" name="address">
                            </div>
                            <div class="form-group">
                                <label for="my-input">City:</label>
                                <input id="my-input" required class="form-control" type="text" name="city">
                            </div>
                            <div class="form-group">
                                <label for="my-input">Date Of Birth:</label>
                                <input id="my-input" required class="form-control" type="date" name="dob">
                            </div>
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select class="custom-select" required name="gender" id="">
                                    <option selected>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>

                                </select>
                            </div>



                            <center> <input type="submit" name="save" class="btn btn-primary" value="Save">
                            </center>


                        </form>
                        <?php
                            include 'conn.php';
                            if(isset($_POST['save'])){
                                extract($_POST);

                                $qery=mysqli_query($conn,"INSERT into student(student_id,cource,student_name,student_surname,NIC,email,telephone_no,mobile_no,address,city,dob,gender) values('$student_id','$cource','$student_name','$student_surname','$NIC','$email','$telephone_no','$mobile_no','$address','$city','$dob','$gender')");
                                echo "<script>window.location.assign('counselar.php?sus=1')</script>";

                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-5" style="width: 100%;">
                   
                    <?php
                        if (isset($_GET['sup'])) {
                            echo ("<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\" >");
                            echo ("<strong>");
                            echo ("Documentations uploaded Succesfully");
                            echo ("</strong>");
                            echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                            echo ("<span aria-hidden=\"true\">");
                            echo ("&times;");
                            echo ("</span>");
                            echo ("</button>");
                            echo ("</div>");
                          }
                    ?>
                    <div class="card-header bg-primary">
                        <h5 class="card-title ">DOCUMENT RECEIVED</h5>
                        </div>
                    <div class="card-body mb-4">
                       
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Student_ID</label>
                                <select class="custom-select" name="student_id" id="sid">
                                    <option selected>Select ID</option>
                                    <?php
                                        include 'conn.php';
                                        $q=mysqli_query($conn,"SELECT * from student");
                                        while($row=mysqli_fetch_assoc($q)){

                                      
                                    ?>
                                    <option value="<?php echo $row['id']?>"><?php echo $row['student_id']?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="sname">Student Name</label>
                                <input id="sname" class="form-control" type="text" name="student_name">
                            </div>
                            <div class="form-group">
                                <label for="uname">Student Surname:</label>
                                <input id="uname" class="form-control" type="text" name="student_surname">
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input id="email" class="form-control" type="email" name="email">
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile Number:</label>
                                <input id="mobile" class="form-control" type="text" name="mobile_no">
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input id="address" class="form-control" type="text" name="address">
                            </div>
                            <div class="form-group">
                                <label for="city">City:</label>
                                <input id="city" class="form-control" type="text" name="city">
                            </div>

                            <div class="card" style="margin:20px;">

                                <div class="card-body">
                                <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="ol" id="" value="Yes">
                                            O/L Certifications
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="al" id="" value="Yes">
                                            A/L Certifications
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="ielts" id=""
                                                value="Yes">
                                            IELTS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="servce_letter" id=""
                                                value="Yes">
                                            Service Later
                                        </label>
                                    </div>
                                    </br> </br>
                                    <div class="form-group">
                                        <label for="">Documents</label>
                                        <input type="file" class="form-control-file" name="file" id="" placeholder=""
                                            aria-describedby="fileHelpId">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Remarks</label>
                                        <input type="text" name="remarks" id="" class="form-control" placeholder=""
                                            aria-describedby="helpId">

                                    </div>
                                </div>
                            </div>




                            <center> <input type="submit" name="upload" class="btn btn-primary" value="upload">
                            </center>


                        </form>
                        <?php
                            include 'conn.php';
                            $ol="No";
                            $al="No";
                            $ielts="No";
                            $servce_letter="No";
                            
                            if(isset($_POST['upload'])){
                                extract($_POST);
                                $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
                                $d = $date->format('Y-m-d');
                                $t = $date->format('H:i:s');
                                
                             $q1="UPDATE student SET ol='{$ol}', al='{$al}',ielts='{$ielts}',servce_letter='{$servce_letter}' ,file='{$file}',remarks='{$remarks}',received_date='$d' WHERE student.id='{$student_id}'";
                               $res=mysqli_query($conn,$q1);
                               echo "<script>window.location.assign('counselar.php?sup=1')</script>";

                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </script>

    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script> -->
    <script>
        $(document).ready(function () {
            //change selectboxes to selectize mode to be searchable
            $("select").select2();
        });
    </script>
    <script>
        $(document).ready(function () {

            // get default options in position select box
            //var defaultOption = $("#position").html();

            //console.log(defaultOption);

            $("#sid").change(function (e) {
                e.preventDefault();
                loadStudents($(this).val());

            });

            function loadStudents(studentID) {

                var apiURL = 'api/getStudents.php';
                //console.log(positionID);

                $.ajax({
                    url: apiURL,
                    method: "GET",
                    data: {
                        id: studentID
                    },
                }).done(function (data, status) {
                    if (status === "success") {
                        //addDisticts(JSON.parse(data));;
                        var abc = JSON.parse(data);
                        //var pr = abc.id + ' - ' + abc.name;
                        $("#sname").val(abc.name);
                        $("#uname").val(abc.uname);
                        $("#email").val(abc.email);
                        $("#address").val(abc.address);
                        $("#mobile").val(abc.mobile);
                        $("#city").val(abc.city);
                        console.log(abc.name);
                    } else {
                        console.error("API Failed");
                    }
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    console.error("API Failed");
                });

            }

            // function addDisticts(districts) {

            //     var defaultDistrictOption = '<option value="" disabled selected>Select a District</option>';
            //     var emptyOption = "<option value='' disabled selected>No Districts Found</option>";
            //     var districtOption = "";

            //     $.each(districts, function (index, district) {

            //         districtOption += '<option value="' + district.dist_name + '">' + district
            //             .dist_name + '</option>';

            //     });

            //     if (districtOption === '') {
            //         $("#dist_name").html(emptyOption);
            //     } else {
            //         $("#dist_name").html(defaultDistrictOption + districtOption);
            //     }

            // }

        });
    </script>


</body>

</html>