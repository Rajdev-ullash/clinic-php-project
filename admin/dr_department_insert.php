<?php
include_once('databases.php');
//var_dump($_POST,$_FILES);exit;
if(mysqli_connect_errno()) {
die("Database connection failed".mysqli_connect_errno()."(".mysqli_connect_error().")");
}

If(!empty($_POST)){
	$output = "";
	$dept_name = mysqli_real_escape_string($connection, $_POST["dept_name"]);
	$query = "INSERT INTO dept (department) VALUES ('$dept_name')";

	if(mysqli_query($connection, $query)){
		
			echo '1';
	} else
	    echo("Error description: " . mysqli_error($connection));
			
			echo json_encode($output);
			echo $output;
	}

?>
