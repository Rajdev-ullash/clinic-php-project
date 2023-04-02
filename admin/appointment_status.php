<?php
include_once('databases.php');
//var_dump($_POST,$_FILES);exit;
if(mysqli_connect_errno()) {
die("Database connection failed".mysqli_connect_errno()."(".mysqli_connect_error().")");
}
If(!empty($_POST)){
	$output = "";
	$id = mysqli_real_escape_string($connection, $_POST["id"]);
	
$query = "UPDATE appointment SET status='approved' WHERE id='$id'";


	if(mysqli_query($connection, $query)){
		
			echo '1';
			
	} else
	    echo("Error description: " . mysqli_error($connection));
			
			
	}

?>