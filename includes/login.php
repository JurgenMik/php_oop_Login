<?php

 if(isset($_POST["submit"])){

     // Get data

     $uid = $_POST["uid"];
     $pwd = $_POST["pwd"];

 // Instantiate LoginContrl Class

    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";

    $login = new loginContrl($uid, $pwd);

 // Running error handlers and user signup

 $login->loginUser();

 // Returning to front page
 header("location: ../index.php?error=none");

 }
