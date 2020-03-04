<?php
require_once('db.php');

// connect to db
$conn = db_connect();

$tunnus = $_POST["tunnus"];

$sql = "INSERT INTO breakout (tunnus) values('$tunnus')";

echo $sql;

$result = $conn->query($sql); 

header("Location: select.php");
?>