<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Property
        {
            protected $address;
            public $propertyArea;
            public $rooms;
            public $bathrooms;
            public $imageURL;
            public $saleType;
            public $price;
            
            function __construct($address,$propertyArea,$rooms,$bathrooms,$imageURL,$saleType,$price) {
                $this->address = $address;
                $this->propertyArea = $propertyArea;
                $this->rooms = $rooms;
                $this->bathrooms = $bathrooms;
                $this->imageURL = $imageURL;
                $this->saleType = $saleType;
                $this->price = $price;
            }
            #Getters and setters for every parameter
            function set_address($address) {
                $this->address = $address;
            }
            function get_address() {
                return $this->address;
            }

            function set_area($propertyArea) {
                $this->propertyArea = $propertyArea;
            }
            function get_area() {
                return $this->propertyArea;
            }

            function set_rooms($rooms) {
                $this->rooms = $rooms;
            }
            function get_rooms() {
                return $this->rooms;
            }

            function set_bathrooms($bathrooms) {
                $this->bathrooms = $bathrooms;
            }
            function get_bathrooms() {
                return $this->bathrooms;
            }
            
            function set_imageURL($imageURL) {
                $this->imageURL = $imageURL;
            }
            function get_imageURL() {
                return $this->imageURL;
            }

            function set_saleType($saleType) {
                $this->saleType = $saleType;
            }
            function get_saleType() {
                return $this->saleType;
            }

            function set_price($price) {
                $this->price = $price;
            }
            function get_price($price) {
                return $this->price;
            }
        }

        class House extends Property
        {
            public $gardenArea;
            public $numOfFloors;
            public $hasGarage;
            function __construct($address,$propertyArea,$rooms,$bathrooms,$imageURL,$saleType,$price,$gardenArea,$numOfFloors,$hasGarage)
            {
                parent::__construct($address,$propertyArea,$rooms,$bathrooms,$imageURL,$saleType,$price);
                $this->gardenArea = $gardenArea;
                $this->numOfFloors = $numOfFloors;
                $this->hasGarage = $hasGarage;
            }

            function __destruct() {
                echo "The house address is {$this->address}.";
            }

            function set_gardenArea($gardenArea) {
                $this->gardenArea = $gardenArea;
            }
            function get_gardenArea() {
                return $this->gardenArea;
            }
            
            function set_numOfFloors($numOfFloors) {
                $this->numOfFloors = $numOfFloors;
            }
            function get_numOfFloors() {
                return $this->numOfFloors;
            }

            function set_hasGarage($hasGarage) {
                $this->hasGarage = $hasGarage;
            }
            function get_hasGarage() {
                return $this->hasGarage;
            }
        }

        class Flat extends Property
        {
            public $floor;
            public $hasElevator;
            function __construct($address,$propertyArea,$rooms,$bathrooms,$imageURL,$saleType,$price,$floor,$hasElevator)
            {
                parent::__construct($address,$propertyArea,$rooms,$bathrooms,$imageURL,$saleType,$price);
                $this->floor = $floor;
                $this->hasElevator = $hasElevator;
            }

            function set_floor($floor) {
                $this->floor = $floor;
            }
            function get_floor() {
                return $this->floor;
            }

            function set_hasElevator($hasElevator) {
                $this->hasElevator = $hasElevator;
            }
            function get_hasElevator() {
                return $this->hasElevator;
            }
        }

        // $house = new House("addr",120,4,2,"www.google.com","rent",20,100,2,"Y");
        // echo $house->get_address();
    ?>
</body>
</html>