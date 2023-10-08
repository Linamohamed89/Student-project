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



$conn = createMySQLConnection();

if($_POST["Create"])
{
   $res = $conn->query("INSERT INTO students(id, matriculationNumber, firstName, lastName )VALUES(NULL,'".$_POST['matriculationNumber']."','".$_POST['firstName']."','".$_POST['lastName']."')");
   header("Location: index.php");
 }



//header("Location: index.php");

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
        <p><h1>Studenten anlegen</h1></p>
        <form action="create.php" method="POST">
        <input type="text" placeholder="Vorname" name="firstName"/>
        <input type="text" placeholder="Nachname" name="lastName"/>
        <input type="text" placeholder="Matnr" name="matriculationNumber"/>
            <input class="btn" type="submit" value="Create" name="Create"/>
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