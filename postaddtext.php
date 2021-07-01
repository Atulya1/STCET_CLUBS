<?php


require "connection.php";
$user_id=$_SESSION['user'];





if (!isset($_SESSION['user'])) 
{
	
    header("location: index.php");
    die();

} 
else
	{
		
		if (isset($_POST["submit"])) 
        {
            $name=$_POST['name'];
        	$description=$_POST['text']; // Description of the image to be uploaded into the database
        	$sql="INSERT INTO files (name,description,club_id) VALUES ('$name','$description','$user_id')";
                    if(mysqli_query($connection,$sql))
                    {
                      echo "<p style='color:red ; font-weight:bolder';>"."Upload successful"."</p>"; 
                    }
                    else
                    {
                      echo "<p style='color:red ; font-weight:bolder';>"."Upload unsuccessful"."</p>";
                    }
	        
	        
        }
    }




?>

