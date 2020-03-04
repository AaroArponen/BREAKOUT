<?php

function db_connect()
{
   $result = new mysqli('localhost', 'aaroa', 'm0t0r0la', 'aaroa'); 
   if (!$result)
     throw new Exception('Could not connect to database server');
   else
     return $result;
}

?>