<?php
 include_once('databases.php');

    if(mysqli_connect_errno()) {
        die("Database connection failed".mysqli_connect_errno()."(".mysqli_connect_error().")");
    }

    if(!empty($_POST)){
        $output = "";
        $dept_id = mysqli_real_escape_string($connection, $_POST["dept_id"]);
        $dept_name = mysqli_real_escape_string($connection, $_POST["dept_name"]);
        $dept_short_des = mysqli_real_escape_string($connection, $_POST["dept_short_description"]);
        $dept_description = mysqli_real_escape_string($connection, $_POST["dept_description"]);

        //upload image
        if(empty($_FILES ["dept_image"]["name"])){
            $target_dir = "admin/images/";

            //rename image

            //query to get image name
            $query = "SELECT image FROM department WHERE id = '$dept_id'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
            $image_name = $row['image'];

            $this_id = $image_name;

            $inquery = "UPDATE department SET image = '$this_id' WHERE id = '$dept_id'";
            $inresult = mysqli_query($connection, $inquery);

            $this_file = $target_dir . basename($_FILES["dept_image"]["name"]);
            $p = strpos($this_file, '.');
            $ext = substr($this_file, $p);
            $my_file = $this_id.$ext;
            //rename image ends
            $target_file = $this_id;
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


            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                //echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["dept_image"]["tmp_name"], $target_file)) {
                    //echo "The file ". basename( $_FILES["dept_image"]["name"]). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
            }
        }

        if(!empty ($_FILES ["dept_image"]["name"])){
            $target_dir = "admin/images/";
            $target_file = $target_dir . basename($_FILES["dept_image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
          

            // Check if file already exists
            if (file_exists($target_file)) {
                //echo "Sorry, file already exists.";
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
        }
        

        

       
        

        
        if(!empty ($_FILES ["dept_header_image"]["name"])){
            $target_dir = "admin/images/";
            $target_files = $target_dir . basename($_FILES["dept_header_image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_files,PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["dept_header_image"]["tmp_name"]);
                if($check !== false) {
                    //echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    //echo "File is not an image.";
                    $uploadOk = 0;
                }
            }

            // Check if file already exists
            if (file_exists($target_files)) {
                //echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["dept_header_image"]["size"] > 500000) {
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
                if (move_uploaded_file($_FILES["dept_header_image"]["tmp_name"], '../'.$target_files)) {
                    //echo "The file ". basename( $_FILES["dept_header_image"]["name"]). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
            }
        }

        if(empty($_FILES["dept_header_image"]["name"])){
         

        //upload department header image
            $target_dirs = "admin/images/";

            //rename image

            //query to get image name
            $querys = "SELECT header_image FROM department WHERE id = '$dept_id'";
            $results = mysqli_query($connection, $querys);
            $rows = mysqli_fetch_assoc($results);
            $image_names = $rows['header_image'];

            $this_ids = $image_names;

            $inquerys = "UPDATE department SET header_image = '$this_ids' WHERE id = '$dept_id'";
            $inresults = mysqli_query($connection, $inquerys);

            $this_files = $target_dirs . basename($_FILES["dept_header_image"]["name"]);
            $ps = strpos($this_files, '.');
            $exts = substr($this_files, $ps);
            $my_files = $this_ids.$exts;
            //rename image ends
            $target_files = $target_dirs . $my_files;
            $uploadOks = 1;
            $imageFileTypes = strtolower(pathinfo($target_files,PATHINFO_EXTENSION));
            
            if (file_exists($target_files)) {
                $uploadOks = 1;
            }

            // Check file size
            if ($_FILES["dept_header_image"]["size"] > 500000) {
                //echo "Sorry, your file is too large.";
                $uploadOks = 0;
            }


            // Check if $uploadOk is set to 0 by an error

            if ($uploadOks == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["dept_header_image"]["tmp_name"], '../'.$target_files)) {
                    //echo "The file ". basename( $_FILES["dept_header_image"]["name"]). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
            }
        }

        

        //upload department header image ends
        $dept_order = mysqli_real_escape_string($connection, $_POST["dept_order"]);

       $query = "UPDATE department SET dname = '$dept_name',short_des = '$dept_short_des', description = '$dept_description', image = '$target_file', header_image='$target_files', ord = '$dept_order' WHERE id = '$dept_id'";
       $query1 = "UPDATE department SET dname = '$dept_name',short_des = '$dept_short_des', description = '$dept_description', image = '$target_file', ord = '$dept_order' WHERE id = '$dept_id'";
       $query2 = "UPDATE department SET dname = '$dept_name',short_des = '$dept_short_des', description = '$dept_description', header_image = '$target_files', ord = '$dept_order' WHERE id = '$dept_id'";
         $query3 = "UPDATE department SET dname = '$dept_name',short_des = '$dept_short_des', description = '$dept_description', ord = '$dept_order' WHERE id = '$dept_id'";

        //check if dept_image is empty
        if(empty($_FILES["dept_image"]["name"]) || empty($_FILES["dept_header_image"]["name"])){
            if(empty($_FILES["dept_header_image"]["name"])){
                $result = mysqli_query($connection, $query1);
            }else if(empty($_FILES["dept_image"]["name"])){
                $result = mysqli_query($connection, $query2);
            }else{
                $result = mysqli_query($connection, $query3);
            }
        }else{
            $result = mysqli_query($connection, $query);
        }

        if($result){
            echo "1" ;
            //want to echo $query;
            // echo $query3;
        } else {
            echo("Error description: " . mysqli_error($connection));
        }
        
    }

?>