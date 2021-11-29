<?php
include'conn.php';
    if(isset($_GET['user'])){
        $id=$_GET['user'];

    extract($_POST);
    $user_type=$_POST['user_type'];
    $full_name=$_POST['full_name'];
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    
    
    if($user_type=="administrator"){
   $sql="update user set role_id='1', role_name='$user_type', user_type='$user_type', full_name='$full_name', user_name='$user_name', password='$password' where id='$id'";
    $conn->query($sql);
    echo "<script>window.location.assign('admin.php?edit=1')</script>";
    }
    elseif($user_type=="counselar"){
       $sql="update user set role_id='2', role_name='$user_type', user_type='$user_type', full_name='$full_name', user_name='$user_name', password='$password' where id='$id'";
        $conn->query($sql);
        echo "<script>window.location.assign('admin.php?edit=1')</script>";
        }else{
            $sql="update user set role_id='2', role_name='$user_type', user_type='$user_type', full_name='$full_name', user_name='$user_name', password='$password' where id='$id'";
            $conn->query($sql);
            echo "<script>window.location.assign('admin.php?edit=1')</script>";
        }


}


?>