<?php 

//Traccia 1

class Continent {

    public $nameContinent;


    public function __construct($continent) {

        $this->nameContinent=$continent;

    }
    public function myLocation(){
        echo "Mi trovo in $this->nameContinent \n";
    }

};


class Country extends Continent {
    public $nameCountry;

    public function __construct ($continent,$country){
        parent::__construct($continent);
        $this->nameCountry=$country;
    }

    public function myLocation(){
        echo "Mi trovo in $this->nameContinent , $this->nameCountry \n";
    }

};

class Region extends Country {
    public $nameRegion;

    public function __construct($continent,$country,$region){
        parent::__construct($continent,$country);
        $this->nameRegion=$region;
    }

    public function myLocation(){
        echo "Mi trovo in $this->nameContinent,$this->nameCountry,$this->nameRegion \n";
    }
};

class Province extends Region {
    public $nameProvince;

    public function __construct($continent,$country,$region,$province){
        parent::__construct($continent,$country,$region);
        $this->nameProvince=$province;
    }

    public function myLocation(){
        echo "Mi trovo in $this->nameContinent,$this->nameCountry,$this->nameRegion,$this->nameProvince \n";
    }
};

class City extends Province {
    public $nameCity;

    public function __construct($continent,$country,$region,$province,$city){
        parent::__construct($continent,$country,$region,$province);
        $this->nameCity=$city;
    }

    public function myLocation(){
        echo "Mi trovo in $this->nameContinent,$this->nameCountry,$this->nameRegion,$this->nameProvince,$this->nameCity \n";
    }
};

class Street extends city {
    public $nameStreet;

    public function __construct($continent,$country,$region,$province,$city,$street){
        parent::__construct($continent,$country,$region,$province,$city);
        $this->nameStreet=$street;
    }

    public function myLocation(){
        echo "Mi trovo in $this->nameContinent,$this->nameCountry,$this->nameRegion,$this->nameProvince,$this->nameCity,$this->nameStreet \n";
    }
};


$myLocation = new Street ("Europa","Italia","Liguria","GE","Genova","Via XX Settembre 19R");
$myLocation2 = new Province("Europa","Italia","Puglia","Ba");

$myLocation->mylocation();
$myLocation2->mylocation();




//Traccia 2

