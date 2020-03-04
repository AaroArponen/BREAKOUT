<?php
require_once('db.php');

// connect to db
$conn = db_connect();

$tunnus = $_GET['nimi'];

//echo $nimi;

//lis&auml;t&auml;&auml;n tiedot tietokantaan 
$result = $conn->query("DELETE FROM breakout WHERE tunnus = '$tunnus'"); 

header("Location: select.php");
?>