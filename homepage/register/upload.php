<?php
if(isset($_POST['submit'])){
	$file = $_FILES['files'];
	
	$filename = $_FILE['file']['name'];
	$fileTmpName = $_FILE['file']['tmp_name'];
	$fileSize = $_FILE['file']['size'];
	$fileError = $_FILE['file']['error'];
	$fileType = $_FILE['file']['type'];

    $fileExt = explode('.', $filename);
    $fileActualExt =  strtolower( end($fileExt));


    $alloewed = array('jpg ', 'jpeg', 'png');

    if (in_array($fileActionExt, $allowed)) {
    	if ($fileError ===0) { 
    		if($filesize < 1000000){
    			$fileNameNew = uniqid('', true).".".$fileActualExt;
    			$fileDestination = 'uploads/'.$fileNameNew;
    			move_uploaded_file($fileTmpName, $fileDestination );  
    			header("Location: registerlabour.html/uploadsuccess")

    		}else{
    			echo "Your file is too large!"
    		}
    		# code...
    	}else{
 
    		echo "There was an error uploading your file!  "
    	}

    } else{
    echo "You cannot upload files of this type!";
}
}
