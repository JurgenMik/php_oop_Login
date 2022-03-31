<?php

 if(isset($_POST["submit"])){

     // Get data

     $uid = $_POST["uid"];
     $pwd = $_POST["pwd"];
     $pwdRepeat = $_POST["pwdrepeat"];
     $email = $_POST["email"];

 // Instantiate SignupContr Class

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup = new SignupContrl($uid, $pwd, $pwdRepeat, $email);

 // Running error handlers and user signup

 $signup->signupUser();

 // Returning to front page
 header("location: ../index.php?error=none");

 }
