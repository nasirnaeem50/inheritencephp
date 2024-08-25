<?php
class person {
    public $name, $age, $address;

    function __construct($n, $a, $ad) {
        $this->name = $n;
        $this->age = $a;
        $this->address = $ad;
    }

    function intro() {
        echo "<h3>Person Profile</h3>";
        echo "Name of person: {$this->name}<br>";
        echo "Age of person: {$this->age}<br>";
        echo "Address of person: {$this->address}<br>";
    }
}

class boy extends person {
    public $eyecolor = "brown";
    public $height = "5.6f";

    function manintro() {
        echo "<h3>boy Profile</h3>";
        echo "Name of person: {$this->name}<br>";
        echo "Age of person: {$this->age}<br>";
        echo "Address of person: {$this->address}<br>";
        echo "Eye color: {$this->eyecolor}<br>";
        echo "Height: {$this->height}<br>";
    }
}

$p = new boy("Nasir", 22, "Lakki Marwat");
$p->intro();
$p->manintro();

?>
