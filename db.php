<?php


//connect to database
function db_connect()

{
  //define host, user, password and database. Firstly for the school serever and 000webhost in comments.
  $result = new mysqli('localhost', 'aaroa', 'm0t0r0la', 'aaroa');
  //$result = new mysqli('localhost', 'id12570898_aaroa', 'm0t0r0la', 'id12570898_aaroadb');

   //if can't connect to database, show the text. Otherwise continue as normal.
   if (!$result)

     throw new Exception('Could not connect to database server');

   else

     return $result;

}



?>