<?php session_start() ?>
<?php require "db-config.php" ?>

<?php
        $uemail = $_SESSION["sessionEmail"];
        $newname = $_POST["newName"];
        $newpass = $_POST["newPassword"];

        if(isset($_POST["update"])){

        $sql = "UPDATE `users` SET `uname`='$newname',`upass`='$newpass' WHERE `uemail`='$uemail'";
            if(mysqli_query($conn, $sql)){
                header("Location: ../logout.php");
            }else{
                echo "<h1> wrong querry</h1>";
            }
                $conn->close();
        }

?>