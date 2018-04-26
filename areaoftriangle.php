<?php

/*
 * Area of triangle  ---- price calculation of rectangle shape product
 * Done by : Developer imtalal
 */
include_once 'price.php';

class triangle extends price {

    // for triangle
    public $height;
    // for triangle
    public $base;
    // for area
    public $area;

    public function __construct() {
        // assigning the input value of height and base to class's data members: height and base
        $this->height = $_POST['height'];
        $this->base   = $_POST['base'];
    }

    public function areaOfTriangle($height, $base) {
        // calculating area
        $hb = $height * $base;
        $this->area = ( $hb ) / 2;
    }

    public function priceOfProduct() {
        // calculating price
        $this->price = 2.5 * $this->area;
        // display of price
        echo "$" . $this->price;
    }

}

// object of class triangle
$triObj = new triangle();
// verifying if the input data is numeric
if (!is_numeric($triObj->height) or ! is_numeric($triObj->base)) {
    echo "Please input number only";
    exit;
}
//getting the area
$triObj->areaOfTriangle($triObj->height, $triObj->base);
// getting the price
$triObj->priceOfProduct();
?>
