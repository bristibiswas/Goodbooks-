<?php session_start() ?>

<?php require " 'C:\wamp64\www\goodbooks\app\db-config.php' (include_path= '.;C:\php\pear')" //linking database?> 

<?php

$uemail = $_POST["logEmail"];
$upass = $_POST["logPass"];

$sql = "SELECT `uname`, `uemail`, `phonenumber`, `upass` FROM `users` WHERE `uemail`='$uemail'";

$result = mysqli_query($conn, $sql);

$rData = $result->fetch_assoc();

if($rData["uemail"]!=$uemail){
        echo "<h1> wrong email </h1>";

}elseif($rData["upass"]!=$upass){
    echo "<h1> wrong password </h1>";

}else{

    $_SESSION["sessionName"]=$rData["uname"];
    $_SESSION["sessionPhone"]=$rData["phonenumber"];
    $_SESSION["sessionEmail"] = $rData["uemail"];

    $_SESSION["sessionAuth"] = true;

    header("Location: ../dashboard.php");
     $conn->close();   
}


?>