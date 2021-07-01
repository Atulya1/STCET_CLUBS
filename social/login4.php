<?php

require "../connection.php";



//Protecting Pages
if (isset($_SESSION['user'])) {
    header("location: ../index.php");
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = ($_POST['username']);
    $password = ($_POST['password']);
} else {
    die('getted');
}

//fetching User from the database
//


$getQuery = "SELECT club_id from users where username='$username' and `password` = '$password'";
$result = mysqli_query($connection, $getQuery);

$userData = mysqli_fetch_array($result);
if (!$userData) {
    die('Invalid password and username combination.');
}
$user_id = $userData[0];

$_SESSION['user'] = $user_id;

header("location: ../index.php");
