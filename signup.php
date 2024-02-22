<?php
session_start();
$ramlal = $_SESSION['id'];

$name_err = $email_err = $pass_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // initializing variables with empty values
   $name = $email = $pass = "";

   // validate username
   if (empty(trim($_POST["name"]))) {
      $name_err = "Please enter a username.";
   } else {
      $name = trim($_POST["name"]);
   }

   // validate mail
   if (empty(trim($_POST["email"]))) {
      $email_err = "Please enter an email";
   } else {
      if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
         $email_err = "Invalid email format.";
      } else {
         $email = trim($_POST["email"]);
      }
   }

   // validate password 
   if (empty(trim($_POST["pass"]))) {
      $pass_err = "Please enter a password.";
   } else {
      $pass = trim($_POST["pass"]);
   }

   if (empty($name_err) && empty($email_err) && empty($pass_err)) {
      echo "Successful signup";
   }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Signup</title>
   <link rel="stylesheet" href="assets\CSS\Signup.css">
</head>

<body>
   <fieldset>
      <legend>Signup</legend>
      <form method="post">
         <div>
            <label for="name">Name: </label> <br>
            <input type="text" name="name" required minlength="3"> 
            <span><?php echo $name_err; ?></span>
         </div>
         <br> <br>
         <div>
            <label for="email">Email:</label> <br>
            <input type="email" name="email" required> 
            <span><?php echo $email_err ?></span>
         </div>
            <br> <br>
            <label for="pass">Password</label> <br>
         <input type="password" name="pass" required> <br> <br>
         <button>Submit</button>
      </form>
      <p>Already Signed Up? <a href="login.php">Login</a></p>
   </fieldset>

</body>

</html>

<?php



?>