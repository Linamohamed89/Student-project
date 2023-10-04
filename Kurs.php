<?php

class Kurs {
    public $kursname;
    public $kurscode;


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

}



//$kurs = new kurs("Informatik", "INF101");
//echo $kursname ->kursname;
//echo $kurscode ->kurscode;