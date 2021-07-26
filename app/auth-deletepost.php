<?php session_start() ?>
<?php require "db-config.php" ?>

<?php

        $pid= $_GET["delid"];

        $sql="DELETE FROM `product` WHERE `pid`='$pid'";

        if(mysqli_query($conn, $sql)){

            header("Location: ../my-advertise.php");

        }else{
            echo "<h1> wrong querry </h1>";
        }

?>