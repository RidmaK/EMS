<?php 
include '../conn.php';
extract($_GET);
//echo $id;




  $q=mysqli_query($conn,"SELECT * from student where id='$id'");
  $row=mysqli_fetch_assoc($q);
  $name= $row['student_name'];
  $uname= $row['student_surname'];
  $email= $row['email'];
  $mobile= $row['mobile_no'];
  $address= $row['address'];
  $city= $row['city'];
  $course= $row['cource'];
  echo '{
   
   
    "name": "'.$name.'",
    "uname": "'.$uname.'",
    "email": "'.$email.'",
    "mobile": "'.$mobile.'",
    "address": "'.$address.'",
    "city": "'.$city.'",
    "course": "'.$course.'",
    "description": "The Laravel Framework.",
    "keywords": [
        "framework",
        "laravel"
    ]}';

?>