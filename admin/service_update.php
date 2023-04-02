<?php
include_once('databases.php');
//var_dump($_POST,$_FILES);exit;
if(mysqli_connect_errno()) {
die("Database connection failed".mysqli_connect_errno()."(".mysqli_connect_error().")");
}

If(!empty($_POST)){
		$output = "";
		$id = mysqli_real_escape_string($connection, $_POST["sid"]);
		$dept_id = mysqli_real_escape_string($connection, $_POST["dept_id"]);
		$service_name = mysqli_real_escape_string($connection, $_POST["service_name"]);
        $service_short_des = mysqli_real_escape_string($connection, $_POST["service_short_description"]);
		$service_description = mysqli_real_escape_string($connection, $_POST["service_description"]);

	 	//upload image
        $target_dir = "admin/images/";
        $target_file = $target_dir . basename($_FILES["simage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if (file_exists($target_file)) {
            $uploadOk = 1;
        }

        // Check file size
        if ($_FILES["simage"]["size"] > 500000) {
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
            if (move_uploaded_file($_FILES["simage"]["tmp_name"], '../'.$target_file)) {
                //echo "The file ". basename( $_FILES["dept_image"]["name"]). " has been uploaded.";
            } else {
                //echo "Sorry, there was an error uploading your file.";
            }
        }

		$service_image_alt = mysqli_real_escape_string($connection, $_POST["service_image_alt"]);
		$service_keywords = mysqli_real_escape_string($connection, $_POST["service_keyword"]);
		$service_order = mysqli_real_escape_string($connection, $_POST["service_order"]);

		$query = "UPDATE services SET dept = '$dept_id', short_des = '$service_short_des' ,sname = '$service_name', des = '$service_description', image = '$target_file', image_alt = '$service_image_alt', keywords = '$service_keywords', ord = '$service_order' WHERE sid = '$id'";
		$query1 = "UPDATE services SET dept = '$dept_id', sname = '$service_name',short_des = '$service_short_des', des = '$service_description', image_alt = '$service_image_alt', keywords = '$service_keywords', ord = '$service_order' WHERE sid = '$id'";

        //check simage is empty or not
        if(empty($_FILES["simage"]["name"])){
            $result = mysqli_query($connection, $query1);
        }else{
            $result = mysqli_query($connection, $query);
        }
        if(mysqli_query($connection, $query)){
			echo "1";
		}
		else{
			echo("Error description: " . mysqli_error($connection));
				
			echo json_encode($output);
			echo $output;
		}
		


	}

?>