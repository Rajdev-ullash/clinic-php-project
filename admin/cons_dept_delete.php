<?php
include_once('databases.php');
//var_dump($_POST,$_FILES);exit;
if(mysqli_connect_errno()) {
die("Database connection failed".mysqli_connect_errno()."(".mysqli_connect_error().")");
}

if(!empty($_POST)){
    $output = "";
    $id = mysqli_real_escape_string($connection, $_POST["cons_dep_id"]);

    $query = "DELETE FROM const_dept WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "1" ;
    } else {
        echo("Error description: " . mysqli_error($connection));
    }

}   

?>