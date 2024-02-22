<?php
session_start();
$_SESSION['id'] = "67";



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="assets\CSS\login.css">
</head>
<body>
   <div class="container">
      <fieldset>
         <legend>Login</legend>
         <form action="" method="post">
            <label for="email">Email:</label> <br>
            <input type="email" name="email" id="email"> <br><br>
            <label for="pass">Password:</label> <br>
            <input type="password" name="pass" id="pass"> <br><br>
            <button class="btn" type="submit" >Submit</button> <br>
         </form>
         <p>Didn't Signup? <a href="signup.php">Signup</a></p>
      </fieldset>
   </div>
</body>
</html>