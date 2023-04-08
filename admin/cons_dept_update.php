<?php
 include_once('databases.php');

    if(mysqli_connect_errno()) {
        die("Database connection failed".mysqli_connect_errno()."(".mysqli_connect_error().")");
    }

    if(!empty($_POST)){
        $output = "";
        $dept_id = mysqli_real_escape_string($connection, $_POST["dept_id"]);
        $dept_name = mysqli_real_escape_string($connection, $_POST["dept_name"]);
        //generate a slug for the dept name
        $dept_slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $dept_name));
        $dept_about_des = mysqli_real_escape_string($connection, $_POST["dept_about_description"]);
        $dept_description = mysqli_real_escape_string($connection, $_POST["dept_description"]);

        //update the cons_dept_image

        $target_dir = "admin/images/";
        $target_file = $target_dir . basename($_FILES["cons_dept_image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image

       

        // Check if file already exists
        if (file_exists($target_file)) {
            //echo "Sorry, file already exists.";
            $uploadOk = 1;
        }
        

        // Allow certain file formats
        

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            //echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["cons_dept_image"]["tmp_name"], $target_file)) {
                //echo "The file ". basename( $_FILES["cons_dept_image"]["name"]). " has been uploaded.";
            } else {
                //echo "Sorry, there was an error uploading your file.";
            }
        }

        $query = "UPDATE const_dept SET title = '$dept_name', title_slug = '$dept_slug', description = '$dept_about_des', const_des = '$dept_description', cons_image = '$target_file' WHERE id = '$dept_id'";


       $query1 = "UPDATE const_dept SET title = '$dept_name', title_slug = '$dept_slug', description = '$dept_about_des', const_des = '$dept_description' WHERE id = '$dept_id'";

        $result = mysqli_query($connection, $query);

        if(!empty($_FILES)){
            $result = mysqli_query($connection, $query);
        } else {
            $result = mysqli_query($connection, $query1);
        }

        if($result){
            echo "1" ;
        } else {
            echo("Error description: " . mysqli_error($connection));
        }
      
        
    }

?>