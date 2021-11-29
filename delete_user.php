<?php
include 'conn.php';

	if(isset($_GET['user'])){
		$id = $_GET['user'];

	$sql="update user set status='0' where id='$id'";
	$conn->query($sql);

    echo "<script>window.location.assign('admin.php?delete=1')</script>";
	}
?>