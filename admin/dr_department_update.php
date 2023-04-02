<?php
 include_once('databases.php');

    if(mysqli_connect_errno()) {
        die("Database connection failed".mysqli_connect_errno()."(".mysqli_connect_error().")");
    }

    if(!empty($_POST)){
        $output = "";
        $dept_id = mysqli_real_escape_string($connection, $_POST["dept_id"]);
        $dept_name = mysqli_real_escape_string($connection, $_POST["dept_name"]);

        $query = "UPDATE dept SET department = '$dept_name' WHERE did = '$dept_id'";
        if(mysqli_query($connection, $query)){
            echo '1';
        } else
            echo("Error description: " . mysqli_error($connection));
            
        
    }

?>