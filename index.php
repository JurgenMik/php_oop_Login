<?php

  session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title> OOP Login </title>
  <link href="index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <!-- action {where you are sending data to -->

      <div style="margin-top:200px;" class="index-login">
      <h2> Sign Up </h2>
        <div class="index-login-form">
         <form action="includes/signup.php" method="POST">
           <input type="text" name="uid" placeholder="Username">
           <input type="password" name="pwd" placeholder="Password">
           <input type="password" name="pwdrepeat" placeholder="Repeat Password">
           <input type="text" name="email" placeholder="Email">
           <br>
           <button type="submit" class="btn-danger" name="submit"> Sign Up </button>
         </form>
       </div>
     </div>

      <div class="index-login">
      <h2> Login </h2>
        <div class="index-login-form">
         <form action="includes/login.php" method="POST">
           <input type="text" name="uid" placeholder="Username">
           <input type="password" name="pwd" placeholder="Password">
           <br>
           <button type="submit" class="btn-primary" name="submit"> LOGIN </button>
         </form>
       </div>
     </div>


     <?php

     if(isset($_SESSION["userid"])){

        echo $_SESSION["useruid"];

     } else{

        echo "Please Login";

     }


     ?>

</body>
</htmL>