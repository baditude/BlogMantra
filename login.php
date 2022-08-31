<?php

session_start();

    include ("classes/connect.php");
    include ("classes/login.php");


    $email = "" ;
    $password = "" ;

    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        $login = new login();
        $result = $login->evaluate($_POST);
        if ($result != "")
        {
            echo "<div style ='text-align:center;font-size:12px;color:white;background-color:grey'>";
            echo "FOLLOWING ERRORS OCURED <br>";
            echo $result;
            echo "</div>";
        }
        else
        {
            header("Location: profile.php");
            die;
        }
        
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
   
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog-Mantra | Log-in</title>
     <link rel="stylesheet" href="./style/login.css">
</head>



<body>
    <div id="top">
        <div class = "top-title">Blog-Mantra </div>
        <a href="signup.php"><div id="signup">Signup</div></a>
    </div>


    <!-- login form -->
    <div class="center">
        <div id="loginname" style="padding: 18px;">
            <h3>Log in to Blog-Mantra</h3>
        </div>
        <br>
        <form  method="post">
            
            <div class="pass">
                <input id="text" name="email" type="text" value="<?php echo $email ?>" placeholder="  Email address or Phone number">   
            </div>
            
            <div class="pass">
                <input id="text" name="password"  type="password"  placeholder="  Password">
            </div>
            <br>
            <input type="submit" value="Log In" id="button">
            <br><br><br><br>
           

          
        </form>
    </div>
 
</body>
</html>
