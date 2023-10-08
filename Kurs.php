<?php

class Kurs {
    public $kursname;
    public $kurscode;

    public $teilnehmer = 10 ;

    /*function __construct($kursname, $kurscode){
        $this->kursname = $kursname;
        $this->kurscode = $kurscode;
    }*/

    public function getKursCode()
    {
        return $this->kurscode;
    }
    
    public function setKurs($kursname, $kurscode)
    {
        $this->kursname = $kursname;
        $this->kurscode = $kurscode;
    }

    /*public function courseAnmelden($courseName ,$courseCode)
    {
        $teilnehmer =count($teilnehmer);
        if ($teilnehmer = 10)
            echo ausgebucht;
        
    }*/



}


//$kurs = new kurs("Informatik", "INF101");
//echo $kursname ->kursname;
//echo $kurscode ->kurscode;
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
</html>
<body>

</body>



<!--<h2>Anmeldung</h2>
<form action="">
    <input type="coursName" value="coursname">
</form>-->


