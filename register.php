<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>

<?php
  if(isset($_POST["submit"])) {
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $uname=$_POST["uname"];
    $upass1=$_POST["upass1"];
    $upass2=$_POST["upass2"];
    $email=$_POST["email"];

    if($upass1!==$upass2) {
      echo "Passwords are not matching!!";
    } else {
      $db= new mysqli("127.0.0.1", "root", "", "233");
      $result=$db->query("INSERT INTO users (fname, lname, email, uname, upass) VALUES ('$fname', '$lname', '$email', '$uname', '$upass1')");
      if($result) {
        echo "Your user with the name $uname is created. You may login.";
      } else {
        "Something went wrong, please try again.";
      
      }
      }
  }
?>


<div class="wrapper fadeInDown">
  <div id="formContent">
    
    <h2 class="active"> Sign Up </h2>
    
    <form action="register.php" method="post">
      <input type="text" id="login" class="fadeIn second" name="fname" placeholder="First Name">
      <input type="text" id="login" class="fadeIn second" name="lname" placeholder="Last Name">
      <input type="text" id="login" class="fadeIn third" name="email" placeholder="E-mail">
      <input type="text" id="login" class="fadeIn second" name="uname" placeholder="username">
      <input type="text" id="password" class="fadeIn third" name="upass1" placeholder="password">
      <input type="text" id="password" class="fadeIn third" name="upass2" placeholder="type your password again">
      
      <input type="submit" name="submit" class="fadeIn fourth" value="Register">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="login.php">Login Now!</a>
    </div>

  </div>
</div>
</body>
</html>