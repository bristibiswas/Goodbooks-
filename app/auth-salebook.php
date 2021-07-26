<?php session_start() ?>
<?php require "db-config.php"?>

<?php

        $app_user= $_SESSION["sessionName"];
        $app_contact= $_SESSION["sessionPhone"];
        ?>
        <?php
        $bookname = $_POST["bookName"];
        $bookprice = $_POST["bookPrice"];
        ?>
        <?php

        if(empty($bookname) || empty($bookprice)){
            echo"<h1> please enter the bookname and price </h1>";
        }else{
       
        if(isset($_POST["bSubmit"])){

            $sql= "INSERT INTO `product`(`puser`, `bookname`, `bookprice`, `contactnumber`)
                     VALUES ('$app_user','$bookname','$bookprice','$app_contact') ";

            if(mysqli_query($conn, $sql)){

                header("Location: ../salebook.php");


            }else{
                echo "<h1>mistake</h1>";
            }
   
            $conn->close();

        }else{
            echo "<h1>button name mistake</h1>";
        }
    }

?>
