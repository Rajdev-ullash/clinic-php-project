<?php
 include_once('databases.php');

    if(mysqli_connect_errno()) {
        die("Database connection failed".mysqli_connect_errno()."(".mysqli_connect_error().")");
    }

    if(!empty($_POST)){
        $output = "";
        $dept_id = mysqli_real_escape_string($connection, $_POST["dept_id"]);
        $dept_name = mysqli_real_escape_string($connection, $_POST["dept_name"]);
        $dept_description = mysqli_real_escape_string($connection, $_POST["dept_description"]);

        //upload image
        $target_dir = "admin/images/";
        $target_file = $target_dir . basename($_FILES["dept_image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if (file_exists($target_file)) {
            $uploadOk = 1;
        }

        // Check file size
        if ($_FILES["dept_image"]["size"] > 500000) {
            //echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            //echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["dept_image"]["tmp_name"], '../'.$target_file)) {
                //echo "The file ". basename( $_FILES["dept_image"]["name"]). " has been uploaded.";
            } else {
                //echo "Sorry, there was an error uploading your file.";
            }
        }

        //upload image ends
        $dept_order = mysqli_real_escape_string($connection, $_POST["dept_order"]);

       $query = "UPDATE department SET dname = '$dept_name', description = '$dept_description', image = '$target_file', ord = '$dept_order' WHERE id = '$dept_id'";

        $result = mysqli_query($connection, $query);

        if($result){
            echo "'$dept_name',' $dept_description', '$target_file', '$dept_order'" ;
        } else {
            echo("Error description: " . mysqli_error($connection));
        }
        

        
    }


  

?>