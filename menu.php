<?php
include_once("dbconnect.php");

//get data first

$id = $_GET["id"];
$name = $_GET["name"];
$price = $_GET["price"];
$quantity = $_GET["quantity"];
$calorie = $_GET["calorie"];

// // Create connection
try {
    $sql = "INSERT INTO menu (id, name, price, quantity, calorie)
    VALUES ('$id', '$name', '$price', '$quantity', '$calorie')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<script> alert ('New record created successfully');</script>";
  } catch(PDOException $e) {
    echo "<script> alert ('Already recorded');</script>";
    echo "<script> window.location.replace('menu.html');</script>";
  }
  
  $conn = null;

?>