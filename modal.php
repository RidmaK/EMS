<!-- Edit shedule -->
<div class="modal fade" id="edituser<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title" id="myModalLabel" style="color: #000;">Edit User</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="editusers.php?user=<?php echo $row['id']; ?>"
                        enctype="multipart/form-data">
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
                            <input id="my-input" class="form-control" value="<?php echo $row['full_name'];?>"
                                type="text" name="full_name">
                        </div>
                        <div class="form-group">
                            <label for="my-input">User Name:</label>
                            <input id="my-input" required class="form-control" value="<?php echo $row['user_name'];?>"
                                type="text" name="user_name">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Password:</label>
                            <input id="my-input" required class="form-control" value="<?php echo $row['password'];?>"
                                type="password" name="password">
                        </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Close</button>
                <button type="submit" name="edituser" class="btn btn-primary"><span
                        class="glyphicon glyphicon-edit"></span> Update</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Delete shedule -->
<div class="modal fade" id="deleteuser<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title" id="myModalLabel" style="color: #000;">Delete User</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <h3 class="text-center" style="color: #000;"><?php echo $row['full_name']; ?></h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Close</button>
                <a href="delete_user.php?user=<?php echo $row['id']; ?>" class="btn btn-danger"><span
                        class="glyphicon glyphicon-trash"></span> Yes</a>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Application Model -->
<div class="modal fade" id="editapp<?php echo $row1['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title" id="myModalLabel" style="color: #000;">Edit Application</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="edituser.php?application=<?php echo $row1['id']; ?>"
                        enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Course interested</label>
                                <select class="custom-select" name="cource" id="">
                                    <option value="0" selected>Select Cource</option>
                                    <option value="Physical Science">Physical Science</option>
                                    <option value="Biological Science">Biological Science</option>
                                    <option value="Engineering">Engineering</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Date Applied</label>
                                <input type="date" name="apdate" id="" class="form-control"
                                    value="<?php echo $row1['apdate'];?>" aria-describedby="helpId">

                            </div>
                            <div class="form-group">
                                <label for="">Upload Application</label>
                                <input type="file" id="apfile" name="apfile" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">

                            </div>
                        </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Close</button>
                <button type="submit" name="edituser" class="btn btn-primary"><span
                        class="glyphicon glyphicon-edit"></span> Update</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Documentaton Model -->
<div class="modal fade" id="editdoc<?php echo $row1['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title" id="myModalLabel" style="color: #000;">Edit Documentation</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="edituser.php?document=<?php echo $row1['id']; ?>"
                        enctype="multipart/form-data">
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
                                    <input type="checkbox" class="form-check-input" name="ielts" id="" value="Yes">
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
                                <input type="file" class="form-control-file" name="files" id="files" placeholder=""
                                    aria-describedby="fileHelpId">

                            </div>
                            <div class="form-group">
                                <label for="">Remarks</label>
                                <input type="text" name="remarks" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">

                            </div>
                        </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Close</button>
                <button type="submit" name="edituser" class="btn btn-primary"><span
                        class="glyphicon glyphicon-edit"></span> Update</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Offer Model -->
<div class="modal fade" id="editoffer<?php echo $row1['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title" id="myModalLabel" style="color: #000;">Edit Offer</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="edituser.php?offer=<?php echo $row1['id']; ?>"
                        enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Offer Received Date</label>
                                <input type="date" name="offerdate" id="" class="form-control"
                                    value="<?php echo $row1['offerdate'];?>" aria-describedby="helpId">

                            </div>

                            <div class="form-group">
                                <label for="">Intake Semester</label>
                                <input type="text" name="semester" id="" class="form-control"
                                    value="<?php echo $row1['semester'];?>" placeholder="" aria-describedby="helpId">

                            </div>

                            <div class="form-group">
                                <label for="">Intake Date</label>
                                <input type="date" name="intakedate" id="" value="<?php echo $row1['intakedate'];?>"
                                    class="form-control" placeholder="" aria-describedby="helpId">

                            </div>
                            <div class="form-group">
                                <label for="">Upload File</label>
                                <input type="file" name="offerfile" id="offerfile" class="form-control" placeholder=""
                                    aria-describedby="helpId">

                            </div>
                        </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Close</button>
                <button type="submit" name="edituser" class="btn btn-primary"><span
                        class="glyphicon glyphicon-edit"></span> Update</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Enquery Model -->
<div class="modal fade" id="editenquery<?php echo $row1['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title" id="myModalLabel" style="color: #000;">Edit Enquery Form</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="edituser.php?enquery=<?php echo $row1['id']; ?>"
                        enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Course interested</label>
                            <select class="custom-select" required value="<?php echo $row1['cource']; ?>" name="cource" id="">
                                <option selected>Select Cource</option>
                                <option value="Physical Science">Physical Science</option>
                                <option value="Biological Science">Biological Science</option>
                                <option value="Engineering">Engineering</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="my-input">Student Name</label>
                            <input id="my-input" required class="form-control" value="<?php echo $row1['student_name']; ?>" type="text" name="student_name">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Student Surname:</label>
                            <input id="my-input" required class="form-control" value="<?php echo $row1['student_surname']; ?>" type="text" name="student_surname">
                        </div>
                        <div class="form-group">
                            <label for="my-input">NIC:</label>
                            <input id="my-input" required class="form-control" value="<?php echo $row1['NIC']; ?>" type="text" name="NIC">
                        </div>
                        <div class="form-group">
                            <label for="my-input">E-mail:</label>
                            <input id="my-input" required class="form-control" value="<?php echo $row1['email']; ?>" type="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Telephone:</label>
                            <input id="my-input" required class="form-control" value="<?php echo $row1['telephone_no']; ?>" type="text" name="telephone_no">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Mobile:</label>
                            <input id="my-input" required class="form-control" value="<?php echo $row1['mobile_no']; ?>" type="text" name="mobile_no">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Address:</label>
                            <input id="my-input" class="form-control" type="text" value="<?php echo $row1['address']; ?>" name="address">
                        </div>
                        <div class="form-group">
                            <label for="my-input">City:</label>
                            <input id="my-input" required class="form-control" value="<?php echo $row1['city']; ?>" type="text" name="city">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Date Of Birth:</label>
                            <input id="my-input" required class="form-control" value="<?php echo $row1['dob']; ?>" type="date" name="dob">
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <select class="custom-select" required  value="<?php echo $row1['gender']; ?>" name="gender" id="">
                                <option selected>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>

                            </select>
                        </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Close</button>
                <button type="submit" name="edituser" class="btn btn-primary"><span
                        class="glyphicon glyphicon-edit"></span> Update</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>