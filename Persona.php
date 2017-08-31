<?php
class Persona {
    public $apellido;
    public $nombre;
    public function hablar(){
        echo "soy ".$this->nombre.
		" y estoy hablando";
    }
}

$p = new Persona();
$p->nombre="Micaela";
$p->apellido="Pernochi";

$p1 = new Persona();
$p1->nombre="Juan";
$p1->apellido="Perez";

echo  "hola ".$p->nombre."<br>";

echo "hola ".$p1->nombre."<br>";

echo  "hola ".$p->nombre.", hola ".$p1->nombre;

echo "<br>";
$p->hablar();

echo "<br>";
$p1->hablar();
echo "<br>";
?>