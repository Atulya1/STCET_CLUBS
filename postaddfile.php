<?php

$phpFileUploadErrors = array(

0 => 'There is no error, file upload is successful',
1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
3 => 'The uploaded file was only partially uploaded',
4 => 'No file was uploaded',
5 => 'Missing a temporary folder',
6 => 'Failed to write file to disk',
7 => 'File upload stopped by extension',
8 => 'A PHP extension stopped thye file upload',
 );   


require "connection.php";
$user_id=$_SESSION['user'];





if (!isset($_SESSION['user'])) 
{
	
    header("location: index.php");
    die();

} 
else
	{
		
		if (isset($_FILES["userfile"])) 
        {
        	$description=$_POST['text']; // Description of the image to be uploaded into the database
        	$file_array=reArrayFiles($_FILES['userfile']);
	        //pre_r($file_array);
	        for ($i=0; $i <count($file_array) ; $i++) 
	        { 
	        	if ($file_array[$i]['error']) 
	        	{
	        		echo $file_array[$i]['name'].'-'.$phpFileUploadErrors[$file_array[$i]['error']];
	        	}
	        	else
	        	{
                     $extensions =  array('jpg','png','PNG','gif','jpeg','mp4');
                     $file_ext= explode('.', $file_array[$i]['name']);


                     $name=$file_ext[0]; // name of the image to be uploaded into the database
                     $name=preg_replace("!-!", " " , $name);
                     $name=ucwords($name);


                     $file_ext=end($file_ext); 
	        	if (!in_array($file_ext , $extensions)) 
	        	{
	        		
	        	    echo "{$file_array[$i]['name']} - invalid extention";
	        	}
	        	else
	        	{
	        		$img_dir="Images/".$file_array[$i]['name']; // Directory of the image to be uploaded into the database

	        		move_uploaded_file($file_array[$i]['tmp_name'], $img_dir);
                    
                    $sql="INSERT INTO files (name,description,img_dir,club_id) VALUES ('$name','$description','$img_dir','$user_id')";
                    if(mysqli_query($connection,$sql))
                    {
                    echo $file_array[$i]['name'].'-'.$phpFileUploadErrors[$file_array[$i]['error']];
                    }
	        	}

	        }
	        
        }
    }
    
}

function reArrayFiles($file_post)
{
	$file_ary= array();
	$file_count=count($file_post['name']);
	$file_keys=array_keys($file_post);

	for ($i=0; $i <$file_count ; $i++) 
	{ 
		foreach ($file_keys as $key) {

			$file_ary[$i][$key]=$file_post[$key][$i];
		}
	}
	return $file_ary;
}



function pre_r($array)
{
	
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}


// $attached = null;
// if (isset($_FILES["fileupload"])) {
//     $attached = md5(random_bytes(35));
//     $filename = $_FILES["fileupload"]["name"];
//     $extention = explode(".", $filename)[count(explode(".", $filename)) - 1];
//     $attached .= ".".$extention;
//     move_uploaded_file($_FILES["fileupload"]["tmp_name"], __DIR__ . "/file/$attached");
// }
// $file_id = ($_POST["file_id"]);
// $file_name = ($_POST["file_name"]);
// $description = ($_POST["description"]);

// $rawQuery = "INSERT INTO `files` (`hardid`, `filename`, `attachment`, `description`, `user_id`) VALUES ('%s', '%s', '%s', '%s', '%d');";
// $query = sprintf($rawQuery, $file_name, $description, $_SESSION['user']);
// $result = mysqli_query($connection, $query,MYSQLI_USE_RESULT );

// $fileid = mysqli_insert_id($connection);

// // Movement

// header("location: files.php");

?>