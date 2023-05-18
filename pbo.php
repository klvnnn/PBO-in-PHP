<?php
//Class Animal
class Animal {
    public $nama;
    public $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Hewan ini adalah " . $this->nama . "\n Jenis nya Adalah : " . $this->jenis;
    }
}
//Class Cat Turunan dari class Animal
class Cat extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "Kucing,");
    }

    public function getInfo() {
        return parent::getInfo() . "\n kucing adalah hewan peliharaan yang lucu dan manja. ";
    }
}
//Class Dog Turunan dari class Animal
class Dog extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "Anjing,");
    }

    public function getInfo() {
        return parent::getInfo() . "\n anjing adalah hewan peliharaan yang setia dan loyal.";
    }
}

//Output
$hewan = new Animal("Kucing", "Mamalia, &nbsp");
echo $hewan->getInfo();

$kucing = new Cat("Kitty");
echo $kucing->getInfo();

$anjing = new Dog("Bobby");
echo $anjing->getInfo();
?>