<?php
include 'conn.php';
session_start();
	if(isset($_GET['application'])){
		$id=$_GET['application'];
		$apfile="nofile";
	extract($_POST);
	$cource=$_POST['cource'];
	$apdate=$_POST['apdate'];
	
	
	$folder_path = 'uploads/';

	$filename = basename($_FILES['apfile']['name']);
	$newname = $folder_path . $filename;
 
	if (move_uploaded_file($_FILES['apfile']['tmp_name'], $newname)) {
	   if ($_FILES['apfile']['type'] != "application/pdf") {
 
		echo "<script>window.location.assign('Application-report.php?errf=1')</script>";
	} else {
		//    $filesql = "INSERT INTO tbl_health (link) VALUES ('{$filename}')".die(mysql_error());
		//    $fileresult = mysql_query($filesql, $con).die(mysql_error());
		$q1=mysqli_query($conn,"SELECT * from student where id='$id'");
		$row2=mysqli_fetch_assoc($q1);
		$course=$row2['cource'];
		
		if($_POST['cource']=="0"){
		$res=mysqli_query($conn,"UPDATE student SET a_co='{$_SESSION['counselar_id']}', apdate='{$apdate}',apfile='{$filename}',cource='{$course}' WHERE student.id='{$id}'");
	 echo "<script>window.location.assign('Application-report.php?sup=1')</script>";
		}else{
			$res=mysqli_query($conn,"UPDATE student SET a_co='{$_SESSION['counselar_id']}', apdate='{$apdate}',apfile='{$filename}',cource='{$cource}' WHERE student.id='{$id}'");
			echo "<script>window.location.assign('Application-report.php?sup=1')</script>";
		}

	  }
 
	  if ( $res) {
		echo "<script>window.location.assign('Application-report.php?sup=1')</script>";
	  } else {
		   echo 'fail';
	  }
   }else{
	$q1=mysqli_query($conn,"SELECT * from student where id='$id'");
	$row2=mysqli_fetch_assoc($q1);
	$course=$row2['cource'];
	
	if($_POST['cource']=="0"){
	$res=mysqli_query($conn,"UPDATE student SET a_co='{$_SESSION['counselar_id']}', apdate='{$apdate}',cource='{$course}' WHERE student.id='{$id}'");
 echo "<script>window.location.assign('Application-report.php?sup=1')</script>";
	}else{
		$res=mysqli_query($conn,"UPDATE student SET a_co='{$_SESSION['counselar_id']}', apdate='{$apdate}',cource='{$cource}' WHERE student.id='{$id}'");
		echo "<script>window.location.assign('Application-report.php?sup=1')</script>";
	}
   }

   
	}
	// Edit Documentation
	elseif(isset($_GET['document'])){

		$ol="No";
		$al="No";
		$ielts="No";
		$servce_letter="No";
		$files="";
		$id=$_GET['document'];

	extract($_POST);
	$ol=$_POST['ol'];
	$al=$_POST['al'];
	$ielts=$_POST['ielts'];
	$servce_letter=$_POST['servce_letter'];
	// $files=$_POST['files'];
	$remarks=$_POST['remarks'];
	

	
	$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
	$d = $date->format('Y-m-d');
	$t = $date->format('H:i:s');

	$folder_path = 'uploads/';

	$filename = basename($_FILES['files']['name']);
	$newname = $folder_path . $filename;

	if (move_uploaded_file($_FILES['files']['tmp_name'], $newname)) {
		if ($_FILES['files']['type'] != "application/pdf") {
			echo "<script>window.location.assign('Document-received-report.php?errf=1')</script>";

			//echo "<p>Class notes must be uploaded in PDF format.</p>";
		} else {
			// $filesql = "INSERT INTO tbl_health (link) VALUES ('{$filename}')".die(mysql_error());
			// $fileresult = mysql_query($filesql, $con).die(mysql_error());
			$q1="UPDATE student SET d_co='{$_SESSION['counselar_id']}', ol='{$ol}', al='{$al}',ielts='{$ielts}',servce_letter='{$servce_letter}' ,file='{$filename}',remarks='{$remarks}',received_date='$d' WHERE student.id='{$id}'";
			$res=mysqli_query($conn,$q1);
			
			echo "<script>window.location.assign('Document-received-report.php?sup=1')</script>";
		}

		if ($res) {
			echo "<script>window.location.assign('Document-received-report.php?sup=1')</script>";
		} else {
			echo 'fail';
		}
	}else{
		$q1="UPDATE student SET d_co='{$_SESSION['counselar_id']}', ol='{$ol}', al='{$al}',ielts='{$ielts}',servce_letter='{$servce_letter}' ,remarks='{$remarks}',received_date='$d' WHERE student.id='{$id}'";
			$res=mysqli_query($conn,$q1);
			
			echo "<script>window.location.assign('Document-received-report.php?sup=1')</script>";
	}
	}
	// Edit offer
	elseif(isset($_GET['offer'])){
		$id=$_GET['offer'];

	extract($_POST);
	$offerdate=$_POST['offerdate'];
	$semester=$_POST['semester'];
	$intakedate=$_POST['intakedate'];
	// $offerfile=$_POST['offerfile'];
	
	$folder_path = 'uploads/';

	$filename = basename($_FILES['offerfile']['name']);
	$newname = $folder_path . $filename;

	if (move_uploaded_file($_FILES['offerfile']['tmp_name'], $newname)) {
		if ($_FILES['offerfile']['type'] != "application/pdf") {
			echo "<script>window.location.assign('offer-received-report.php?errf=1')</script>";
			//echo "<p>Class notes must be uploaded in PDF format.</p>";
		} else {
			// $filesql = "INSERT INTO tbl_health (link) VALUES ('{$filename}')".die(mysql_error());
			// $fileresult = mysql_query($filesql, $con).die(mysql_error());
			$res=mysqli_query($conn,"UPDATE student SET o_co='{$_SESSION['counselar_id']}', offerdate='{$offerdate}',semester='$semester',intakedate='$intakedate',offerfile='$filename'  WHERE student.id='{$id}'");
		   echo "<script>window.location.assign('offer-received-report.php?sup=1')</script>";
		}

		if ($res) {
			echo "<script>window.location.assign('offer-received-report.php?sup=1')</script>";
		} else {
			echo 'fail';
		}
	}else{
		$res=mysqli_query($conn,"UPDATE student SET o_co='{$_SESSION['counselar_id']}', offerdate='{$offerdate}',semester='$semester',intakedate='$intakedate'  WHERE student.id='{$id}'");
		   echo "<script>window.location.assign('offer-received-report.php?sup=1')</script>";
	}
	
	}
	elseif(isset($_GET['enquery'])){
		$id=$_GET['enquery'];

	extract($_POST);

	$i_co=$_SESSION['counselar_id'];
	// $qery=mysqli_query($conn,"INSERT into student(student_id,cource,student_name,student_surname,NIC,email,telephone_no,mobile_no,address,city,dob,gender,i_co) values('$student_id','$cource','$student_name','$student_surname','$NIC','$email','$telephone_no','$mobile_no','$address','$city','$dob','$gender','$i_co')");
	$res=mysqli_query($conn,"UPDATE student SET cource='$cource',student_name='$student_name',student_surname='$student_surname',NIC='$NIC',email='$email',telephone_no='$telephone_no',mobile_no='$mobile_no',address='$address',city='$city',dob='$dob',gender='$gender',i_co='$i_co' WHERE student.id='{$id}'");

	echo "<script>window.location.assign('enquery-report.php?sus=1')</script>";
	}
?>