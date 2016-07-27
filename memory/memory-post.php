<?php
/**
 * Created by PhpStorm.
 * User: abigaelonchiri
 * Date: 4/28/15
 * Time: 3:09 PM
 */
session_start();

if (isset($_REQUEST["name"])){
    $name = $_POST["name"];
    $_SESSION["name"] = $name;
    header("location: memory.php");
    exit;
}

if (isset($_POST["name"])){
   // $_SESSION["name"]= $_POST["name"];
   // echo $_SESSION["name"];
    header("location: memory.php");
    exit;
}

if (isset($_POST["newgame"])){
    header("location: memory.php");
    exit;
}

if (isset($_POST["giveup"])){
    header("location: solution.php");
    exit;
}

if (isset($_POST["catimage"])){


}

header("location: index.php");
?>