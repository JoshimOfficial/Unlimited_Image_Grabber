<?php
include("./assets/files/conn.php");

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST["domain"])){
        $domainName = $_POST["domain"];
        $insertData = "INSERT INTO `webfixer` (`domain`) VALUES ( '$domainName')";

        $setData = mysqli_query($conn,$insertData);

        if($setData) {
          setcookie("_WEBFIXER", "true", time()+5, "/");
          header("location: ./webfixer.php");
        }
    }
  } else {
    echo "You do not have the permission to access this page.";
  }
  
?>
