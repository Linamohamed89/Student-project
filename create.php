<?php

include('conn.php');



$conn = createMySQLConnection();

if($_POST["Create"])
{
   $res = $conn->query("INSERT INTO students(id, matriculationNumber, firstName, lastName)VALUES(NULL,'".$_POST['matriculationNumber']."','".$_POST['firstName']."','".$_POST['lastName']."')");
   header("Location: index.php");
 }



//header("Location: index.php");

?>
<html>
    <head>
    </head>
    <body>
        <p><h1>Studenten anlegen</h1></p>
        <form action="create.php" method="POST">
        <input type="text" placeholder="Vorname" name="firstName"/>
        <input type="text" placeholder="Nachname" name="lastName"/>
        <input type="text" placeholder="Matnr" name="matriculationNumber"/>
            <input type="submit" value="Create" name="Create"/>
        </form>
    </body>
</html>