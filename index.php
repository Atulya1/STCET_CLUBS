<?php 
    require "connection.php";
    if (isset($_SESSION['user'])) {
        $user_id = $_SESSION['user'];
        
        $getQuery = "SELECT * FROM `users` where `club_id` = $user_id";
        $result = mysqli_query($connection,$getQuery);
        $userData = mysqli_fetch_array($result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FTS</title>
<link rel="stylesheet" href="style1.css">

</head>
<body>
      <center>
    <header >STCET CLUBS</header>
    </center>

            <div id="menu-bar">
                <ul>
                    <li><a href="home.php" id="home-button">Home</a>
                        <ul>
                            <li><a href="adminlogin.php" id="home-button">Admin Login</a></li>
                        </ul></li>

                    <li><a>Sports Club</a>
                        <ul>
                            <li><a href="./sports/sportshome.php">Sports Club Home</a></li>
                            <li><a href="./sports/loginsports.php">Admin Login</a></li>
                            <li><a href="./sports/About.php">About</a></li>
                        </ul>
                    </li>
                    <li><a>Coding Club</a>
                    <ul>
                            <li><a href="./coding/codinghome.php">Coding Club Home</a></li>
                            <li><a href="./coding/logincoding.php">Admin Login</a></li>
                            <li><a href="./coding/About.php">About</a></li>
                        </ul>
                    </li>
                    <li><a>Cultural Club</a>
                    <ul>
                            <li><a href="./cultural/culturehome.php">Cultural Club Home</a></li>
                            <li><a href="./cultural/loginculture.php">Admin Login</a></li>
                            <li><a href="./cultural/About.php">About</a></li>
                        </ul>
                    </li>
                    <li><a>Literature Club</a>
                        <ul>
                            <li><a href="./literature/literaturehome.php">Literature Club Home</a></li>
                            <li><a href="./literature/loginliterature.php">Admin Login</a></li>
                            <li><a href="./literature/About.php">About</a></li>
                        </ul>
                    </li>
                    <li><a>Social Club</a>
                    <ul>
                            <li><a href="./social/socialhome.php">Social Club Home</a></li>
                            <li><a href="./social/loginsocial.php">Admin Login</a></li>
                            <li><a href="./social/About.php">About</a></li>
                        </ul>
                    </li>
                    <li><a>Tech Fest</a>
                        <ul>
                            <li><a href="./Tech/techhome.php">Tech Fest Home</a></li>
                            <li><a href="./Tech/logintech.php">Admin Login</a></li>
                            <li><a href="./Tech/About.php">About</a></li>
                        </ul>
                    </li>

                </ul>
            </div>







    
     
           
                
             
                
                    <?php if (isset($_SESSION['user'])): ?>
                    
                        <center>

                        <br><a  href="addfile.php" s><button>Add File</button></a>
                        <br><a  href="showfiles.php"><button>Show Files</button></a>
                        <br><a  href="textfiles.php"><button>Add infromation</button></a>
                        <br><a  href="deletefiles.php"><button>Delete Files</button></a>
                        <br><a  href="logout.php"><button>Log Out</button></a>
                        
                        </center>

                    <?php endif ?>
                        
                    
            
        <!-- adding footer -->
        
   
</body>