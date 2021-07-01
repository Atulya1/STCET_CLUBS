<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito:400,300">
    <title></title>
</head>
<body>
    <center>
    <header >STCET CLUBS</header>
    </center>

            <div id="menu-bar">
                <ul>
                    <li><a href="../home.php" id="home-button">Home</a>
                        <ul>
                            <li><a href="../adminlogin.php" id="home-button">Admin Login</a></li>
                        </ul></li>

                    <li><a>Sports Club</a>
                        <ul>
                            <li><a href="../sports/sportshome.php">Sports Club Home</a></li>
                            <li><a href="../sports/loginsports.php">Admin Login</a></li>
                            <li><a href="../sports/About.php">About</a></li>
                        </ul>
                    </li>
                    <li><a>Coding Club</a>
                    <ul>
                            <li><a href="../coding/codinghome.php">Coding Club Home</a></li>
                            <li><a href="../coding/logincoding.php">Admin Login</a></li>
                            <li><a href="../coding/About.php">About</a></li>
                        </ul>
                    </li>
                    <li><a>Cultural Club</a>
                    <ul>
                            <li><a href="culturehome.php">Cultural Club Home</a></li>
                            <li><a href="loginculture.php">Admin Login</a></li>
                            <li><a href="About.php">About</a></li>
                        </ul>
                    </li>
                    <li><a>Literature Club</a>
                        <ul>
                            <li><a href="../literature/literaturehome.php">Literature Club Home</a></li>
                            <li><a href="../literature/loginliterature.php">Admin Login</a></li>
                            <li><a href="../literature/About.php">About</a></li>
                        </ul>
                    </li>
                    <li><a>Social Club</a>
                    <ul>
                            <li><a href="../social/socialhome.php">Social Club Home</a></li>
                            <li><a href="../social/loginsocial.php">Admin Login</a></li>
                            <li><a href="../social/About.php">About</a></li>
                        </ul>
                    </li>
                    <li><a>Tech Fest</a>
                        <ul>
                            <li><a href="../Tech/techhome.php">Tech Fest Home</a></li>
                            <li><a href="../Tech/logintech.php">Admin Login</a></li>
                            <li><a href="../Tech/About.php">About</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
    



  <form action="login2.php" method="POST">
      <h1>Cultural Club Admin Login</h1>

    <fieldset>
    

    <label class="" for="username">Username:</label>
    <input type="text" name="username" value="">

    <label class="" for="password">Password:</label>
    <input type="password" name="password" value="">
    
    <input type="submit" value="Login" class="btn btn-danger btn-block" style="background-color: #000066;
   color:white ;
   padding: 10px 39px 12px 39px;
   border: 1px solid #000066;
   cursor: pointer;
   width: 100%;
   font-size: 16px;
   text-align: center;
   font-style: normal;
   border-radius: 5px;
   width: 100%;
   border-width: 1px 1px 3px;
   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
   margin-bottom: 10px;">



    </fieldset>

  </form>
  
</body>
</html>