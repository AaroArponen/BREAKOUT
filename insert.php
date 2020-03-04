<?php

require_once('db.php');



// connect to db

$conn = db_connect();



//$tunnus = $_POST["tunnus"];
$tunnus = mysqli_real_escape_string($conn, $_POST["tunnus"]);

$hiscore = $_POST["hiscore"];



$sql = "INSERT INTO breakout (tunnus, hiscore) VALUES('$tunnus', '$hiscore')";



//echo $sql;



$result = $conn->query($sql); 


?>

<script>
window.location.href = "/~aaroa/BREAKOUT/";
</script>