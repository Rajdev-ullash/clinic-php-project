<?php
include_once('databases.php');
//var_dump($_POST,$_FILES);exit;
if(mysqli_connect_errno()) {
die("Database connection failed".mysqli_connect_errno()."(".mysqli_connect_error().")");
}

If(!empty($_POST)){
		$output = "";
        $id = mysqli_real_escape_string($connection, $_POST["test_id"]);
        $test_name = mysqli_real_escape_string($connection, $_POST["test_name"]);
        $service_id = mysqli_real_escape_string($connection, $_POST["service_id"]);
        $test_order = mysqli_real_escape_string($connection, $_POST["test_order"]);

        $query = "UPDATE tests SET tname = '$test_name', servicehead = '$service_id', tdes = '$test_order' WHERE testid = '$id'";

        if(mysqli_query($connection, $query)){
            echo "1";
        }
        else{
            echo("Error description: " . mysqli_error($connection));
        }
		
	}

?>