<?php 
session_start();
if($_SERVER["REQUEST_METHOD"] === "POST") {
    if(isset($_POST["q"])) {
    $query = $_POST["q"];
        
    setcookie("_GRAB_DATA", "true", time()+5, "/");
    setcookie("_QUERY",$query, time()+5, "/");

    $_SESSION["access"] = "true";
    $_SESSION["query"] = $query;

    // echo $_SESSION["query"];
    header("location: ./index.php");

    }
}
else {
    header("Content-type: application/json; charset=utf-8");
    $err = array('You do not have any permission to access this page');
    print_r($err);
}