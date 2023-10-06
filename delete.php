<?php

include('conn.php');



$conn = createMySQLConnection();

if($_POST["save"] == "delete")
{
    foreach ($_POST as $key => $value) {

        if ($key == "save") continue;
        
       $res = $conn->query("DELETE FROM students WHERE students.id =".$key);

    }
}


header("Location: index.php");

?>