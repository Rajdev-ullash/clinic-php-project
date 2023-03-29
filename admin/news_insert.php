<?php
include_once('databases.php');
//var_dump($_POST,$_FILES);exit;
if(mysqli_connect_errno()) {
die("Database connection failed".mysqli_connect_errno()."(".mysqli_connect_error().")");
}

if(!empty($_POST)){
	$output = "";
	$news_title = mysqli_real_escape_string($connection, $_POST["news_title"]);
	$news_short_desp = mysqli_real_escape_string($connection, $_POST["news_short_desp"]);
	$news_article = mysqli_real_escape_string($connection, $_POST["news_article"]);
	
	//upload image

	$target_dir = "admin/images/";
	$target_file = $target_dir . basename($_FILES["n_image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image



	// Check if file already exists
	if (file_exists($target_file)) {
		//echo "Sorry, file already exists.";
		$uploadOk = 1;
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		//echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["n_image"]["tmp_name"], '../'.$target_file)) {
			//echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
		} else {
			//echo "Sorry, there was an error uploading your file.";
		}
	}
	
	$news_home_page_show = mysqli_real_escape_string($connection, $_POST["news_home_page_show"]);

	if($news_home_page_show == 1){
		$news_home_page_show = 1;
	}
	else{
		$news_home_page_show = 0;
	}

	$query = "INSERT INTO news (title, short_description, article, image, is_home_page) VALUES ('$news_title', '$news_short_desp', '$news_article', '$target_file', '$news_home_page_show')";

	if(mysqli_query($connection, $query)){
		
			echo '1';
	} else{
	    echo("Error description: " . mysqli_error($connection));
			
			echo json_encode($output);
			echo $output;
	}

	


	
}

?>
