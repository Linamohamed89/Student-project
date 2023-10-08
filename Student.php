

<?php

class Student 
{

    public $vorname;
    public $nachname;
    public $martnr;
    private $grades ;

    public $durchschnitt;
   



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

    
    public function noten($grades, $fach)
    {
        if ($fach == "Englisch")
        {
            $this->noten = $grades;
        }
        if ($fach == "Arabic")
        {
            $this->note = $grades;
        }
    }
    private function durchschnitt($id, $grades, $durchschnitt)
    {
        //addiere alle noten($noten) eines Studenten($id) zusammen und 'teile sie durch anzahl der fächer = $durchschnitt'
    }
}





/*$student = new student ("Max", "Müller", 123456);
echo $student->vorname; // gibt "Max" aus
echo $student->nachname; // gibt "Mustermann" aus
echo $student->matrikelnummer; // gibt 123456 aus*/

?>