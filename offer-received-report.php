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
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
                        <a class="dropdown-item" href="Document-received-report.php"><strong>Document Received
                                Report</strong></a>
                        <a class="dropdown-item" href="Application-report.php"><strong>Application Report</strong></a>

                        <a class="dropdown-item" href="offer-received-report.php"><strong>offer Received
                                Report</strong></a>
                        <a class="dropdown-item" href="summary-report.php"><strong>Summary Report</strong></a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown" style="margin-right:100px;">
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
                    <?php
                        if (isset($_GET['errf'])) {
                            echo ("<div class=\"alert alert-danger mt-4 alert-dismissible fade show\" role=\"alert\" >");
                            echo ("<strong>");
                            echo ("File must be uploaded in PDF format");
                            echo ("</strong>");
                            echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                            echo ("<span aria-hidden=\"true\">");
                            echo ("&times;");
                            echo ("</span>");
                            echo ("</button>");
                            echo ("</div>");
                          }
                          if (isset($_GET['sup'])) {
                            echo ("<div class=\"alert alert-success mt-4 alert-dismissible fade show\" role=\"alert\" >");
                            echo ("<strong>");
                            echo ("Update successfully");
                            echo ("</strong>");
                            echo ("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">");
                            echo ("<span aria-hidden=\"true\">");
                            echo ("&times;");
                            echo ("</span>");
                            echo ("</button>");
                            echo ("</div>");
                          }
                    ?>
        <div class="card mt-4">
            <div class="card-header bg-primary">
                <h4 class="card-title">Offer Received Report</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row" id="r1">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="student_name" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Student ID</label>
                                <input type="text" name="student_id" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">From</label>
                                        <input type="date" name="from" id="" value="from" class="form-control"
                                            placeholder="from" aria-describedby="helpId">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">To</label>
                                        <input type="date" name="to" id="" value="from" class="form-control"
                                            placeholder="from" aria-describedby="helpId">

                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="">Mobile No :</label>
                                <input type="text" name="mobile" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">

                            </div>
                            <div class="form-group">
                                <label for="">Course :</label>
                                <select class="custom-select" name="cource" id="">
                                    <option value="" selected>Select Cource</option>
                                    <option value="Physical Science">Physical Science</option>
                                    <option value="Biological Science">Biological Science</option>
                                    <option value="Engineering">Engineering</option>
                                </select>
                            </div>

                        </div>

                        <div class="col-md-3">
                            <input type="submit" name="search" class="btn btn-primary btn-lg ml-4"
                                style="margin-top:100px;" value="Search">
                            </br></br></br></br>
                            <center>
                                <button id="export-excel" class="btn btn-warning btn-sm mt-1 mb-2">Excel Export</button>
                                <button onclick="printpdf()" class="btn btn-success btn-sm mt-1 mb-2">PDF</button>
                            </center>
                        </div>
                    </div>

                </form>


                <!-- <div id="bypassme"></div> -->
            </div>
        </div>
    </div>
    <div class="mr-5 ml-5 mb-5">
        <?php

        include 'conn.php';
        if(isset($_POST['search'])){
            $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
            $d = $date->format('Y-m-d');
            $t = $date->format('H:i:s');
            extract($_POST);
            //student_name='$student_name' and student_id='$student_id' and student_surname='$student_surname' and mobile='$mobile' and cource='$cource'
            if($student_name != "") {
                $st_name = " AND student_name LIKE '$student_name%'";
            }
            else {
                $st_name = "";
            }

            if($student_id != "") {
                $st_id = " AND student_id LIKE '%$student_id%'";
            }
            else {
                $st_id = "";
            }
        
            if($from != "" && $to != "") {
                $date = " AND offerdate between '$from' and '$to'";
            }elseif($from != ""){
                $date = " AND offerdate between '$from' and '$d'";
            }elseif($to != ""){
                $date = " AND offerdate between '$d' and '$to'";
            }
            else {
                $date = "";
            }
            if($mobile != "") {
                $mobile = " AND mobile_no='$mobile'";
            }
            else {
                $mobile = "";
            }
            if($cource != "") {
                $cource = " AND cource = '$cource'";
            }
            else {
                $cource = "";
            }
            
            $cid=$_SESSION['counselar_id'];
            $query = "SELECT 
                            *
                        FROM 
                            student 
                        WHERE
                            i_co='$cid' AND
                            status=1
                            $st_name
                            $st_id
                            $mobile
                            $cource
                            $date";
            $result=mysqli_query($conn,$query);

                ?>


        <table class="table tablesorter table-striped mt-5" id="printexcel">
            <thead class=" text-primary">
                <tr>
                    <th>Student Id</th>
                    <th>Student Name</th>
                    <th>NIC</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Offer received Date</th>
                    <th>Course</th>
                    <th>Intake Semester</th>
                    <th>Intake Date</th>
                    <th>Upload Document</th>
                    <th>Counselar Name</th>
                    <th>Edit</th>

                </tr>
            </thead>
            <?php
            if (mysqli_num_rows($result) > 0) {
            
            while ($row1 = mysqli_fetch_assoc($result)) {
            
            ?>

            <tr>
                <td><?php echo $row1['student_id']; ?></td>
                <td><?php echo $row1['student_name']; ?></td>

                <td><?php echo $row1['NIC']; ?></td>
                <td><?php echo $row1['mobile_no']; ?></td>
                <td><?php echo $row1['email']; ?></td>
                <td><?php echo $row1['offerdate']; ?></td>
                <td><?php echo $row1['cource']; ?></td>
                <td><?php echo $row1['semester']; ?></td>
                <td><?php echo $row1['intakedate']; ?></td>

                <td>
                    <?php if($row1['offerfile']!=""){ ?>
                    <a href="downloads.php?offer_file_id=<?php echo $row1['id'] ?>">Download</a>
                    <?php }else{
                        echo "No file";
                    } ?>
                </td>
                <td>
                    <?php echo $row1['o_co']; ?></td>
                    <td>
                <a href="#editoffer<?php echo $row1['id']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> 
                                            
                                
                            </td>
                            <?php include('modal.php'); ?>



            </tr>

            <?php
                }
            }
            else {
                echo "<tr>";
                echo      "<td colspan='10' align='center'>";
                echo          "No results";
                echo      "</td>";
                echo "</tr>";
            }
            }
            ?>
            <tbody> </tbody>
        </table>
    </div>



    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script> -->
    <script src="https://cdn.rawgit.com/simonbengtsson/jsPDF/requirejs-fix-dist/dist/jspdf.debug.js"></script>
    <script src="https://unpkg.com/jspdf-autotable@2.3.2"></script>
    <script>
        function printpdf() {

            var doc = new jsPDF('p', 'pt');

            var res = doc.autoTableHtmlToJson(document.getElementById("printexcel"));

            doc.autoTable(res.columns, res.data, {

                margin: {
                    top: 80,
                    left: 10,
                    right: 10
                },
                styles: {
                    overflow: 'linebreak',
                    fontSize: 6
                },




            });

            var header = function (data) {
                doc.setFontSize(18);
                doc.setTextColor(40);
                doc.setFontStyle('normal');
                //doc.addImage(headerImgData, 'JPEG', data.settings.margin.left, 20, 50, 50);
                doc.text("Offer Received Report", data.settings.margin.left, 50);
            };

            var options = {
                beforePageContent: header,
                margin: {
                    top: 80,
                    left: 10,
                    right: 10
                },
                styles: {
                    overflow: 'linebreak',
                    fontSize: 6
                },

                // startY: doc.autoTableEndPosY() + 20
            };

            doc.autoTable(res.columns, res.data, options);


            doc.setFont("helvetica");
            doc.setFontType("bold");
            doc.setFontSize(9);


            doc.save("table.pdf");
        }
    </script>
    <script>
        $("#export-excel").click(function () {
            printExcel();
        });
        function printExcel() {
            var tab_text = '<table border="1px" style="font-size:16px" ">';
            var textRange;
            var j = 0;
            var tab = document.getElementById('printexcel'); // id of table
            var lines = tab.rows.length;

            // the first headline of the table
            if (lines > 0) {
                tab_text = tab_text + '<tr bgcolor="#DFDFDF">' + tab.rows[0].innerHTML + '</tr>';
            }

            // table data lines, loop starting from 1
            for (j = 1; j < lines; j++) {
                tab_text = tab_text + "<tr>" + tab.rows[j].innerHTML + "</tr>";
            }

            tab_text = tab_text + "</table>";
            tab_text = tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
            tab_text = tab_text.replace(/<img[^>]*>/gi, ""); // remove if u want images in your table
            tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params
            // console.log(tab_text); // aktivate so see the result (press F12 in browser)

            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");

            // if Internet Explorer
            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
                txtArea1.document.open("txt/html", "replace");
                txtArea1.document.write(tab_text);
                txtArea1.document.close();
                txtArea1.focus();
                sa = txtArea1.document.execCommand("SaveAs", true, "DataTableExport.xls");
            } else // other browser not tested on IE 11
                sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

            return (sa);
        }
        // function printExcel() {
        //     var uri = 'data:application/vnd.ms-excel;base64,',
        //         template =
        //         '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head></head><body><table><tr><td></td></tr></table><table>{table}</table></body></html>',
        //         base64 = function (s) {
        //             return window.btoa(unescape(encodeURIComponent(s)))
        //         },
        //         format = function (s, c) {
        //             return s.replace(/{(\w+)}/g, function (m, p) {
        //                 return c[p];
        //             })
        //         }
        //     var toExcel = document.getElementById("printexcel").innerHTML;
        //     var ctx = {
        //         worksheet: name || '',
        //         table: toExcel
        //     };
        //     var link = document.createElement("a");
        //     link.download = "export.xls";
        //     link.href = uri + base64(format(template, ctx))
        //     link.click();
        // }
    </script>

</body>

</html>