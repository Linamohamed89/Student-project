<?php

include('conn.php');

var_dump($_POST);

$conn = createMySQLConnection();

if($_POST['change'])
{
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $matriculationNumber = $_POST['matriculationNumber'];
    $id = $_POST['id'];
    
    $conn->query("UPDATE students SET firstName='$firstname', lastName='$lastname', matriculationNumber='$matriculationNumber' WHERE id='$id'");

    header("Location: index.php");
}

$id = $_GET['id'];

if (isset($id))
{

    $res = $conn->query('SELECT * FROM students WHERE id='.$id);

    if(!$data=$res->fetch_assoc())
    {
        die("die ID ist falsch ");
    }
}
//

?>

<html>
    <head>
    </head>
    <body>
        <p><h1>Kunden bearbeiten</h1></p>
        <form action="update.php" method="POST">
            <input type="text" value="<?php echo $data['firstName'] ?>" name="firstName"/>
            <input type="text" value="<?php echo $data['lastName'] ?>" name="lastName"/>
            <input type="text" value="<?php echo $data['matriculationNumber'] ?>" name="matriculationNumber"/>
            <input type="hidden" value="change" name="change"/>
            <input type="hidden" value="<?php echo $data['id'] ?>" name="id"/>
            <input type="submit" value="Bearbeiten"/>
        </form>
    </body>
</html>