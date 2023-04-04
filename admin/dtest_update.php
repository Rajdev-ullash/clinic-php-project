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
        $test_short_des = mysqli_real_escape_string($connection, $_POST["test_short_description"]);
        $service_id = mysqli_real_escape_string($connection, $_POST["service_id"]);
        $test_order = mysqli_real_escape_string($connection, $_POST["test_order"]);
        $const_id = mysqli_real_escape_string($connection, $_POST["const_id"]);

        $query = "UPDATE tests SET tname = '$test_name', short_des='$test_short_des', servicehead = '$service_id', tdes = '$test_order', const_dept_id = '$const_id' WHERE testid = '$id'";

        if(mysqli_query($connection, $query)){
            echo "1";
        }
        else{
            echo("Error description: " . mysqli_error($connection));
        }
		
	}

?>