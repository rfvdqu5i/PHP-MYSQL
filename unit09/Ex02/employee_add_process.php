<?php
    include_once('connection.php');



    function file_upload($target_dir,$input_name,$max_size, $formats_allowed_array){
		$target_file = $target_dir."/" . basename($_FILES[$input_name]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$error_arr =array();
		
		// Check if file already exists
		if (file_exists($target_file)) {
		    $error_arr[] = "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		
		// Check file size
		if ($_FILES[$input_name]["size"] > $max_size) {
		    $error_arr[] = "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if(!in_array($imageFileType, $formats_allowed_array)) {
		    $error_arr[] = "Sorry, only ".implode(array_values($formats_allowed_array),',')." files are allowed.";
		    $uploadOk = 0;
		}
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    $error_arr[] = "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)) {
		        return $_FILES[$input_name]["name"];
		    } else {
		        $error_arr[] = "Sorry, there was an error uploading your file.";
		    }
		}
		return $error_arr;
	}

    if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
        $uploads = file_upload("img/employees","IMG",500000,array('JPG', 'png', 'jpg', 'PNG'));
//        if(gettype($uploads) == "array"){
//            print_r($uploads); // Trả về mảng lỗi nếu ko upload được
//        }else{
//            echo "File name is: " . $uploads; // Trả về tên file nếu upload thành công
//        }
    }
    
    $data = $_POST;

    $query = "INSERT INTO employees (CODE, NAME, EMAIL, MOBILE, ADDRESS, IMG) VALUES ('".$data['CODE']."','".$data['NAME']."','".$data['EMAIL']."','".$data['MOBILE']."','".$data['ADDRESS']."','".$_FILES['IMG']['name']."')";

    $status = $conn->query($query);
    
    header('Location: employee.php');
?>