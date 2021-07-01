<?php

require "connection.php";


//Protecting Pages
if (!isset($_SESSION['user'])) 
{
    header("location: home.php");
}
session_destroy();
header("location: home.php");