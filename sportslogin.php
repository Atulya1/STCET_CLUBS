<?php
include_once 'connection.php';

if(isset($_POST['submit']))
{
  $username=$_POST['uname'];
  $password=$_POST['psw'];
  


                $query="SELECT password from register_db where username='$username'";
                $result=$conn->query($query);

                if(!$result) 
	            {
		          die($conn->error);
	            }
	            else
	            {
                $rows=$result->num_rows;
                    if ($rows==null) 
                    {
    	            echo "no records found";
                    }
                    else
                    {
                    $i=0;
	                $result->data_seek($i);
	                            if($password==$result->fetch_assoc()['password'])
	                            {
		                        echo "welcome ".$username.". Your account information is :";
		                        
		                   