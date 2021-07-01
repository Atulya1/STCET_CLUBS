<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
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
    

<form action="login1.php" method="POST">
      <h1>Admin Login</h1>

    <fieldset>
    

    <label class="" for="username">Username:</label>
    <input type="text" name="username" value="">

    <label class="" for="password">Password:</label>
    <input type="password" name="password" value="">
    
    <button type="submit">Login</button>


    </fieldset>

  </form>

  
  
</body>
</html>