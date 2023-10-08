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

var_dump($_POST);

$conn = createMySQLConnection();

if($_POST['Change'])
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
        <h1>Kunden bearbeiten</h1>
        <form action="update.php" method="POST">
            <input type="text" value="<?php echo $data['firstName'] ?>" name="firstName"/>
            <input type="text" value="<?php echo $data['lastName'] ?>" name="lastName"/>
            <input type="text" value="<?php echo $data['matriculationNumber'] ?>" name="matriculationNumber"/>
            <input type="hidden" value="change" name="change"/>
            <input type="hidden" value="<?php echo $data['id'] ?>" name="id"/>
            <input class="btn" type="submit" value="Bearbeiten"/>
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