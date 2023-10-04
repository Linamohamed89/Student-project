<?php

//Verbindung mit dem Server aufbauen:
/* 
1. erstelle eine verbundung $conn=mysqli_connect($serverName,$userName,$password);
2. wenn alles ok, dann wähle die datenbnaknamen: $conn->select_db("bankomat");
*/

function createMySQLConnection()

{
    $serverName='localhost';
    $userName='root';
    $password='';

    $conn=mysqli_connect($serverName,$userName,$password);
    if(!$conn)
        {
            die('There is problem connection'.mysqli_connect_error());
        }

    $conn->select_db("students");
    return $conn;
}



?>