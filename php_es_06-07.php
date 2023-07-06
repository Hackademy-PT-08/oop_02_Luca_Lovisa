<?php 

//Traccia 1

// class Continent {

//     public $nameContinent;


//     public function __construct($continent) {

//         $this->nameContinent=$continent;

//     }
//     public function myLocation(){
//         echo "Mi trovo in $this->nameContinent \n";
//     }

// };


// class Country extends Continent {
//     public $nameCountry;

//     public function __construct ($continent,$country){
//         parent::__construct($continent);
//         $this->nameCountry=$country;
//     }

//     public function myLocation(){
//         echo "Mi trovo in $this->nameContinent , $this->nameCountry \n";
//     }

// };

// class Region extends Country {
//     public $nameRegion;

//     public function __construct($continent,$country,$region){
//         parent::__construct($continent,$country);
//         $this->nameRegion=$region;
//     }

//     public function myLocation(){
//         echo "Mi trovo in $this->nameContinent,$this->nameCountry,$this->nameRegion \n";
//     }
// };

// class Province extends Region {
//     public $nameProvince;

//     public function __construct($continent,$country,$region,$province){
//         parent::__construct($continent,$country,$region);
//         $this->nameProvince=$province;
//     }

//     public function myLocation(){
//         echo "Mi trovo in $this->nameContinent,$this->nameCountry,$this->nameRegion,$this->nameProvince \n";
//     }
// };

// class City extends Province {
//     public $nameCity;

//     public function __construct($continent,$country,$region,$province,$city){
//         parent::__construct($continent,$country,$region,$province);
//         $this->nameCity=$city;
//     }

//     public function myLocation(){
//         echo "Mi trovo in $this->nameContinent,$this->nameCountry,$this->nameRegion,$this->nameProvince,$this->nameCity \n";
//     }
// };

// class Street extends city {
//     public $nameStreet;

//     public function __construct($continent,$country,$region,$province,$city,$street){
//         parent::__construct($continent,$country,$region,$province,$city);
//         $this->nameStreet=$street;
//     }

//     public function myLocation(){
//         echo "Mi trovo in $this->nameContinent,$this->nameCountry,$this->nameRegion,$this->nameProvince,$this->nameCity,$this->nameStreet \n";
//     }
// };


// $myLocation = new Street ("Europa","Italia","Liguria","GE","Genova","Via XX Settembre 19R");
// $myLocation2 = new Province("Europa","Italia","Puglia","Ba");

// $myLocation->mylocation();
// $myLocation2->mylocation();




//Traccia 2

// class Vertebrates {

//     public function __construct(){
//         echo $this->vert();
//     } 
     
//     protected function vert(){
//         return "Sono un Vertebrato \n";
        
//      }
     
// }

// class Warm_Blooded extends Vertebrates {
//     public function __construct() {
//         parent::__construct();
//         echo $this->warmBlood();
//     }

//     protected function warmBlood() {
//         return "Sono un animale dal sangue caldo \n";
//     }
// }

// class Cold_Blooded extends Vertebrates {
//     public function __construct() {
//         parent::__construct();
//         echo $this->coldBlood();
//     }

//     protected function coldBlood() {
//         return "Sono un animale dal sangue freddo \n";
//     }
// }

// class Mammals extends Warm_Blooded {
//     public function __construct() {
//         parent::__construct();
//         echo $this->mammals();
//     }

//     protected function mammals() {
//         return "Sono un mammifero \n";
//     }
// }

// class Birds extends Warm_Blooded {
//     public function __construct() {
//         parent::__construct();
//         echo $this->mammals();
//     }

//     protected function birds() {
//         return "Sono un mammifero \n";
//     }
// }

// class Fish extends Cold_Blooded {
//     public function __construct() {
//         parent::__construct();
//         echo $this->fish();
//     }

//     protected function fish() {
//         return "Sono un pesce \n";
//     }
// }

// class Reptiles extends Cold_Blooded {
//     public function __construct() {
//         parent::__construct();
//         echo $this->reptiles();
//     }

//     protected function reptiles() {
//         return "Sono un rettile \n";
//     }
// }

// class Anphibian extends Cold_Blooded {
//     public function __construct() {
//         parent::__construct();
//         echo $this->anphibian();
//     }

//     protected function anphibian() {
//         return "Sono un anfibio \n";
//     }
// }


// $magikarp = new Fish();







//Traccia 3


class Car {
    private $num_telaio; 

    public function __construct($telaio){
        $this->num_telaio=$telaio;
    }
    public function datiMacchina(){
        echo "Il numero di telaio è $this->num_telaio";
    }
  }
  
  class Fiat extends Car {
    protected $carBrand;
    protected $license;
    protected $color;
    public function __construct($telaio,$marca,$patente,$colore){
        parent::__construct($telaio);
        $this->carBrand=$marca;
        $this->license=$patente;
        $this->color=$colore;
    }
    public function datiMacchina(){
        echo "La macchina è $this->carBrand ,è possibile guidarla con la patente $this->license ed è di colore $this->color";
    }

  }

  class ownerOfTheCar extends Fiat {
    protected $targa;

    public function __construct($telaio,$marca,$patente,$colore,$targa){
        parent::__construct($telaio,$marca,$patente,$colore);
        $this->targa=$targa;
    }
    public function datiMacchina(){
        echo "La mia macchina è $this->carBrand,è possibile guidarla con la patente $this->license, è di colore $this->color e la sua targa è $this->targa";
    }

  }


  $myCar = new ownerOfTheCar("1234","Fiat","B","giallo","ND 123 OJ");

  $myCar->datiMacchina();
  var_dump($myCar);
