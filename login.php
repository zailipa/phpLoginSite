<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>

<?php
    if(isset($_POST["submit"])) {
        $uname=$_POST["uname"];
        $upass=$_POST["upass"];
        $db = new mysqli("127.0.0.1", "root", "", "233");
        $result=$db -> query("select * from users where uname='$uname' and upass='$upass'");
        
        if($result->num_rows==0) {
          echo "username or password is wrong!";
      } else {
          $_SESSION["uname"]=$uname;
          header("Location: userindex.php");
      } 

    }

    
?>


<div class="wrapper fadeInDown">
  <div id="formContent">
    
    <h2 class="active"> Sign In </h2>
    
    <form action="login.php" method="post">
      <input type="text" id="login" class="fadeIn second" name="uname" placeholder="username">
      <input type="text" id="password" class="fadeIn third" name="upass" placeholder="password">
      <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a> <br> <hr>
      <a class="underlineHover" href="register.php">You're not registered?</a>
    </div>

  </div>
</div>
</body>
</html>