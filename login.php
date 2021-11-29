<?php session_start(); ?>
<?php include 'conn.php';?>

<?php

	if(isset($_POST['submit'])) {
		extract($_POST);
       
        //echo $user_id;
		
		$result1=mysqli_query($conn, "SELECT * FROM user where user_name='$user_id' and password='$password'");
      
		
            $user=mysqli_fetch_assoc($result1);
           
           
           //echo $user['user_id'];

            if($user['role_id'] == 1) {
                $_SESSION['admin_id']=$user['user_name'];
            
                header('location:admin.php');
            }
            elseif($user['role_id'] == 2) {
                $_SESSION['counselar_id']=$user['user_name'];
            
                header('location:counselar.php');
            }
            
            
            else {
                header('location:index.php?error=1');
            } 
            
		
       
		
    }

?>
<?php

       
       ?>
<div></div>
