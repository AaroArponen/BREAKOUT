<?php 
require_once('db.php');


// connect to db
$conn = db_connect();

  
echo "<html><body>"; 



//haetaan kaikki tavarat 
$result = $conn->query("select * FROM breakout"); 
 

echo "<table border>"; 
echo  "<tr></td><td><b>tunnus</b></td></tr>"; 

for ($i = 0; $i < $result->num_rows; $i++) { 

   
     $row = $result->fetch_assoc();
	 $tunnus = $row["tunnus"];

     $ruutu = "ruutu" . $i;	 
	 
   //tulostetaan taulukon rivi 
   echo "<tr><td>$tunnus</td><td><a href='delete.php?nimi=$tunnus'>Poista</a></td></tr>"; 
} 

echo "</table>"; 

echo "<p><a href='insert.htm'>BACK TO ADD</a>"; 

echo "</body></html>";

$result->close();
?>