<!-- <?php session_start()  ?>


<?php require "( 'C:\wamp64\www\goodbooks\app\db-config.php' )	"?>


<?php 
//retrieving input from user from register page
    $uname = $_POST["userName"];
    $uemail = $_POST["email"];
    $phonenumber = $_POST["uPhone"];
    $upass = $_POST["pass"];


    if (empty($uname) || empty($uemail) || empty($phonenumber) || empty($upass)) {

        echo "<h1>Something went wrong !!</h1>";
    } else{ 
    if (isset($_POST["register"])){

        $sql = "INSERT INTO `users` (`uname`,`uemail`,`phonenumber`,`upass`) 
                VALUES('$uname','$uemail','$phonenumber','$upass')";

        if(mysql_query($conn, $sql)){

            header("Location: ../index.php");


        }
        else{
            echo "<h1> something went worng </h1> " ;
        }



    }
    $conn->close();
}



?>