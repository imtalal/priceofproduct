<?php

/*
 * Area of circle  ---- price calculation of circle shape product
 * Done by : Developer imtalal
 */
include_once 'price.php';

class Circle extends Price {

    // for circle
    public $radius;

    public function __construct() {
        // assigning the input value of radius to class's data member: radius
        $this->radius = $_POST['radius'];
    }

    public function areaOfCircle($radius) {
        // calculating area
        $this->area = $radius * pi();
    }

    public function priceOfProduct() {
        // calculating price
        $this->price = 2.5 * $this->area;
        // display price
        echo "$" . $this->price;
    }

}

// object of class circle
$cirObj = new Circle();
// verifying if the input data is numeric
if ( !is_numeric( $cirObj->radius ) ) {
    echo "Please input a number only";
    exit;
}
// getting the area
$cirObj->areaOfCircle( $cirObj->radius );
// getting the price
$cirObj->priceOfProduct();
?>
