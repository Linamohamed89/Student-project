<?php

class Student 
{

    public $vorname;
    public $nachname;
    public $martnr;

   



    //function __construct( $vorname , $nachname , $matrikelnummer)
    //{
      //  $this->vorname = $vorname;
        //$this->nachname = $nachname;
        //$this->matrikelnummer = $matrikelnummer;
    //}

    public function getMartnr()
    {
        return $this->martnr;
    }

    public function setName($vorname, $nachname)
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }

    public function setMartnr($martnr)
    {
        $this->martnr = $martnr;
    }

}




/*$student = new student ("Max", "Müller", 123456);
echo $student->vorname; // gibt "Max" aus
echo $student->nachname; // gibt "Mustermann" aus
echo $student->matrikelnummer; // gibt 123456 aus*/

?>