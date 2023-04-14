<?php
 include_once('databases.php');
 if(mysqli_connect_errno()) {
die("Database connection failed".mysqli_connect_errno()."(".mysqli_connect_error().")");
}
 	//var_dump($_POST);exit;
  $id = mysqli_real_escape_string($connection, $_POST["tid"]);
  
  $query = "DELETE from tests WHERE testid=$id";
 
    $result = mysqli_query($connection, $query);

    if($result){
            echo "1" ;
            //want to echo $query;
            // echo $query3;
        } else {
            echo("Error description: " . mysqli_error($connection));
        }
      

?>