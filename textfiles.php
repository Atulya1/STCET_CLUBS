<?php

require "connection.php";
if (!isset($_SESSION['user'])) 
{
    
    header("location: index.php");
    die();
} else {
$user_id = $_SESSION['user'];
    echo "$user_id";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>

    <title>Add Information</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <center>
    <form action="postaddtext.php" method="POST" enctype="multipart/form-data">
      <h1>Add Information</h1>

    <fieldset>
    
    <div>
        <input id="new" type="text" name="name" placeholder="give unique name">
    </div>
    <div>
        <textarea name="text" cols="40" rows="10" placeholder="Add a despriction in less than 1000 characters(optional)" maxlength="1000"></textarea>
    </div>
    <div>
        <input type="submit" name="submit" value="Upload Information">
    </div>
    
    


    </fieldset>

  </form>
  </center>
</body>