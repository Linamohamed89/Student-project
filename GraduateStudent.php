<?php

class GraduateStudent extends Student{
    public $eigenschaft1 = "lesen";
    public $eigenschaft2 = "sprechen";
    public $eigenschaft3 = "schreiben";
    public function spezificMethod($eigenschaft1, $eigenschaft2, $eigenschaft3)
    {
        $this->eigenschaft1 = $eigenschaft1;
        $this->eigenschaft2 = $eigenschaft2;
        $this->eigenschaft3 = $eigenschaft3;
    }

   
}
?>
