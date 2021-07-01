<?php

require "connection.php";
if (!isset($_SESSION['user'])) 
{
    
    header("location: index.php");
    die();
} else {
$user_id = $_SESSION['user'];
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Add picture</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <center>
    <form action="postaddfile.php" method="POST" enctype="multipart/form-data">
      <h1>Add Picture</h1>

    <fieldset>
    
    
    <div>
        <input type="file" name="userfile[]" value="" >
    </div>
    <div>
        <textarea name="text" cols="40" rows="5" placeholder="Add a despriction in less than 400 characters(optional)" maxlength="400"></textarea>
    </div>
    <div>
        <input type="submit" name="submit" value="Upload Image">
    </div>
    
    


    </fieldset>

  </form>
  </center>
</body>