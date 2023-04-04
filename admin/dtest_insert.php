<?php
include_once('databases.php');
//var_dump($_POST,$_FILES);exit;
if(mysqli_connect_errno()) {
die("Database connection failed".mysqli_connect_errno()."(".mysqli_connect_error().")");
}

If(!empty($_POST)){
    $output = "";
    $test_name = mysqli_real_escape_string($connection, $_POST["test_name"]);
    $test_short_des = mysqli_real_escape_string($connection, $_POST["test_short_description"]);
    $service_id = mysqli_real_escape_string($connection, $_POST["service_id"]);
    $test_order = mysqli_real_escape_string($connection, $_POST["test_order"]);
    $const_id = mysqli_real_escape_string($connection, $_POST["const_id"]);

    $query = "INSERT INTO tests (tname,short_des,servicehead,tdes,const_dept_id) VALUES ('$test_name','$test_short_des','$service_id','$test_order','$const_id')";
    
    if(mysqli_query($connection, $query)){
        echo "1";
    }
    else{
        echo("Error description: " . mysqli_error($connection));
			
		echo json_encode($output);
		echo $output;
    }
    



}