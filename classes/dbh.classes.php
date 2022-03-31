<?php


class Dbh {

    // protected - any class that extends to it can use it aswell
    protected function connect(){
        try {

            $username = "mikkjurgeniktkhk_jurgen";
            $password = "Lollakas123";
            $dbh = new PDO('mysql:host=localhost;dbname=mikkjurgeniktkhk_projekt', $username, $password);

            return $dbh;
        }
        catch (PDOException $e) {

            print "Error!: "  . $e ->getMessage() . "<br/>";
            die();



        }



    }

}