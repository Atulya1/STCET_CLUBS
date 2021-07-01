<?php require 'connection.php' ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style2.css">
  <title></title>
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
    


  
  
   <div id="content">
      <?php
       $sql="SELECT * FROM files WHERE club_id=2 ORDER BY time DESC";
       $result=mysqli_query($connection,$sql);
       
       
       function club($college_club)
       {
         if($college_club==1)
         {
          return "Sports Club";
         }
         elseif ($college_club==2) 
         {
           return "Coding Club";
         }
         elseif ($college_club==3) 
         {
           return "Cultural Club";
         }
         elseif ($college_club==4) 
         {
           return "Literature Club";
         }
         elseif ($college_club==5) 
         {
           return "Social Club";
         }
         else
         {
          return "Tech Fest";
         }
       }


       while ($row=mysqli_fetch_array($result)) 
       {
        if (is_null($row['img_dir'])) 
        {
           echo "<div id='img_div' >";
           echo "<p style=font-weight: bold;>".club($row['club_id'])." [".$row['time']."]"."</p>";
           echo "<p>"."Name:-".$row['name']."</p>";
           echo "<p id='description'>".$row['description']."</p>";
           echo "</div>";
        }
        else
        {
           
           echo "<div id='img_div' >";
           echo "<p style=font-weight: bold;>".club($row['club_id'])." [".$row['time']."]"."</p>";
           echo "<p>"."Name:- ".$row['name']."</p>";
           echo "<img src='{$row['img_dir']}'>";

           echo "<p id='description'>".$row['description']."</p>";
           echo "</div>";
         }
       }


      ?>
  </div>





</body>
</html>