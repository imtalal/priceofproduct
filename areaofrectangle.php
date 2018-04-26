<?php

/* 
 * Area of rectangle  ---- price calculation of rectangle shape product
 * Done by : Developer imtalal
 */
include_once 'price.php';
class rectangle extends price {
    // for rectangle
    public $length;
    // for rectangle
    public $width;
    // for area
    public $area;
    // for price
    public $price;
    
    public function __construct() {
        // assigning the input value of length and width to class's data members: length and width
        $this->length = $_POST['length'];
        $this->width = $_POST['width'];
    }
 
    public function areaOfRectangle( $length, $width ){
        // calculating the area
        $this->area = $length * $width;
    }
    public function priceOfProduct() {
        // calculating price
        $this->price = 2.5 * $this->area;
        // display price
        echo "$".$this->price;
    }
}
// object of class rectangle
$recObj = new rectangle();
// verifying if the input data is numeric
if( !is_numeric( $recObj->length ) or !is_numeric( $recObj->width ) ){
    echo "Please input number only";
    exit;
}
// getting the area
$recObj->areaOfRectangle( $recObj->length, $recObj->width );
// getting the price
$recObj->priceOfProduct();
?>
