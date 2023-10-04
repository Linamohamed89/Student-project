<?php
include('conn.php');
include('Student.php');
include('Kurs.php');




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
$vorhandeneKurse = $conn->query("SELECT * FROM courses");//read table

?>

<html>
    <head>
    </head>
    <body>
        <div style="float: left">
            <div>
                <h1>students Anlegen</h1>
                <form action="index.php" method="POST">
                    <input type="text" placeholder="Nachname" name="lastName"/> 
                    <input type="text" placeholder="Vorname" name="firsName"/>
                    <input type="submit" value="Student Eintragen"/>
                </form>
            </div>
            <div style="">
                <h1>Eingetragene students</h1>
                <ul>
                    <?php //read
                        while ($row = $vorhandenestudents->fetch_assoc())
                        {
                            echo "<li>".$row["matriculationNumber"]."-".$row["lastName"]."-".$row["firstName"]."</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>

        <div style="float: left">
            <div>
                <h1>Kurs Anlegen</h1>
                <form action="index.php" method="POST">
                    <input type="text" placeholder="Kursname" name="courseName"/>
                    <input type="text" placeholder="Kurs-Code" name="courseCode"/>
                    <input type="submit" value="Kurs Eintragen"/>
                </form>
            </div>
            <div style="">
                <h1>Eingetragene Kurse</h1>
                <ul>
                    <?php 
                        while ($row = $vorhandeneKurse->fetch_assoc())
                        {
                            echo "<li>".$row["id"]."-".$row["courseName"]."-".$row["courseCode"]."</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>

        <div id="fixed_container" style="background-color: beige; border-color: black; border-radius: 10%; position: fixed; right: 10%; top: 20%; width 8rem; margin-top: 2.5em">
            <div id="students">
                <div>
                    <h1>students Löschen</h1>
                    <form action="index.php" method="POST" style="text-align: center">
                        <input type="text" placeholder="geben sie eine id an" name="matriculationNumber"/>
                        <input type="submit" value="Löschen" name=students.matriculationNumber/>
                    </form>
                </div>
            </div>
            <div id="kurse">
                <div>
                    <h1>Kurs Löschen</h1>
                    <form action="index.php" method="POST" style="text-align: center">
                        <input type="text" placeholder="geben sie eine id an" name="id"/>
                        <input type="submit" value="Löschen" name=courses.id/>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>