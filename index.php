<?php
include('conn.php');
include('Kurs.php');
include('Student.php');


$conn = createMySQLConnection();

if(isset($_POST["lastName"]))
  $resStudent = $conn->query("INSERT INTO students (firstName, lastName) VALUES ('".$_POST['firstName']."', '".$_POST['lastName']."')");//create table
  //INSERT INTO `students` (`id`, `matriculationNumber`, `firstName`, `lastName`) VALUES ('1', '101', 'Max', 'Müller');
  if(isset($_POST["courseName"]))//values
  $resKurs = $conn->query("INSERT INTO courses (id, courseCode,courseName) VALUES (NULL,'".$_POST['courseCode']."', '".$_POST['courseName']."')");
if(isset($_POST["id"]))
$studentLoeschen = $conn->query("DELETE FROM students WHERE students.id =".$_POST["id"]);//delete table
//DELETE FROM `students` WHERE `students`.`id` = 1
if(isset($_POST["id"]))
$kursLoeschen = $conn->query("DELETE FROM courses WHERE courses.id =".$_POST["id"]);
//"DELETE FROM courses WHERE `courses`.`id` = 1"
$vorhandenestudents = $conn->query("SELECT * FROM students");//read table
//$zeigeStudenten = $vorhandeneStudenten->fetch_assoc();
$vorhandeneKurse = $conn->query("SELECT * FROM courses");//read table


?>

<html>
    <head>
    </head>
    <body>
    <p><h1>Studenten</h1></p>
        
        <?php //var_dump($accountData); ?>
        <form action="delete.php" method="post">
        <table border ="1">
            <tr>
                <td>Auswahl</td>
                <td>id</td>
                <td>matrNr</td>
                <td>Vorname</td>
                <td>Nachname</td>
               
            </tr>
            
            <?php
            while ($row = $vorhandenestudents->fetch_assoc())
            {
                echo "<tr>";
                echo "<td><input type=\"checkbox\" name=\"". $row['id']. "\" /></td>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['matriculationNumber']."</td>";
                echo "<td>".$row['firstName']."</td>";
                echo "<td>".$row['lastName']."</td>";
                
                echo '<td><a href="update.php?id='.$row["id"].'">Bearbeiten</a></td>';
                echo "</tr>";
            }           
            ?>
            
        </table>
        <input type="submit" name="save" value="delete"/>
        <input type="submit" value="Change" name="change" />
        <button><a href="create.php">Create</a></button>

        </form>
        

    </body>
</html>