<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>

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

    <body>
<div class="nav">
      <a href="index.php">Startseite</a>
      <a href="Kurs.php">Anmeldung</a>
      <a href="create.php">Bearbeiten</a>
      <a href="Update.php">aktualisieren</a>
      <form class="search" role="search">
      <input class="form" type="search" placeholder="Search" aria-label="Search">
      <button class="btn" type="submit">Search</button>
    </form>
      </div>



<section class="shadow-example">
    <h1>Studenten</h1>
        
        <?php //var_dump($accountData); ?>
        <form action="delete.php" method="post">
        <table >
            <tr>
                <th class="table1">Auswahl</th>
                <td class="table1">id</td>
                <td class="table1">matrNr</td>
                <td class="table1">Vorname</td>
                <td class="table1">Nachname</td>
                <td class="table1">noten</td>
               
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
                echo "<td>".$row['grades']."</td>";
                
                echo '<td><a href="update.php?id='.$row["id"].'">Bearbeiten</a></td>';
                echo "</tr>";
            }           
            ?>
            
        </table>
        <input class="btn" type="submit" name="save" value="delete"/>
        <input class="btn" type="submit" value="Change" name="change" />
        <button><a href="create.php">Create</a></button>

        </form>
        </section> 

        <footer class="new_footer_area bg_color">
            <div class="new_footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Course</h3>
                                <p>We are happy to have you join us!</p>
                            </div>
                        </div>
                 
                      
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
                                <div class="f_social_icon">
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-linkedin"></a>
                                    <a href="#" class="fab fa-pinterest"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-7">
                            <p class="mb-0 f_400">© Lina Aloqayli.. 2023 All rights reserved.</p>
                        </div>
                        <div class="col-lg-6 col-sm-5 text-right">
                            <p>Made with <i class="icon_heart"></i> in <a href="http://cakecounter.com" target="_blank">Morphos</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>